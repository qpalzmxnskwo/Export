<?php
//funkcja służąca do połączenia z bazą danych
function db_connection(){
    $host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "ods_db";

    $conn = new mysqli($host, $db_user, $db_pass, $db_name);
    if ($conn->connect_errno!=0){
        echo "Error: ".$conn->connect_errno;
        echo "<script type=\"text/javascript\">alert('błąd w połączeniu z bazą');</script>";
        return false;
    }
    else{
        $conn -> query ('SET NAMES utf8');
        $conn -> query ('SET CHARACTER_SET utf8_unicode_ci');
        return $conn;
    }
}
?>