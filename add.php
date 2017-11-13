<?php
//wpis do bazy
session_start();
if (!empty($_POST)){
    require_once "database/dbinfo.php";
    require_once "database/connect.php";
    
    $connection = db_connection();
    if ($connection != false){
        $sql = "UPDATE $db_sheet1_tab SET $db_sheet1_province= '".$_POST['province']."', $db_sheet1_city = '".$_POST['city']."', $db_sheet1_district='".$_POST['district']."', $db_sheet1_trade='".$_POST['trade']."', $db_sheet1_comname='".$_POST['comname']."', $db_sheet1_form='".$_POST['form']."', $db_sheet1_street='".$_POST['street']."', $db_sheet1_code='".$_POST['code']."', $db_sheet1_tel='".$_POST['tel']."', $db_sheet1_tel2='".$_POST['tel2']."', $db_sheet1_fax='".$_POST['fax']."', $db_sheet1_email='".$_POST['email']."', $db_users_lname='".$_POST['lname']."', $db_sheet1_nip='".$_POST['nip']."', $db_sheet1_regon='".$_POST['regon']."', $db_sheet1_pkd='".$_POST['pkd']."', $db_sheet1_start='".$_POST['start']."', $db_sheet1_fname='".$_POST['fname']."', $db_sheet1_lname='".$_POST['lname']."', $db_sheet1_position='".$_POST['position'];
    }
}
header("Location: add.php");
?>
