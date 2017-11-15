<?php
    
    session_start();
    $export_data=$_SESSION['array'];
    $export_data = json_decode(json_encode($export_data), true);
    
    
    $fileName = "data" . date('Ymd') . ".csv";
 
if ($export_data) {
 
       
    
    header('Content-type: text/csv');
    header('Content-Disposition: attachment; filename="demo.csv"');
 
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
  
  