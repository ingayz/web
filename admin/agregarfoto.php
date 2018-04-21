<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="UTF-8">

<title>Agruegar Foto</title>
<link rel="stylesheet" type="text/css" href="../tools/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../tools/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css"  href="tools/css/bootstrap.css">
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
<?php 
include 'cbd.php';
//session_start();
include 'menu-prensa.html';

$id_noticia = $_GET["id_noticia"];



?>

    <h1 align="center">AGREGAR FOTO DE EQUIPO</h1>
<form action="upload.php" method="POST" enctype="multipart/form-data">
<table align="center">
  <tr>
    <td align="center">ID</td>
    <td><input type="hidden" name="id_noticia" value="<?php echo $id_noticia ?>" /><?php echo $id_noticia ?></td>
  </tr>
  <tr>
    <td></td>
    <td align="center"><input class="btn btn-lg btn-success btn-block" type="file" name="imagen" size="20" /></td>
  </tr>
  <tr>
    <td> </td>
    <td align="center"><input class="btn btn-lg btn-success btn-block" type="submit" name="imagen" value="Enviar Imagen" /></td>
  </tr>
</table>

</form>

</body>
</html>
