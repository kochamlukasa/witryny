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
    <h1>Warzywniak</h1>
</div>
<div class="warzywa">
<h4>Dodaj zakupy</h4>
<fieldset id="f1">
    <form method="POST" action="warzywka.php">
    <label for="Nazwa">Nazwa</label>
    <input type="textarea" name="Nazwa"/></br>

    <label for="Data_spozycia">Data spożycia</label>
    <input type="date" name="Data_spozycia"></br>
    
    <label for="Cena">Cena</label>
    <input type="text" name="Cena"></br>
    
    <input type="submit" value="Dodaj do koszyka"/>
</form>
</fieldset>
</div>
<div id="prawy">
    <img id="myImage" src="sigmabetter.png"/>
</div>




</body>


</html>