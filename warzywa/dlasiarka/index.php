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

    <div id="lewy">
    <h1>Sklep </br>spożywczy</h1>
    </div>

        <div id="prawy">
        <img id="myImage" src="pomidor.png"/>
        </div>


    <div class="warzywa">
<fieldset id="f2">
<legend>Produkty</legend>


    <form method="POST" action="dodaj.php">
    <label for="Nazwa">Nazwa</label>
    <input type="textarea" name="Nazwa"/></br>

    <label for="Cena">Cena</label>
    <input type="text" name="Cena"></br>
    
    <label for="Ilosc">Ilość</label>
    <input type="text" name="Ilosc"></br>
    

    <label for="Data_zakupu">Data zakupu</label>
    <input type="date" name="Data_zakupu"></br>
    
    
    <div  class="cos">
    <input type="submit" value="Dodaj"/>
    </div>
</div>
</form>
</div>
</fieldset>
</fieldset>

