<?php  

	$codigo_est = $_POST['codigo_est'];
	$codigo_mat = $_POST['codigo_mat'];
	$result = 0;

	$url = 'estudiantes/' . $codigo_est . '.json';
	$datos_est = '';

	if(file_exists($url) && $codigo_mat != ''){
		$datos_est = json_decode(file_get_contents($url));

		$tam = count($datos_est);
		for($i = 0; $i < $tam; $i++){
			if(strcmp ($codigo_mat, $datos_est[$i]->{'codigo'}) == 0){

				if($datos_est[$i]->{'cursada'}){
					$datos_est[$i]->{'cursada'} = false;
				}else{
					$datos_est[$i]->{'cursada'} = true;
				}
				file_put_contents($url, json_encode($datos_est));

				$result = 1;
				$i = $tam + 1;
			}
		}
	}	

	echo $result;


?>