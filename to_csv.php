<?php
    
    session_start();
    $export_data=$_SESSION['array'];
    $export_data = json_decode(json_encode($export_data), true);
    
    
    $fileName = "data" . date('Ymd') . ".csv";
 
	function outputCsv($fileName, $assocDataArray)
	{
    ob_clean();
    header('Pragma: public');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Cache-Control: private', false);
    header('Content-Type: text/csv; UTF-16');
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
?>
  
  