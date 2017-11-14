<?php
  session_start();
  $export_data=$_SESSION['array'];
    
    function filterData(&$str)
    {
        $str = preg_replace("/\t/", "\\t", $str);
        $str = preg_replace("/\r?\n/", "\\n", $str);
        if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
    }
    
    $fileName = "data" . date('Ymd') . ".csv";
    
    header('Content-type: text/csv');
    header('Content-Disposition: attachment; filename="demo.csv"');
    
    $flag = false;
    foreach($export_data as $row) {
        if(!$flag) {
            echo implode("\t", array_keys($row)) . "\n";
            $flag = true;
        }
        array_walk($row, 'filterData');
        echo implode("\t", array_values($row)) . "\n";
    }
    
    exit;
?>
