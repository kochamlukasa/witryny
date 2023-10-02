<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>zapis do db</title>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
</head>

<body>
<div id="container">  

<?php
//var_dump($_POST['imie']);
//var_dump($_POST['nazwisko']);
//var_dump($_POST['telefon']);


/*if(($_POST['imie']!="") && ($_POST['nazwisko']!="") && 
($_POST['wiek']!="") && ($_POST['miasto']!="") && ($_POST['stanowisko']!="")){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wiek = $_POST['wiek'];
    $miasto = $_POST['miasto'];
    $stanowisko = $_POST['stanowisko'];*/
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'zakład4tip';



$conn = new mysqli($host, $user, $password, $database);
$sql = "Select * from pracownicy where wiek<40";

if($conn->connect_errno){
    echo "Błąd połączenia z bazą danych";
}else{
   // echo "Połączono z bazą danych";
    $result=$conn->query($sql);
    $number = 0;
    echo "</br>Lista Klientów pobrana z bazy danych, którzy mają poniżej 40 lat.</br>";
    ?>
    <table  border=1 >
    
    <th> Lp.</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Wiek</th>
    <th>Stanowisko</th>
    <th>Miasto</th>
    <tr>
        
    <?php
        while($row = $result->fetch_assoc()){
            $number++;
            $imie = $row['Imie'];
            $nazwisko = $row['Nazwisko'];
            $wiek = $row['Wiek'];
            $stanowisko = $row['Stanowisko'];
            $miasto = $row['Miasto'];
            


            ?><td><?php echo $number ?></td><?php
            ?><td><?php echo $imie ?></td><?php
            ?><td><?php echo $nazwisko ?></td><?php
            ?><td><?php echo $wiek ?></td></tr><?php
            ?><td><?php echo $stanowisko ?></td></tr><?php
            ?><td><?php echo $miasto ?></td></tr><?php

            
          //  echo"".$number.". ".$imie." ".$nazwisko." ".$telefon."</br>";
         /*   echo "</br>Imie: " .$row['Imie']."</br>"; */


        }?>
        
    </table>
       <?php $conn->close(); }?>










</div>
</body>


</html>



SELECT u.opis, u.data, u.cena, k.imie as imieKlienta, k.nazwisko as nazwiskoKlienta, p.imie as imiePracownika, p.nazwisko as nazwiskoPracownika, p.stanowisko as stanowiskoPracownika FROM uslugi as u
INNER JOIN pracownicy as p 
INNER JOIN klienci as k 
ON u.idKlient = k.idKlient and u.idPracownik=p.idPracownik;