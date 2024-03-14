<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Zegar binarny</title>
    <link href="style.css" rel="stylesheet" type="text/css">


<script>

function zegar(){

var today = new Date();
var hour = today.getHours();
var minute = today.getMinutes();
var second = today.getSeconds();
if(hour<10) hour='0'+hour;
if(minute<10) minute='0'+minute;
if(second<10) second='0'+second;

var tab1=[0,0,0,0];
var dsecond = Math.floor(second/10);    
var i=0;
while(dsecond>=1){
    tab1[i++]=Math.floor(dsecond%2);
    dsecond=dsecond/2;
}

var tab2=[0,0,0,0];
var jsecond = Math.floor(second%10)
var i=0;
while(jsecond>=1){
    tab2[i++]=Math.floor(jsecond%2);
    jsecond=jsecond/2;
}

document.getElementById('today').innerHTML= hour+":"+minute+":"+second;
document.getElementById('s1').innerHTML = tab1[0]+""+tab2[0];
document.getElementById('s2').innerHTML = tab1[1]+""+tab2[1];
document.getElementById('s4').innerHTML = tab1[2]+""+tab2[2];
document.getElementById('s8').innerHTML = tab1[3]+""+tab2[3];


const c1 = document.getElementById("ds1");
const ctx1 = c1.getContext("2d");
ctx1.fillRect(0,0,10,10)
if(tab1[0]==0) ctx1.fillStyle = "white"; else ctx1.fillStyle = "black";

const c2 = document.getElementById("js1");
const ctx2 = c2.getContext("2d");
ctx2.fillRect(0,0,10,10)
if(tab2[0]==0) ctx2.fillStyle = "white"; else ctx2.fillStyle = "black"; 


const c3 = document.getElementById("ds2");
const ctx3 = c3.getContext("2d");
ctx3.fillRect(0,0,10,10)
if(tab1[1]==0) ctx3.fillStyle = "white"; else ctx3.fillStyle = "black";

const c4 = document.getElementById("js2");
const ctx4 = c4.getContext("2d");
ctx4.fillRect(0,0,10,10)
if(tab2[1]==0) ctx4.fillStyle = "white"; else ctx4.fillStyle = "black"; 


const c5 = document.getElementById("ds3");
const ctx5 = c5.getContext("2d");
ctx5.fillRect(0,0,10,10)
if(tab1[2]==0) ctx5.fillStyle = "white"; else ctx5.fillStyle = "black";

const c6 = document.getElementById("js3");
const ctx6 = c6.getContext("2d");
ctx6.fillRect(0,0,10,10)
if(tab2[2]==0) ctx6.fillStyle = "white"; else ctx6.fillStyle = "black"; 

const c7 = document.getElementById("ds4");
const ctx7 = c7.getContext("2d");
ctx7.fillRect(0,0,10,10)
if(tab1[3]==0) ctx7.fillStyle = "white"; else ctx7.fillStyle = "black";

const c8 = document.getElementById("js4");
const ctx8 = c8.getContext("2d");
ctx8.fillRect(0,0,10,10)
if(tab2[3]==0) ctx8.fillStyle = "white"; else ctx8.fillStyle = "black"; 
for (let i = 0; i < 4; i++) {
    tab1[i]=0;
    tab2[i]=0; 
}

setTimeout(zegar,1000);

}
</script>


</head>





<body onload="zegar();">
<h8>Zegar binarny</h8><br>
<h8 id="today"></h8>
<div id="second">

    <div id="s8">00</div>
    <div id="s4">00</div>
    <div id="s2">00</div>
    <div id="s1">00</div> 
    <canvas id="ds1" width="10" height="10" style="border:1px solid black"></canvas>
    <canvas id="js1" width="10" height="10" style="border:1px solid black"></canvas><br>

    <canvas id="ds2" width="10" height="10" style="border:1px solid black"></canvas>
    <canvas id="js2" width="10" height="10" style="border:1px solid black"></canvas><br>

    <canvas id="ds3" width="10" height="10" style="border:1px solid black"></canvas>
    <canvas id="js3" width="10" height="10" style="border:1px solid black"></canvas><br>


    <canvas id="ds4" width="10" height="10" style="border:1px solid black"></canvas>
    <canvas id="js4" width="10" height="10" style="border:1px solid black"></canvas><br>
</div>


</body>


</html>