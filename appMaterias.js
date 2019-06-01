function modificar_estado_materia(codigo_est){
	var codigo_mat = document.getElementById("mat").value;

	//funcionalidad proveniente de jquery para simplificar el trabajo de enviar la peticion
  $.ajax({
    url: 'modificar_materia.php',
    type: 'POST',//tipo de peticion(post para enviar dato tambien)
    data: {codigo_est: codigo_est, codigo_mat: codigo_mat},//dato que vamos a enviar al servidor

    //que hacer con la respuesta
    success: function(respuesta){
    	
    	if(respuesta == 0){
    		console.log('No se pudo realizar el cambio');
    	}else if (respuesta == 1){
    		console.log('cambio realizado con exito');
    	}
      
    }
    })

}

function cargar_materias(codigo_est){
	//funcionalidad proveniente de jquery para simplificar el trabajo de enviar la peticion
    $.ajax({
      url: 'materias_usuario.php',
      type: 'POST',//tipo de peticion(post para enviar dato tambien)
      data: {codigo_est: codigo_est},//dato que vamos a enviar al servidor

      //que hacer con la respuesta
      success: function(respuesta){ 

        console.log('respuesta del servidor con las materias del usuario: ');
        console.log(JSON.parse(respuesta));        

      }
    })

}

