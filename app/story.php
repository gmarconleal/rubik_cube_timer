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
                <h1>O que é um cubo de rubik?</h1>
                </div>
                    <div class="texto" align="justify">
                        
                        <p style="text-indent:2em;">  O cubo Mágico, também conhecido como Cubo de Rubik, é um quebra-cabeça tridimensional, inventado pelo professor de arquitetura húngaro Ernő Rubik em 1974. Originalmente foi chamado de "Cubo Mágico" pelo seu inventor, mas o nome foi alterado pela Ideal Toys para "Cubo de Rubik" quando a empresa licenciou o brinquedo em 1980. Nesse mesmo ano, ganhou o prémio alemão do "Jogo do Ano" (Spiel des Jahres). Ernő Rubik demorou um mês para resolver o cubo pela primeira vez. O cubo de Rubik tornou-se um ícone da década de 1980, década em que foi mais difundido.</p>
                        <p style="text-indent:2em;">O cubo de Rubik é um cubo geralmente confeccionado em plástico e possui várias versões, sendo a versão 3x3x3 a mais comum, composta por 6 faces de 6 cores diferentes, geralmente com arestas de 56 mm cada. Outras versões menos conhecidas são o 2x2x2, 4x4x4 e 5x5x5.</p>
                        <div align="center"><img src="img/cubos.png" height="60%" width="60%" ><p align="center" style="font-size:80%">Diferente tipos de cubo de Rubik</p></div>
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