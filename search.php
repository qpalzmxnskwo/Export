<?php

require_once "database/dbinfo.php";
require_once "database/connect.php";

var_dump($_POST['data']);

 $array2 = array(
    "$db_sheet1_city" => 'imie'     ///////////template
	
 );
var_dump($array2);






$connection = db_connection();
$sql="SELECT * FROM $db_sheet1_tab WHERE $db_sheet1_email IS NOT NULL ";

foreach ($array as $key => $value) {
    $sql.= "AND `$key` LIKE '%$value%'";
	// if (next($array)==true){
		// $sql.=' AND ';
	// }
}

$stmt = $connection->prepare($sql);
$stmt->execute();

$dataSet = $stmt->get_result();
$data = $dataSet->fetch_all(MYSQLI_ASSOC);

echo json_encode($data);



?>