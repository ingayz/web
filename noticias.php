<?php
include 'admin/cbd.php';

$sql = "SELECT * FROM noticias ORDER BY id_noticia DESC";
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
        <?php foreach($model as $row): ?>
            <div class="col-sm-6 col-md-4"><!--Pago en Linea-->
                <div class="thumbnail">
                    <img src="admin/uploads/<?php echo $row['foto']; ?>" class="img-fluid" alt="">
                    <div class="caption">
                        <h3><?php echo $row['titulo']; ?></h3>
                        <p><a class="btn btn-primary" role="button" href="noticia1.php?titulo=<?php echo $row['titulo']; ?> & foto=<?php echo $row['foto']; ?> & noticia=<?php echo $row['noticia'] ?>" class="link-details" title="More Details"><i class="ion ion-android-open"></i>Leer más...</a></p>
                    </div><!--caption-->
                </div><!--thumbnail-->
            </div><!--col-sm-6 col-md-4-->
            <?php endforeach;?>   
            
        </div><<!--row Tramites-->
        <div class="dependencias">
            <div align="center">
              <?php include "dependencias.php"; ?>
                </div>
        </div><!--dependencias-->
    </div><!--container-fluid-->
    
</body>
</html>