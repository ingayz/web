<?php
include 'admin/cbd.php';

$sql = "SELECT * FROM publicaciones ORDER BY id_publicacion DESC";
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
     <style>

.panel-default{
    width:80%;
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
    color: #fff;
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
        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">CONCURSOS ABIERTOS</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-condensed" border="1">
                                  
                        <th><div align="center"> Concurso</div></th>
                                  
                        <th><div align="center"> Objeto</div></th>
                                  
                        <th><div align="center"> Fecha Finalización</div></th>
                                  
                        <th><div align="center"> Detalles</div></th>
                                                                                 
                        </tr>
                                                                
                        </thead>
                                                                
                        <tbody>
                                                                
                        <?php foreach($model as $row): ?>
                        <tr>
                                                                                                    
                                  
                            <td><div align="center"><?php echo $row['concurso']; ?></div></span></td>
                                  
                            <td><div align="center"><?php echo $row['objeto']; ?></div></span></td>
                                  
                            <td><div align="center"><?php echo $row['fecha_finalizacion']; ?></div></span></td>
                                  
                            <td><div align="center"><a href="admin/uploads/<?php echo $row['detalles']; ?>"><?php echo $row['detalles']; ?></div></span></td>
                                                                                                                
                        </tr>
                                                              
                        <?php endforeach;?>
                    </tbody>
                    </table>
                </div>
            </div><!--Mision-->
        </div><!--alcaldia-->
    </div><!--container-fluid-->
    
</body>
</html>