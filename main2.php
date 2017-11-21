 <?php
//strona główna
    session_start();
  
    if(!isset($_SESSION['online']) || !$_SESSION['online']){
            header('Location: index.php');
            exit();
    }
	if (empty($_SESSION['array'])){
	$_SESSION['array']=json_decode($_POST['data']);}
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	  <meta charset="UTF-8">
      <link rel="stylesheet" href="css/style.css"> 
</head>

<body>


<div class="box2">
	<div id="sidebar">
			<button id='csv' class="export-btn"> Wyekspotruj do csv </button><br>
	<button id='xls' class="export-btn"> Wyekspotruj do xls </button>
		

	<form enctype="multipart/form-data" method="post" id='attachments'>

    <div>Dodaj załączniki:</div>
	<input type="file" name="filesToUpload[]" id="filesToUpload" multiple="" />

	<div>Wybrane pliki:</div>

<ul id="fileList"></ul>

		
		
		<button class='export-btn' type='submit' id='send_mail'>Wyślij</button></center>
	</div>

		<textarea id="emailform" name="subject"></textarea>
</form>
</div>


</body>
</html>

<script type="text/javascript" src="js/get_data.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
