<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Wycena</title>
    <link href="style.css" rel="stylesheet" type="text/css"/> 
</head>

<body>
<div id="container">    
<h2>Podsumowanie zamówienia </h2></br>

<?php 

/*var_dump($_POST['dlugosc']);
var_dump($_POST['srednica']);
var_dump($_POST['grubosc']);
var_dump($_POST['powierzchnia']);

var_dump($_POST['sp']);
var_dump($_POST['to']);
var_dump($_POST['fr']);
var_dump($_POST['ml']);

var_dump($_POST['mater']);

var_dump($_POST['termin']);

var_dump($_POST['opis']);*/

$host = 'localhost';
$user='root';
$password='';
$database = 'zakład4tip';



$conn = new mysqli($host, $user, $password, $database);

$cenaCalosc=0;
if($result=$conn->connect_errno){
    echo "1 nie";
}else{
   // echo "2 tak";
    if(isset($_POST['sp']) && $_POST['mater']=='stal') {
    $dlugosc = $_POST['dlugosc'];
    $sql = "select opis, cena from cennik where opis = 'spawanie stali'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
   // echo "Usługa: " .$row['opis']." Cena: ".$row['cena']."</br>";
        $cenaJedn=$row['cena'];
    }
   // echo "Cena jedno spawania stali = ".$cenaJedn;
    $cenaCalosc = $cenaCalosc+$_POST['dlugosc']*$cenaJedn;
    echo "</br>Cena za usługę spawania stali =".$cenaCalosc." zł</br>";
    echo "Przy długości ".$_POST['dlugosc']."cm";
}else if (isset($_POST['sp']) && $_POST['mater']=='aluminium') {
    $dlugosc = $_POST['dlugosc'];
    $sql = "select opis, cena from cennik where opis = 'spawanie aluminium'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
       // echo "Usługa: " .$row['opis']." Cena: ".$row['cena']."</br>";
        $cenaJedn=$row['cena'];
    }
   // echo "Cena jedno spawania stali = ".$cenaJedn;
    $cenaCalosc = $cenaCalosc+$_POST['dlugosc']*$cenaJedn;
    echo "</br>Cena za usługę spawania aluminium =".$cenaCalosc." zł</br>";
    echo "Przy długości ".$_POST['dlugosc']."cm";
}




else if(isset($_POST['to']) && $_POST['mater']=='stal') {
     $srednica = $_POST['srednica'];
     $sql = "select opis, cena from cennik where opis = 'toczenie stali'";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()){
    // echo "Usługa: " .$row['opis']." Cena: ".$row['cena']."</br>";
         $cenaJedn=$row['cena'];
     }
    // echo "Cena jedno spawania stali = ".$cenaJedn;
     $cenaCalosc = $cenaCalosc+$_POST['srednica']*$cenaJedn;
     echo "</br>Cena za usługę spawania stali =".$cenaCalosc." zł</br>";
     echo "Przy srednica ".$_POST['srednica']."cm";
 }else if (isset($_POST['to']) && $_POST['mater']=='aluminium') {
     $srednica = $_POST['srednica'];
     $sql = "select opis, cena from cennik where opis = 'toczenie aluminium'";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()){
        // echo "Usługa: " .$row['opis']." Cena: ".$row['cena']."</br>";
         $cenaJedn=$row['cena'];
     }
    // echo "Cena jedno spawania stali = ".$cenaJedn;
     $cenaCalosc = $cenaCalosc+$_POST['srednica']*$cenaJedn;
     echo "</br>Cena za usługę toczenie aluminium =".$cenaCalosc." zł</br>";
     echo "Przy srednica ".$_POST['srednica']."cm";
 }






else if(isset($_POST['fr']) && $_POST['mater']=='stal') {
     $grubosc = $_POST['grubosc'];
     $sql = "select opis, cena from cennik where opis = 'frezowanie stali'";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()){
    // echo "Usługa: " .$row['opis']." Cena: ".$row['cena']."</br>";
         $cenaJedn=$row['cena'];
     }
    // echo "Cena jedno spawania stali = ".$cenaJedn;
     $cenaCalosc = $cenaCalosc+$_POST['grubosc']*$cenaJedn;
     echo "</br>Cena za usługę frezowanie stali =".$cenaCalosc." zł</br>";
     echo "Przy grubosc ".$_POST['grubosc']."cm";
 }else if (isset($_POST['fr']) && $_POST['mater']=='aluminium') {
     $grubosc = $_POST['grubosc'];
     $sql = "select opis, cena from cennik where opis = 'frezowanie aluminium'";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()){
        // echo "Usługa: " .$row['opis']." Cena: ".$row['cena']."</br>";
         $cenaJedn=$row['cena'];
     }
    // echo "Cena jedno spawania stali = ".$cenaJedn;
     $cenaCalosc = $cenaCalosc+$_POST['grubosc']*$cenaJedn;
     echo "</br>Cena za usługę frezowanie aluminium =".$cenaCalosc." zł</br>";
     echo "Przy grubosc ".$_POST['grubosc']."cm";
 }








else if(isset($_POST['ml']) && $_POST['mater']=='stal') {
     $dlugosc = $_POST['powierzchnia'];
     $sql = "select opis, cena from cennik where opis = 'malowanie stali'";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()){
    // echo "Usługa: " .$row['opis']." Cena: ".$row['cena']."</br>";
         $cenaJedn=$row['cena'];
     }
    // echo "Cena jedno spawania stali = ".$cenaJedn;
     $cenaCalosc = $cenaCalosc+$_POST['powierzchnia']*$cenaJedn;
     echo "</br>Cena za usługę malowanie stali =".$cenaCalosc." zł</br>";
     echo "Przy powierzchnia ".$_POST['powierzchnia']."cm";
 }else if (isset($_POST['ml']) && $_POST['mater']=='aluminium') {
     $dlugosc = $_POST['powierzchnia'];
     $sql = "select opis, cena from cennik where opis = 'malowanie aluminium'";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()){
        // echo "Usługa: " .$row['opis']." Cena: ".$row['cena']."</br>";
         $cenaJedn=$row['cena'];
     }
    // echo "Cena jedno spawania stali = ".$cenaJedn;
     $cenaCalosc = $cenaCalosc+$_POST['powierzchnia']*$cenaJedn;
     echo "</br>Cena za usługę malowanie aluminium =".$cenaCalosc." zł</br>";
     echo "Przy powierzchnia ".$_POST['powierzchnia']."cm";
 }
}




$conn->close();


?>
</div>
</body>


</html>