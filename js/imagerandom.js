

function choosePic() {
	var num = Math.floor(Math.random() * 306 + 1); 
	imgrandom = "../site_img/" + num +".jpg";
	document.getElementsByClassName("imagerandom")[0].src=imgrandom;   
				// [0] così si prende il primo, perché getElementSSSSSbyClass !
}