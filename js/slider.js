$(document).ready(function(){
	var imgItems = $('.slider li').length; //Numero de slider
	var imgPos = 1;
	
	$('.slider li').hide();
	$('.slider li:first').show();
	
	//Ejecutamos todas las funciones 
	
	$('.right span').click(nextSlider);
	$('.left span').click(prevSlider);
	
	setInterval(function(){
		nextSlider();
	}, 3000);
	
	//FUNCIONES ================================
	
	function nextSlider(){
		if(imgPos >= imgItems){
			imgPos = 1;   
		}else{
			imgPos++;
		}
		$('.slider li').hide(); //Ocultamos todas los slider
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); //Mostramos el slider seleccionado
		
	}
	function prevSlider(){
		if(imgPos <= 1){
			imgPos = imgItems;   
		}else{
			imgPos--;
		}
		$('.slider li').hide(); //Ocultamos todas los slider
		$('.slider li:nth-child('+ imgPos +')').fadeIn(); //Mostramos el slider seleccionado
		
	}
	
});
