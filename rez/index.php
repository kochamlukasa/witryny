<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
        #rezystor {
            width: 240px;
            height: 30px;
            background-color: #ccc;
            position: relative;
        }

        #pasek1, #pasek2, #mnoznik {
            width: 20px;
            height: 100%;
            position: absolute;
        }
      /*  static
relative
fixed
absolute
sticky*/

        #pasek1 {
            background-color: #000;
        }

        #pasek2{
            left: 80px;
            background-color: #000;
        }
        #pasek3{
            width: 20px;
            left: 160px;
    background-color: gold;
    display: inline-block;
    
            height: 100%;
            
        }
        #mnoznik {
            left: 240px;
            background-color: #000;
            
        }
    </style>
</head>
<body>
    <h1>Kalkulator kodów rezystorów</h1>
    
    <label for="p1">Pasek nr 1</label>
    <select id="p1" onchange="obliczRezystancje();">
        <option value="0">0 - czarny</option>
        <option value="1">1 - brązowy</option>
        <option value="2">2 - czerwony</option>
        <option value="3">3 - pomarańczowy</option>
        <option value="4">4 - żółty</option>
        <option value="5">5 - zielony</option>
        <option value="6">6 - niebieski</option>
        <option value="7">7 - fioletowy</option>
        <option value="8">8 - szary</option>
        <option value="9">9 - biały</option>
    </select><br>

    <label for="p2">Pasek nr 2</label>
    <select id="p2" onchange="obliczRezystancje();">
        <option value="0">0 - czarny</option>
        <option value="1">1 - brązowy</option>
        <option value="2">2 - czerwony</option>
        <option value="3">3 - pomarańczowy</option>
        <option value="4">4 - żółty</option>
        <option value="5">5 - zielony</option>
        <option value="6">6 - niebieski</option>
        <option value="7">7 - fioletowy</option>
        <option value="8">8 - szary</option>
        <option value="9">9 - biały</option>
    </select><br>

    <label for="mn">Mnożnik ‎ ‎  </label>
    <select id="mn" onchange="obliczRezystancje();">
        <option value="0">1 Ω - czarny</option>
        <option value="1">10 Ω - brązowy</option>
        <option value="2">100 Ω - czerwony</option>
        <option value="3">1 kΩ - pomarańczowy</option>
        <option value="4">10 kΩ - żółty</option>
        <option value="5">100 kΩ - zielony</option>
        <option value="6">1 MΩ - niebieski</option>
        <option value="7">10 MΩ - fioletowy</option>
        <option value="8">0.1 Ω - szary</option>
        <option value="9">0.01 Ω - biały</option>
    </select>

    <p id="wartosc">Rezystor ma wartość = ... Ω</p>

    <div id="rezystor">
        <div id="pasek1"></div>
        <div id="pasek2"></div>
        <div id="mnoznik"></div>
    </div>

    <script>
        function pobierzP1() {
            var p1 = document.getElementById('p1').value;
            return p1;
        }

        function pobierzP2() {
            var p2 = document.getElementById('p2').value;
            return p2;
        }

        function pobierzMn() {
            var mn = document.getElementById('mn').value;
            return mn;
        }

        function obliczRezystancje() {
            var p1 = pobierzP1();
            var p2 = pobierzP2();
            var mn = pobierzMn();
            var rezystancja = (parseInt(p1) * 10 + parseInt(p2)) * Math.pow(10, parseInt(mn));
            document.getElementById('wartosc').innerHTML = "Rezystor ma wartość = " + rezystancja + " Ohm";

            document.getElementById('pasek1').style.backgroundColor = kolorPaska(p1);
            document.getElementById('pasek2').style.backgroundColor = kolorPaska(p2);
            
            document.getElementById('mnoznik').style.backgroundColor = kolorPaska(mn);
        }

        function kolorPaska(kod) {
            var kolory = ['#000', '#800000', '#FF0000', '#FFA500', '#FFFF00', '#008000', '#0000FF', '#800080', '#808080', '#FFFFFF'];
            return kolory[parseInt(kod)];
        }

        
    </script>
</body>
</html>
