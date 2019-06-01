<?php  

	$codigo_est = $_POST['codigo_est'];

	$url = 'estudiantes/' . $codigo_est . '.json';

	$result = 'Codigo incorrecto';

	if($codigo_est != '' && $codigo_est != 'default'){
		if(file_exists($url)){
			$result = file_get_contents($url);;		
		}else{
			$result = file_get_contents('estudiantes/default.json');
			file_put_contents($url, $result);
		}
	}
	echo $result;

?>