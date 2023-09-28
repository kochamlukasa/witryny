<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Sklep spożywczy</title>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
</head>

<body>
<div id="container"> 
<fieldset id="f1">   
<div id="baner">
    <h1>Produkty</h1>
</div>
<div class="warzywa">
<h4>Dodaj zakupy</h4>

    <form method="POST" action="warzywka.php">
    <label for="Nazwa">Nazwa</label>
    <input type="textarea" name="Nazwa"/></br>

    <label for="Cena">Cena</label>
    <input type="text" name="Cena"></br>
    
    <label for="Ilosc">Ilość</label>
    <input type="text" name="Ilosc"></br>
    

    <label for="Data_zakupu">Data zakupu</label>
    <input type="date" name="Data_zakupu"></br>
    

    <input type="submit" value="Dodaj do koszyka"/>
</form>
</fieldset>
</div>
<div id="prawy">
    <img id="myImage" src="sigmabetter.png"/>
</div>