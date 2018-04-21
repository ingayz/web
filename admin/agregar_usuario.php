<?php 
include 'cbd.php';
 session_start();
$usuario = $_SESSION['usuario'];
$nivel = $_SESSION['nivel'];
 
 if(!isset($_SESSION["usuario"])){

	header("Location: index.html");

}

if(isset($_POST["datos"])){

$nombre = $_POST["nombre"];
$usuario = $_POST["usuario"];
$clave = $_POST["clave"];
$nivel = $_POST["nivel"];


$sql = "INSERT INTO usuarios (nombre, usuario, clave, nivel) VALUES (:minombre, :miusuario, :miclave, :minivel)";

$resultado=$base->prepare($sql);

$resultado->execute(array(":minombre"=>$nombre, ":miusuario"=>$usuario, ":miclave"=>$clave, ":minivel"=>$nivel));

header("Location:inicio.php");


} //Cierre if isset

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registro de Usuarios</title>
<link rel="stylesheet" type="text/css"  href="../tools/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../css/estilomenu.css">
<script type="text/javascript" src="../tools/js/bootstrap.js"></script>
<script type="text/javascript" src="../tools/js/jquery-2.1.4.min.js" ></script>

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
<script src="tools/js/jquery.js"></script>

<script> alert(hoy);</script>

<!--script>  

function calculo_edad()
{
	var fecha  = document.getElementById("fecha_nac_titular").value;
	
	var fecha2 = document.getElementById("hoy").value;
	
	var edad = parseInt(fecha2) - parseInt(fecha) - 1;
		
//alert(fecha);

//alert(edad);

	document.titulares.edad.value=edad;
	
	}
</script--> 

 </head>
 <body>

 <?php 

if ($nivel == 'Administrador') {
	include 'menu-admin.html';
}

 ?>
 
 <!--main content start-->
 <div class="container">
 <div align="center">
 <section id="main-content">
 <section class="wrapper site-min-height">
 <h3><i class="fa icon-user-plus"></i> Modulo de Ingreso de Usuarios</h3>
 <div class="row mt">
 <div class="col-lg-12">
				
<!--Colocar el contenido dentro de las etiquetas <P>-->
				
          		<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
<div class="col-lg-12">
<div class="form-panel">
<h4 class="mb"><i class="fa icon-user-plus"></i> Usuario</h4>
<br>
<form id="titulares" name="titulares" class="form-horizontal style-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

<div class="form-group">
<label class="col-sm-4 col-sm-4 control-label">Nombre </label>
<div class="col-sm-6">
<input name="nombre" type="text" class="form-control round-form" id="nombre">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 col-sm-4 control-label">Usuario</label>
<div class="col-sm-6">
<input name="usuario" type="text" class="form-control round-form" id="usuario">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 col-sm-4 control-label">Clave</label>
<div class="col-sm-6">
<input name="clave" type="text" class="form-control round-form" id="clave">
</div>
</div>

<div class="form-group">
<label class="col-sm-4 col-sm-4 control-label">Nivel</label>
<div class="col-sm-6">
<select name="nivel" type="text" class="form-control round-form" id="nivel">
<option></option>
<option>Administrador</option>
<option>Prensa</option>
<option>Contrataciones</option>
</select>
</div>
</div>
                    						  
<div class="form-group">
<div class="col-md-5 col-sm-5 col-xs-5 col-md-offset-5">

<a href="inicio.php"><button type="button" class="btn btn-round btn-primary">
Cancelar</button></a>
						      
<button type="reset" class="btn btn-round btn-warning">
Borrar</button>
					       
<button type="submit" name="datos" class="btn btn-round btn-primary">
Agregar </button>
</div>
</div>
						  
</div>
						 
</form>
</div>
</div><!-- col-lg-12-->      	
</div><!-- /row -->

</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
      </div>
</div>
</body>
</html>