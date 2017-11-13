<?php

require_once "database/dbinfo.php";
require_once "database/connect.php";

$array=$_POST['data'];





$connection = db_connection();
$sql="SELECT * FROM $db_sheet1_tab WHERE $db_sheet1_email <>'' ";

foreach($array as $value){
	  $key=$value['name'];
	  $val= $value['value'];
	
     $sql.= "AND `$key` LIKE '%$val%'";
}

$stmt = $connection->prepare($sql);
$stmt->execute();

$dataSet = $stmt->get_result();
$data = $dataSet->fetch_all(MYSQLI_ASSOC);

echo $sql;
echo json_encode($data);



?>