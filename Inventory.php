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
        <li><a href="#Luxury">Luxury</a></li> <!-- Prueba-->
        <li><a href="#Boats">Boats</a></li>
    </ul>
</div>
<h2 id="Sedan">Sedan</h2>
<hr>
    <div class="caja_img">
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2013 Toyota Corolla LE (1).jpeg" title="2013 Toyota Corolla LE" alt="2013 Toyota Corolla LE">
                <img src="imagenes/Sedan/2013 Toyota Corolla LE (4).jpeg" title="2013 Toyota Corolla LE" alt="2013 Toyota Corolla LE">
                <img src="imagenes/Sedan/2013 Toyota Corolla LE (2).jpeg" title="2013 Toyota Corolla LE" alt="2013 Toyota Corolla LE">
                <img src="imagenes/Sedan/2013 Toyota Corolla LE (5).jpeg" title="2013 Toyota Corolla LE" alt="2013 Toyota Corolla LE">
                <img src="imagenes/Sedan/2013 Toyota Corolla LE (3).jpeg" title="2013 Toyota Corolla LE" alt="2013 Toyota Corolla LE">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2013 Toyota Corolla LE</h3>
                <div>
                    <p><b>Miles:</b> 166,397</p>
                    <p><b>Cash:</b> $6,500</p>
                </div>
                <button onclick="openForm('2013 Toyota Corolla LE')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2013 Toyota Corolla LE (1).webp" title="2013 Toyota Corolla LE" alt="2013 Toyota Corolla LE">
                <img src="imagenes/Sedan/2013 Toyota Corolla LE (4).webp" title="2013 Toyota Corolla LE" alt="2013 Toyota Corolla LE">
                <img src="imagenes/Sedan/2013 Toyota Corolla LE (2).webp" title="2013 Toyota Corolla LE" alt="2013 Toyota Corolla LE">
                <img src="imagenes/Sedan/2013 Toyota Corolla LE (5).webp" title="2013 Toyota Corolla LE" alt="2013 Toyota Corolla LE">
                <img src="imagenes/Sedan/2013 Toyota Corolla LE (3).webp" title="2013 Toyota Corolla LE" alt="2013 Toyota Corolla LE">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2013 Toyota Corolla LE</h3>
                <div>
                    <p><b>Miles:</b> 166,397</p>
                    <p><b>Cash:</b> $6,500</p>
                </div>
                <button onclick="openForm('2013 Toyota Corolla LE')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2011 Toyota Corolla  (1).jpeg" title="2011 Toyota Corolla " alt="2011 Toyota Corolla ">
                <img src="imagenes/Sedan/2011 Toyota Corolla  (2).jpeg" title="2011 Toyota Corolla " alt="2011 Toyota Corolla ">
                <img src="imagenes/Sedan/2011 Toyota Corolla  (3).jpeg" title="2011 Toyota Corolla " alt="2011 Toyota Corolla ">
                <img src="imagenes/Sedan/2011 Toyota Corolla  (5).jpeg" title="2011 Toyota Corolla " alt="2011 Toyota Corolla ">
                <img src="imagenes/Sedan/2011 Toyota Corolla  (4).jpeg" title="2011 Toyota Corolla " alt="2011 Toyota Corolla ">
                <img src="imagenes/Sedan/2011 Toyota Corolla  (6).jpeg" title="2011 Toyota Corolla " alt="2011 Toyota Corolla ">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2011 Toyota Corolla </h3>
                <div>
                    <p><b>Miles:</b> 229.000</p>
                    <p><b>Cash:</b> $5,500</p>
                </div>
                <button onclick="openForm('2011 Toyota Corolla ')">Request Information</button>
            </div>
        </div>
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
                <img src="imagenes/Sedan/2015 Dodge Dart SXT (1).jpeg" title="2015 Dodge Dart SXT" alt="2015 Dodge Dart SXT">
                <img src="imagenes/Sedan/2015 Dodge Dart SXT (2).jpeg" title="2015 Dodge Dart SXT" alt="2015 Dodge Dart SXT">
                <img src="imagenes/Sedan/2015 Dodge Dart SXT (3).jpeg" title="2015 Dodge Dart SXT" alt="2015 Dodge Dart SXT">
                <img src="imagenes/Sedan/2015 Dodge Dart SXT (5).jpeg" title="2015 Dodge Dart SXT" alt="2015 Dodge Dart SXT">
                <img src="imagenes/Sedan/2015 Dodge Dart SXT (4).jpeg" title="2015 Dodge Dart SXT" alt="2015 Dodge Dart SXT">
                <img src="imagenes/Sedan/2015 Dodge Dart SXT (6).jpeg" title="2015 Dodge Dart SXT" alt="2015 Dodge Dart SXT">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2015 Dodge Dart SXT</h3>
                <div>
                    <p><b>Miles:</b> 77,501</p>
                    <p><b>Cash:</b> $4.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $9.500(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.700(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2015 Dodge Dart SXT')">Request Information</button>
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
                <img src="imagenes/Sedan/2017 Mazda 3 sport (1).jpeg" title="2017 Mazda 3 sport" alt="2017 Mazda 3 sport">
                <img src="imagenes/Sedan/2017 Mazda 3 sport (5).jpeg" title="2017 Mazda 3 sport" alt="2017 Mazda 3 sport">
                <img src="imagenes/Sedan/2017 Mazda 3 sport (6).jpeg" title="2017 Mazda 3 sport" alt="2017 Mazda 3 sport">
                <img src="imagenes/Sedan/2017 Mazda 3 sport (7).jpeg" title="2017 Mazda 3 sport" alt="2017 Mazda 3 sport">
                <img src="imagenes/Sedan/2017 Mazda 3 sport (2).jpeg" title="2017 Mazda 3 sport" alt="2017 Mazda 3 sport">
                <img src="imagenes/Sedan/2017 Mazda 3 sport (3).jpeg" title="2017 Mazda 3 sport" alt="2017 Mazda 3 sport">
                <img src="imagenes/Sedan/2017 Mazda 3 sport (4).jpeg" title="2017 Mazda 3 sport" alt="2017 Mazda 3 sport">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2017 Mazda 3 sport</h3>
                <div>
                    <p><b>Miles:</b> 147.000</p>
                    <p><b>Cash:</b> $5.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $11.000(Negotiable)</p> <!-- Garantia incluida-->
                </div>
                </div>
                <button onclick="openForm('2017 Mazda 3 sport')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2018 HYUNDAI ELANTRA SEL (1).jpeg" title="2018 HYUNDAI ELANTRA SEL" alt="2018 HYUNDAI ELANTRA SEL">
                <img src="imagenes/Sedan/2018 HYUNDAI ELANTRA SEL (3).jpeg" title="2018 HYUNDAI ELANTRA SEL" alt="2018 HYUNDAI ELANTRA SEL">
                <img src="imagenes/Sedan/2018 HYUNDAI ELANTRA SEL (4).jpeg" title="2018 HYUNDAI ELANTRA SEL" alt="2018 HYUNDAI ELANTRA SEL">
                <img src="imagenes/Sedan/2018 HYUNDAI ELANTRA SEL (5).jpeg" title="2018 HYUNDAI ELANTRA SEL" alt="2018 HYUNDAI ELANTRA SEL">
                <img src="imagenes/Sedan/2018 HYUNDAI ELANTRA SEL (6).jpeg" title="2018 HYUNDAI ELANTRA SEL" alt="2018 HYUNDAI ELANTRA SEL">
                <img src="imagenes/Sedan/2018 HYUNDAI ELANTRA SEL (2).jpeg" title="2018 HYUNDAI ELANTRA SEL" alt="2018 HYUNDAI ELANTRA SEL">
                <img src="imagenes/Sedan/2018 HYUNDAI ELANTRA SEL (7).jpeg" title="2018 HYUNDAI ELANTRA SEL" alt="2018 HYUNDAI ELANTRA SEL">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2018 HYUNDAI ELANTRA SEL</h3>
                <div>
                    <p><b>Miles:</b> 115.000</p>
                    <p><b>Cash:</b> $8.500</p>
                </div>
                <button onclick="openForm('2018 HYUNDAI ELANTRA SEL')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2016 Infiniti Q50 PREMIUM (1).jpeg" title="2016 Infiniti Q50 PREMIUM" alt="2016 Infiniti Q50 PREMIUM">
                <img src="imagenes/Sedan/2016 Infiniti Q50 PREMIUM (3).jpeg" title="2016 Infiniti Q50 PREMIUM" alt="2016 Infiniti Q50 PREMIUM">
                <img src="imagenes/Sedan/2016 Infiniti Q50 PREMIUM (4).jpeg" title="2016 Infiniti Q50 PREMIUM" alt="2016 Infiniti Q50 PREMIUM">
                <img src="imagenes/Sedan/2016 Infiniti Q50 PREMIUM (5).jpeg" title="2016 Infiniti Q50 PREMIUM" alt="2016 Infiniti Q50 PREMIUM">
                <img src="imagenes/Sedan/2016 Infiniti Q50 PREMIUM (6).jpeg" title="2016 Infiniti Q50 PREMIUM" alt="2016 Infiniti Q50 PREMIUM">
                <img src="imagenes/Sedan/2016 Infiniti Q50 PREMIUM (2).jpeg" title="2016 Infiniti Q50 PREMIUM" alt="2016 Infiniti Q50 PREMIUM">
                <img src="imagenes/Sedan/2016 Infiniti Q50 PREMIUM (7).jpeg" title="2016 Infiniti Q50 PREMIUM" alt="2016 Infiniti Q50 PREMIUM">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2016 Infiniti Q50 PREMIUM</h3>
                <div>
                    <p><b>Miles:</b>162,059</p>
                    <p><b>Cash:</b> $8.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $14.500(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $4.000(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2016 Infiniti Q50 PREMIUM')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2020 Nissan versa  (1).jpeg" title="2020 Nissan versa" alt="2020 Nissan versa">
                <img src="imagenes/Sedan/2020 Nissan versa  (2).jpeg" title="2020 Nissan versa" alt="2020 Nissan versa">
                <img src="imagenes/Sedan/2020 Nissan versa  (3).jpeg" title="2020 Nissan versa" alt="2020 Nissan versa">
                <img src="imagenes/Sedan/2020 Nissan versa  (4).jpeg" title="2020 Nissan versa" alt="2020 Nissan versa">
                <img src="imagenes/Sedan/2020 Nissan versa  (5).jpeg" title="2020 Nissan versa" alt="2020 Nissan versa">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2020 Nissan versa</h3>
                <div>
                    <p><b>Miles:</b>100.000</p>
                    <p><b>Cash:</b> $7.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $11.000(Negotiable)</p> <!-- Garantia incluida-->
                </div>
                </div>
                <button onclick="openForm('2020 Nissan versa')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2019Toyota Corolla (1).jpeg" title="2019Toyota Corolla" alt="2019Toyota Corolla">
                <img src="imagenes/Sedan/2019Toyota Corolla (2).jpeg" title="2019Toyota Corolla" alt="2019Toyota Corolla">
                <img src="imagenes/Sedan/2019Toyota Corolla (3).jpeg" title="2019Toyota Corolla" alt="2019Toyota Corolla">
                <img src="imagenes/Sedan/2019Toyota Corolla (4).jpeg" title="2019Toyota Corolla" alt="2019Toyota Corolla">
                <img src="imagenes/Sedan/2019Toyota Corolla (5).jpeg" title="2019Toyota Corolla" alt="2019Toyota Corolla">
                <img src="imagenes/Sedan/2019Toyota Corolla (6).jpeg" title="2019Toyota Corolla" alt="2019Toyota Corolla">
                <img src="imagenes/Sedan/2019Toyota Corolla (7).jpeg" title="2019Toyota Corolla" alt="2019Toyota Corolla">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2019 Toyota Corolla</h3>
                <div>
                    <p><b>Miles:</b>399.000</p>
                    <p><b>Cash:</b> $4.000</p>
                </div>
                <button onclick="openForm('2019Toyota Corolla')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2015 Honda Civic EX (1).jpeg" title="2015 Honda Civic EX" alt="2015 Honda Civic EX">
                <img src="imagenes/Sedan/2015 Honda Civic EX (2).jpeg" title="2015 Honda Civic EX" alt="2015 Honda Civic EX">
                <img src="imagenes/Sedan/2015 Honda Civic EX (3).jpeg" title="2015 Honda Civic EX" alt="2015 Honda Civic EX">
                <img src="imagenes/Sedan/2015 Honda Civic EX (4).jpeg" title="2015 Honda Civic EX" alt="2015 Honda Civic EX">
                <img src="imagenes/Sedan/2015 Honda Civic EX (5).jpeg" title="2015 Honda Civic EX" alt="2015 Honda Civic EX">
                <img src="imagenes/Sedan/2015 Honda Civic EX (6).jpeg" title="2015 Honda Civic EX" alt="2015 Honda Civic EX">
                <img src="imagenes/Sedan/2015 Honda Civic EX (7).jpeg" title="2015 Honda Civic EX" alt="2015 Honda Civic EX">
                <img src="imagenes/Sedan/2015 Honda Civic EX (8).jpeg" title="2015 Honda Civic EX" alt="2015 Honda Civic EX">
                <img src="imagenes/Sedan/2015 Honda Civic EX (9).jpeg" title="2015 Honda Civic EX" alt="2015 Honda Civic EX">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2015 Honda Civic EX</h3>
                <div>
                    <p><b>Miles:</b>161,024</p>
                    <p><b>Cash:</b> $7.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $11.500(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.000(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2015 Honda Civic EX')">Request Information</button>
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
                <img src="imagenes/Sedan/2020 Hyundai Elantra (1).jpeg" title="2020 Hyundai Elantra" alt="2020 Hyundai Elantra">
                <img src="imagenes/Sedan/2020 Hyundai Elantra (2).jpeg" title="2020 Hyundai Elantra" alt="2020 Hyundai Elantra">
                <img src="imagenes/Sedan/2020 Hyundai Elantra (3).jpeg" title="2020 Hyundai Elantra" alt="2020 Hyundai Elantra">
                <img src="imagenes/Sedan/2020 Hyundai Elantra (4).jpeg" title="2020 Hyundai Elantra" alt="2020 Hyundai Elantra">
                <img src="imagenes/Sedan/2020 Hyundai Elantra (5).jpeg" title="2020 Hyundai Elantra" alt="2020 Hyundai Elantra">
                <img src="imagenes/Sedan/2020 Hyundai Elantra (6).jpeg" title="2020 Hyundai Elantra" alt="2020 Hyundai Elantra">
                <img src="imagenes/Sedan/2020 Hyundai Elantra (7).jpeg" title="2020 Hyundai Elantra" alt="2020 Hyundai Elantra">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2020 Hyundai Elantra</h3>
                <div>
                    <p><b>Miles:</b>110.000</p>
                    <p><b>Cash:</b> $6.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $11.000(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.200(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2020 Hyundai Elantra')">Request Information</button>
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
            <img src="imagenes/Suv/2018 Subaru Forester TOURING (4).jpeg" title="2018 Subaru Forester TOURING" alt="2018 Subaru Forester TOURING">
            <img src="imagenes/Suv/2018 Subaru Forester TOURING (1).jpeg" title="2018 Subaru Forester TOURING" alt="2018 Subaru Forester TOURING">
            <img src="imagenes/Suv/2018 Subaru Forester TOURING (2).jpeg" title="2018 Subaru Forester TOURING" alt="2018 Subaru Forester TOURING">
            <img src="imagenes/Suv/2018 Subaru Forester TOURING (7).jpeg" title="2018 Subaru Forester TOURING" alt="2018 Subaru Forester TOURING">
            <img src="imagenes/Suv/2018 Subaru Forester TOURING (3).jpeg" title="2018 Subaru Forester TOURING" alt="2018 Subaru Forester TOURING">
            <img src="imagenes/Suv/2018 Subaru Forester TOURING (5).jpeg" title="2018 Subaru Forester TOURING" alt="2018 Subaru Forester TOURING">
            <img src="imagenes/Suv/2018 Subaru Forester TOURING (6).jpeg" title="2018 Subaru Forester TOURING" alt="2018 Subaru Forester TOURING">
            <img src="imagenes/Suv/2018 Subaru Forester TOURING (8).jpeg" title="2018 Subaru Forester TOURING" alt="2018 Subaru Forester TOURING">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2018 Subaru Forester</h3>
                <div>
                    <p><b>Miles:</b> 186,824</p>
                    <p><b>Cash:</b> $5.000</p>
                </div>
                <button onclick="openForm('2018 Subaru Forester TOURING')">Request Information</button>
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
            <img src="imagenes/Suv/2014 honda crv (1).jpeg" title="2014 honda crv" alt="2014 honda crv">
            <img src="imagenes/Suv/2014 honda crv (2).jpeg" title="2014 honda crv" alt="2014 honda crv">
            <img src="imagenes/Suv/2014 honda crv (3).jpeg" title="2014 honda crv" alt="2014 honda crv">
            <img src="imagenes/Suv/2014 honda crv (4).jpeg" title="2014 honda crv" alt="2014 honda crv">
            <img src="imagenes/Suv/2014 honda crv (5).jpeg" title="2014 honda crv" alt="2014 honda crv">
            <img src="imagenes/Suv/2014 honda crv (6).jpeg" title="2014 honda crv" alt="2014 honda crv">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2014 honda crv</h3>
                <div>
                    <p><b>Miles:</b> 183.000</p>
                    <p><b>Cash:</b> $6.700</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b> $11.500 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2014 honda crv')">Request Information</button>
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
            <img src="imagenes/Suv/2015 Audi Q5 PREMIUM + (1).jpeg" title="2015 Audi Q5 PREMIUM +" alt="2015 Audi Q5 PREMIUM +">
            <img src="imagenes/Suv/2015 Audi Q5 PREMIUM + (2).jpeg" title="2015 Audi Q5 PREMIUM +" alt="2015 Audi Q5 PREMIUM +">
            <img src="imagenes/Suv/2015 Audi Q5 PREMIUM + (3).jpeg" title="2015 Audi Q5 PREMIUM +" alt="2015 Audi Q5 PREMIUM +">
            <img src="imagenes/Suv/2015 Audi Q5 PREMIUM + (4).jpeg" title="2015 Audi Q5 PREMIUM +" alt="2015 Audi Q5 PREMIUM +">
            <img src="imagenes/Suv/2015 Audi Q5 PREMIUM + (5).jpeg" title="2015 Audi Q5 PREMIUM +" alt="2015 Audi Q5 PREMIUM +">
            <img src="imagenes/Suv/2015 Audi Q5 PREMIUM + (6).jpeg" title="2015 Audi Q5 PREMIUM +" alt="2015 Audi Q5 PREMIUM +">
            <img src="imagenes/Suv/2015 Audi Q5 PREMIUM + (7).jpeg" title="2015 Audi Q5 PREMIUM +" alt="2015 Audi Q5 PREMIUM +">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2015 Audi Q5 PREMIUM</h3>
                <div>
                    <p><b>Miles:</b> 156,822</p>
                    <p><b>Cash:</b> $7.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$11.500  (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2015 Audi Q5 PREMIUM +')">Request Information</button>
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
            <img src="imagenes/Suv/2016 Hyundai Tucson (1).jpeg" title="2016 Hyundai Tucson" alt="2016 Hyundai Tucson">
            <img src="imagenes/Suv/2016 Hyundai Tucson (2).jpeg" title="2016 Hyundai Tucson" alt="2016 Hyundai Tucson">
            <img src="imagenes/Suv/2016 Hyundai Tucson (3).jpeg" title="2016 Hyundai Tucson" alt="2016 Hyundai Tucson">
            <img src="imagenes/Suv/2016 Hyundai Tucson (4).jpeg" title="2016 Hyundai Tucson" alt="2016 Hyundai Tucson">
            <img src="imagenes/Suv/2016 Hyundai Tucson (5).jpeg" title="2016 Hyundai Tucson" alt="2016 Hyundai Tucson">
            <img src="imagenes/Suv/2016 Hyundai Tucson (6).jpeg" title="2016 Hyundai Tucson" alt="2016 Hyundai Tucson">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2016 Hyundai Tucson</h3>
                <div>
                    <p><b>Miles:</b> 130.000</p>
                    <p><b>Cash:</b> $7.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$10.500  (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.200 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2016 Hyundai Tucson')">Request Information</button>
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