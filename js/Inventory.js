 function openForm(car) {
            document.getElementById('car').value = car;
            document.getElementById('contactForm').style.display = 'flex';
        }

        function closeForm() {
            document.getElementById('contactForm').style.display = 'none';
        }

        document.addEventListener('DOMContentLoaded', function() {
    const carDivs = document.querySelectorAll('.car');

    carDivs.forEach(carDiv => {
        const images = carDiv.querySelectorAll('.car-images img');
        images.forEach((img, index) => {
            if (index === 0) {
                img.style.display = 'block'; // Muestra solo la primera imagen
            } else {
                img.style.display = 'none'; // Oculta todas las demás imágenes
                img.setAttribute('loading', 'lazy'); // Agrega loading lazy solo a las demás
            }
        });
    });
});

function prevImage(button) {
    const carDiv = button.closest('.car');
    const images = carDiv.querySelectorAll('.car-images img');
    let currentIndex = Array.from(images).findIndex(img => img.style.display === 'block');

    images[currentIndex].style.display = 'none';
    let newIndex = currentIndex === 0 ? images.length - 1 : currentIndex - 1; // <-- Definimos newIndex
    images[newIndex].style.display = 'block';

    preloadAdjacentImages(images, newIndex); // Pre-cargar imágenes cercanas
}

function nextImage(button) {
    const carDiv = button.closest('.car');
    const images = carDiv.querySelectorAll('.car-images img');
    let currentIndex = Array.from(images).findIndex(img => img.style.display === 'block');

    images[currentIndex].style.display = 'none';
    let newIndex = currentIndex === images.length - 1 ? 0 : currentIndex + 1; // <-- Aquí debes sumar
    images[newIndex].style.display = 'block';
    preloadAdjacentImages(images, newIndex); // Pre-cargar imágenes cercanas
}

function preloadAdjacentImages(images, currentIndex) {
    const prevIndex = currentIndex === 0 ? images.length - 1 : currentIndex - 1;
    const nextIndex = currentIndex === images.length - 1 ? 0 : currentIndex + 1;

    [prevIndex, nextIndex].forEach(index => {
        const img = images[index];
        if (img.loading === 'lazy' && !img.complete) {
            const tempImg = new Image();
            tempImg.src = img.src;
        }
    });
}

function toggleMoreInfo(btn) {
    const moreInfo = btn.nextElementSibling; // Encuentra el div .more-info
    if (moreInfo.style.display === "none" || moreInfo.style.display === "") {
        moreInfo.style.display = "block";
        btn.innerHTML = "Hide details &#9650;";
    } else {
        moreInfo.style.display = "none";
        btn.innerHTML = "Show details &#9660;";
    }
}

// Validaciones para los campos de nombre, teléfono y email
$("#contact").on("keypress", function (e) {
    validarkeypress(/^[A-Za-z@_.0-9\b\u00f1\u00d1\u00E0-\u00FC-]*$/, e);
});

$("#contact").on("keyup", function () {
    let valor = $(this).val();
    let emailRegex = /^[A-Za-z_0-9\u00f1\u00d1\u00E0-\u00FC-]{3,20}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{3}$/;
    let phoneRegex = /^[0-9]{10,11}$/;
    
    if (emailRegex.test(valor) || phoneRegex.test(valor)) {
        $("#scontact").text("");
        return 1;
    } else {
        $("#scontact").text("Enter a valid email or phone");
        return 0;
    }
});

$("#name").on("keypress", function (e) {
validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/, e);
});

$("#name").on("keyup", function () {
validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/, $(this), $("#sname"), "Only letters between 3 and 30 characters");
});

// Función de validación del envío
function validarenvio() {
    if ($("#contact").val().length === 0 || validarkeyup(/^[A-Za-z_0-9\u00f1\u00d1\u00E0-\u00FC-]{3,20}[@]{1}[A-Za-z0-9]{3,8}[.]{1}[A-Za-z]{3}$/, 
    $("#contact"), $("#scontact"), "Enter a valid email or phone") == 0 && 
    validarkeyup(/^[0-9]{10,11}$/, $("#contact"), $("#scontact"), "Enter a valid email or phone") == 0) {
    alert("Error in email or phone");
    return false;
}
     if (validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/, $("#name"), $("#sname"), "Only letters between 3 and 30 characters") == 0) {
     alert("Error in name");
      return false;
    }
return true;
}

// Función para validar la entrada mientras se escribe
function validarkeypress(er, e) {
    key = e.keyCode;
    tecla = String.fromCharCode(key);
    a = er.test(tecla);
    if (!a) {
        e.preventDefault();
    }
}

// Función para validar la entrada después de escribir
function validarkeyup(er, etiqueta, etiquetamensaje, mensaje) {
    a = er.test(etiqueta.val());
    if (a) {
        etiquetamensaje.text("");
        return 1;
    } else {
        etiquetamensaje.text(mensaje);
        return 0;
    }
}
