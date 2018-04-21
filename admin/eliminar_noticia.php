<?php 
include("cbd.php");

$id_noticia = $_GET['id_noticia'];

$base->query("DELETE FROM noticias WHERE id_noticia='$id_noticia'");

header("Location:inicio.php");

?>