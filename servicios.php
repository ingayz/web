<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alcaldía El Hatillo</title>
    <link href="img/logo1.png" rel="icon">
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
        p {
            color: #000;
        }

        #servicios{
            float:left;
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
        <br>
        <div id="servicios" class="row"><!--Pago en Linea-->
            <div class="col-sm-6 col-md-4"><!--Pago en Linea-->
                <div class="thumbnail">
                    <img src="img/pago en linea.jpg" alt="...">
                    <div class="caption">
                        <h3>Pago en Linea</h3>
                        <p>El sistema de pago en linea le ofrece la posibilidad de pagar sus impuestos municipales desde la comidad de su hogar u ofinica.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                    </div><!--caption-->
                </div><!--thumbnail-->
            </div><!--col-sm-6 col-md-4-->
            
            <div class="col-sm-6 col-md-4"><!--Tramites-->
                <div class="thumbnail">
                    <img src="img/pago en linea.jpg" alt="...">
                    <div class="caption">
                        <h3>Tramites</h3>
                        <p>El sistema de tramites le ofrece la posibilidad de revisar los recaudos que debe consignar, asi como tambien descargar la planilla correspondientes desde la comidad de su hogar u ofinica.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                    </div><!--caption-->
                </div><!--thumbnail-->
            </div><!--col-sm-6 col-md-4-->
        </div><<!--row Tramites-->
        <div class="dependencias">
            <?php include "dependencias.php"; ?>
        </div><!--dependencias-->
    </div><!--container-fluid-->
    
</body>
</html>