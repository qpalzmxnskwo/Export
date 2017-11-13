 <?php
//strona główna
    session_start();
  
    if(!isset($_SESSION['online']) || !$_SESSION['online']){
            header('Location: index.php');
            exit();
    }
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>
	  <meta charset="UTF-8">
      <link rel="stylesheet" href="css/style.css"> 
</head>

<body>
<?php var_dump($_POST['data']);?>
<div id="main2">
	<div class="box2">
	<button id='csv' class="export-btn"> Wyekspotruj do csv </button><br>
	<button id='xls' class="export-btn"> Wyekspotruj do xls </button>
	</div>

	<div class="box2">
		<div id="sidebar">
		<input type="submit" value="Wyślij">
		<input type="submit" value="Dodaj załącznik">
		</div>

		<div id="mailbox">
			<div class="box2">Treść wiadomości</div>
			<textarea name="Text1" cols="50" rows="5"></textarea>
		</div>

	</div>
</div>
</body>
</html>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/get_data.js"></script>
