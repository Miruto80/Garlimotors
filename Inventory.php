<!DOCTYPE html>
<html lang="en">
<head>
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
        <li><a href="#Luxury">Luxury</a></li> <!-- Prueba-->
        <li><a href="#Boats">Boats</a></li>
    </ul>
</div>
<h2 id="Sedan">Sedan</h2>
<hr>
    <div class="caja_img">
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2017  Hyundai Accent (1).jpeg" title="2017  Hyundai Accent" alt="2017  Hyundai Accent">
                <img src="imagenes/Sedan/2017  Hyundai Accent (2).jpeg" title="2017  Hyundai Accent" alt="2017  Hyundai Accent">
                <img src="imagenes/Sedan/2017  Hyundai Accent (3).jpeg" title="2017  Hyundai Accent" alt="2017  Hyundai Accent">
                <img src="imagenes/Sedan/2017  Hyundai Accent (4).jpeg" title="2017  Hyundai Accent" alt="2017  Hyundai Accent">
                <img src="imagenes/Sedan/2017  Hyundai Accent (5).jpeg" title="2017  Hyundai Accent" alt="2017  Hyundai Accent">
                <img src="imagenes/Sedan/2017  Hyundai Accent (6).jpeg" title="2017  Hyundai Accent" alt="2017  Hyundai Accent">
                <img src="imagenes/Sedan/2017  Hyundai Accent (7).jpeg" title="2017  Hyundai Accent" alt="2017  Hyundai Accent">
                <img src="imagenes/Sedan/2017  Hyundai Accent (8).jpeg" title="2017  Hyundai Accent" alt="2017  Hyundai Accent">
                <img src="imagenes/Sedan/2017  Hyundai Accent (9).jpeg" title="2017  Hyundai Accent" alt="2017  Hyundai Accent">
                <img src="imagenes/Sedan/2017  Hyundai Accent (10).jpeg" title="2017  Hyundai Accent" alt="2017  Hyundai Accent">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2017  Hyundai Accent</h3>
                <div>
                    <p><b>Miles:</b> 103.000</p>
                    <p><b>Cash:</b> $5.800</p>
                </div>
                <button onclick="openForm('2017  Hyundai Accent')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2009 BMW 3 Series 3281 (1).jpeg" title="2009 BMW 3 Series 3281t" alt="2009 BMW 3 Series 3281t">
                <img src="imagenes/Sedan/2009 BMW 3 Series 3281 (3).jpeg" title="2009 BMW 3 Series 3281t" alt="2009 BMW 3 Series 3281t">
                <img src="imagenes/Sedan/2009 BMW 3 Series 3281 (4).jpeg" title="2009 BMW 3 Series 3281t" alt="2009 BMW 3 Series 3281t">
                <img src="imagenes/Sedan/2009 BMW 3 Series 3281 (5).jpeg" title="2009 BMW 3 Series 3281t" alt="2009 BMW 3 Series 3281t">
                <img src="imagenes/Sedan/2009 BMW 3 Series 3281 (2).jpeg" title="2009 BMW 3 Series 3281t" alt="2009 BMW 3 Series 3281t">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2009 BMW 3 Series 3281</h3>
                <div>
                    <p><b>Miles:</b> 141,133</p>
                    <p><b>Cash:</b> $5.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                <p><b>Financing:</b> $9.400 (Negotiable)</p>
                <p><b>Down:</b> $1.400 (Negotiable)</p>
                <p>Warranty included</p>
                </div>
                </div>
                <button class="Request-btn" onclick="openForm('2009 BMW 3 Series 3281')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2013 Fusión (1).jpeg" title="2013 Fusión" alt="2013 Fusión">
                <img src="imagenes/Sedan/2013 Fusión (3).jpeg" title="2013 Fusión" alt="2013 Fusión">
                <img src="imagenes/Sedan/2013 Fusión (5).jpeg" title="2013 Fusión" alt="2013 Fusión">
                <img src="imagenes/Sedan/2013 Fusión (2).jpeg" title="2013 Fusión" alt="2013 Fusión">
                <img src="imagenes/Sedan/2013 Fusión (4).jpeg" title="2013 Fusión" alt="2013 Fusión">
                <img src="imagenes/Sedan/2013 Fusión (6).jpeg" title="2013 Fusión" alt="2013 Fusión">
                <img src="imagenes/Sedan/2013 Fusión (7).jpeg" title="2013 Fusión" alt="2013 Fusión">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2013 Fusión</h3>
                <div>
                    <p><b>Miles:</b> 165.000</p>
                    <p><b>Cash:</b> $4.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $9.500(Negotiable)</p> <!-- Garantia incluida-->
                </div>
                </div>
                <button onclick="openForm('2013 Fusión')">Request Information</button>
            </div>
        </div>
        
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2017 Chevrolet Cruze LS (1).jpeg" title="2017 Chevrolet Cruze LS" alt="2017 Chevrolet Cruze LS">
                <img src="imagenes/Sedan/2017 Chevrolet Cruze LS (3).jpeg" title="2017 Chevrolet Cruze LS" alt="2017 Chevrolet Cruze LS">
                <img src="imagenes/Sedan/2017 Chevrolet Cruze LS (4).jpeg" title="2017 Chevrolet Cruze LS" alt="2017 Chevrolet Cruze LS">
                <img src="imagenes/Sedan/2017 Chevrolet Cruze LS (5).jpeg" title="2017 Chevrolet Cruze LS" alt="2017 Chevrolet Cruze LS">
                <img src="imagenes/Sedan/2017 Chevrolet Cruze LS (6).jpeg" title="2017 Chevrolet Cruze LS" alt="2017 Chevrolet Cruze LS">
                <img src="imagenes/Sedan/2017 Chevrolet Cruze LS (2).jpeg" title="2017 Chevrolet Cruze LS" alt="2017 Chevrolet Cruze LS">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2017 Chevrolet Cruze LS</h3>
                <div>
                    <p><b>Miles:</b> 125,101</p>
                    <p><b>Cash:</b> $5.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $9.500(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2017 Chevrolet Cruze LS')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2017 Mazda 6 (1).jpeg" title="2017 Mazda 6" alt="2017 Mazda 6">
                <img src="imagenes/Sedan/2017 Mazda 6 (2).jpeg" title="2017 Mazda 6" alt="2017 Mazda 6">
                <img src="imagenes/Sedan/2017 Mazda 6 (3).jpeg" title="2017 Mazda 6" alt="2017 Mazda 6">
                <img src="imagenes/Sedan/2017 Mazda 6 (4).jpeg" title="2017 Mazda 6" alt="2017 Mazda 6">
                <img src="imagenes/Sedan/2017 Mazda 6 (5).jpeg" title="2017 Mazda 6" alt="2017 Mazda 6">
                <img src="imagenes/Sedan/2017 Mazda 6 (6).jpeg" title="2017 Mazda 6" alt="2017 Mazda 6">
                <img src="imagenes/Sedan/2017 Mazda 6 (7).jpeg" title="2017 Mazda 6" alt="2017 Mazda 6">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2017 Mazda 6</h3>
                <div>
                    <p><b>Miles:</b>120.000</p>
                    <p><b>Cash:</b> $6.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $10.500(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.000(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2017 Mazda 6')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2010 Kia forte (1).jpeg" title="2010 Kia forte" alt="2010 Kia forte">
                <img src="imagenes/Sedan/2010 Kia forte (2).jpeg" title="2010 Kia forte" alt="2010 Kia forte">
                <img src="imagenes/Sedan/2010 Kia forte (3).jpeg" title="2010 Kia forte" alt="2010 Kia forte">
                <img src="imagenes/Sedan/2010 Kia forte (4).jpeg" title="2010 Kia forte" alt="2010 Kia forte">
                <img src="imagenes/Sedan/2010 Kia forte (5).jpeg" title="2010 Kia forte" alt="2010 Kia forte">
                <img src="imagenes/Sedan/2010 Kia forte (6).jpeg" title="2010 Kia forte" alt="2010 Kia forte">
                <img src="imagenes/Sedan/2010 Kia forte (7).jpeg" title="2010 Kia forte" alt="2010 Kia forte">
                <img src="imagenes/Sedan/2010 Kia forte (8).jpeg" title="2010 Kia forte" alt="2010 Kia forte">
                <img src="imagenes/Sedan/2010 Kia forte (9).jpeg" title="2010 Kia forte" alt="2010 Kia forte">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2010 Kia forte</h3>
                <div>
                    <p><b>Miles:</b>240.000</p>
                    <p><b>Cash:</b> $2.200</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $5.000(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.200(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2010 Kia forte')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2019 volkswagen jetta (1) N.webp" title="2019 volkswagen jetta" alt="2019 volkswagen jetta">
                <img src="imagenes/Sedan/2019 volkswagen jetta (2) N.webp" title="2019 volkswagen jetta" alt="2019 volkswagen jetta">
                <img src="imagenes/Sedan/2019 volkswagen jetta (3) N.webp" title="2019 volkswagen jetta" alt="2019 volkswagen jetta">
                <img src="imagenes/Sedan/2019 volkswagen jetta (4) N.webp" title="2019 volkswagen jetta" alt="2019 volkswagen jetta">
                <img src="imagenes/Sedan/2019 volkswagen jetta (5) N.webp" title="2019 volkswagen jetta" alt="2019 volkswagen jetta">
                <img src="imagenes/Sedan/2019 volkswagen jetta (6) N.webp" title="2019 volkswagen jetta" alt="2019 volkswagen jetta">
                <img src="imagenes/Sedan/2019 volkswagen jetta (7) N.webp" title="2019 volkswagen jetta" alt="2019 volkswagen jetta">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2019 volkswagen jetta</h3>
                <div>
                    <p><b>Miles:</b> 164.000</p>
                    <p><b>Cash:</b> $7.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $11.000(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.500(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2019 volkswagen jetta')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2010 Toyota Camrry (1).webp" title="2010 Toyota Camrry" alt="2010 Toyota Camrry">
                <img src="imagenes/Sedan/2010 Toyota Camrry (8).webp" title="2010 Toyota Camrry" alt="2010 Toyota Camrry">
                <img src="imagenes/Sedan/2010 Toyota Camrry (9).webp" title="2010 Toyota Camrry" alt="2010 Toyota Camrry">
                <img src="imagenes/Sedan/2010 Toyota Camrry (2).webp" title="2010 Toyota Camrry" alt="2010 Toyota Camrry">
                <img src="imagenes/Sedan/2010 Toyota Camrry (3).webp" title="2010 Toyota Camrry" alt="2010 Toyota Camrry">
                <img src="imagenes/Sedan/2010 Toyota Camrry (4).webp" title="2010 Toyota Camrry" alt="2010 Toyota Camrry">
                <img src="imagenes/Sedan/2010 Toyota Camrry (5).webp" title="2010 Toyota Camrry" alt="2010 Toyota Camrry">
                <img src="imagenes/Sedan/2010 Toyota Camrry (6).webp" title="2010 Toyota Camrry" alt="2010 Toyota Camrry">
                <img src="imagenes/Sedan/2010 Toyota Camrry (7).webp" title="2010 Toyota Camrry" alt="2010 Toyota Camrry">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2010 Toyota Camrry</h3>
                <div>
                    <p><b>Miles:</b> 208.000</p>
                    <p><b>Cash:</b> $4.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $9.000(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2010 Toyota Camrry')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2013 Toyota Prius (1).webp" title="2013 Toyota Prius" alt="2013 Toyota Prius">
                <img src="imagenes/Sedan/2013 Toyota Prius (2).webp" title="2013 Toyota Prius" alt="2013 Toyota Prius">
                <img src="imagenes/Sedan/2013 Toyota Prius (3).webp" title="2013 Toyota Prius" alt="2013 Toyota Prius">
                <img src="imagenes/Sedan/2013 Toyota Prius (4).webp" title="2013 Toyota Prius" alt="2013 Toyota Prius">
                <img src="imagenes/Sedan/2013 Toyota Prius (5).webp" title="2013 Toyota Prius" alt="2013 Toyota Prius">
                <img src="imagenes/Sedan/2013 Toyota Prius (6).webp" title="2013 Toyota Prius" alt="2013 Toyota Prius">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2013 Toyota Prius</h3>
                <div>
                    <p><b>Miles:</b> 180.000</p>
                    <p><b>Cash:</b> $5.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $10.000(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2013 Toyota Prius')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2015 Misubichi Lancer (1).webp" title="2015 Misubichi Lancer" alt="2015 Misubichi Lancer">
                <img src="imagenes/Sedan/2015 Misubichi Lancer (2).webp" title="2015 Misubichi Lancer" alt="2015 Misubichi Lancer">
                <img src="imagenes/Sedan/2015 Misubichi Lancer (3).webp" title="2015 Misubichi Lancer" alt="2015 Misubichi Lancer">
                <img src="imagenes/Sedan/2015 Misubichi Lancer (4).webp" title="2015 Misubichi Lancer" alt="2015 Misubichi Lancer">
                <img src="imagenes/Sedan/2015 Misubichi Lancer (5).webp" title="2015 Misubichi Lancer" alt="2015 Misubichi Lancer">
                <img src="imagenes/Sedan/2015 Misubichi Lancer (6).webp" title="2015 Misubichi Lancer" alt="2015 Misubichi Lancer">
                <img src="imagenes/Sedan/2015 Misubichi Lancer (7).webp" title="2015 Misubichi Lancer" alt="2015 Misubichi Lancer">
                <img src="imagenes/Sedan/2015 Misubichi Lancer (8).webp" title="2015 Misubichi Lancer" alt="2015 Misubichi Lancer">
                <img src="imagenes/Sedan/2015 Misubichi Lancer (9).webp" title="2015 Misubichi Lancer" alt="2015 Misubichi Lancer">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2015 Misubichi Lancer</h3>
                <div>
                    <p><b>Miles:</b> 93.000</p>
                    <p><b>Cash:</b> $5.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $9.000(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2015 Misubichi Lancer')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2015 Mazda (1).webp" title="2015 Mazda" alt="2015 Mazda">
                <img src="imagenes/Sedan/2015 Mazda (2).webp" title="2015 Mazda" alt="2015 Mazda">
                <img src="imagenes/Sedan/2015 Mazda (3).webp" title="2015 Mazda" alt="2015 Mazda">
                <img src="imagenes/Sedan/2015 Mazda (4).webp" title="2015 Mazda" alt="2015 Mazda">
                <img src="imagenes/Sedan/2015 Mazda (5).webp" title="2015 Mazda" alt="2015 Mazda">
                <img src="imagenes/Sedan/2015 Mazda (6).webp" title="2015 Mazda" alt="2015 Mazda">
                <img src="imagenes/Sedan/2015 Mazda (7).webp" title="2015 Mazda" alt="2015 Mazda">
                <img src="imagenes/Sedan/2015 Mazda (8).webp" title="2015 Mazda" alt="2015 Mazda">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2015 Mazda</h3>
                <div>
                    <p><b>Miles:</b> 136,752</p>
                    <p><b>Cash:</b> $7.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $10.500(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2015 Mazda')">Request Information</button>
            </div>
        </div>

        <!--More sedans here -->
    </div>
    <hr>
    <h2 id="SUV">SUV</h2>
    <hr>
    <div class="caja_img">
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2009 Honda pilot (1).jpeg" title="2009 Honda pilot" alt="2009 Honda pilot">
            <img src="imagenes/Suv/2009 Honda pilot (2).jpeg" title="2009 Honda pilot" alt="2009 Honda pilot">
            <img src="imagenes/Suv/2009 Honda pilot (4).jpeg" title="2009 Honda pilot" alt="2009 Honda pilot">
            <img src="imagenes/Suv/2009 Honda pilot (5).jpeg" title="2009 Honda pilot" alt="2009 Honda pilot">
            <img src="imagenes/Suv/2009 Honda pilot (3).jpeg" title="2009 Honda pilot" alt="2009 Honda pilot">
            <img src="imagenes/Suv/2009 Honda pilot (6).jpeg" title="2009 Honda pilot" alt="2009 Honda pilot">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2009 Honda pilot</h3>
                <div>
                    <p><b>Miles:</b> 196.000</p>
                    <p><b>Cash:</b> $5.000</p>
                </div>
                <button onclick="openForm('2009 Honda pilot')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2011 Lexus ct 200h híbrido  (1).jpeg" title="2011 Lexus ct 200h híbrido " alt="2011 Lexus ct 200h híbrido ">
            <img src="imagenes/Suv/2011 Lexus ct 200h híbrido  (3).jpeg" title="2011 Lexus ct 200h híbrido " alt="2011 Lexus ct 200h híbrido ">
            <img src="imagenes/Suv/2011 Lexus ct 200h híbrido  (8).jpeg" title="2011 Lexus ct 200h híbrido " alt="2011 Lexus ct 200h híbrido ">
            <img src="imagenes/Suv/2011 Lexus ct 200h híbrido  (4).jpeg" title="2011 Lexus ct 200h híbrido " alt="2011 Lexus ct 200h híbrido ">
            <img src="imagenes/Suv/2011 Lexus ct 200h híbrido  (5).jpeg" title="2011 Lexus ct 200h híbrido " alt="2011 Lexus ct 200h híbrido ">
            <img src="imagenes/Suv/2011 Lexus ct 200h híbrido  (6).jpeg" title="2011 Lexus ct 200h híbrido " alt="2011 Lexus ct 200h híbrido ">
            <img src="imagenes/Suv/2011 Lexus ct 200h híbrido  (7).jpeg" title="2011 Lexus ct 200h híbrido " alt="2011 Lexus ct 200h híbrido ">
            <img src="imagenes/Suv/2011 Lexus ct 200h híbrido  (2).jpeg" title="2011 Lexus ct 200h híbrido " alt="2011 Lexus ct 200h híbrido ">
            <img src="imagenes/Suv/2011 Lexus ct 200h híbrido  (9).jpeg" title="2011 Lexus ct 200h híbrido " alt="2011 Lexus ct 200h híbrido ">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2011 Lexus ct 200h híbrido</h3>
                <div>
                    <p><b>Miles:</b> 190.000</p>
                    <p><b>Cash:</b> $5.500</p>
                </div>
                <button onclick="openForm('2011 Lexus ct 200h híbrido')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2023 Toyota rav4  (1).jpeg" title="2023 Toyota rav4" alt="2023 Toyota rav4">
            <img src="imagenes/Suv/2023 Toyota rav4  (2).jpeg" title="2023 Toyota rav4" alt="2023 Toyota rav4">
            <img src="imagenes/Suv/2023 Toyota rav4  (3).jpeg" title="2023 Toyota rav4" alt="2023 Toyota rav4">
            <img src="imagenes/Suv/2023 Toyota rav4  (4).jpeg" title="2023 Toyota rav4" alt="2023 Toyota rav4">
            <img src="imagenes/Suv/2023 Toyota rav4  (5).jpeg" title="2023 Toyota rav4" alt="2023 Toyota rav4">
            <img src="imagenes/Suv/2023 Toyota rav4  (6).jpeg" title="2023 Toyota rav4" alt="2023 Toyota rav4">
            <img src="imagenes/Suv/2023 Toyota rav4  (7).jpeg" title="2023 Toyota rav4" alt="2023 Toyota rav4">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2023 Toyota rav4</h3>
                <div>
                    <p><b>Miles:</b> 22.000</p>
                    <p><b>Cash:</b> $30.000</p>
                </div>
                <button onclick="openForm('2023 Toyota rav4')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/Toyota Highlander 2013 (6).jpeg" title="Toyota Highlander 2013" alt="Toyota Highlander 2013">
            <img src="imagenes/Suv/Toyota Highlander 2013 (1).jpeg" title="Toyota Highlander 2013" alt="Toyota Highlander 2013">
            <img src="imagenes/Suv/Toyota Highlander 2013 (3).jpeg" title="Toyota Highlander 2013" alt="Toyota Highlander 2013">
            <img src="imagenes/Suv/Toyota Highlander 2013 (4).jpeg" title="Toyota Highlander 2013" alt="Toyota Highlander 2013">
            <img src="imagenes/Suv/Toyota Highlander 2013 (2).jpeg" title="Toyota Highlander 2013" alt="Toyota Highlander 2013">
            <img src="imagenes/Suv/Toyota Highlander 2013 (5).jpeg" title="Toyota Highlander 2013" alt="Toyota Highlander 2013">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>Toyota Highlander 2013</h3>
                <div>
                    <p><b>Miles:</b> 168.000</p>
                    <p><b>Cash:</b> $7.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b> $10.500 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('Toyota Highlander 2013')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2021 MITSUBISHI MIRAGE ES (1).jpeg" title="2021 MITSUBISHI MIRAGE ES" alt="2021 MITSUBISHI MIRAGE ES">
            <img src="imagenes/Suv/2021 MITSUBISHI MIRAGE ES (2).jpeg" title="2021 MITSUBISHI MIRAGE ES" alt="2021 MITSUBISHI MIRAGE ES">
            <img src="imagenes/Suv/2021 MITSUBISHI MIRAGE ES (3).jpeg" title="2021 MITSUBISHI MIRAGE ES" alt="2021 MITSUBISHI MIRAGE ES">
            <img src="imagenes/Suv/2021 MITSUBISHI MIRAGE ES (4).jpeg" title="2021 MITSUBISHI MIRAGE ES" alt="2021 MITSUBISHI MIRAGE ES">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2021 MITSUBISHI MIRAGE ES</h3>
                <div>
                    <p><b>Miles:</b> 52.000</p>
                    <p><b>Cash:</b> $8.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b> $12.000 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2021 MITSUBISHI MIRAGE ES')">Request Information</button>
            </div>
        </div>
        
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2017 Infiniti QX60 (1).jpeg" title="2017 Infiniti QX60" alt="2017 Infiniti QX60">
            <img src="imagenes/Suv/2017 Infiniti QX60 (2).jpeg" title="2017 Infiniti QX60" alt="2017 Infiniti QX60">
            <img src="imagenes/Suv/2017 Infiniti QX60 (3).jpeg" title="2017 Infiniti QX60" alt="2017 Infiniti QX60">
            <img src="imagenes/Suv/2017 Infiniti QX60 (4).jpeg" title="2017 Infiniti QX60" alt="2017 Infiniti QX60">
            <img src="imagenes/Suv/2017 Infiniti QX60 (5).jpeg" title="2017 Infiniti QX60" alt="2017 Infiniti QX60">
            <img src="imagenes/Suv/2017 Infiniti QX60 (6).jpeg" title="2017 Infiniti QX60" alt="2017 Infiniti QX60">
            <img src="imagenes/Suv/2017 Infiniti QX60 (7).jpeg" title="2017 Infiniti QX60" alt="2017 Infiniti QX60">
            <img src="imagenes/Suv/2017 Infiniti QX60 (8).jpeg" title="2017 Infiniti QX60" alt="2017 Infiniti QX60">
            <img src="imagenes/Suv/2017 Infiniti QX60 (9).jpeg" title="2017 Infiniti QX60" alt="2017 Infiniti QX60">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2017 Infiniti QX60</h3>
                <div>
                    <p><b>Miles:</b> 162.000</p>
                    <p><b>Cash:</b> $8.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$13.000  (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $3.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2017 Infiniti QX60')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2014 Toyota Yaris (1).jpeg" title="2014 Toyota Yaris" alt="2014 Toyota Yaris">
            <img src="imagenes/Suv/2014 Toyota Yaris (2).jpeg" title="2014 Toyota Yaris" alt="2014 Toyota Yaris">
            <img src="imagenes/Suv/2014 Toyota Yaris (3).jpeg" title="2014 Toyota Yaris" alt="2014 Toyota Yaris">
            <img src="imagenes/Suv/2014 Toyota Yaris (4).jpeg" title="2014 Toyota Yaris" alt="2014 Toyota Yaris">
            <img src="imagenes/Suv/2014 Toyota Yaris (5).jpeg" title="2014 Toyota Yaris" alt="2014 Toyota Yaris">
            <img src="imagenes/Suv/2014 Toyota Yaris (6).jpeg" title="2014 Toyota Yaris" alt="2014 Toyota Yaris">
            <img src="imagenes/Suv/2014 Toyota Yaris (7).jpeg" title="2014 Toyota Yaris" alt="2014 Toyota Yaris">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2014 Toyota Yaris</h3>
                <div>
                    <p><b>Miles:</b> 190.000</p>
                    <p><b>Cash:</b> $5.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$9.000  (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2014 Toyota Yaris')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2001 Acura mdx (1).jpeg" title="2001 Acura mdx" alt="2001 Acura mdx">
            <img src="imagenes/Suv/2001 Acura mdx (2).jpeg" title="2001 Acura mdx" alt="2001 Acura mdx">
            <img src="imagenes/Suv/2001 Acura mdx (3).jpeg" title="2001 Acura mdx" alt="2001 Acura mdx">
            <img src="imagenes/Suv/2001 Acura mdx (4).jpeg" title="2001 Acura mdx" alt="2001 Acura mdx">
            <img src="imagenes/Suv/2001 Acura mdx (5).jpeg" title="2001 Acura mdx" alt="2001 Acura mdx">
            <img src="imagenes/Suv/2001 Acura mdx (6).jpeg" title="2001 Acura mdx" alt="2001 Acura mdx">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2001 Acura mdx</h3>
                <div>
                    <p><b>Miles:</b> 218,000</p>
                    <p><b>Cash:</b> $2.400</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$5.000  (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.200 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2001 Acura mdx')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2009 honda crv (1).jpeg" title="2009 honda crv" alt="2009 honda crv">
            <img src="imagenes/Suv/2009 honda crv (6).jpeg" title="2009 honda crv" alt="2009 honda crv">
            <img src="imagenes/Suv/2009 honda crv (7).jpeg" title="2009 honda crv" alt="2009 honda crv">
            <img src="imagenes/Suv/2009 honda crv (2).jpeg" title="2009 honda crv" alt="2009 honda crv">
            <img src="imagenes/Suv/2009 honda crv (3).jpeg" title="2009 honda crv" alt="2009 honda crv">
            <img src="imagenes/Suv/2009 honda crv (4).jpeg" title="2009 honda crv" alt="2009 honda crv">
            <img src="imagenes/Suv/2009 honda crv (5).jpeg" title="2009 honda crv" alt="2009 honda crv">
            <img src="imagenes/Suv/2009 honda crv (8).jpeg" title="2009 honda crv" alt="2009 honda crv">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2009 honda crv</h3>
                <div>
                    <p><b>Miles:</b> 170.000</p>
                    <p><b>Cash:</b> $5.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$9.500  (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.700 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2009 honda crv')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2011 Chevrolet Suburban (1).jpeg" title="2011 Chevrolet Suburban" alt="2011 Chevrolet Suburban">
            <img src="imagenes/Suv/2011 Chevrolet Suburban (2).jpeg" title="2011 Chevrolet Suburban" alt="2011 Chevrolet Suburban">
            <img src="imagenes/Suv/2011 Chevrolet Suburban (3).jpeg" title="2011 Chevrolet Suburban" alt="2011 Chevrolet Suburban">
            <img src="imagenes/Suv/2011 Chevrolet Suburban (4).jpeg" title="2011 Chevrolet Suburban" alt="2011 Chevrolet Suburban">
            <img src="imagenes/Suv/2011 Chevrolet Suburban (5).jpeg" title="2011 Chevrolet Suburban" alt="2011 Chevrolet Suburban">
            <img src="imagenes/Suv/2011 Chevrolet Suburban (6).jpeg" title="2011 Chevrolet Suburban" alt="2011 Chevrolet Suburban">
            <img src="imagenes/Suv/2011 Chevrolet Suburban (7).jpeg" title="2011 Chevrolet Suburban" alt="2011 Chevrolet Suburban">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2011 Chevrolet Suburban</h3>
                <div>
                    <p><b>Miles:</b> 199.000</p>
                    <p><b>Cash:</b> $7.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$11.000  (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2011 Chevrolet Suburban')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2007 kia sportage (1).webp" title="2007 kia sportage" alt="2007 kia sportage">
            <img src="imagenes/Suv/2007 kia sportage (2).webp" title="2007 kia sportage" alt="2007 kia sportage">
            <img src="imagenes/Suv/2007 kia sportage (3).webp" title="2007 kia sportage" alt="2007 kia sportage">
            <img src="imagenes/Suv/2007 kia sportage (4).webp" title="2007 kia sportage" alt="2007 kia sportage">
            <img src="imagenes/Suv/2007 kia sportage (5).webp" title="2007 kia sportage" alt="2007 kia sportage">
            <img src="imagenes/Suv/2007 kia sportage (6).webp" title="2007 kia sportage" alt="2007 kia sportage">
            <img src="imagenes/Suv/2007 kia sportage (7).webp" title="2007 kia sportage" alt="2007 kia sportage">
            <img src="imagenes/Suv/2007 kia sportage (8).webp" title="2007 kia sportage" alt="2007 kia sportage">
            <img src="imagenes/Suv/2007 kia sportage (9).webp" title="2007 kia sportage" alt="2007 kia sportage">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2007 kia sportage</h3>
                <div>
                    <p><b>Miles:</b> 140,000</p>
                    <p><b>Cash:</b> $3.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$7,000  (Negotiable)</p> <!-- Garantia incluida-->
                </div>
                </div>
                <button onclick="openForm('2007 kia sportage')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2013 MERCEDES-BENZ GLK 350 (1).webp" title="2013 MERCEDES-BENZ GLK 350" alt="2013 MERCEDES-BENZ GLK 350">
            <img src="imagenes/Suv/2013 MERCEDES-BENZ GLK 350 (2).webp" title="2013 MERCEDES-BENZ GLK 350" alt="2013 MERCEDES-BENZ GLK 350">
            <img src="imagenes/Suv/2013 MERCEDES-BENZ GLK 350 (3).webp" title="2013 MERCEDES-BENZ GLK 350" alt="2013 MERCEDES-BENZ GLK 350">
            <img src="imagenes/Suv/2013 MERCEDES-BENZ GLK 350 (4).webp" title="2013 MERCEDES-BENZ GLK 350" alt="2013 MERCEDES-BENZ GLK 350">
            <img src="imagenes/Suv/2013 MERCEDES-BENZ GLK 350 (5).webp" title="2013 MERCEDES-BENZ GLK 350" alt="2013 MERCEDES-BENZ GLK 350">
            <img src="imagenes/Suv/2013 MERCEDES-BENZ GLK 350 (6).webp" title="2013 MERCEDES-BENZ GLK 350" alt="2013 MERCEDES-BENZ GLK 350">
            <img src="imagenes/Suv/2013 MERCEDES-BENZ GLK 350 (7).webp" title="2013 MERCEDES-BENZ GLK 350" alt="2013 MERCEDES-BENZ GLK 350">
            <img src="imagenes/Suv/2013 MERCEDES-BENZ GLK 350 (8).webp" title="2013 MERCEDES-BENZ GLK 350" alt="2013 MERCEDES-BENZ GLK 350">
            <img src="imagenes/Suv/2013 MERCEDES-BENZ GLK 350 (9).webp" title="2013 MERCEDES-BENZ GLK 350" alt="2013 MERCEDES-BENZ GLK 350">
            <img src="imagenes/Suv/2013 MERCEDES-BENZ GLK 350 (10).webp" title="2013 MERCEDES-BENZ GLK 350" alt="2013 MERCEDES-BENZ GLK 350">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2013 MERCEDES-BENZ</h3>
                <div>
                    <p><b>Miles:</b> 117.000</p>
                    <p><b>Cash:</b> $6.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$10,500  (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2013 MERCEDES-BENZ GLK 350')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (1).webp" title="2014 SUBARU FORESTER 2.5I PREMIUM" alt="2014 SUBARU FORESTER 2.5I PREMIUM">
            <img src="imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (2).webp" title="2014 SUBARU FORESTER 2.5I PREMIUM" alt="2014 SUBARU FORESTER 2.5I PREMIUM">
            <img src="imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (3).webp" title="2014 SUBARU FORESTER 2.5I PREMIUM" alt="2014 SUBARU FORESTER 2.5I PREMIUM">
            <img src="imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (4).webp" title="2014 SUBARU FORESTER 2.5I PREMIUM" alt="2014 SUBARU FORESTER 2.5I PREMIUM">
            <img src="imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (5).webp" title="2014 SUBARU FORESTER 2.5I PREMIUM" alt="2014 SUBARU FORESTER 2.5I PREMIUM">
            <img src="imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (6).webp" title="2014 SUBARU FORESTER 2.5I PREMIUM" alt="2014 SUBARU FORESTER 2.5I PREMIUM">
            <img src="imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (7).webp" title="2014 SUBARU FORESTER 2.5I PREMIUM" alt="2014 SUBARU FORESTER 2.5I PREMIUM">
            <img src="imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (8).webp" title="2014 SUBARU FORESTER 2.5I PREMIUM" alt="2014 SUBARU FORESTER 2.5I PREMIUM">
            <img src="imagenes/Suv/2014 SUBARU FORESTER 2.5I PREMIUM (9).webp" title="2014 SUBARU FORESTER 2.5I PREMIUM" alt="2014 SUBARU FORESTER 2.5I PREMIUM">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2014 SUBARU FORESTER</h3>
                <div>
                    <p><b>Miles:</b> 185.089</p>
                    <p><b>Cash:</b> $4.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$7,500 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2014 SUBARU FORESTER 2.5I PREMIUM')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2007 Chevrolet tahoe (1).webp" title="2007 Chevrolet tahoe" alt="2007 Chevrolet tahoe">
            <img src="imagenes/Suv/2007 Chevrolet tahoe (2).webp" title="2007 Chevrolet tahoe" alt="2007 Chevrolet tahoe">
            <img src="imagenes/Suv/2007 Chevrolet tahoe (3).webp" title="2007 Chevrolet tahoe" alt="2007 Chevrolet tahoe">
            <img src="imagenes/Suv/2007 Chevrolet tahoe (4).webp" title="2007 Chevrolet tahoe" alt="2007 Chevrolet tahoe">
            <img src="imagenes/Suv/2007 Chevrolet tahoe (5).webp" title="2007 Chevrolet tahoe" alt="2007 Chevrolet tahoe">
            <img src="imagenes/Suv/2007 Chevrolet tahoe (6).webp" title="2007 Chevrolet tahoe" alt="2007 Chevrolet tahoe">
            <img src="imagenes/Suv/2007 Chevrolet tahoe (7).webp" title="2007 Chevrolet tahoe" alt="2007 Chevrolet tahoe">
            <img src="imagenes/Suv/2007 Chevrolet tahoe (8).webp" title="2007 Chevrolet tahoe" alt="2007 Chevrolet tahoe">
            <img src="imagenes/Suv/2007 Chevrolet tahoe (9).webp" title="2007 Chevrolet tahoe" alt="2007 Chevrolet tahoe">
            <img src="imagenes/Suv/2007 Chevrolet tahoe (10).webp" title="2007 Chevrolet tahoe" alt="2007 Chevrolet tahoe">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2007 Chevrolet tahoe</h3>
                <div>
                    <p><b>Miles:</b> 220.000</p>
                    <p><b>Cash:</b> $6.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$10,500 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2007 Chevrolet tahoe')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2014 Land Rover (1).webp" title="2014 Land Rover" alt="2014 Land Rover">
            <img src="imagenes/Suv/2014 Land Rover (2).webp" title="2014 Land Rover" alt="2014 Land Rover">
            <img src="imagenes/Suv/2014 Land Rover (3).webp" title="2014 Land Rover" alt="2014 Land Rover">
            <img src="imagenes/Suv/2014 Land Rover (4).webp" title="2014 Land Rover" alt="2014 Land Rover">
            <img src="imagenes/Suv/2014 Land Rover (5).webp" title="2014 Land Rover" alt="2014 Land Rover">
            <img src="imagenes/Suv/2014 Land Rover (6).webp" title="2014 Land Rover" alt="2014 Land Rover">
            <img src="imagenes/Suv/2014 Land Rover (7).webp" title="2014 Land Rover" alt="2014 Land Rover">
            <img src="imagenes/Suv/2014 Land Rover (8).webp" title="2014 Land Rover" alt="2014 Land Rover">
            <img src="imagenes/Suv/2014 Land Rover (9).webp" title="2014 Land Rover" alt="2014 Land Rover">
            <img src="imagenes/Suv/2014 Land Rover (10).webp" title="2014 Land Rover" alt="2014 Land Rover">
            <img src="imagenes/Suv/2014 Land Rover (11).webp" title="2014 Land Rover" alt="2014 Land Rover">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2014 Land Rover</h3>
                <div>
                    <p><b>Miles:</b> 122.009</p>
                    <p><b>Cash:</b> $7.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$12,000 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2014 Land Rover')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/Dodge caravane 2006 (1).webp" title="Dodge caravane 2006" alt="Dodge caravane 2006">
            <img src="imagenes/Suv/Dodge caravane 2006 (2).webp" title="Dodge caravane 2006" alt="Dodge caravane 2006">
            <img src="imagenes/Suv/Dodge caravane 2006 (3).webp" title="Dodge caravane 2006" alt="Dodge caravane 2006">
            <img src="imagenes/Suv/Dodge caravane 2006 (4).webp" title="Dodge caravane 2006" alt="Dodge caravane 2006">
            <img src="imagenes/Suv/Dodge caravane 2006 (5).webp" title="Dodge caravane 2006" alt="Dodge caravane 2006">
            <img src="imagenes/Suv/Dodge caravane 2006 (6).webp" title="Dodge caravane 2006" alt="Dodge caravane 2006">
            <img src="imagenes/Suv/Dodge caravane 2006 (7).webp" title="Dodge caravane 2006" alt="Dodge caravane 2006">
            <img src="imagenes/Suv/Dodge caravane 2006 (8).webp" title="Dodge caravane 2006" alt="Dodge caravane 2006">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>Dodge caravane 2006</h3>
                <div>
                    <p><b>Miles:</b> 223.000</p>
                    <p><b>Cash:</b> $2.000</p>
                </div>
                <button onclick="openForm('Dodge caravane 2006')">Request Information</button>
            </div>
        </div>
        <!--More suvs here-->
    </div>
    <hr>
    <h2 id="Trucks">Trucks</h2>
    <hr>
    <div class="caja_img">
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Trucks/2002 DODGE DAKOTA SPORT (1).jpeg" title="2002 DODGE DAKOTA SPORT" alt="2002 DODGE DAKOTA SPORT ">
                <img src="imagenes/Trucks/2002 DODGE DAKOTA SPORT (2).jpeg" title="2002 DODGE DAKOTA SPORT" alt="2002 DODGE DAKOTA SPORT ">
                <img src="imagenes/Trucks/2002 DODGE DAKOTA SPORT (3).jpeg" title="2002 DODGE DAKOTA SPORT" alt="2002 DODGE DAKOTA SPORT ">
                <img src="imagenes/Trucks/2002 DODGE DAKOTA SPORT (4).jpeg" title="2002 DODGE DAKOTA SPORT" alt="2002 DODGE DAKOTA SPORT ">
                <img src="imagenes/Trucks/2002 DODGE DAKOTA SPORT (5).jpeg" title="2002 DODGE DAKOTA SPORT" alt="2002 DODGE DAKOTA SPORT ">
                <img src="imagenes/Trucks/2002 DODGE DAKOTA SPORT (6).jpeg" title="2002 DODGE DAKOTA SPORT" alt="2002 DODGE DAKOTA SPORT ">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2002 DODGE DAKOTA SPORT</h3>
                <div>
                    <p><b>Miles:</b> 156.000</p>
                    <p><b>Cash:</b> $4.500</p>
                    
                </div>
                <button onclick="openForm('2002 DODGE DAKOTA SPORT')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Trucks/2014 Dodge ram (1) N.webp" title="2014 Dodge ram" alt="2014 Dodge ram ">
                <img src="imagenes/Trucks/2014 Dodge ram (2) N.webp" title="2014 Dodge ram" alt="2014 Dodge ram ">
                <img src="imagenes/Trucks/2014 Dodge ram (3) N.webp" title="2014 Dodge ram" alt="2014 Dodge ram ">
                <img src="imagenes/Trucks/2014 Dodge ram (4) N.webp" title="2014 Dodge ram" alt="2014 Dodge ram ">
                <img src="imagenes/Trucks/2014 Dodge ram (5) N.webp" title="2014 Dodge ram" alt="2014 Dodge ram ">
                <img src="imagenes/Trucks/2014 Dodge ram (6) N.webp" title="2014 Dodge ram" alt="2014 Dodge ram ">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2014 Dodge ram</h3>
                <div>
                    <p><b>Miles:</b> 130.000</p>
                    <p><b>Cash:</b> $10.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                <p><b>Financing:</b> $14.500 (Negotiable)</p>
                <p><b>Down:</b> $3.000 (Negotiable)</p>
                </div>
                    
                </div>
                <button onclick="openForm('2014 Dodge ram')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Trucks/2009 gmc sierra (1).webp" title="2009 gmc sierra" alt="2009 gmc sierra ">
                <img src="imagenes/Trucks/2009 gmc sierra (5).webp" title="2009 gmc sierra" alt="2009 gmc sierra ">
                <img src="imagenes/Trucks/2009 gmc sierra (6).webp" title="2009 gmc sierra" alt="2009 gmc sierra ">
                <img src="imagenes/Trucks/2009 gmc sierra (7).webp" title="2009 gmc sierra" alt="2009 gmc sierra ">
                <img src="imagenes/Trucks/2009 gmc sierra (8).webp" title="2009 gmc sierra" alt="2009 gmc sierra ">
                <img src="imagenes/Trucks/2009 gmc sierra (2).webp" title="2009 gmc sierra" alt="2009 gmc sierra ">
                <img src="imagenes/Trucks/2009 gmc sierra (3).webp" title="2009 gmc sierra" alt="2009 gmc sierra ">
                <img src="imagenes/Trucks/2009 gmc sierra (4).webp" title="2009 gmc sierra" alt="2009 gmc sierra ">
                <img src="imagenes/Trucks/2009 gmc sierra (9).webp" title="2009 gmc sierra" alt="2009 gmc sierra ">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2009 gmc sierra</h3>
                <div>
                    <p><b>Miles:</b> 180.000 </p>
                    <p><b>Cash:</b> $6.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                <p><b>Financing:</b> $10.500 (Negotiable)</p>
                <p><b>Down:</b> $2.500 (Negotiable)</p>
                </div>
                    
                </div>
                <button onclick="openForm('2009 gmc sierra')">Request Information</button>
            </div>
        </div>
       
        <!--More Trucks here -->
    </div>
    <hr>
    <h2 id="Luxury">Luxury</h2>
    <hr>
    <div class="caja_img">
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Luxury/2011 BMW x6 (1).jpeg" title="2011 BMW x6" alt="2011 BMW x6">
            <img src="imagenes/Luxury/2011 BMW x6 (2).jpeg" title="2011 BMW x6" alt="2011 BMW x6">
            <img src="imagenes/Luxury/2011 BMW x6 (4).jpeg" title="2011 BMW x6" alt="2011 BMW x6">
            <img src="imagenes/Luxury/2011 BMW x6 (5).jpeg" title="2011 BMW x6" alt="2011 BMW x6">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2011 BMW x6</h3>
                <div>
                    <p><b>Miles:</b> 131.000</p>
                    <p><b>Cash:</b> $6.200</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                <p><b>Financing:</b> $10.500 (Negotiable)</p>
                <p><b>Down:</b> $2.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2011 BMW x6')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Luxury/2015 BMW 3 Series 3201 (1).jpeg" title="2015 BMW 3 Series 3201" alt="2015 BMW 3 Series 3201">
            <img src="imagenes/Luxury/2015 BMW 3 Series 3201 (2).jpeg" title="2015 BMW 3 Series 3201" alt="2015 BMW 3 Series 3201">
            <img src="imagenes/Luxury/2015 BMW 3 Series 3201 (3).jpeg" title="2015 BMW 3 Series 3201" alt="2015 BMW 3 Series 3201">
            <img src="imagenes/Luxury/2015 BMW 3 Series 3201 (4).jpeg" title="2015 BMW 3 Series 3201" alt="2015 BMW 3 Series 3201">
            <img src="imagenes/Luxury/2015 BMW 3 Series 3201 (5).jpeg" title="2015 BMW 3 Series 3201" alt="2015 BMW 3 Series 3201">
            <img src="imagenes/Luxury/2015 BMW 3 Series 3201 (6).jpeg" title="2015 BMW 3 Series 3201" alt="2015 BMW 3 Series 3201">
            <img src="imagenes/Luxury/2015 BMW 3 Series 3201 (7).jpeg" title="2015 BMW 3 Series 3201" alt="2015 BMW 3 Series 3201">
            <img src="imagenes/Luxury/2015 BMW 3 Series 3201 (8).jpeg" title="2015 BMW 3 Series 3201" alt="2015 BMW 3 Series 3201">
            <img src="imagenes/Luxury/2015 BMW 3 Series 3201 (9).jpeg" title="2015 BMW 3 Series 3201" alt="2015 BMW 3 Series 3201">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2015 BMW 3 Series 3201</h3>
                <div>
                    <p><b>Miles:</b> 169,317</p>
                    <p><b>Cash:</b> $5.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                <p><b>Financing:</b> $10.500 (Negotiable)</p>
                <p><b>Down:</b> $1.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2015 BMW 3 Series 3201')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Luxury/2008 cadillax Dts v8 (1).webp" title="2008 cadillax Dts v8" alt="2008 cadillax Dts v8">
            <img src="imagenes/Luxury/2008 cadillax Dts v8 (2).webp" title="2008 cadillax Dts v8" alt="2008 cadillax Dts v8">
            <img src="imagenes/Luxury/2008 cadillax Dts v8 (3).webp" title="2008 cadillax Dts v8" alt="2008 cadillax Dts v8">
            <img src="imagenes/Luxury/2008 cadillax Dts v8 (4).webp" title="2008 cadillax Dts v8" alt="2008 cadillax Dts v8">
            <img src="imagenes/Luxury/2008 cadillax Dts v8 (5).webp" title="2008 cadillax Dts v8" alt="2008 cadillax Dts v8">
            <img src="imagenes/Luxury/2008 cadillax Dts v8 (6).webp" title="2008 cadillax Dts v8" alt="2008 cadillax Dts v8">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2008 cadillax Dts v8</h3>
                <div>
                    <p><b>Miles:</b> 139.000</p>
                    <p><b>Cash:</b> $4.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                <p><b>Financing:</b> $8.000 (Negotiable)</p>
                <p><b>Down:</b> $1.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2008 cadillax Dts v8')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC (1).webp" title="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC" alt="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC">
            <img src="imagenes/Suv/2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC (2).webp" title="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC" alt="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC">
            <img src="imagenes/Suv/2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC (3).webp" title="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC" alt="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC">
            <img src="imagenes/Suv/2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC (4).webp" title="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC" alt="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC">
            <img src="imagenes/Suv/2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC (5).webp" title="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC" alt="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC">
            <img src="imagenes/Suv/2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC (6).webp" title="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC" alt="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC">
            <img src="imagenes/Suv/2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC (7).webp" title="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC" alt="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC">
            <img src="imagenes/Suv/2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC (8).webp" title="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC" alt="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC">
            <img src="imagenes/Suv/2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC (9).webp" title="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC" alt="2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2014 MERCEDES-BENZ</h3>
                <div>
                    <p><b>Miles:</b> 109.000 </p>
                    <p><b>Cash:</b> $11.300</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$15,500 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $4.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2014 MERCEDES-BENZ GL-CLASS GL 450 4MATIC')">Request Information</button>
            </div>
        </div>

        <div class="car">
            <div class="car-images">
            <img src="imagenes/Luxury/2011 BMW serie 3 (1).webp" title="2011 BMW serie 3" alt="2011 BMW serie 3">
            <img src="imagenes/Luxury/2011 BMW serie 3 (2).webp" title="2011 BMW serie 3" alt="2011 BMW serie 3">
            <img src="imagenes/Luxury/2011 BMW serie 3 (3).webp" title="2011 BMW serie 3" alt="2011 BMW serie 3">
            <img src="imagenes/Luxury/2011 BMW serie 3 (4).webp" title="2011 BMW serie 3" alt="2011 BMW serie 3">
            <img src="imagenes/Luxury/2011 BMW serie 3 (5).webp" title="2011 BMW serie 3" alt="2011 BMW serie 3">
            <img src="imagenes/Luxury/2011 BMW serie 3 (6).webp" title="2011 BMW serie 3" alt="2011 BMW serie 3">
            <img src="imagenes/Luxury/2011 BMW serie 3 (7).webp" title="2011 BMW serie 3" alt="2011 BMW serie 3">
            <img src="imagenes/Luxury/2011 BMW serie 3 (8).webp" title="2011 BMW serie 3" alt="2011 BMW serie 3">
            <img src="imagenes/Luxury/2011 BMW serie 3 (9).webp" title="2011 BMW serie 3" alt="2011 BMW serie 3">
            <img src="imagenes/Luxury/2011 BMW serie 3 (10).webp" title="2011 BMW serie 3" alt="2011 BMW serie 3">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2011 BMW serie 3</h3>
                <div>
                    <p><b>Miles:</b>110.000</p>
                    <p><b>Cash:</b> $5.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                <p><b>Financing:</b> $9.500 (Negotiable)</p>
                <p><b>Down:</b> $1.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2011 BMW serie 3')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Luxury/2018 Subaru brz límite (1).webp" title="2018 Subaru brz límite" alt="2018 Subaru brz límite">
            <img src="imagenes/Luxury/2018 Subaru brz límite (2).webp" title="2018 Subaru brz límite" alt="2018 Subaru brz límite">
            <img src="imagenes/Luxury/2018 Subaru brz límite (3).webp" title="2018 Subaru brz límite" alt="2018 Subaru brz límite">
            <img src="imagenes/Luxury/2018 Subaru brz límite (4).webp" title="2018 Subaru brz límite" alt="2018 Subaru brz límite">
            <img src="imagenes/Luxury/2018 Subaru brz límite (5).webp" title="2018 Subaru brz límite" alt="2018 Subaru brz límite">
            <img src="imagenes/Luxury/2018 Subaru brz límite (6).webp" title="2018 Subaru brz límite" alt="2018 Subaru brz límite">
            <img src="imagenes/Luxury/2018 Subaru brz límite (7).webp" title="2018 Subaru brz límite" alt="2018 Subaru brz límite">
            <img src="imagenes/Luxury/2018 Subaru brz límite (8).webp" title="2018 Subaru brz límite" alt="2018 Subaru brz límite">
            <img src="imagenes/Luxury/2018 Subaru brz límite (9).webp" title="2018 Subaru brz límite" alt="2018 Subaru brz límite">
            <img src="imagenes/Luxury/2018 Subaru brz límite (10).webp" title="2018 Subaru brz límite" alt="2018 Subaru brz límite">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2018 Subaru brz límite</h3>
                <div>
                    <p><b>Miles:</b>150.000 </p>
                    <p><b>Cash:</b> $11.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                <p><b>Financing:</b> $16.500 (Negotiable)</p>
                <p><b>Down:</b> $4.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2018 Subaru brz límite')">Request Information</button>
            </div>
        </div>
    <!-- More Luxury here-->
    </div>
    <hr>
    <h2 id="Boats">Boats</h2>
    <hr>
    <div class="caja_img">
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (1).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (2).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (3).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (4).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (5).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (6).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (7).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (8).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (9).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (10).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (11).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (12).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (13).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            <img src="imagenes/Boats/Yamaha 2013 19ft  AR190 jetski boat (14).jpeg" title="Yamaha 2013 19ft  AR190 jetski boa" alt="Yamaha 2013 19ft  AR190 jetski boa">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>Yamaha 2013 19ft</h3>
                <div>
                    <p><b>Miles:</b> 147.000</p>
                    <p><b>Cash:</b> $18.500</p>
                   <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                <p><b>Financing:</b> $28.000 (Negotiable)</p>
                <p><b>Down:</b> $9.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('Yamaha 2013 19ft')">Request Information</button>
            </div>
        </div>
    </div>

   
    <div id="contactForm" class="form-popup">
    <form class="form-container" action="https://formspree.io/f/xgvaerjo" method="POST" onsubmit="return validarenvio()">
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