let currentImageIndex = 0;
const images = [
    "imagenes/Last adds/Last add (1).webp", // La primera imagen no tendrá lazy loading
    "imagenes/Last adds/Last add (4).webp",
    "imagenes/Last adds/Last add (2).webp",
    "imagenes/Last adds/Last add (3).webp"
];
const carouselBg = document.getElementById("carousel-bg");

// Función para actualizar la imagen al siguiente índice
function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % images.length;
    carouselBg.src = images[currentImageIndex];
    // Agregar lazy loading a la siguiente imagen, excepto la inicial
    if (currentImageIndex > 0) {
        loadNextImage();
    }
}

// Función para volver a la imagen anterior
function previousImage() {
    currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    carouselBg.src = images[currentImageIndex];
    // Agregar lazy loading a la siguiente imagen, excepto la inicial
    if (currentImageIndex > 0) {
        loadNextImage();
    }
}

// Función para cargar la siguiente imagen con lazy load
function loadNextImage() {
    const nextImage = new Image();
    nextImage.src = images[currentImageIndex];
    nextImage.loading = 'lazy';
}

// Asegurarse de que el lazy loading se aplique correctamente al cambiar de imagen
document.getElementById("carousel-bg").loading = 'lazy';
