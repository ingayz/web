<?php		
include 'cbd.php';

$id_usuario = $_POST['id_usuario'];
$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$usuario = $_POST["usuario"];
$nivel = $_POST["nivel"];

/*echo $id_usuario;
echo "<br>";
echo $usuario;
echo "<br>";
echo $clave;
echo "<br>";
echo $nombre;
echo "<br>";
echo $nivel;
echo "<br>";*/

$sql="UPDATE usuarios SET nombre=:minombre, clave=:miclave, usuario=:miusuario, nivel=:minivel WHERE id_usuario=:miid_usuario";

$resultado=$base->prepare($sql);

$resultado->execute(array(":miid_usuario"=>$id_usuario, ":minombre"=>$nombre, ":miclave"=>$clave, ":miusuario"=>$usuario, ":minivel"=>$nivel));

$error = $resultado->errorInfo();

header("Location: editar_usuario.php");

?>