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
      <link href="template/assets/css/bootstrap.css" rel="stylesheet" />
  
</head>

<body>

<button id='csv'> Wyekspotruj do csv </button>
<button id='xls'> Wyekspotruj do xls </button>



</body>
</html>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/get_data.js"></script>
