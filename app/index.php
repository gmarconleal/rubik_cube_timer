<!DOCTYPE html>
<html lang="pt-br">
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<title>Cronômetro cubo de Rubik</title>  
<link rel="shortcut icon" href="img/cubo.png"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/design.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
</head>
<body style="font-family: arial;">

<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand" >
                    <div align="center">
                    <a href="index.php">
                       <img src="img/cubo.png" height="30%" width="30%">
                       </div>
                    </a>
                </li>
                <li>
                    <a href="index.php">Cronômetro</a>
                </li>
                <li>
                    <a href="story.php">O que é um cubo de Rubik?</a>
                </li>
                <li>
                    <a href="media.php">Média de resolução</a>
                </li>
                <li>
                    <a href="record.php">Recordistas</a>
                </li>
                <li>
                    <a href="sobre.php">Sobre nós</a>
                </li>
               
               
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <div class="esconde">
        <a href="#menu-toggle" class="btn btn-default" style="color:white; background-color:black;font-family:hero;" id="menu-toggle" ><</a></div>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="texto" align="center">
                        <h1>Cronômetro</h1>
                        <p>Olá, como vai? Esse site é para você que deseja um cronometro para testar suas habilidades com o cubo de Rubik (ou cubo mágico).</p>
                        <p>você também pode olhar outras funções como a média de resolução e os Recordistas!</p>                      
                       
                        <form name="form_main">
  <div class="cel" > 
  
    <span id="minute" style="position:relative;" >00</span>:<span id="second" style="position:relative">00</span>:<span id="millisecond"style="position:relative">000</span>
  </div>

  <br>

  <button type="button"  class="btn btn-default" onclick="start()">COMEÇAR</button>
  <button type="button" class="btn btn-default" onclick="pause()">PAUSAR</button>
  <button type="button" class="btn btn-default" onclick="{
minute = 0;
second = 0;
millisecond = 0;

document.getElementById('minute').innerText = '00';
document.getElementById('second').innerText = '00';
document.getElementById('millisecond').innerText = '000';
}">REINICIAR</button>

  
</form><br>

<div class="pc">
Existem alguns atalhos para facilitar o uso do cronometro:
<br><br>
<div align="center">
<img src="img/q.png" height="10%" width="10%" ><p>Começar</p>
<img src="img/w.png" height="10%" width="10%" ><p>Pausar</p>
<img src="img/E.png" height="10%" width="10%" ><p>Reiniciar <br>
</div>
                    </div>
                </div>
            </div>
        </div>

</div>

<script type="text/javascript">

$(document).on('keydown', function(event) {
if(event.keyCode === 69) {
   reset();
}
});

$(document).on('keydown', function(event) {
if(event.keyCode === 81) {
    start();
}
});

$(document).on('keydown', function(event) {
if(event.keyCode === 87) {
    pause();
}
});





"use strict";


let minute = 0;
let second = 0;
let millisecond = 0;

let cron;

document.form_main.start.onclick = () => start();
document.form_main.pause.onclick = () => pause();
document.form_main.reset.onclick = () => reset();

function start() {
  pause();
  cron = setInterval(() => { timer(); }, 10);
}

function pause() {
  clearInterval(cron);
}

function reset() {

  minute = 0;
  second = 0;
  millisecond = 0;
  
  document.getElementById('minute').innerText = '00';
  document.getElementById('second').innerText = '00';
  document.getElementById('millisecond').innerText = '000';
}

function timer() {
  if ((millisecond += 10) == 1000) {
    millisecond = 0;
    second++;
  }
  if (second == 60) {
    second = 0;
    minute++;
  }
  if (minute == 60) {
    minute = 0;
    
  }

  document.getElementById('minute').innerText = returnData(minute);
  document.getElementById('second').innerText = returnData(second);
  document.getElementById('millisecond').innerText = returnData(millisecond);
}

function returnData(input) {
  return input > 10 ? input : `0${input}`
}

</script>

    <!-- /#wrapper -->
     <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>


</html>