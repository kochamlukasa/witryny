<?php
$pageName = $_GET['content'] ?? null;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Zakład Produkcyjny</title>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
</head>

<body>
<div id="container">    
<div id="baner">
    <h1>Zakład Produkcyjny</h1>
</div>
<fieldset id="f2">
<div id="lewy">
    <h4>Oferujemy następujące usługi:</h4>
    <div id="ol1">
    <ol>
        <a href="/zaklad4tipkkk/?content=spawanie"><li>Spawanie</li></a>
        <a href="/zaklad4tipkkk/?content=frezowanie"><li>Frezowanie</li></a>
        <a href="/zaklad4tipkkk/?content=toczenie"><li>Toczenie</li></a>
        <a href="/zaklad4tipkkk/?content=malowanie"><li>Malowanie</li></a>      

    </ol>
    </div>
    <a href=wycena.php><h4>Wycena usługi</h4></a>
    <a href=klienci.php><h4>Pokaż klientów</h4></a>
    <a href=pracownicy.php><h4>Pokaż pracowników</h4></a>
    <a href=uslugi.php><h4>Pokaż usługi</h4></a>
    

</div>

<div id="prawy">
    <?php if($pageName=='spawanie'): ?>
    <img id="myImage" src="img/spawanie.png"/>
    <span>Spawanie stali i aluminium<br></span>
    <span>świadczymy metodą TIG i MMA</span>
    
    <?php elseif($pageName=='frezowanie'): ?>
    <img id="myImage" src="img/frezowanie.png"/>
    <span>Frezowanie stali i aluminium<br></span>
    <span>świadczymy metodą TIG i MMA</span>

    <?php elseif($pageName=='toczenie'): ?>
    <img id="myImage" src="img/toczenie.png"/>
    <span>Toczenie stali i aluminium<br></span>
    <span>świadczymy metodą TIG i MMA</span>
    
    <?php elseif($pageName=='malowanie'): ?>
    <img id="myImage" src="img/pomidor.png"/>
    <span>Malowanie pomidorów<br></span>
    <span></span>
  <?php  endif;?>
</div>
    </fieldset>


<div id="dolny">
<div class="klient_pracownik">
<h4>Dodaj klienta</h4>
    <form method="POST" action="zapisz_klienta.php">
    <label for="name">Imię</label>
    <input type="text" name="imie"/></br>
    <label for="surname">Nazwisko</label>
    <input type="text" name="nazwisko"></br>
    <label for="phone">Telefon</label>
    <input type="text" name="telefon"></br>
    <input type="submit" value="Zapisz"/>
</form>
</div>
<div class="klient_pracownik">
<h4>Dodaj pracownika</h4>
    <form method="POST" action="zapisz_pracownika.php">
    <label for="imie">Imię</label>
    <input type="text" name="imie"/></br>
    <label for="nazwisko">Nazwisko</label>
    <input type="text" name="nazwisko"></br>
    <label for="wiek">Wiek</label>
    <input type="text" name="wiek"></br>
    <label for="miasto">Miasto</label>
    <input type="text" name="miasto"></br>
    <label for="stanowisko">Stanowisko</label>
    <input type="text" name="stanowisko"></br>
    <input type="submit" value="Zapisz"/>
</form>
</div>
<div class="klient_pracownik">

<h4>Dodaj Usługę:</h4> 
            <form method="POST" action="zapisz_usluge.php">
            <label for "opis">Opis:</label>
            <input type="text" name='opis'/></br>
            <label for "data">Data:</label>
            <input type="date" name="data"/></br>
            <label for "Cena">Cena:</label>
            <input type="number" name="cena"/></br>
            <label for "imieKlient">Imię klienta:</label>
            <input type="text" name="imieKlient"/></br>
            <label for "nazwiskoKlient">Nazwisko klienta:</label>
            <input type="text" name="nazwiskoKlient"/></br>
            <label for "imiePracownik">Imię pracownika:</label>
            <input type="text" name="imiePracownik"/></br>
            <label for "nazwiskoPracownik">Nazwisko pracownika:</label>
            <input type="text" name="nazwiskoPracownik"/></br>
    <input type="submit" value="Zapisz"/>
</form>
</div>


</div>

<div id="stopka">
    <h4>Witrynę przygotował: Jan Nowak ZSBEM</h4>
</div>

</div>
</body>


</html>