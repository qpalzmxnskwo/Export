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


<div id="center">
<form id='form'>
    <div class="input">
        <label for="wojewodztwo">Województwo</label>
        <select name='Powiat'>
  <option value=""></option>
  <option value="Dolnośląskie">Dolnośląskie</option>
  <option value="Kujawsko-pomorskie">Kujawsko-pomorskie</option>
  <option value="Lubelskie">Lubelskie</option>
  <option value="Lubuskie">Lubuskie</option>
  <option value="Łódzkie">Łódzkie</option>
  <option value="Małopolskie">Małopolskie</option>
  <option value="Mazowieckie">Mazowieckie</option>
  <option value="Opolskie">Opolskie</option>
  <option value="Podkarpackie">Podkarpackie</option>
  <option value="Podlaskie">Podlaskie</option>
  <option value="Pomorskie">Pomorskie</option>
  <option value="Śląskie">Śląskie</option>
  <option value="Świętokrzyskie">Świętokrzyskie</option>
  <option value="Warmińsko-mazurskie">Warmińsko-mazurskie</option>
  <option value="Wielkopolskie">Wielkopolskie</option> 
  <option value="Zachodniopomorskie">Zachodniopomorskie</option> 
</select>
    </div>

    <div class="input">
        <label for="miasto">Miasto</label>
        <input type="text" value="" name="Miasto">
    </div>

    <div class="input">
        <label for="powiat">Powiat</label>
        <input type="text" value="" name="Powiat">
    </div>

    <div class="input">
        <label for="branza">Branża</label>
        <input type="text" value="" name="Branża">
    </div>
<br style="clear:both;">

<div class="input">
        <label for="nazwafirmy">Nazwa firmy</label>
        <input type="text" value="" name="Nazwa firmy">
    </div>

    <div class="input">
        <label for="formaprawna">Forma prawna</label>
        <input type="text" value="" name="Forma prawna">
    </div>

    <div class="input">
        <label for="ulica">Ulica</label>
        <input type="text" value="" name="Ulica">
    </div>

    <div class="input">
        <label for="kodpocztowy">Kod pocztowy</label>
        <input type="text" value="" name="Kod pocztowy">
    </div>
<br style="clear:both;">

    <div class="input">
        <label for="telstac">Telefon stacjonarny</label>
        <input type="text" value="" name="Telefon stacjonarny">
    </div>

    <div class="input">
        <label for="telkom">Telefon komórkowy</label>
        <input type="text" value="" name="Telefon kom">
    </div>

    <div class="input">
        <label for="fax">Fax</label>
        <input type="text" value="" name="Fax">
    </div>

    <div class="input">
        <label for="email">Email</label>
        <input type="text" value="" name="Email">
    </div>
<br style="clear:both;">

    <div class="input">
        <label for="zatrudnienie">Zatrudnienie</label>
        <input type="text" value="" name="Zatrudnienie">
    </div>

    <div class="input">
        <label for="NIP">NIP</label>
        <input type="text" value="" name="NIP">
    </div>

    <div class="input">
        <label for="REGON">REGON</label>
        <input type="text" value="" name="REGON">
    </div>

    <div class="input">
        <label for="PKD">PKD</label>
        <input type="text" value="" name="PKD">
    </div>
<br style="clear:both;">

    <div class="input">
        <label for="rozp">Rozpoczęcie działalności</label>
        <input type="text" value="" name="Rozpoczęcie_działalności">
    </div>

    <div class="input">
        <label for="imie">Imię osoby zarządzającej</label>
        <input type="text" value="" name="Imię Osoby zarządzającej">
    </div>

    <div class="input">
        <label for="nazwisko">Nazwisko osoby zarządzającej</label>
        <input type="text" value="" name="Nazwisko Osoby zarządzającej">
    </div>

    <div class="input">
        <label for="stanowisko">Stanowisko osoby zarządzającej</label>
        <input type="text" value="" name="Stanowisko Osoby zarządzającej">
    </div>


<input type="checkbox" name="not_repeat_mail">
<button type='submit' >Wyślij</button>
</form>
</div>


  <table class="table" id='table'>
        <thead>                          
            <tr>
                <th>Województwo</th>
                <th>Miasto</th>
                <th>Powiat</th>
                <th>Branża</th>
                <th>Nazwa firmy</th>
                <th>Forma prawna</th>
                <th>Ulica</th>
                <th>Kod pocztowy</th>
                <th>Telefon stacjonarny</th>
                <th>Telefon komórkowy</th>
                <th>Fax</th>
                <th>Email</th>
                <th>Zatrudnienie</th>
                <th>NIP</th>
                <th>REGON</th>
                <th>PKD</th>
                <th>Rozpoczęcie działalności</th>
                <th>Imię osoby zarządzającej</th>
                <th>Nazwisko osoby zarządzającej</th>
                <th>Stanowisko osoby zarządzającej</th>
            </tr>
        </thead>
		<tbody>

    </tbody> 
  </table>    


  </table> 
<input type="button" style="float: right; margin-right: 235px; margin-top: 50px;" value="Następne" onclick="next()"/>  




</body>
</html>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="js/get_data.js"></script>
