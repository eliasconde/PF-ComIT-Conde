// JS se encuentra en la Clase 7

function validacion(){
	
	var coment = document.getElementById('comentario').value;

	if (coment == "") {
		alert ("Falta el comentario para la publicación");
		return false;
	}
}