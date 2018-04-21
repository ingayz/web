<?php
include'cbd.php';
try{
$sql="SELECT * FROM usuarios WHERE usuario = :user AND clave = :password";
$resultado = $base->prepare($sql);
$login = htmlentities(addslashes($_POST["txtuser"]));
$password = htmlentities(addslashes($_POST["txtpassword"]));
$resultado->bindValue(":user", $login);
$resultado->bindValue(":password", $password);
$resultado->execute();
$numeroregistro = $resultado->rowCount();
if($numeroregistro != 0){
session_start();
$_SESSION["usuario"] = $_POST["txtuser"];
$sql="SELECT nivel FROM usuarios WHERE usuario = '$login'";
foreach ($base->query($sql) as $row) {
$nivel = $row['nivel'];
}//Cierre
$_SESSION['nivel'] = $nivel; 
if ($nivel == 'Administrador') {
	header("Location:inicio.php");
}elseif ($nivel == 'Prensa') {
	header("Location:prensa.php");
}elseif ($nivel == 'Contrataciones') {
	header("Location:contrataciones.php");
}

}else{
header("Location:index.html"); 
}
}catch (Exception $e){
die("Error: ". $e->getMessage());
}
?>