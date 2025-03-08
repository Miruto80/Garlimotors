<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Inventory.css">
    <?php require_once("comunes/head.php")?>
    <title>Inventory</title>
</head>
<body>
<?php require_once("comunes/nav.php")?>
<div class="title-select-container">
    <h1 id="header">Car Inventory</h1>
    <ul>
        <li><a href="#Sedan">Sedan</a></li>
        <li><a href="#SUV">SUV</a></li>
        <li><a href="#Trucks">Trucks</a></li>
        <li><a href="#Luxury">Luxury</a></li>
    </ul>
</div>
<h2 id="Sedan">Sedan</h2>
<hr>
    <div class="caja_img">
        <div class="car" data-location="Arlington-Texas">
            <div class="car-images">
            <img src="imagenes/Sedan/Prueba (1).jpeg" title="2021 GMC Yukon" alt="2021 GMC Yukon">
                <img src="imagenes/Sedan/Prueba (2).jpeg" title="2021 GMC Yukon" alt="2021 GMC Yukon">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2022 Chevrolet malibu LT</h3>
                <div>
                    <p><b>Miles:</b> 68,000</p>
                    <p><b>Down:</b> $2,800</p>
                </div>
                <button onclick="openForm('2022 Chevrolet malibu LT')">Request Information</button>
            </div>
        </div>
    </div>
    <hr>
    <h2 id="SUV">SUV</h2>
    <hr>
    <div class="caja_img">
        <div class="car" data-location="Arlington-Texas">
            <div class="car-images">
            <img src="imagenes/Suv/Prueba (1).jpeg" title="2021 GMC Yukon" alt="2021 GMC Yukon">
                <img src="imagenes/Suv/Prueba (2).jpeg" title="2021 GMC Yukon" alt="2021 GMC Yukon">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2021 GMC Yukon</h3>
                <div>
                    <p><b>Miles:</b> 107,000</p>
                    <p><b>Down:</b> $3,500</p>
                </div>
                <button onclick="openForm('2021 GMC Yukon')">Request Information</button>
            </div>
        </div>
    </div>
    <hr>
    <h2 id="Trucks">Trucks</h2>
    <hr>
    <div class="caja_img">
        <div class="car" data-location="Arlington-Texas">
            <div class="car-images">
                <img src="imagenes/Trucks/Prueba (1).jpeg" title="2021 GMC Yukon" alt="2021 GMC Yukon">
                <img src="imagenes/Trucks/Prueba (2).jpeg" title="2021 GMC Yukon" alt="2021 GMC Yukon">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2021 GMC Yukon</h3>
                <div>
                    <p><b>Miles:</b> 107,000</p>
                    <p><b>Down:</b> $3,500</p>
                </div>
                <button onclick="openForm('2021 GMC Yukon')">Request Information</button>
            </div>
        </div>
    </div>
    <hr>
    <h2 id="Luxury">Luxury</h2>
    <hr>
    <div class="caja_img">
        <div class="car" data-location="Arlington-Texas">
            <div class="car-images">
            <img src="imagenes/Luxury/Prueba (1).jpeg" title="2021 GMC Yukon" alt="2021 GMC Yukon">
                <img src="imagenes/Luxury/Prueba (2).jpeg" title="2021 GMC Yukon" alt="2021 GMC Yukon">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2021 GMC Yukon</h3>
                <div>
                    <p><b>Miles:</b> 107,000</p>
                    <p><b>Down:</b> $3,500</p>
                </div>
                <button onclick="openForm('2021 GMC Yukon')">Request Information</button>
            </div>
        </div>
    </div>
    <div id="contactForm" class="form-popup">
    <form class="form-container" action="https://formspree.io/f/xzzdgjwz" method="POST" onsubmit="return validarenvio()">
        <div class="form-header">
        <h3>Request Information</h3>
        <button type="button" class="close-icon" onclick="closeForm()">✖</button>
        </div>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Your name" required>
        <span id="sname" class="errorform"></span>

        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" placeholder="Your email or phone number" required>
        <span id="scontact" class="errorform"></span>

        <label for="car">Car of Interest</label>
        <input type="text" name="car" id="car" readonly>

        <input type="submit" class="btn" value="Send">
    </form>
</div>

    <div class="centrar_texto">
        <h2><a href="#header">Back to Home</a></h2>
    </div>

<?php require_once("comunes/footer.php")?>
<script src="js/Inventory.js"></script>
</body>
</html>