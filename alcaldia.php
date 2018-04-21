<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alcaldìa el Hatillo</title>
    <link rel="stylesheet" href="css/estilos.css">
	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!--link rel="stylesheet" type="text/css" href="css/demo.css" /-->
    <!--link rel="stylesheet" type="text/css" href="css/style9.css" /-->
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css' />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script defer src="js/fontawesome-all.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        .cuerpo{
            background:rgb(2, 0, 146);
        }
        .container-fluid{
            margin-top: 30px;
            height: auto;
            width: 95%;
        }

        .panel-default>.panel-heading {
            color: #333;
            background-color: #005a92;
            border-color: #ddd;
        }

        .panel-title {
            margin-top: 0;
            margin-bottom: 0;
            font-size: 20px;
            color: #fff;
        }

        .panel-body {
            font-size: 20px;
        }

    </style>
</head>
<body class="cuerpo">
    <div class="container-fluid">
        
            <?php 
            include "menu_b.php"; 
            ?>
          
        <div class="carousel">
        <br><br><br><br><br>
        </div><!--carousel-->

        <div class="alcaldia" align="center">  
        <br id="vision" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">MISIÓN</h3>
                </div>
                <div class="panel-body">
                    Nuestra Misión Es Servir Con Vocación y Convicción a Los Hatillanos a Través De Una Gestión Transparante, Participativa e Innovadora Para Alcalzar Un Municipio Próspero y De Convivencia.
                </div>
            </div><!--Mision-->
            <br id="valores" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 id="vision" class="panel-title">VISIÓN</h3>
                </div>
                <div class="panel-body">
                Convertir al Municipio El Hatillo En Un Lugar Próspero y Seguro Para El Encuentro De Los Ciudadanos.
                </div>
            </div><!--Vision-->
            <br id="organigrama">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3  class="panel-title">VALORES</h3>
                </div>
                <div class="panel-body">
                Solidaridad, Humildad, Compromiso, Justicia, Institucionalidad, Honestidad, Respeto y Tolerancia.
                </div>
            </div><!--Valores-->
            <br  >
            <div  class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">ORGANIGRAMA</h3>
                </div>
                <div class="panel-body">
                    <img src="img/organigrama.png" alt="">
                </div>
            </div><!--Organigrama-->
        </div><!--alcaldia-->
        

        <div class="socials" align="right">
	<div>Visitenos en Nuestras Redes Sociales</div>
	<a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
	<a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
	<a href="#"><i class="fab fa-youtube-square fa-2x"></i></a>
	<a href="#"><i class="fab fa-instagram fa-2x"></i></a>
</div>
            </div>
    
    </div><!--container-fluid-->
</body>
</html>