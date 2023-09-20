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





if(($_POST['imie']!="")  && ($_POST['nazwisko']!="") && ($_POST['wiek']!="") && ($_POST['miasto']!="") && ($_POST['stanowisko']!="")){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $wiek = $_POST['wiek'];
    $miasto = $_POST['miasto'];
    $stanowisko = $_POST['stanowisko'];


       /*    var_dump($imie);
            var_dump($nazwisko);
            var_dump($wiek);
           var_dump($miasto);
            var_dump($stanowisko);*/

    $host = 'localhost';
    $user='root';
    $password = '';
    $database = 'zakład4tip';
    $conn = new mysqli($host, $user, $password, $database);
    
  //  echo "</br>Imie: ".$imie."";
//echo "</br>Nazwisko: </br>".$nazwisko."";
  //  echo "</br>Telefon: ".$telefon."";



    $sql = "INSERT INTO pracownicy(imie, nazwisko, wiek, miasto, stanowisko)VALUES('$imie', '$nazwisko', '$wiek', '$miasto', '$stanowisko')";
    if($conn->errno){
        echo "Błąd połączenia z bazą danych</br>";
    }else{
        echo "Połączono z bazą danych</br>";
        $result = $conn->query($sql);
        if($result){
            echo "Zapisano klienta do bazy danych";
            echo "Pomyślnie dodano pracownika o imieniu: ".$imie_p." i nazwisku: ".$nazwisko.".";

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
