<!DOCTYPE html>

<?php  

	$codigo_est = $_POST['codigo'];

?>



<html lang="es">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <link rel="stylesheet" type="text/css" href="diseño2.css">
  <script src="appMaterias.js"></script>

</head>
<body onload="cargar_materias(<?php echo $codigo_est; ?>);">
  <div class="dropdown">
  <span>Manual de Usuario</span>
    <div class="dropdown-content">
    <p>Hola ingeniero! :) estas son todas las materias de tu carrera!! solo tienes que darle CLICK a las materias aprobadas!!</p>
    </div>
  </div>
  <h1 class= "titulo" >INGENIERIA DE SISTEMAS</h1>
  <div id = "contenido">	  
	  
  </div>
  <script src="appMaterias.js"></script>
</body>
</html>
