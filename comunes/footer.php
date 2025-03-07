<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

footer {
    background: black;
    color: white;
    padding: 10px 0px;
    text-align: center;
    width: 100%;
}

.redes-sociales {
    display: flex;
    align-items: center;
    justify-content: center;
}

.redes-sociales a {
    color: white;
    font-size: 30px;
    margin: 0 15px;
    text-decoration: none;
    display: inline-block;
    transition: color 0.3s ease, transform 0.3s ease;
}
.redes-sociales i {
padding: 5px;
}

.redes-sociales a:hover {
    color: #0782fa; /* Color al pasar el cursor */
    transform: scale(1.2); /* Efecto de ampliación al pasar el cursor */
}

.legal {
    display: flex;
    flex-direction: column;
    align-items: center; /* Centra el botón y el contenido en el centro */
    margin-top: 20px;
}

#legal-button {
    background-color: #000;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

#legal-button i {
    margin-left: 10px; /* Espacio entre el texto y la flecha */
}

#legal-button:hover {
    background-color: #333;
    transform: translateY(-3px);
}

/* Contenido oculto del menú desplegable */
#legal-content {
    display: none;
    margin-top: 10px;
    color: white;
    font-size: 14px;
}

#legal-content p {
    margin: 5px 0;
}

/* Mostrar contenido cuando el botón es presionado */
#legal-content.show {
    display: block;
}

@media (max-width: 768px) {

.redes-sociales {
    flex-direction: column;
}

.redes-sociales a {
    margin: 5px 0;
}

.legal {
    margin-top: 10px;
}

#legal-button {
    font-size: 14px;
}

#legal-content {
    font-size: 12px;
}
}

</style>
<body>
<footer>
        <h4>Social Media</h4>
        <div class="redes-sociales" id="contact">
            <a target="_blank" href="https://www.instagram.com/garli_motorsllc/">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a target="_blank" href="https://www.tiktok.com/@garli.motors">
            <i class="fa-brands fa-tiktok"></i>
            </a>
            <i><i class="fa-solid fa-phone"></i><a href="tel:469-275-6620"> 469-275-6620 </a></i>
            <i>Garlimotorsllc@gmail.com<i class="fa-solid fa-envelope"></i></i>

        </div>
        
        <div class="legal">
            <button id="legal-button">
                Legal <i class="fa-solid fa-chevron-down"></i>
            </button>
            <div id="legal-content" class="hidden">
                <p>&copy; Garlimotors 2025</p>
                <p>All rights reserved. The images of the cars are used with permission.</p>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById('legal-button').addEventListener('click', function () {
    const legalContent = document.getElementById('legal-content');
    legalContent.classList.toggle('show');
});
    </script>
</body>
</html>