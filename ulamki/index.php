<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Ułamki</title>
</head>
<body>
    <h3>Działania na ułamkach</h3> 
    <div id="pole_wyboru">
        <label for="operation">Wybierz operację:</label>
        <select id="operation" name="operation" onchange="changeImages()">
            <option value="add">Dodawanie</option>
            <option value="subtract">Odejmowanie</option>
            <option value="multiply">Mnożenie</option>
            <option value="divide">Dzielenie</option>
        </select>
    </div>
    <div id="rownanie">
        <div id="u1">
            <input type="text" class="ul" name="l1" id="l1">
            <hr></hr>
            <input type="text" class="ul" name="m1" id="m1">
        </div>  

        <div id="znak">
            <img id="operationImg" src="plus.png">
        </div>

        <div id="u2">
            <input type="text" class="ul" name="l2" id="l2">
            <hr></hr>
            <input type="text" class="ul" name="m2" id="m2">
        </div>  

        <div id="znak">
            <img src="equalsign.png" onmousedown="oblicz()">
        </div>

        <div id="cal">
            <input type="text" id="ucal" name='c'>
        </div>
        <div id="u2">
            <input type="text" class="ul" name="lc" id="lc">
            <hr></hr>
            <input type="text" class="ul" name="mc" id="mc">
        </div>
        <script>
            function NWD1(a, b){
                while(a!=b){
                    if(a>b) a=a-b; else b=b-a;
                }
                return a;
            }

            function oblicz(){
                var l1 = document.getElementById('l1').value;
                var l2 = document.getElementById('l2').value;
                var m1 = document.getElementById('m1').value;
                var m2 = document.getElementById('m2').value;
                l1=parseInt(l1);
                l2=parseInt(l2);
                m1=parseInt(m1);
                m2=parseInt(m2);

                var nwd = NWD1(m1,m2);
                var nww = (m1*m2)/nwd;

                var lp1=(nww/m1)*l1;
                var lp2=(nww/m2)*l2;
                var lpc;

                var operation = document.getElementById('operation').value;

                switch (operation) {
                    case "add":
                        lpc = lp1 + lp2;
                        break;
                    case "subtract":
                        lpc = lp1 - lp2;
                        break;
                    case "multiply":
                        lpc = lp1 * lp2;
                        nww = m1 * m2;
                        break;
                    case "divide":
                            if (l2 === 0) {
                        alert("Nie można dzielić przez zero!");
                        return;
                    }
                    lpc = l1 * m2;
                    nww = m1 * l2;

                        break;
                    default:
                        alert("Nieznana operacja!");
                        return;
                }

                if(lpc>nww){
                    var calosc = parseInt(lpc/nww);
                    document.getElementById("ucal").value = calosc;
                    document.getElementById("lc").value = lpc-calosc*nww;
                    document.getElementById("mc").value = nww;
                } else {
                    document.getElementById("ucal").value = "";
                    document.getElementById("lc").value = lpc;
                    document.getElementById("mc").value = nww;
                }
            }

            function changeImages() {
                var operation = document.getElementById('operation').value;
                var operationImg = document.getElementById('operationImg');

                switch (operation) {
                    case "add":
                        operationImg.src = "plus.png";
                        break;
                    case "subtract":
                        operationImg.src = "minus.png";
                        break;
                    case "multiply":
                        operationImg.src = "multiply.png";
                        break;
                    case "divide":
                        operationImg.src = "division.png";
                        break;
                    default:
                        operationImg.src = "";
                        break;
                }
            }
        </script>
    </div>
</body>
</html>