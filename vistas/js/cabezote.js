/*=============================================
CABEZOTE
=============================================*/

$("#btnCategorias").click(function(){

	if(window.matchMedia("(max-width:767px)").matches){

		$("#btnCategorias").after($("#categorias").slideToggle("fast"))

	}else{

		$("#cabezote").after($("#categorias").slideToggle("fast"))
		
	}

		
})

/*=============================================
MENÚ MÓVIL
=============================================*/


$(".activarMenu").click(function(){

	$(".menuMovil").show("fast");

})

$(".menuMovil button").click(function(){

	$(".menuMovil").hide("fast");

})

/*=============================================
DESPLAZAMIENTO MENÚ
=============================================*/


if(window.matchMedia("(max-width:768px)").matches){

	$(".menuMovil div p span i").click(function(e){

		$(".menuMovil").slideToggle('fast');

	})


}
