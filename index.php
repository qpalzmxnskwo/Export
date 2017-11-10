<?php
//strona główna - panel logowania
	session_start();
	
	if ((isset($_SESSION['online'])) && ($_SESSION['online']==true))
	{
		header('Location: main.php');
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
	
	<form action="login.php" method="post">
	                
    <div class="login-page">
  		<div class="form">
   			<form class="login-form">
                <input type="text" name="login" placeholder="login" required/>
                <input type="password" name="pass" placeholder="hasło" required/>
                <button type="submit" class="button"/>Zaloguj</button>
            </form>
  		</div>
	</div>

	</form>
	
<?php
	if(isset($_SESSION['error']))	echo $_SESSION['error'];
	unset($_SESSION['error']);
?>

</body>
</html>