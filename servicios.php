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
            color: #000;
        }

        #servicios{
            float:left;
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
        <br>
        <div id="servicios" class="row"><!--Pago en Linea-->
            <div class="col-sm-6 col-md-4"><!--Pago en Linea-->
                <div class="thumbnail">
                    <div align="center"><img src="img/pel.jpg" alt="...">
                    </div>
                    <div class="caption">
                        <h3>Pago en Linea</h3>
                        <p>El sistema de pago en linea le ofrece la posibilidad de pagar sus impuestos municipales desde la comidad de su hogar u ofinica.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                    </div><!--caption-->
              </div><!--thumbnail-->
            </div><!--col-sm-6 col-md-4-->
            
            <div class="col-sm-6 col-md-4"><!--Tramites-->
                <div class="thumbnail">
                    <div align="center"><img src="img/tramites.jpg" alt="...">
                    </div>
                    <div class="caption">
                        <h3>Tramites</h3>
                        <p>El sistema de tramites le ofrece la posibilidad de revisar los recaudos que debe consignar, asi como tambien descargar la planilla correspondientes desde la comidad de su hogar u ofinica.</p>
                        <p><a href="#" class="btn btn-primary" role="button">Button</a></p>
                    </div><!--caption-->
              </div><!--thumbnail-->
            </div><!--col-sm-6 col-md-4-->
        </div><!--row Tramites-->
        <div class="dependencias">
            <div align="center">
              <?php include "dependencias.php"; ?>
                </div>
        </div><!--dependencias-->
    </div>
    <div align="center">
      <!--container-fluid-->
      
    </div>
</body>
</html>