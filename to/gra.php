<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Krzyzowka</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div id="container">
    <h4>Jaki to wyraz ?</h4>
    <fieldset id="f1">
    <label for="litera">Litera</label>


    <input type="text" id="litera" name="litera"></br>
    <?php
    $haslo = $_POST['haslo'];
    $kategoria = $_POST['kategoria'];
    for($i=0;$i<strlen($haslo);$i++){
    ?>
    <input type="text" id="has<?php echo $i;?>" name="has">


    <?php
    }
    ?>
    
    
    
    <label for="haslo">Zgaduje hasło: </label>
    <input type="text" id="kategoria" name="kategoria">
    <input type="button" value="Sprawdzam" onclick="sprawdz();">
    </fieldset>

</div>

</body>


</html>