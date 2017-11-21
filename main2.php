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

<div id="exportbox">
	<button id='csv' class="export-btn"> Wyekspotruj do csv </button>
	<button id='xls' class="export-btn"> Wyekspotruj do xls </button>
</div>


	<div id="sidebar">
			
		

	<form enctype="multipart/form-data" method="post" id='attachments'>

<form action="#">
  <div class="input-file-container">  
    <input class="input-file" id="my-file" type="file">
    <label tabindex="0" for="my-file" class="input-file-trigger">Dodaj załączniki</label>
  </div>
  <p class="file-return"></p>
</form>

		
		<br>
		<button class='export-btn' type='submit' id='send_mail' style="width: 100%;">Wyślij</button></center>
	</div>
</div>
<div class="box2">
		<div id="emailformtext">Wpisz treść</div>
		<textarea id="emailform" name="subject"></textarea>
</form>
</div>


</body>
</html>


<script type="text/javascript" src="js/get_data.js"></script>
<script type="text/javascript" src="js/attach.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
