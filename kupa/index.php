<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Krzyzowka</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div id="container">
    <h4>Krzyżówka</h4>
    <form method="POST" action="gra.php">
    <fieldset id="f1">
    <legend>Jakie to hasło ?</legend>
    <label for="haslo">Hasło</label>
    <input type="password" id="haslo" name="haslo" value="<?php echo $_SESSION['haslo'];?>">
    <label for="kategoria">Kategoria</label>
    <input type="text" id="kategoria" name="kategoria" value="<?php echo $_SESSION['kategoria'];?>">
    <input type="submit" value="Rozpocznij">
</form>
</div>

</fieldset>

</body>
<?php
    if(isset($_POST{'btn'})){
        echo "Importowanie danych";
    }else{
        echo "Importowanie ....";
    }
    require_once("connection.php");
    $wartosc_losowa = rand(0,25);
    $conn = new mysqli($host,$user,$password,$database);
    $sql = "select * from tabela where id = '$wartowsc_losowa'";
    $result = $conn ->query($sql);
    while($row=$result fetch_assoc()){
        $_SESSION['haaslo'] = $row['haslo'];
        $_SESSION['kategoria'] = $row['kategoria'];
        echo "Wybrano hasło: ".$_SESSION['haslo']." w kategorii: ".$_SESSION['lategoria']."<?br>";
    }

    $conn_> close();


?>

</html>