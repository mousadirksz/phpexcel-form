<?php

$target_path = "uploads/";

$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

//var_dump($_FILES['uploadedfile']);

move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path);

//echo $target_path;


error_reporting(E_ALL);
set_time_limit(0);

date_default_timezone_set('Europe/London');

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>PHPExcel Reader Example #01</title>

</head>
<body>

<h1>PHPExcel Reader Example #01</h1>
<h2>Simple File Reader using PHPExcel_IOFactory::load()</h2>
<?php

/** Include path **/
set_include_path(get_include_path() . PATH_SEPARATOR . '../phpexcel');

/** PHPExcel_IOFactory */
include 'PHPExcel/IOFactory.php';


//$inputFileName = './literatuurlijst.xlsx';
echo 'Loading file ',pathinfo($inputFileName,PATHINFO_BASENAME),' using IOFactory to identify the format<br />';
$objPHPExcel = PHPExcel_IOFactory::load($target_path);


echo '<hr />';

$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
echo "<PRE>";
var_dump($sheetData);
echo "</PRE>";

?>
<body>
</html>

?>