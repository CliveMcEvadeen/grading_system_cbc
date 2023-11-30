<!-- this script will duplicate an Excel sheet -->
<!-- input file path and output file path are required -->
<!-- the script will create a new Excel sheet -->
<!-- the script will save the duplicated Excel sheet -->
<!-- the script will display a message whether the sheet is duplicated or not -->
<!-- the sheet will be  duplicated tith  strictness, meaning there will be no changes made to the duplicated sheet -->
<!-- this sheet will be made avaailable  for the user/ admin and can be shared  which can later be merged and the data is fiterde -->
<!-- this process will help use to populate the data instead of filling it manually -->
<?php

require 'path/to/PHPExcel/Classes/PHPExcel.php';

function duplicateExcelSheet($inputFilePath, $outputFilePath)
{
    // Load the existing Excel file
    $objPHPExcel = PHPExcel_IOFactory::load($inputFilePath);

    // Clone the sheet
    $clonedSheet = clone $objPHPExcel->getActiveSheet();
    $clonedSheet->setTitle('Duplicated Sheet'); // Set a new title for the duplicated sheet

    // Add the cloned sheet to the spreadsheet
    $objPHPExcel->addSheet($clonedSheet);

    // Create a writer and save the duplicated spreadsheet
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $objWriter->save($outputFilePath);
}

// Specify the input and output file paths
$inputFilePath = 'path/to/your/input/excel-file.xlsx';
$outputFilePath = 'path/to/your/output/duplicated-file.xlsx';

// Duplicate the Excel sheet
duplicateExcelSheet($inputFilePath, $outputFilePath);

echo 'Excel sheet duplicated successfully!';
// function get_sheet_name($inputFilePath){

// }