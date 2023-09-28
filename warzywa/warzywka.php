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
//var_dump($_POST['Cena']);


if(($_POST['Nazwa']!="") && ($_POST['Data_spozycia']!="") && ($_POST['Cena']!="")){
    $nazwa = $_POST['Nazwa'];
    $data = $_POST['Data_spozycia'];
    $cena = $_POST['Cena'];
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'warzywniak';

$conn = new mysqli($host, $user, $password, $database);
$sql = "Insert into warzywa(Nazwa, Data_spozycia, Cena) values('$nazwa', '$data', '$cena')";

if($conn->errno){
    echo "Błąd połączenia z bazą danych";
}else{
    echo "Połączono z bazą danych</br>";
    $result=$conn->query($sql);
    if($result){
        echo "Dodano warzywo: ".$nazwa.", o dacie spożycia: ".$data." i o cenie: ".$cena."</br>";
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