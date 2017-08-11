

function choosePic() {
	var num = Math.floor(Math.random() * 122 + 1); 
	imgrandom = "../site_img/" + num +".jpg";
	document.getElementById('imagerandom').src=imgrandom;
}