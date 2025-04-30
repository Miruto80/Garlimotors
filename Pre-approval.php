<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pre-approval</title>
    <?php require_once("comunes/head.php") ?>
    <link rel="stylesheet" href="css/Pre-approval.css">
</head>
<body>
<?php require_once("comunes/nav.php") ?>

<form action="https://formspree.io/f/xpwpzkgp" method="POST" onsubmit="return validarenvio()">
        <label for="financing">Are you looking for in-house financing?</label>
        <select id="financing" name="financing">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <label for="carType">What type of car are you looking for?</label>
        <input type="text" id="carType" name="carType" placeholder="Type of car" required>
        <span id="scarType" class="errorform"></span>

        <label for="inTexas">Are you in Texas?</label>
        <select id="inTexas" name="inTexas">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Your name" required>
        <span id="sname" class="errorform"></span>

        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone" placeholder="Your phone number" required>
        <span id="sphone" class="errorform"></span>

        <label for="tradeIn">Do you have a Trade-in?</label>
        <select id="tradeIn" name="tradeIn">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <label for="title">If yes, do you have the title?</label>
        <select id="title" name="title">
            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>

        <input type="submit" value="Send">
    </form>
<?php require_once("comunes/footer.php") ?>


<script>
$("#phone").on("keypress", function (e) {
    validarkeypress(/^[0-9-\b]*$/, e);
});

$("#phone").on("keyup", function () {
    validarkeyup(/^[0-9]{10,11}$/, $(this), $("#sphone"), "The format must be between 10 to 11 digits");
});

$("#name").on("keypress", function (e) {
    validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/, e);
});

$("#name").on("keyup", function () {
    validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/, $(this), $("#sname"), "Only letters between 3 and 30 characters");
});

// Función de validación del envío
function validarenvio() {
    if (validarkeyup(/^[0-9]{10,11}$/, $("#phone"), $("#sphone"), "The format must be between 10 to 11 digits") == 0) {
        alert("Error in phone");
        return false;
    }
    
    if (validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/, $("#name"), $("#sname"), "Only letters between 3 and 30 characters") == 0) {
        alert("Error in name");
        return false;
    }
    return true;
}
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
</script>
</body>
</html>