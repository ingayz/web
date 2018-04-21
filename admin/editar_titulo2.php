<?php		
include 'cbd.php';

$id_noticia = $_POST['id_noticia'];
$titulo = $_POST["titulo"];
$resumen = $_POST["resumen"];
$noticia = $_POST["noticia"];

$sql="UPDATE noticias SET titulo=:mititulo, resumen=:miresumen, noticia=:minoticia WHERE id_noticia=:miid_noticia";

$resultado=$base->prepare($sql);

$resultado->execute(array(":miid_noticia"=>$id_noticia, ":mititulo"=>$titulo, ":miresumen"=>$resumen, ":minoticia"=>$noticia));

$error = $resultado->errorInfo();

header("Location: inicio.php");

?>