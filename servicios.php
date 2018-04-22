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

        .alcaldia{
            margin-left:auto;
            margin-right:auto;
            margin-top:20%;
            margin-bottom:10%;
        }

    </style>
</head>
<body class="cuerpo">
    <div class="container-fluid">
            <?php 
            include "menu_b.php"; 
            ?>
        <div class="alcaldia" align="center">  
            
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/logo1.png" alt="...">
                            <div class="caption">
                                <h3>Tramites</h3>
                                <p>Averigue los Recaudos que necesita desde la comodidad de su casa</p>
                                <p><a href="#" class="btn btn-primary" role="button">Ingresa</a>
                            </div><!--caption-->
                    </div><!--thumbnail-->
                </div><!--col-sm-4 col-md-4-->
            

            
                <div class="col-sm-4 col-md-4">
                    <div class="thumbnail">
                        <img src="img/pago en linea.jpg" alt="...">
                            <div class="caption">
                                <h3>Pago en Linea</h3>
                                <p>Pague Sus Impuestos Municipales desde la comodidad de su casa</p>
                                <p><a href="http://190.153.52.140:3958/AppWebHatillo/jsp/" class="btn btn-primary" role="button">Ingresa</a>
                            </div><!--caption-->
                    </div><!--thumbnail-->
                </div><!--col-sm-6 col-md-4-->
            
        </div><!--alcaldia-->
        
    </div><!--container-fluid-->
</body>
</html>