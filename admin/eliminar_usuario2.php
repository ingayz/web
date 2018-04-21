<?php 
include("cbd.php");

$id_usuario = $_GET['id_usuario'];

$base->query("DELETE FROM usuarios WHERE id_usuario='$id_usuario'");

header("Location:eliminar_usuario.php");

?>