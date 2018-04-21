<?php
include 'admin/cbd.php';
$sql = "SELECT * FROM noticias ORDER BY id_noticia DESC LIMIT 5";
$query = $base->prepare($sql);
$query->execute();
$model = array();
while($rows = $query->fetch())
{
    $model[] = $rows;
}
?>
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
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/style9.css" />
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

        .dependencias{
            /*background:#dbdb00;*/
            margin-top:10px;
            height:auto;
        }

        .dependencias > img{
            width:10%;
        }

        .dependencias > img:hover{
            filter: sepia(60%);
        }

        .row > div > img{
            width:20%;
            
        }

        .noticias{
            color:#fff;
            font-size:24px;
        }

    </style>
</head>
<body class="cuerpo">
    <div class="container-fluid">
        
            <?php 
            include "menu_b.php"; 
            ?>
         
        <div class="carousel">
            <!--Carousel-->
           
            <div class="contenedor">
            <img src="img/colores_admon.png">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="img/3.jpg" alt="...">
                            <div class="carousel-caption">
                                <!--h3>HOLA</h3>
                                <p>Sera que por fin</p-->
                            </div>
                    </div>

                    <div class="item">
                        <img src="img/1.jpg" alt="...">
                            <div class="carousel-caption">
                                <h3>ALCALDÍA EJECUTA JORNADA DE LIMPIEZA EN EL MUNICIPIO</h3>
    
                            </div>
                    </div>

                    <div class="item">
                        <img src="img/2.jpg" alt="...">
                            <div class="carousel-caption">
                                <h3>CON EL LEMA HAZ LO POSIBLE SE INICIA LA JORNADA DE RECAUDACIÓN</h3>
    
                            </div>
                    </div>

                    <div class="item">
                        <img src="img/3.jpg" alt="...">
                            <div class="carousel-caption">
                                <h3>ENCENDIDO DE LA PLAZA BOLIVAR</h3>
    
                            </div>
                    </div>

                    <div class="item">
                        <img src="img/4.jpg" alt="...">
                            <div class="carousel-caption">
                                <h3>POLICIA EL HATILLO INAGURA SALON DE PRACTICA DE TIRO</h3>
    
                            </div>
                    </div>

                    <!--   
                    <?php foreach($model as $row): ?>
                    <div class="item">
                    <img src="admin/uploads/<?php echo $row['foto']; ?>" alt="...">
                    <div class="carousel-caption">
                    <h3><?php echo $row['titulo']; ?></h3>
                    <p>Sera que por fin</p>
                    </div>
                    <?php endforeach;?>
                    -->
            </div>


                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
            </div>
            <img src="img/colores_admon.png">
            </div>
            
                <!--Fin Carousel-->
        </div><!--carousel-->
        <div class="container">
            <div class="copyright">
                <MARQUEE class="noticias" style="border:RED 3px SOLID" scrollamount="3"> NOTICIAS DESTACADAS - <?php foreach($model as $row): ?> <?php echo $row['titulo']; ?> - -<?php endforeach;?>  </MARQUEE>
            </div>
        <div class="dependencias" align="center">
            <img src="img/polihatillo.png" alt="">
            <img src="img/proteccion_civil.png" alt="">
            <img src="img/suhat.png" alt="">
            <img src="img/nna.png" alt="">
        </div><!--dependencias-->

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