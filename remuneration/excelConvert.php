<?php

include('../config/connection.php');
include('../config/authUser.php');
session_start();

$semName = $_SESSION["scheme_sem"];
$sem = $_SESSION['Semester'];


$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD);

if ($conn == true) {
    "connected successfully";
}

$db_select = mysqli_select_db($conn, DB_NAME);
//check whether this is connected or not

if ($db_select == true) {
    echo "database Selected";
}

require_once '../spout/src/Spout/Autoloader/autoload.php';

use Box\Spout\Writer\Common\Creator\WriterEntityFactory;
use Box\Spout\Writer\Common\Creator\Style\StyleBuilder;
use Box\Spout\Common\Entity\Style\CellAlignment;
use Box\Spout\Common\Entity\Style\Color;
use Box\Spout\Writer\Common\Entity\Options;
use Box\Spout\Common\Entity\Style\Border;
use Box\Spout\Writer\Common\Creator\Style\BorderBuilder;


$fileName = $semName.".xlsx";
$filePath = "../uploaded_files/" . $fileName;
echo $filePath;


$style = (new StyleBuilder())
    ->setFontBold()
    ->setFontSize(12)
    ->setFontColor(Color::BLACK)
    ->setShouldWrapText()
    ->setCellAlignment(CellAlignment::CENTER)
    ->build();

$border = (new BorderBuilder())
    ->setBorderBottom(Color::BLACK, Border::WIDTH_THIN, Border::STYLE_SOLID)
    ->build();

$style_row = (new StyleBuilder())
    ->setCellAlignment(CellAlignment::CENTER)
    ->setBorder($border)
    ->setShouldWrapText()
    ->build();

$styleTotal = (new StyleBuilder())
    ->setCellAlignment(CellAlignment::CENTER)
    ->setBorder($border)
    ->setShouldWrapText()
    ->build();


$query = "SELECT * FROM `$semName` WHERE category != 'TOTAL'";
$result = mysqli_query($conn, $query);
$writer = WriterEntityFactory::createXLSXWriter();
$writer->openToFile($filePath);

$heading = WriterEntityFactory::createRowFromArray(['SEM', 'Sr no.', 'Name of Subject', 'Subject Abbreviation', 'Subject Code', 'No. of Student', 'IAE', 'TW Marks', 'TW (Int.) Rs.', 'OR/PR/PR+OR', 'OR/PR/PR+OR', 'ORAL', 'TA EXTERNAL', 'Days Of Extension', 'EXTERNAL(Rs)', 'LAB ASSISTANT', 'PEON', 'TOTAL (Rs.)'], $style);
$writer->addRow($heading);


while ($rows = mysqli_fetch_assoc($result)) {

    $multiple = WriterEntityFactory::createRowFromArray(
        [$sem, $rows['srNo'], $rows['nameOfSubject'], $rows['subjectAbbr'], $rows['subjectCode'], $rows['students'], $rows['IAE'], $rows['twMarks'], $rows['twRs'], $rows['oralPrac'], $rows['oralPracMark'], $rows['oralpracRs'], $rows['taExternal'], $rows['daysOfExtension'], $rows['ExternalLab'], $rows['labAss'], $rows['peon'], $rows['totalRs']],
        $style_row
    );
    $writer->addRow($multiple);
}

$totalQuery = "SELECT * FROM `$semName` WHERE category = 'TOTAL'";
$resultTotal = mysqli_query($conn, $totalQuery);
while ($data = mysqli_fetch_assoc($resultTotal)) {
    $totalAmount= $data['totalRs'];
$total =  WriterEntityFactory::createRowFromArray(['Total Amount', $totalAmount ], $styleTotal );
$writer->addRow($total);

}

$writer->close();


header("location: normal.php");
?>
