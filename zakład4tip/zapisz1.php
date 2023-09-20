<!DOCTYPE html>
<html>
    <head>
     <meta charset="utf-8"/>
     <title>Zapisz do DB</title>
     <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
        <body>
        <div id="container">
            <?php
            //var_dump($_POST['imie']);
            //var_dump($_POST['nazwisko']);
            //var_dump($_POST['desc']);





if(($_POST['opis']!="")  && ($_POST['data']!="") && ($_POST['cena']!="") && ($_POST['imie']!="") && ($_POST['nazwisko']!="") && ($_POST['imie1']!="") && ($_POST['nazwisko1']!="")){
    $opis = $_POST['opis'];
    $data = $_POST['data'];
    $cena = $_POST['cena'];
    $imie_k = $_POST['imie'];
    $nazwisko_k = $_POST['nazwisko'];
    $imie_p = $_POST['imie1'];
    $nazwisko_p = $_POST['nazwisko1'];
    

   /*         var_dump($opis);
            var_dump($data);
            var_dump($cena);
            var_dump($idklient);*/
    $host = 'localhost';
    $user='root';
    $password = '';
    $database = 'zakład4tip';
    $conn = new mysqli($host, $user, $password, $database);
    
  //  echo "</br>Imie: ".$imie."";
//echo "</br>Nazwisko: </br>".$nazwisko."";
  //  echo "</br>Telefon: ".$telefon."";

/* $idKlient = "SELECT idKlient FROM klienci WHERE imie='$imie1' AND nazwisko='$nazwisko1'";
 var_dump($idklient);
 var_dump($imie1);
 var_dump($nazwisko1);
*/
    $sql = "INSERT INTO uslugi(opis, data, cena, idKlient, idPracownik)VALUES('$opis', '$data', '$cena', (SELECT idKlient FROM klienci WHERE imie='$imie_k' AND nazwisko='$nazwisko_k'), (SELECT idPracownik FROM pracownicy WHERE imie1='$imie_p' AND nazwisko1='$nazwisko_p')";
    if($conn->errno){
        echo "Błąd połączenia z bazą danych</br>";
    }else{
        echo "</br>Połączono z bazą danych</br>";
        $result = $conn->query($sql);
        if($result){
            echo "Zapisano klienta do bazy danych";
    

        }else{
            echo "Błąd w zapisie danych";
        }
    }

    $conn->close();
}else{
                echo "Złe";}
            ?>
        
        </div>

</body>
</html>