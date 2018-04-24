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
                    <h3 class="panel-title">Alcaldía El Hatillo</h3>
                </div>
                <div class="panel-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.9582077061964!2d-66.82834268564332!3d10.424891192560642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2af79478d69e97%3A0x4d47f882a7e661ef!2sAlcaldia+de+El+Hatillo!5e0!3m2!1ses-419!2sve!4v1521948548146" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <p><h3>Dirección</h3>
                    <address> Calle Escalona frente a la, Calle Bolivar las Marias, Caracas 1083, Miranda</address></p>
                    <h3>Número Telefonico</h3>
                    <p><a href="tel:+155895548855">0212-963.49.75</a></p>
                    <h3>Email</h3>
                    <p><a href="mailto:alejandro.amaya2006@gmail.com">atencionalciudadano@alcaldiaelhatillo.gob.ve</a></p>
                </div>
            </div><!--Mision-->
            
        </div><!--alcaldia-->
        <div class="row"><!--Dependencias-->
            <?php include "dependencias.php"; ?>
        </div><!--row Dependencias-->
    </div><!--container-fluid-->
    
</body>
</html>