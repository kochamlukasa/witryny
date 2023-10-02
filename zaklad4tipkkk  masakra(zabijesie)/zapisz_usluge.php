<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>zapis uslugi do db</title>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
</head>

<body>
<div id="container">  

<?php
//var_dump($_POST['imie']);
//var_dump($_POST['nazwisko']);
//var_dump($_POST['telefon']);


if(($_POST['opis']!="" ) && ($_POST['data']!="") && ($_POST['cena']!="") && ($_POST['imieKlient']!="") && ($_POST['nazwiskoKlient']!="") && ($_POST['imiePracownik']!="") && ($_POST['nazwiskoPracownik']!="")){
    $data = $_POST['data'];
    $cena = $_POST['cena'];
    $opis = $_POST['opis'];
    $imieKlient = $_POST['imieKlient'];
    $nazwiskoKlient = $_POST['nazwiskoKlient'];
    $imiePracownik = $_POST['imiePracownik'];
    $nazwiskoPracownik = $_POST['nazwiskoPracownik'];
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'zakład4tip';



$conn = new mysqli($host, $user, $password, $database);
$sql = "INSERT INTO uslugi(opis, data, idKlient, idPracownik, cena) VALUES('$opis', '$data', (SELECT idKlient FROM klienci WHERE imie = '$imieKlient' AND nazwisko = '$nazwiskoKlient'), (SELECT idPracownik FROM pracownicy WHERE imie = '$imiePracownik' AND nazwisko = '$nazwiskoPracownik'), '$cena')";

if($conn->errno){
    echo "Błąd połączenia z bazą danych";
}else{
    echo "Połączono z bazą danych";
    $result=$conn->query($sql);
    if($result){
        echo "Dodano usługę do bazy danych</br>";
        echo "Nowa usługa: ".$opis."</br>";
    }else{
        echo "Błąd dodania pracownika";
    }
}

$conn->close();
}else{
    echo "Wprowadzone dane są nieprawidlowe";
}



?>



</div>
</body>


</html>