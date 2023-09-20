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





if(($_POST['opis']!="")  && ($_POST['data']!="") && ($_POST['cena']!="") && ($_POST['klient']!="") && ($_POST['pracownik']!="") ){    /* && ($_POST['imie1']!="") && ($_POST['nazwisko1']!="") */
    $opis = $_POST['opis'];
    $data = $_POST['data'];
    $cena = $_POST['cena'];
    $klient = $_POST['klient'];
    $pracownik = $_POST['pracownik'];
  //$imie1 = $_POST['imie1'];
  // $nazwisko1 = $_POST['nazwisko1'];
    

 //  var_dump($imie1);
  // var_dump($nazwisko1);
           // var_dump($data);
           // var_dump($cena);
           // var_dump($idklient);
    $host = 'localhost';
    $user='root';
    $password = '';
    $database = 'zakład4tip';
    $conn = new mysqli($host, $user, $password, $database);

    $nameParts1 = explode(" ", $klient);
    $imieKlienta = $nameParts1[0];
    $nazwiskoKlienta = $nameParts1[1];

    $nameParts2 = explode(" ", $pracownik);
    $imiePracownika = $nameParts2[0];
    $nazwiskoPracownika = $nameParts2[1];
    
    $sql2 = "SELECT idKlient FROM klienci WHERE imie='$imieKlienta' AND nazwisko='$nazwiskoKlienta'"
    $sql3 = "SELECT idPracownik FROM pracownicy WHERE imie='$imiePracownika' AND nazwisko='$nazwiskoPracownika'"
    
  //  echo "</br>Imie: ".$imie."";
//echo "</br>Nazwisko: </br>".$nazwisko."";
  //  echo "</br>Telefon: ".$telefon."";

/* $idKlient = "SELECT idKlient FROM klienci WHERE imie='$imie1' AND nazwisko='$nazwisko1'";
 var_dump($idklient);
 var_dump($imie1);
 var_dump($nazwisko1);
*/
    $sql = "INSERT INTO uslugi(opis, data, cena, idKlient, idPracownik)VALUES('$opis', '$data', '$cena', '$idKlienta', '$idPracownika')";
    if($conn->errno){
        echo "Błąd połączenia z bazą danych</br>";
    }else{
        echo "</br>Połączono z bazą danych</br>";
        $result = $conn->query($sql);
        $result2 = $conn->query($sql2);
        $result3 = $conn->query($sql3);
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