$(document).ready(function(){
	$('#btnsend').click(function(){
		var errores = '';
		
		// Validado Nombre =============================
		if($('#names').val()==''){
			errores += '<p>Escriba un nombre</p>';
		}
		//Validado Correo===============================
		if($('#email').val()==''){
			errores += '<p>Ingrese un correo</p>';
		}
		//Validado Mensaje==============================
		if($('#mensaje').val()==''){
			errores += '<p>Escriba un mensaje</p>';
		}
		//ENVIANDO MENSAJE==============================
		alert(errores);
	});
});