function myFunction(){
	alert("Formulário enviado!");

	//Limpa o formulário
	document.getElementById("form").reset();
}

/*var indexImg = 0;

function carousel() {
    var i;
    var img = document.getElementsByClassName("gallery-icon");
    for (i = 0; i < img.length; i++) {
        img[i].style.display = "none";
    }
    indexImg++;
    if (indexImg >= img.length) {
        indexImg = 0;
    }
    img[indexImg].style.display = "block";
    setTimeout(carousel, options.velocidade);
}

function prevImg() {
    var img = document.getElementsByClassName("gallery-icon");
    img[indexImg].style.display = "none";
    indexImg--;
    if(indexImg == -1) {
        indexImg = img.length - 1;
    }
    img[indexImg].style.display = "block";
}

function nextImg() {
    var img = document.getElementsByClassName("gallery-icon");
    img[indexImg].style.display = "none";
    indexImg++;
    if(indexImg == img.length) {
        indexImg = 0;
    }
    img[indexImg].style.display = "block";
}*/
