var imagenes = ["/Imagenes/ImgCarrusel/img1.jpg", "/Imagenes/ImgCarrusel/img2.jpg", "/Imagenes/ImgCarrusel/img3.jpg", "/Imagenes/ImgCarrusel/img4.jpg"];
var indiceImagen = 0;

function anteriorImagen() {
    if (indiceImagen > 0) {
        indiceImagen--;
        actualizarImagen();
    }
}

function siguienteImagen() {
    if (indiceImagen < imagenes.length - 1) {
        indiceImagen++;
        actualizarImagen();
    }
}

function actualizarImagen() {
    var imagenProyector = document.getElementById("imagenProyector");
    imagenProyector.src = imagenes[indiceImagen];
    imagenProyector.alt = "Imagen " + (indiceImagen + 1);
}
