 <?php
//strona główna
    session_start();
  
    if(!isset($_SESSION['online']) || !$_SESSION['online']){
            header('Location: index.php');
            exit();
    }
	$_SESSION['array']=json_decode($_POST['data']);
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

		<?php
		        //dodawanie załączników
        echo "<form ensctype=\"multipart/form-data\" action=\"attach.php\" method=\"post\">";
        echo "<p class='export-btn'>Załącz plik: <br><input type=\"file\" size=\"32\" name=\"attachment\" value=\"\"/></p>";
        echo "<button class='export-btn' type=\"submit\">Wyślij</button></center>";
        echo "</form>";/// koniec float 43%?>
	</div>

			<textarea id="emailform" name="subject"></textarea>

</div>
	

</body>
</html>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/get_data.js"></script>
