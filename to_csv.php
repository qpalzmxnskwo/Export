<?php
    
    session_start();
    $export_data=$_SESSION['array'];
    $export_data = json_decode(json_encode($export_data), true);
    
    
    $fileName = "data" . date('Ymd') . ".csv";
 
 
if ($export_data) {
	
	header('Content-Type: text/csv ; charset=UTF-16LE');
    header('Content-Disposition: attachment;filename=' . $fileName);
 
	 echo chr(255) . chr(254);
 
 
    $flag = false;
    foreach($export_data as $row) {
        if(!$flag) {
            echo mb_convert_encoding(implode(", ", array_keys($row)) . "\r\n", 'UTF-16LE', 'utf-8');
            $flag = true;
        }
        echo mb_convert_encoding(implode(", ", array_values($row)) . "\r\n", 'UTF-16LE', 'utf-8');
    }
    exit;           
}
?>
  
  