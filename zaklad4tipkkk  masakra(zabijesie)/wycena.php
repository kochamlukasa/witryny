<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Wycena</title>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
    <script>
        function openClose(id){
if(document.getElementById(id).style.display == "none")
            document.getElementById(id).style.display = "block"
        else
            document.getElementById(id).style.display ="none"
        }
        </script>
</head>

<body>
<div id="container">    
<h2>Formularz wyceny usług</h2>
<fieldset id="f1">
    <legend>Dane usługi</legend>
<form method="POST" action="cena.php">
<input type="checkbox" name="sp" id="sp" onclick="openClose('spblock')"> 
<label for="sp">Spawanie</label></br>
<div id="spblock" style="display:none">
<label for="sp">Długość</label>
<input type="text" name="dlugosc">
    <label for="sp">cm</label>
</div>


    <input type="checkbox" name="to" id="to" onclick="openClose('toblock')">  
<label for="to">Toczenie</label></br>
<div id="toblock" style="display:none">
<label for="to">Średnica</label>
<input type="text" name="srednica">
    <label for="to">cm</label>
</div>


<input type="checkbox" name="fr" id="fr" onclick="openClose('frblock')">  
<label for="fr">Frezowanie</label></br>
<div id="frblock" style="display:none" >
<label for="fr">Grubość</label>
<input type="text" name="grubosc">
    <label for="fr">cm</label>
</div>


<input type="checkbox" name="ml" id="ml" onclick="openClose('mlblock')">  
<label for="ml">Malowanie</label></br>
<div id="mlblock" style="display:none">
<label for="ml">Powierzchnia</label>
<input type="text" name="powierzchnia">
    <label for="ml">cm<sup>2</sup></label>
</div>

<p>Wybierz materiał</p>
<input type="radio" name="mater" value="stal">Stal</input>
<input type="radio" name="mater" value="aluminium">Aluminium</input>
<div class="dni">
<p>Termin realizacji</p>
<select name="termin" id="dni">
    <option  value="14">do 14 dni</option>
    <option  value="7">do 7 dni</option>
    <option  value="2">do 2 dni</option>

</select>
</div>

<h5>Uwagi</h5>
<textarea name="opis" type="textarea" cols="30" rows="5"></textarea></br>
<input type="submit" value="Wyceń">





</form>
</fieldset>
</div>
</body>


</html>