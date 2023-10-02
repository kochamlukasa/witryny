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


/*if(($_POST['imie']!="") && ($_POST['nazwisko']!="") && ($_POST['telefon']!="")){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $telefon = $_POST['telefon']; */


$host = 'localhost';
$user = 'root';
$password = '';
$database = 'zakład4tip';

$conn = new mysqli($host, $user, $password, $database);
$sql = "Select * from klienci";

if($conn->connect_errno){
    echo "Błąd połączenia z bazą danych";
}else{
   // echo "Połączono z bazą danych";
    $result=$conn->query($sql);
    $number = 0;
    echo "</br>Lista Klientów pobrana z bazy danych</br>";
    ?>
<table class="center" border=1 >
    
    <th> Lp.</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>Telefon</th>
    <tr>
        
    <?php
        while($row = $result->fetch_assoc()){
            $number++;
            $imie = $row['Imie'];
            $nazwisko = $row['Nazwisko'];
            $telefon = $row['Telefon'];

            ?><td><?php echo $number ?></td><?php
            ?><td><?php echo $imie ?></td><?php
            ?><td><?php echo $nazwisko ?></td><?php
            ?><td><?php echo $telefon ?></td></tr><?php

            
          //  echo"".$number.". ".$imie." ".$nazwisko." ".$telefon."</br>";
         /*   echo "</br>Imie: " .$row['Imie']."</br>"; */


        }?>
        
    </table>
       <?php $conn->close(); }?>









</div>
</body>


</html>