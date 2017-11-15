<?php
    
	session_start();
	$export_data=$_SESSION['array'];
	$export_data = json_decode(json_encode($export_data), true);
	
	
    $fileName = "export_data" . rand(1,100) . ".xls";
 
if ($export_data) {
 
    header("Content-Disposition: attachment; filename=\"$fileName\"");
    header("Content-Type: application/vnd.ms-excel");
 
    $flag = false;
    foreach($export_data as $row) {
        if(!$flag) {
            echo mb_convert_encoding(implode("\t", array_keys($row)) . "\n", 'ISO-8859-2', 'utf-8');
            $flag = true;
        }
        echo mb_convert_encoding(implode("\t", array_values($row)) . "\n", 'ISO-8859-2', 'utf-8');
    }
    exit;           
}
?>
  
  
 