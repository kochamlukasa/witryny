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
$sql = "select u.opis, u.data, u.cena, k.imie as imieKlienta, k.nazwisko as nazwiskoKlienta, p.imie as imiePracownika, p.nazwisko as nazwiskoPracownika, p.stanowisko as stanowiskoPracownika from uslugi as u
inner join pracownicy as p 
inner join klienci as k 
on u.idKlient = k.idKlient and u.idPracownik=p.idPracownik";

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
    <th>Imię klienta</th>
    <th>Nazwisko klienta</th>
    <th>Opis</th>
    <th>Data</th>
    <th>Cena</th>
    <th>Imię pracownika</th>
    <th>Nazwisko pracownika</th>
    <th>Stanowisko pracownika</th>
    <tr>
        
    <?php
        while($row = $result->fetch_assoc()){
            $number++;
            $imiek = $row['imieKlienta'];
            $nazwiskok = $row['nazwiskoKlienta'];
            $opis = $row['opis'];
            $data = $row['data'];
            $cena = $row['cena'];
            $imiep = $row['imiePracownika'];
            $nazwiskop = $row['nazwiskoPracownika'];
            $stanowisko = $row['stanowiskoPracownika'];
            


            ?><td><?php echo $number ?></td><?php
            ?><td><?php echo $imiek ?></td><?php
            ?><td><?php echo $nazwiskok ?></td><?php
            ?><td><?php echo $opis ?></td><?php
            ?><td><?php echo $data ?></td><?php
            ?><td><?php echo $cena ?></td><?php
            ?><td><?php echo $imiep ?></td><?php
            ?><td><?php echo $nazwiskop ?></td><?php
            ?><td><?php echo $stanowisko ?></td></tr><?php
            
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