<?php
    
	session_start();
	$export_data=$_SESSION['array'];
	$export_data = json_decode(json_encode($export_data), true);
	
	
    $fileName = "export_data" . rand(1,100) . ".xls";
 
if ($export_data) {
 
     header("Content-Disposition: attachment; filename=\"$fileName\"");
     header("Content-Type: application/vnd.ms-excel; charset=UTF-16LE");
 
	 echo chr(255) . chr(254);
 
 
    $flag = false;
    foreach($export_data as $row) {
        if(!$flag) {
            echo mb_convert_encoding(implode("\t", array_keys($row)) . "\n", 'UTF-16LE', 'utf-8');
            $flag = true;
        }
        echo mb_convert_encoding(implode("\t", array_values($row)) . "\n", 'UTF-16LE', 'utf-8');
    }
    exit;           
}
?>
  
  
 