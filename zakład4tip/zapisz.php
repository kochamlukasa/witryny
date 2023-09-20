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





/if(($_POST['imie']!="")  && ($_POST['nazwisko']!="") && ($_POST['telefon']!="")){
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $telefon = $_POST['telefon'];

            var_dump($imie);
            var_dump($nazwisko);
            var_dump($telefon);
    $host = 'localhost';
    $user='root';
    $password = '';
    $database = 'zakład4tip';
    $conn = new mysqli($host, $user, $password, $database);
    
  //  echo "</br>Imie: ".$imie."";
//echo "</br>Nazwisko: </br>".$nazwisko."";
  //  echo "</br>Telefon: ".$telefon."";



    $sql = "INSERT INTO klienci(imie, nazwisko, telefon)VALUES('$imie', '$nazwisko', '$telefon')";
    if($conn->errno){
        echo "Błąd połączenia z bazą danych</br>";
    }else{
        echo "</br>Połączono z bazą danych</br>";
        $result = $conn->query($sql);
        if($result){
            echo "Zapisano klienta do bazy danych";
            echo "</br>Nowy klient o imieniu: ".$imie.", nazwisku: ".$nazwisko." i telefonie: ".$telefon.".";

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
