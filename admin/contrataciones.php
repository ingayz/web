<?php 

include 'cbd.php';
 //session_start();
$usuario = $_SESSION['usuario'];
$nivel = $_SESSION['nivel'];
 
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
<html>
<head>
	<title>Contrataciones</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css"  href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estilomenu.css">
<script type="text/javascript" src="tools/js/bootstrap.js"></script>
<script type="text/javascript" src="tools/js/jquery-2.1.4.min.js" ></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="tools/ccs/bordes.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>
<div align="center">
<section id="main-content">
<section class="wrapper">
    <table class="table" border="1">
  <tr>
    
    <th class="tg-yw4l" colspan="3">Menu Contrataciones</th>
   
  </tr>
  <tr>
   
    <td class="tg-yw4l"><a href="agregar_concurso.php">Agregar Publicaciòn</a></td>
    <td class="tg-yw4l"><a href="contrataciones.php">Editar Publicaciòn</a></td>
    <td class="tg-yw4l"><a href="salir.php">Salir</a></td>
   
  </tr>
</table>
<h3><i class="fa icon-user-check"></i>Concursos Registradas</h3>
				
<div class="row mt">
<div class="col-md-12">
<div class="content-panel">
					   
<table class="table table-striped table-advance table-hover">
<h4><i class="fa icon-user-check"></i> Concursos</h4>

<!--Search-->
<div align="right">
<div class="col-md-12">
<form method="POST" action="buscar_equipo.php">Buscar: 
<input type="text" name="palabra">
<button name="buscador" type="submit" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-search"></i></button>
</form>
</div>
</div>

<div align="center">							 
<center>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
 

<thead>
<tr>

<th><div align="center"><i class="fa icon-office"></i> Id Concurso</div></th>
                                  
<th><div align="center"><i class="fa icon-profile"></i> Concurso</div></th>

<th><div align="center"><i class="fa icon-profile"></i> Objeto</div></th>

<th><div align="center"><i class="fa icon-profile"></i> Fecha Finalización</div></th>

<th><div align="center"><i class="fa icon-profile"></i> Detalles</div></th>
                  
<th></th>
                              
</tr>
                              
</thead>
                              
<tbody>
							  
<?php foreach($model as $row): ?>
<tr>
                                                                  
<td><div align="center"><a href="eliminar_concurso.php?id_publicacion=<?php echo $row['id_publicacion'] ?> ">Eliminar Concurso</a></div></td>

<td><div align="center"><a href="editar_concurso.php?id_publicacion=<?php echo $row['id_publicacion'] ?> & concurso=<?php echo $row['concurso']; ?> & objeto=<?php echo $row['objeto']; ?> & fecha_finalizacion=<?php echo $row['fecha_finalizacion']; ?>"><?php echo $row['concurso']; ?></a></div></span></td>

<td><div align="center"><?php echo $row['objeto']; ?></div></span></td>

<td><div align="center"><?php echo $row['fecha_finalizacion']; ?></div></span></td>

<td><div align="center"><a href="agregar_pdf.php?id_publicacion=<?php echo $row['id_publicacion'] ?>"><img src="uploads/<?php echo $row['detalles']; ?>" alt="Agregar Detalles" width="50%"/></div></span></td>
             								                                 
</tr>
                            
<?php endforeach;?>
</tbody>
</table>
</form>
</div><!-- /content-panel -->
</div><!-- /col-md-12 -->
</div><!-- /row -->

</section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              Alcaldía el Hatillo - 2017
              <a href="basic_table.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

</body>
</html>