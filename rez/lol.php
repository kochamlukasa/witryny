<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Kalkulator</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <style>
        /* Dodane style dla kolorów */
        #p1 {
            color: black;
        }

        #p1 option[value="0"] {
            background-color: black;
            color: white;
        }

        #p1 option[value="1"] {
            background-color: brown;
        }

        #p1 option[value="2"] {
            background-color: red;
            color: white;
        }

        #p1 option[value="3"] {
            background-color: orange;
        }

        #p1 option[value="4"] {
            background-color: yellow;
        }

        #p1 option[value="5"] {
            background-color: green;
            color: white;
        }

        #p1 option[value="6"] {
            background-color: blue;
            color: white;
        }

        #p1 option[value="7"] {
            background-color: purple;
            color: white;
        }

        #p1 option[value="8"] {
            background-color: gray;
        }

        #p1 option[value="9"] {
            background-color: white;
            color: black;
        }
    </style>
</head>
<body>
    <h8>Kalkulator kodów rezystorów</h8></br>
    <label for="p1">Pasek nr 1</label>
    <select id="p1" onmouseup="obliczRezystancje();">
        <option value="0">0-czarny</option>
        <option value="1">1-brązowy</option>
        <option value="2">2-czerwony</option>
        <option value="3">3-pomarańczowy</option>
        <option value="4">4-żółty</option>
        <option value="5">5-zielony</option>
        <option value="6">6-niebieski</option>
        <option value="7">7-fioletowy</option>
        <option value="8">8-szary</option>
        <option value="9">9-biały</option>
    </select>
</body>
</html>
