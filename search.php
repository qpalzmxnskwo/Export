<?php

require_once "database/dbinfo.php";
require_once "database/connect.php";


$array = array(
   "$db_sheet1_city" => 'imie'
	
);


$connection = db_connection($db_ods);
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