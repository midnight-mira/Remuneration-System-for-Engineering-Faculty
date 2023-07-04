<?php
// includes the connection file.
include('../config/connection.php');
include('../config/authUser.php');
//include('functionSem.php');
//session_start();


/*
$year = "2021";

$nameFile = $sem. "_".$year;
echo $nameFile; */

$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);
$db_select = mysqli_select_db($conn, DB_NAME);
if ($db_select) {
    //echo "success";
}
$daysOfExtLab = $_SESSION["daysOfExtLab"];
$noOfStudent = $_SESSION["noOfStudents"];
$noOfGroups = $_SESSION["noOfGroups"];
$daysOfExtMp = $_SESSION["daysOfExtMp"];

$costTable = "SELECT * from cost";
$costTableQuery = mysqli_query($conn, $costTable);

$row = mysqli_fetch_assoc($costTableQuery);
$IAE = $row['IAE(20)'];
$TW_25 = $row['TW(25)'];
$TW_50 = $row['TW(50)'];
$OralPrac = $row['OralPrac'];
$MiniProject_25 = $row['MiniProjectTW(25)']; //oral 
$MiniProject_50 = $row['MiniProjectTW(50)']; //oral
$Project_TW_25 = $row['MiniProjectOral(25)'];
$Project_TW_50 = $row['MiniProjectOral(50)'];
$TAExternal = $row['TAExternal'];


$cost_theory_IAE = $IAE * $noOfStudent;
$cost_TW_25 = $TW_25 * $noOfStudent;
$cost_Oral = $OralPrac * $noOfStudent; //lab
$externalLab = $cost_Oral; //lab
$labAssistant = $row['LabAssistant']; //lab
$peonLab = $row['Peon']; //lab
$cost_TW_50 = $TW_50 * $noOfStudent;
$costMiniProjectOral = $MiniProject_25 * $noOfGroups;
$costMiniProjectExternal = $costMiniProjectOral;
$labAssistantProject = $row['LabAssistantMp'];
$peonProject = $row['PeonMp'];
$MiniProjectOral25 = $Project_TW_25 * $noOfStudent;
$MiniProjectOral50 = $Project_TW_50 * $noOfStudent;
$costMiniProjectOral50 = $MiniProject_50 * $noOfGroups;
$costTAExternalLab = $TAExternal * $daysOfExtLab;
$costTAExternalMp = $TAExternal * $daysOfExtMp;




$pceCost = $TW_50 * $noOfStudent;

$sem = $_SESSION["scheme_sem"];

/* end of cost function */

/* START OF MATH QUERY */
$totalMathRow = $cost_TW_25 + $cost_theory_IAE;
$math = "UPDATE `$sem` SET students = ? ,twMarks='25', twRs = ?, IAE= ?, totalRs = ? WHERE category = 'MATH'";
$stmt_math = mysqli_prepare($conn, $math);
$stmt_math->bind_param("iiii", $noOfStudent, $cost_TW_25, $cost_theory_IAE, $totalMathRow);
$stmt_math->execute();
/* END OF MATH QUERY */

/* START OF THEORY QUERY */
$theory = "UPDATE `$sem` SET students = ? , IAE= ?, totalRs = ? WHERE category = 'THEORY'";
$stmt_theory = mysqli_prepare($conn, $theory);
$stmt_theory->bind_param("iii",  $noOfStudent, $cost_theory_IAE, $cost_theory_IAE);
$stmt_theory->execute();
/* END OF THEORY QUERY */

/* START OF LAB QUERY */

$labTotal = $cost_TW_25 + $cost_Oral + $costTAExternalLab + $externalLab + $labAssistant + $peonLab;
$lab = "UPDATE `$sem` SET students = ? ,twMarks='25', oralPrac ='OR + PR', oralPracMark = '25', twRs = ?, oralpracRs= ?, TaExternal =?, daysOfExtension=?, ExternalLab =?, labAss= ?, peon =?, totalRs = ? WHERE category = 'LAB'";
$stmt_lab = mysqli_prepare($conn, $lab);
$stmt_lab->bind_param("iiiiiiiii", $noOfStudent, $cost_TW_25, $cost_Oral, $costTAExternalLab, $daysOfExtLab, $externalLab, $labAssistant, $peonLab, $labTotal);
$stmt_lab->execute();

/* END OF LAB QUERY */

/* START OF LAB with just TW QUERY */

$labTW = "UPDATE `$sem` SET students = ?, twMarks='25' , twRs= ?, totalRs = ? WHERE category = 'TWLAb'";
$stmt_labTW = mysqli_prepare($conn, $labTW);
$stmt_labTW->bind_param("iii", $noOfStudent, $cost_TW_25, $cost_TW_25);
$stmt_labTW->execute();

/* END OF LAB with just TW QUERY */

/* START OF Skills Lab QUERY */

$totalSkillLab = $cost_TW_50 + $cost_Oral + $costTAExternalLab + $externalLab + $labAssistant + $peonLab;
$skillLab = "UPDATE `$sem` SET students = ?, twMarks='50',  twRs= ?, oralPrac ='OR + PR', oralPracMark = '25', oralpracRs= ?, TaExternal=?, daysOfExtension=?, ExternalLab = ?, labAss= ?, peon =?, totalRs = ? WHERE category = 'SKILLLAB'";
$stmt_skillLab = mysqli_prepare($conn, $skillLab);
$stmt_skillLab->bind_param("iiiiiiiii", $noOfStudent, $cost_TW_50, $cost_Oral, $costTAExternalLab, $daysOfExtLab, $externalLab, $labAssistant, $peonLab, $totalSkillLab);
$stmt_skillLab->execute();

/* END OF Skills Lab QUERY */

/* START OF Mini Project Odd Sem QUERY */

$totalProjectOdd = $MiniProjectOral25 + $costMiniProjectOral + $costTAExternalMp + $costMiniProjectExternal + $labAssistantProject + $peonProject;
$MpOdd = "UPDATE `$sem` SET students = ?, twMarks='25',  twRs= ?, oralPrac ='OR + PR', oralPracMark = '25', oralpracRs= ? , TaExternal=?,daysOfExtension=?, ExternalLab = ?, labAss= ?, peon =?, totalRs = ? WHERE category = 'MPODD'";
$stmt_skillLab = mysqli_prepare($conn, $MpOdd);
$stmt_skillLab->bind_param("iiiiiiiii", $noOfGroups, $MiniProjectOral25, $costMiniProjectOral, $costTAExternalMp, $daysOfExtMp, $costMiniProjectExternal, $labAssistantProject, $peonProject, $totalProjectOdd);
$stmt_skillLab->execute();


/* END OF Mini Project Odd Sem QUERY */


/* START OF Mini Project Sem 7 QUERY */

$totalProjectSem7 = $MiniProjectOral50 + $costMiniProjectOral + $costTAExternalMp + $costMiniProjectExternal + $labAssistantProject + $peonProject;
$MpOdd = "UPDATE `$sem` SET students = ?, twMarks='25',  twRs= ?, oralPrac ='OR + PR', oralPracMark = '25', oralpracRs= ? , TaExternal=?, daysOfExtension =?, ExternalLab = ?, labAss= ?, peon =?, totalRs = ? WHERE category = 'MPSEM7'";
$stmt_Mp = mysqli_prepare($conn, $MpOdd);
$stmt_Mp->bind_param("iiiiiiiii", $noOfGroups, $MiniProjectOral50, $costMiniProjectOral, $costTAExternalMp, $daysOfExtMp, $costMiniProjectExternal, $labAssistantProject, $peonProject, $totalProjectSem7);
$stmt_Mp->execute();


/* END OF Mini Project Sem 7 QUERY */

/* START OF PCE QUERY */

$totalPCE = $pceCost;
$PCEQuery = "UPDATE `$sem` SET students = ?, twMarks='50',  twRs= ?, totalRs = ? WHERE category = 'PCE'";
$stmt_pce = mysqli_prepare($conn, $PCEQuery);
$stmt_pce->bind_param("iii", $noOfGroups, $pceCost, $totalPCE);
$stmt_pce->execute();


/* END OF PCE QUERY */

/* START OF Only Oral QUERY */

$onlyOral = $cost_TW_25 + $cost_TW_25 + $costTAExternalLab + $externalLab + $labAssistant + $peonLab;
$lab = "UPDATE `$sem` SET students = ? ,twMarks='25', oralPrac ='OR', oralPracMark = '25', twRs = ?, oralpracRs= ?, TaExternal =?, daysOfExtension=?, ExternalLab =?, labAss= ?, peon =?, totalRs = ? WHERE category = 'OR'";
$stmt_lab = mysqli_prepare($conn, $lab);
$stmt_lab->bind_param("iiiiiiiii", $noOfStudent, $cost_TW_25, $cost_TW_25, $costTAExternalLab, $daysOfExtLab, $cost_TW_25, $labAssistant, $peonLab, $onlyOral);
$stmt_lab->execute();

/* END OF Only Oral QUERY */


/* START OF Mini Project Sem 8 QUERY */

$totalProjectEven = $MiniProjectOral50 + $costMiniProjectOral50 + $costTAExternalMp + $costMiniProjectOral50 + $labAssistantProject + $peonProject;
$MpEven= "UPDATE `$sem` SET students = ?, twMarks='50',  twRs= ?, oralPrac ='OR + PR', oralPracMark = '50', oralpracRs= ? , TaExternal=?, daysOfExtension =?, ExternalLab = ?, labAss= ?, peon =?, totalRs = ? WHERE category = 'MPEVEN'";
$stmt_skillLab = mysqli_prepare($conn, $MpEven);
$stmt_skillLab->bind_param("iiiiiiiii", $noOfGroups, $MiniProjectOral50, $costMiniProjectOral50, $costTAExternalMp, $daysOfExtMp, $costMiniProjectOral50, $labAssistantProject, $peonProject, $totalProjectEven);
$stmt_skillLab->execute();


/* END OF Mini Project even Sem QUERY */

/* START OF No IAE QUERY */

$totalNoIAE = $cost_TW_50 + $cost_Oral + $costTAExternalLab + $externalLab + $labAssistant + $peonLab;
$NoIAE= "UPDATE `$sem` SET students = ?, twMarks='50',  twRs= ?, oralPrac ='OR + PR', oralPracMark = '25', oralpracRs= ? , TaExternal=?, daysOFExtension=?, ExternalLab = ?, labAss= ?, peon =?, totalRs = ? WHERE category = 'NoIAE'";
$stmt_skillLab = mysqli_prepare($conn, $NoIAE);
$stmt_skillLab->bind_param("iiiiiiiii", $noOfGroups, $cost_TW_50, $cost_Oral, $costTAExternalLab, $daysOfExtLab, $externalLab, $labAssistant, $peonLab, $totalNoIAE);
$stmt_skillLab->execute();


/* END OF No IAE QUERY */




/* Total query */

$sql = "SELECT sum(totalRs) as total FROM `$sem` WHERE category != 'TOTAL'";

$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $total= $row['total'];
    echo $total;
    $totalCost = "UPDATE `$sem` SET totalRs= ? WHERE category = 'TOTAL'";
    $stmt_tcost = mysqli_prepare($conn, $totalCost);
    $stmt_tcost->bind_param("i", $total);
    $stmt_tcost->execute();
}




/* Total query */



header('location:table.php');
?>