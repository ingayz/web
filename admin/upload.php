 <?php 
 //Recibimos los datos de la imagen
 
 $nombre_imagen=$_FILES['imagen']['name'];
 $tipo_imagen=$_FILES['imagen']['type'];
 $tamagno_imagen=$_FILES['imagen']['size'];
 
 //if($tamagno_imagen<=8000000){
 
 	if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"){
 
	 $carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/ms/aeh/admin/uploads/';
	 
	 move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino.$nombre_imagen);
	 
	// echo $tipo_imagen;
	 }else{
	 
	 	echo "Solo se pueden subir imagenes jpeg,jpg,png, gif";
	 }
	 
	 //}else{
	 
	 //echo "Solo se pueden subir imagenes hasta 2Mb";
  
 
 //}
 
 require("cbd.php");
 
 $id_noticia=$_POST['id_noticia'];
 
$sql=" UPDATE noticias SET foto=:mifoto WHERE id_noticia=:miid_noticia";
	
	$resultado=$base->prepare($sql);
	
	$resultado->execute(array(":mifoto"=>$nombre_imagen, "miid_noticia"=>$id_noticia));
			
 			
        //header("Location:mensaje_foto.php");
	/*ob_start(); 
  header("refresh: 4; url = inicio.php"); 
   
ob_end_flush();  */
 
 ?>

 <!DOCTYPE>
 <html>
 <head>
 	<title>Foto Subida con Exito</title>
 	<meta charset="UTF-8">

<title>Agruegar Foto</title>
<link rel="stylesheet" type="text/css"  href="../tools/css/bootstrap.css">
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
</head>

<body>

<!--div class="alert alert-success" role="alert">
  <a href="inicio.php" class="alert-link">La Imagen subio satisfactoriamente... Haz Click aqui para volver al sistema</a>
</div-->

<!--img src="uploads/<?php echo $row['foto']; ?>" alt="Agregar Foto" width="80%"/-->
<div class="alert alert-success" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"></span></button>
<strong>Excelente!</strong> La Foto se Agregó Satisfactoriamente.
<strong> Desea Agregar Otra Fofo.
<a href="subirfoto.php" class="alert-link"><button>SI</button></a>
<a href="prensa.php" class="alert-link"><button>NO</button></a>
</div> 

</body>
</html>