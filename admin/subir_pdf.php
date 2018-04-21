 <?php 
 //Recibimos los datos de la imagen
 
 $nombre_archivo=$_FILES['archivo']['name'];
 $tipo_archivo=$_FILES['archivo']['type'];
 $tamagno_archivo=$_FILES['archivo']['size'];

 
	 $carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/web/admin/uploads/';
	 
	 move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta_destino.$nombre_archivo);
	 
	
 require("cbd.php");
 
 $id_publicacion=$_POST['id_publicacion'];
 
$sql=" UPDATE publicaciones SET detalles=:midetalles WHERE id_publicacion=:miid_publicacion";
	
	$resultado=$base->prepare($sql);
	
	$resultado->execute(array(":midetalles"=>$nombre_archivo, "miid_publicacion"=>$id_publicacion));
			
 			
    header("Location:contrataciones.php");
	/*ob_start(); 
  header("refresh: 4; url = inicio.php"); 
   
ob_end_flush();  */
 
 ?>

 <!--DOCTYPE>
 <html>
 <head>
 	<title>Foto Subida con Exito</title>
 	<meta charset="UTF-8">

<title>Agruegar Foto</title>
<link rel="stylesheet" type="text/css"  href="../tools/css/bootstrap.css">
<script type="text/javascript" src="../tools/js/bootstrap.js"></script>
<script type="text/javascript" src="../tools/js/jquery-2.1.4.min.js" ></script>

<!-- Latest compiled and minified CSS -->
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="tools/ccs/bordes.css">

<!-- Latest compiled and minified JavaScript -->
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>

<body>

<!--div class="alert alert-success" role="alert">
  <a href="inicio.php" class="alert-link">La archivo subio satisfactoriamente... Haz Click aqui para volver al sistema</a>
</div-->

<!--img src="uploads/<?php echo $row['foto']; ?>" alt="Agregar Foto" width="80%"/-->
<!--div class="alert alert-success" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
<strong>Excelente!</strong> El Archivo se Agregó Satisfactoriamente.
<strong> Desea Agregar Otra Fofo.
<a href="contrataciones.php" class="alert-link"><button>SI</button></a>
<a href="contrataciones.php" class="alert-link"><button>NO</button></a>
</div> 

</body>
</html>