<!DOCTYPE html>

<?php  

	$codigo_est = $_POST['codigo'];

?>


<html>
<head>
	<title>Materias</title>

	<script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous">      	
    </script>  
    <script src="appMaterias.js"></script>
</head>
<body onload="cargar_materias(<?php echo $codigo_est; ?>);">

	<h1>Pagina de las materias</h1>
	<input id = "mat" type="text" name="materia">
	<button onclick="modificar_estado_materia(<?php echo $codigo_est; ?>);">
		digite id de la materia a modificar
	</button>

</body>
</html>