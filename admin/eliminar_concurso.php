<?php 
include("cbd.php");

$id_publicacion = $_GET['id_publicacion'];

$base->query("DELETE FROM publicaciones WHERE id_publicacion='$id_publicacion'");

header("Location:contrataciones.php");

?>