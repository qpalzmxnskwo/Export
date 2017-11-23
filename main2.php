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
<button class='nav-btn' onclick="window.location.href='logout.php'">wyloguj</a></button>
<button class='nav-btn' onclick="window.location.href='main.php'">wstecz</button>

<div id="exportbox">
	<button id='csv' class="export-btn"> Wyekspotruj do csv </button>
	<button id='xls' class="export-btn"> Wyekspotruj do xls </button>
</div>


	<div id="sidebar">
			
		

	<form enctype="multipart/form-data" method="post" id='attachments'>

 
    <input class="input-file" id="filesToUpload" name='filesToUpload[]' multiple=""  type="file">
    <label tabindex="0" for="filesToUpload" class="input-file-trigger">Dodaj załączniki</label>

  <div>Wybrane pliki:</div>

<ul id="fileList" style="word-wrap: break-word;"></ul>
  

		
		<br>
		<button class='export-btn' type='submit' id='send_mail' style="width: 100%;">Wyślij</button></center>
	</div>
</div>
<div class="box2">
		<div id="emailformtext">Wpisz treść</div>
		<textarea id="emailform" name="subject"></textarea>
</form>
</div>


<div style='clear:both'></div>

</body>
</html>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/get_data.js"></script>

