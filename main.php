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
    <div class="input">
        <label for="wojewodztwo">Województwo</label>
        <select>
  <option value=""></option>
  <option value="">Dolnośląskie</option>
  <option value="">Kujawsko-pomorskie</option>
  <option value="">Lubelskie</option>
  <option value="">Lubuskie</option>
  <option value="">Łódzkie</option>
  <option value="">Małopolskie</option>
  <option value="">Mazowieckie</option>
  <option value="">Opolskie</option>
  <option value="">Podkarpackie</option>
  <option value="">Podlaskie</option>
  <option value="">Pomorskie</option>
  <option value="">Śląskie</option>
  <option value="">Świętokrzyskie</option>
  <option value="">Warmińsko-mazurskie</option>
  <option value="">Wielkopolskie</option> 
  <option value="">Zachodniopomorskie</option> 
</select>
    </div>

    <div class="input">
        <label for="miasto">Miasto</label>
        <input type="text" value="" name="miasto">
    </div>

    <div class="input">
        <label for="powiat">Powiat</label>
        <input type="text" value="" name="powiat">
    </div>

    <div class="input">
        <label for="branza">Branża</label>
        <input type="text" value="" name="branza">
    </div>
<br style="clear:both;">

<div class="input">
        <label for="nazwafirmy">Nazwa firmy</label>
        <input type="text" value="" name="nazwafirmy">
    </div>

    <div class="input">
        <label for="formaprawna">Forma prawna</label>
        <input type="text" value="" name="formaprawna">
    </div>

    <div class="input">
        <label for="ulica">Ulica</label>
        <input type="text" value="" name="ulica">
    </div>

    <div class="input">
        <label for="kodpocztowy">Kod pocztowy</label>
        <input type="text" value="" name="kodpocztowy">
    </div>
<br style="clear:both;">

    <div class="input">
        <label for="telstac">Telefon stacjonarny</label>
        <input type="text" value="" name="telstac">
    </div>

    <div class="input">
        <label for="telkom">Telefon komórkowy</label>
        <input type="text" value="" name="telkom">
    </div>

    <div class="input">
        <label for="fax">Fax</label>
        <input type="text" value="" name="fax">
    </div>

    <div class="input">
        <label for="email">Email</label>
        <input type="text" value="" name="email">
    </div>
<br style="clear:both;">

    <div class="input">
        <label for="zatrudnienie">Zatrudnienie</label>
        <input type="text" value="" name="zatrudnienie">
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
        <input type="text" value="" name="rozp">
    </div>

    <div class="input">
        <label for="imie">Imię osoby zarządzanącej</label>
        <input type="text" value="" name="imie">
    </div>

    <div class="input">
        <label for="nazwisko">Nazwisko osoby zarządzającej</label>
        <input type="text" value="" name="nazwisko">
    </div>

    <div class="input">
        <label for="stanowisko">Stanowisko osoby zarządzającej</label>
        <input type="text" value="" name="stanowisko">
    </div>


<input type="checkbox" name="">
<button>Wyślij</button>

</div>

  <table id='table'>
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
        <tr>
        	<th>test</th>
        	<th>test</th>
        	<th>test</th>
        	<th>test</th>
        </tr>  <tr>
        	<th>test</th>
        	<th>test</th>
        	<th>test</th>
        	<th>test</th>
        </tr>
  </table>
</body>
</html>