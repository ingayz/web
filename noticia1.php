<?php
include 'admin/cbd.php';
$titulo = $_GET["titulo"];
$foto = $_GET["foto"];
$noticia = $_GET["noticia"];

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

        .panel-default{
            width:50%;
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

        p {
            color: #000;
        }
    </style>
</head>
<body style="background: rgb(2, 0, 146)">
    <div class="container-fluid">
    <div class="row"><!--Logo-->
                <div class="col-md-1">
                    <br>
                    <img src="img/logo1.png" alt="">
                </div><!--logo col-md-4-->
                <div class="col-md-11"><!--menu-->
                <br>
                    <?php include "menu_b.php"; ?>
                </div><!--menu col-md-8-->
      </div><!--row Logo y menu-->
            <div class="alcaldia" align="center">  
        <br id="vision" >
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><?php echo $titulo; ?></h3>
                </div>
                <div class="panel-body">
                    <img src="admin/uploads/<?php echo $foto; ?>" class="img-fluid" alt="">
                    <p><?php echo $noticia; ?></p>
                </div>
            </div><!--Mision-->
            
        </div><!--alcaldia-->
        <div class="row"><!--Dependencias-->
            <div align="center">
              <?php include "dependencias.php"; ?>
                </div>
        </div><!--row Dependencias-->
    </div><!--container-fluid-->
    
</body>
</html>