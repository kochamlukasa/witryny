<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Koszyk</title>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
</head>

<body>
<div id="container">  

<?php
//var_dump($_POST['imie']);
//var_dump($_POST['nazwisko']);
//var_dump($_POST['Cena']);


if(($_POST['Nazwa']!="") && ($_POST['Cena']!="") && ($_POST['Ilosc']!="") && ($_POST['Data_zakupu']!="")){
    $nazwa = $_POST['Nazwa'];
     $cena = $_POST['Cena'];
     $ilosc = $_POST['Ilosc'];
    $data = $_POST['Data_zakupu'];
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'warzywniak';

$conn = new mysqli($host, $user, $password, $database);
$sql = "Insert into warzywa(Nazwa, Cena, Ilosc, Data_zakupu) values('$nazwa', '$cena', '$ilosc', '$data')";

if($conn->errno){
    echo "Błąd połączenia z bazą danych";
}else{
    echo "";
    $result=$conn->query($sql);
    if($result){
        echo ".;
              
    }else{
        echo "Błąd dodania klienta";
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