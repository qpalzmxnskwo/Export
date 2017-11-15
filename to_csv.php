<?php
    // $data = array(
        // array("First Name" => "Natly", "Last Name" => "Jones", "Email" => "natly@gmail.com", "Message" => "Test message by Natly"),
        // array("First Name" => "Codex", "Last Name" => "World", "Email" => "info@codexworld.com", "Message" => "Test message by CodexWorld"),
        // array("First Name" => "John", "Last Name" => "Thomas", "Email" => "john@gmail.com", "Message" => "Test message by John"),               
        // array("First Name" => "Michael", "Last Name" => "Vicktor", "Email" => "michael@gmail.com", "Message" => "Test message by Michael"),
        // array("First Name" => "Sarah", "Last Name" => "David", "Email" => "sarah@gmail.com", "Message" => "Test message by Sarah")
    // );
    
<<<<<<< HEAD
<<<<<<< HEAD
    session_start();
    $export_data=$_SESSION['array'];
    $export_data = json_decode(json_encode($export_data), true);
    
    $fileName = "export_data" . rand(1,100) . ".csv";
 
 function outputCsv($fileName, $assocDataArray)
{
    ob_clean();
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private', false);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment;filename=' . $fileName);    
    if(isset($assocDataArray['0'])){
        $fp = fopen('php://output', 'w');
        fputcsv($fp, array_keys($assocDataArray['0']));
        foreach($assocDataArray AS $values){
            fputcsv($fp, $values);
        }
        fclose($fp);
    }
    ob_flush();
}



outputCsv($filename, $export_data);
=======
=======
>>>>>>> parent of f14f461... .
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
    foreach($data as $row) {
        if(!$flag) {
            echo implode("\t", array_keys($row)) . "\n";
            $flag = true;
        }
        array_walk($row, 'filterData');
        echo implode("\t", array_values($row)) . "\n";
    }
    
    exit;
<<<<<<< HEAD
>>>>>>> parent of f14f461... .
=======
>>>>>>> parent of f14f461... .
?>
