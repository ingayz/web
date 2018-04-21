<?php		
include 'cbd.php';

$id_publicacion = $_POST['id_publicacion'];
$concurso = $_POST['concurso'];
$objeto = $_POST['objeto'];
$fecha_finalizacion = $_POST['fecha_finalizacion'];

$sql="UPDATE publicaciones SET concurso=:miconcurso, objeto=:miobjeto, fecha_finalizacion=:mifecha_finalizacion WHERE id_publicacion=:miid_publicacion";

$resultado=$base->prepare($sql);

$resultado->execute(array(":miid_publicacion"=>$id_publicacion, ":miconcurso"=>$concurso, ":miobjeto"=>$objeto, ":mifecha_finalizacion"=>$fecha_finalizacion));

$error = $resultado->errorInfo();

header("Location: contrataciones.php");

?>