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
            <div class="container">
                <div class="row">
                <div class="texto" align="center">
                <h1>Sobre nós</h1>
                </div>
                    <div class="texto" align="justify">
                        
                        <p style="text-indent:2em;"> Esse site foi desenvolvido para você, que gosto do cubo de Rubik, mais conhecido como
                        cubo mágico.Nosso site tem vários tipos de informações sobre o cubo mágico, desde sua criação a Recordistas mundiais.
                        O ideia de cria-lo surgiu pois eu estava interessado no cubo de Rubik, havia acabado de comprar um e queria tentar
                        resolve-lo o mais rapido possível. Foi quando pensei:"Por que não fazer um site que me ajudasse com essa tarefa?" então
                        coloquei a ideia em prática. O site demorou um tempo para ser feito devido ao estudos, mas nas férias pude me dedicar totalmente
                        a ele. Além de tudo o site também serviu como um treino de programação para treinar css e javascript. Após essa pequena história, espero que aproveite o site :)
                         </p>
                  

                      
                        </div>
                </div>
            </div>
        </div>


        <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>


</html>