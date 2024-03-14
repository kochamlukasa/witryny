<?php
        function sprawdz(){
            $litera = $_POST['litera'];
            echo "Litera = ".$litera;
        }
        ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Krzyzowka</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>

<body>
    <div id="container">
    <h4>Jaki to wyraz ?</h4>
    <fieldset id="f1">
    <label for="litera">Litera</label>
    <input type="text" id="litera" name="litera"></br>
    <label for="haslo">Hasło</label></br>
    <?php
    $haslo = $_POST['haslo'];
    $kategoria = $_POST['kategoria'];
    for($i=0;$i<strlen($haslo);$i++){
    ?>
    <input type="text" disabled id="has<?php echo $i;?>" name="has<?php echo $i;?>">
    <?php
    }
    ?></br>

    

    <label for="haslo">Zgaduje hasło: </label>
    <input type="text" id="zgadnij" name="zgadnij">
    <input type="submit" value="Sprawdzam" onclick="sprawdz()">
    <p id="proby">Ilosc prób: 3</p>
    </fieldset>   
</div>

</body>


<script>
        /*function getLetter(){
            var litera = document.getElementById('litera').value;
            console.log(litera);
        }*/
        var iloscProb=3;

        function sprawdz(){
            var litera = document.getElementById('litera').value;
            let hasloJ = "";
            hasloJ = <?php echo json_encode($_POST['haslo']);?>;
            console.log(litera);
            var check=false;
            for(let i=0;i<hasloJ.length;i++){
                if(hasloJ[i]==litera) {
                    check=true;
                    var has='has'+i;
                    document.getElementById(has).value = litera;
                }
            }
            if(check){
                document.getElementById('proby').innerHTML = "Ilosc prób: " + iloscProb;
                

            }else{
                iloscProb=iloscProb-1;
                document.getElementById('proby').innerHTML = "Ilosc prób: " +iloscProb;
            }


        }
    </script>

</html>