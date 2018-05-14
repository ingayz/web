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
    <title>Alcaldía El Hatillo</title>
    <?php
    include "links.html";
    include "scripts.html";
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style>
    p {
    color: #fff;
    }
    .body{
        background-image: url("img/Fondos/mosaico1.jpg");
    }
</style>
</head>
<body class="body">    
        <div class="container-fluid">
            <div class="row"><!--Logo-->
                <div class="col-md-2">
                    <br>
                    <img src="img/logos/el-hatillo-largo.png" alt="">
                </div><!--logo col-md-4-->
                <div class="col-md-10"><!--menu-->
                <br>
                    <?php include "menu_b.php"; ?>
                </div><!--menu col-md-8-->
            </div><!--row Logo y menu-->
            <div class="row"><!--Carousel-->
            <div class="contenedor">
                <!--img src="img/colores_admon.png"-->
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
                            <?php foreach($model as $row): ?>
                            <div class="item">
                                <img src="admin/uploads/<?php echo $row['foto']; ?>" alt="...">
                                    <div class="carousel-caption">
                                        <h3><?php echo $row['titulo']; ?></h3>
                                    </div>
                            </div>
                            <?php endforeach;?>
                            <!--div class="item">
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
                            </div-->

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
            </div><!--row-->
            <!--img src="img/colores_admon.png"-->
            </div><!--contenedor-->
            
                <!--Fin Carousel-->
            </div><!--row Carousel-->

            <div class="row"><!--Dependencias-->
                <div align="center">
                  <?php include "dependencias.php"; ?>
                    </div>
            </div><!--row Dependencias-->
        </div><!--container-fluid-->
    
</body>
</html>