/*-----------------------------------------------*/
/*VARIABLES A UTILIZAR PARA ABRIR Y CERRAR POP-UP*/
/*----------------------------------------------*/

var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

/*-----------------------------------------------*/
/*ABRIR POP-UP*/
/*----------------------------------------------*/

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

/*-----------------------------------------------*/
/*CERRAR POP-UP*/
/*----------------------------------------------*/

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});