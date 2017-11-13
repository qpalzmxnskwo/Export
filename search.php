<?php

require_once "database/dbinfo.php";
require_once "database/connect.php";

$array=$_POST['data'];

$connection = db_connection();
$sql="SELECT * FROM $db_sheet1_tab WHERE $db_sheet1_email <>'' ";

foreach($array as $value){
	  $key=$value['name'];
	  $val= $value['value'];
	  if ($key=='not_repeat_mail'){
		  $sql.= "GROUP BY `$db_sheet1_email`";
	  }else{
     $sql.= "AND `$key` LIKE '%$val%'";
}}

$stmt = $connection->prepare($sql);
$stmt->execute();

$dataSet = $stmt->get_result();
$data = $dataSet->fetch_all(MYSQLI_ASSOC);

echo json_encode($data);

?>