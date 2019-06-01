
function modificar_estado_materia(codigo_est, codigo_mat){

	//funcionalidad proveniente de jquery para simplificar el trabajo de enviar la peticion
  $.ajax({
    url: 'modificar_materia.php',
    type: 'POST',//tipo de peticion(post para enviar dato tambien)
    data: {codigo_est: codigo_est, codigo_mat: codigo_mat},//dato que vamos a enviar al servidor

    //que hacer con la respuesta
    success: function(respuesta){
    	
    	if(respuesta == 0){
    		console.log('No se pudo realizar el cambio');
        return 0;
    	}else if (respuesta == 1){
    		console.log('cambio realizado con exito');
        return 1;
    	}
      
    }
    })

}

function cargar_materias(codigo_est){
	//funcionalidad proveniente de jquery para simplificar el trabajo de enviar la peticion

  
  console.log('cargar materias');

    $.ajax({
      url: 'materias_usuario.php',
      type: 'POST',//tipo de peticion(post para enviar dato tambien)
      data: {codigo_est: codigo_est},//dato que vamos a enviar al servidor

      //que hacer con la respuesta
      success: function(respuesta){ 
        let datos = JSON.parse(respuesta);
        let contenedor = document.getElementById('contenido');  
        contenedor.innerHTML = generar_html(datos);
        
        var materias = document.querySelectorAll(".materia");        
        materias.forEach((materia) => {
            materia.addEventListener('click', () => {                
                var id = $(materia).attr("id");
                var res = modificar_estado_materia(codigo_est, id);
                materia.classList.toggle('active');                
            });
        }); 
      }
    })


}

function generar_html(datos){
  nuevo_html = '';

  for (var i = 1; i <= 10; i++) {
     
    nuevo_html += `<h1 class= "titulo">SEMESTRE `+i+`</h1>
    <div class="semestre">`

    datos.forEach(mat => {
          if(mat.semestre == i){
            var clase = 'materia';
            if(mat.cursada){
              clase += ' active';
            }
            var estrellas = ' ';//creditos
            for(var j = 0; j < mat.creditos; j++){
              estrellas += '&#9733';
            }
            var id = mat.codigo;

            nuevo_html += `<div id = "${id}" class="${clase}">${mat.nombre} ${estrellas}</div>`;
          }
    }); 

    nuevo_html += `</div>`     
  
  }
  
  return nuevo_html;
}


