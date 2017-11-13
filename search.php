<?php

require_once "database/dbinfo.php";
require_once "database/connect.php";


// $array = array(
   // "$db_sheet1_city" => 'imie'     ///////////template
	
// );




$connection = db_connection();
$sql="SELECT * FROM $db_sheet1_tab WHERE ";

foreach ($array as $key => $value) {
    $sql.= "`$key` LIKE '%$value%'";
	if (next($array)==true){
		$sql.=' AND ';
	}
}

$stmt = $connection->prepare($sql);
$stmt->execute();

$dataSet = $stmt->get_result();
$data = $dataSet->fetch_all(MYSQLI_ASSOC);

echo json_encode($data);



?>