<?php
// Includes
include('../config/connection.php');
include('../config/authUser.php');

// Establish Database Connection
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Retrieve session variables
$daysOfExtLab = $_SESSION["daysOfExtLab"];
$noOfStudent = $_SESSION["noOfStudents"];
$noOfGroups = $_SESSION["noOfGroups"];
$daysOfExtMp = $_SESSION["daysOfExtMp"];
$sem = $_SESSION["scheme_sem"];

// Fetch cost details
$costTableQuery = mysqli_query($conn, "SELECT * FROM cost");
$costRow = mysqli_fetch_assoc($costTableQuery);

// Extract cost values
$costs = [
    "IAE" => $costRow['IAE(20)'],
    "TW_25" => $costRow['TW(25)'],
    "TW_50" => $costRow['TW(50)'],
    "OralPrac" => $costRow['OralPrac'],
    "MiniProject_25" => $costRow['MiniProjectTW(25)'],
    "MiniProject_50" => $costRow['MiniProjectTW(50)'],
    "Project_TW_25" => $costRow['MiniProjectOral(25)'],
    "Project_TW_50" => $costRow['MiniProjectOral(50)'],
    "TAExternal" => $costRow['TAExternal'],
    "LabAssistant" => $costRow['LabAssistant'],
    "Peon" => $costRow['Peon'],
    "LabAssistantMp" => $costRow['LabAssistantMp'],
    "PeonMp" => $costRow['PeonMp']
];

// Compute costs
$computedCosts = [
    "theory_IAE" => $costs["IAE"] * $noOfStudent,
    "TW_25" => $costs["TW_25"] * $noOfStudent,
    "TW_50" => $costs["TW_50"] * $noOfStudent,
    "Oral" => $costs["OralPrac"] * $noOfStudent,
    "MiniProjectOral25" => $costs["Project_TW_25"] * $noOfStudent,
    "MiniProjectOral50" => $costs["Project_TW_50"] * $noOfStudent,
    "MiniProjectExternal25" => $costs["MiniProject_25"] * $noOfGroups,
    "MiniProjectExternal50" => $costs["MiniProject_50"] * $noOfGroups,
    "TAExternalLab" => $costs["TAExternal"] * $daysOfExtLab,
    "TAExternalMp" => $costs["TAExternal"] * $daysOfExtMp
];

// Function to update category
function updateCategory($conn, $sem, $category, $params, $types)
{
    $query = "UPDATE `$sem` SET students=?, twMarks=?, twRs=?, oralPrac=?, oralPracMark=?, oralpracRs=?, TaExternal=?, daysOfExtension=?, ExternalLab=?, labAss=?, peon=?, totalRs=? WHERE category=?";
    $stmt = mysqli_prepare($conn, $query);
    $params[] = $category;
    $stmt->bind_param($types, ...$params);
    $stmt->execute();
    $stmt->close();
}

// Update categories
updateCategory($conn, $sem, "MATH", [$noOfStudent, 25, $computedCosts["TW_25"], "", 0, 0, 0, 0, 0, 0, 0, $computedCosts["TW_25"] + $computedCosts["theory_IAE"]], "iiisiiiiiiii");
updateCategory($conn, $sem, "THEORY", [$noOfStudent, "", 0, "", 0, 0, 0, 0, 0, 0, 0, $computedCosts["theory_IAE"]], "iisiiiiiiii");
updateCategory($conn, $sem, "LAB", [$noOfStudent, 25, $computedCosts["TW_25"], "OR + PR", 25, $computedCosts["Oral"], $computedCosts["TAExternalLab"], $daysOfExtLab, $computedCosts["Oral"], $costs["LabAssistant"], $costs["Peon"], array_sum([$computedCosts["TW_25"], $computedCosts["Oral"], $computedCosts["TAExternalLab"], $computedCosts["Oral"], $costs["LabAssistant"], $costs["Peon"]])], "iiisiiiiiiii");
updateCategory($conn, $sem, "TWLAb", [$noOfStudent, 25, $computedCosts["TW_25"], "", 0, 0, 0, 0, 0, 0, 0, $computedCosts["TW_25"]], "iiisiiiiiiii");
updateCategory($conn, $sem, "SKILLLAB", [$noOfStudent, 50, $computedCosts["TW_50"], "OR + PR", 25, $computedCosts["Oral"], $computedCosts["TAExternalLab"], $daysOfExtLab, $computedCosts["Oral"], $costs["LabAssistant"], $costs["Peon"], array_sum([$computedCosts["TW_50"], $computedCosts["Oral"], $computedCosts["TAExternalLab"], $computedCosts["Oral"], $costs["LabAssistant"], $costs["Peon"]])], "iiisiiiiiiii");
updateCategory($conn, $sem, "MPODD", [$noOfGroups, 25, $computedCosts["MiniProjectOral25"], "OR + PR", 25, $computedCosts["MiniProjectExternal25"], $computedCosts["TAExternalMp"], $daysOfExtMp, $computedCosts["MiniProjectExternal25"], $costs["LabAssistantMp"], $costs["PeonMp"], array_sum([$computedCosts["MiniProjectOral25"], $computedCosts["MiniProjectExternal25"], $computedCosts["TAExternalMp"], $computedCosts["MiniProjectExternal25"], $costs["LabAssistantMp"], $costs["PeonMp"]])], "iiisiiiiiiii");
updateCategory($conn, $sem, "PCE", [$noOfGroups, 50, $computedCosts["TW_50"], "", 0, 0, 0, 0, 0, 0, 0, $computedCosts["TW_50"]], "iiisiiiiiiii");
updateCategory($conn, $sem, "OR", [$noOfStudent, 25, $computedCosts["TW_25"], "OR", 25, $computedCosts["TW_25"], $computedCosts["TAExternalLab"], $daysOfExtLab, $computedCosts["TW_25"], $costs["LabAssistant"], $costs["Peon"], array_sum([$computedCosts["TW_25"], $computedCosts["TW_25"], $computedCosts["TAExternalLab"], $computedCosts["TW_25"], $costs["LabAssistant"], $costs["Peon"]])], "iiisiiiiiiii");

// Compute and update total
$sqlTotal = "SELECT SUM(totalRs) AS total FROM `$sem` WHERE category != 'TOTAL'";
$result = mysqli_query($conn, $sqlTotal);
$row = mysqli_fetch_assoc($result);
$total = $row['total'];

updateCategory($conn, $sem, "TOTAL", [0, "", 0, "", 0, 0, 0, 0, 0, 0, 0, $total], "iisiiiiiiii");

// Redirect
header('Location: table.php');
exit;
?>
