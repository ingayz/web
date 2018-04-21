<?php 

include 'cbd.php';
 //session_start();
$usuario = $_SESSION['usuario'];
$nivel = $_SESSION['nivel'];
 
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
<html>
<head>
	<title>Noticias</title>
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
<h3><i class="fa icon-user-check"></i>Menu Principal</h3>
				
<div class="row mt">
<div class="col-md-12">
<div class="content-panel">
					   
<table class="table table-striped table-advance table-hover">

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
 
<table class="table" border="1">
  <tr>
    <th class="tg-yw4l" colspan="4" aling="centered">Usuarios</th>
    <th class="tg-yw4l" colspan="2" >Prensa</th>
    <th class="tg-yw4l" colspan="2">Contrataciones</th>
   
  </tr>
  <tr>
    <td class="tg-031e" ><a href="agregar_usuario.php">Agregar Usuario</a></td>
    <td class="tg-yw4l"><a href="editar_usuario.php">Editar Usuario</a></td>
    <td class="tg-yw4l"><a href="eliminar_usuario.php">Eliminar Usuario</a></td>
    <td class="tg-yw4l"><a href="lista_usuarios.php">Lista de Usuarios</a></td>
    <td class="tg-yw4l"><a href="agregar_noticia.php">Agregar Noticia</a></td>
    <td class="tg-yw4l"><a href="prensa.php">Editar Noticia</a></td>
    <td class="tg-yw4l"><a href="agregar_concurso.php">Agregar Publicaciòn</a></td>
    <td class="tg-yw4l"><a href="contrataciones.php">Editar Publicaciòn</a></td>
    <td class="tg-yw4l"><a href="salir.php">Salir</a></td>
   
  </tr>
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