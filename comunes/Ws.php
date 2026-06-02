<?php
$telefono = "14696350519"; 
$mensaje = urlencode("¡Hello! I would like more information.");
$url_whatsapp = "https://wa.me/{$telefono}?text={$mensaje}";
?>

<style>
    .btn-whatsapp-flotante {
        position: fixed;
        bottom: 20px;
        left: 20px; /* Esquina inferior izquierda */
        z-index: 9999;
        background-color: #25d366;
        color: #fff !important; /* Forzamos el color blanco */
        border-radius: 50px;
        padding: 12px 20px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        text-decoration: none;
        font-family: Arial, sans-serif;
        font-weight: bold;
        font-size: 15px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        transition: transform 0.3s ease, background-color 0.3s ease;
    }

    .btn-whatsapp-flotante:hover {
        background-color: #20ba5a;
        transform: scale(1.05);
    }

    /* Tamaño del icono de Font Awesome */
    .btn-whatsapp-flotante i {
        font-size: 20px; 
    }
</style>

<a href="<?php echo $url_whatsapp; ?>" class="btn-whatsapp-flotante" target="_blank" rel="noopener noreferrer">
    <i class="fa-brands fa-whatsapp"></i>
    
Text us</a>