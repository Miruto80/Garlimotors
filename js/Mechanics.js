function openForm() {
        document.getElementById('contactForm').style.display = 'flex'; // Muestra el formulario
}

function closeForm() {
    document.getElementById('contactForm').style.display = 'none'; // Oculta el formulario de contacto
}

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