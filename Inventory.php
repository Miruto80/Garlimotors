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
                <img src="imagenes/Sedan/2020 Toyota Corolla (1).jpeg" title="2020 Toyota Corolla" alt="2020 Toyota Corolla">
                <img src="imagenes/Sedan/2020 Toyota Corolla (4).jpeg" title="2020 Toyota Corolla" alt="2020 Toyota Corolla">
                <img src="imagenes/Sedan/2020 Toyota Corolla (2).jpeg" title="2020 Toyota Corolla" alt="2020 Toyota Corolla">
                <img src="imagenes/Sedan/2020 Toyota Corolla (3).jpeg" title="2020 Toyota Corolla" alt="2020 Toyota Corolla">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2020 Toyota Corolla</h3>
                <div>
                    <p><b>Miles:</b> 190.000</p>
                    <p><b>Cash:</b> $10,500</p>
                </div>
                <button onclick="openForm('2020 Toyota Corolla')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2016 Hyundai Elantra (1).jpeg" title="2016 Hyundai Elantra" alt="2016 Hyundai Elantra">
                <img src="imagenes/Sedan/2016 Hyundai Elantra (2).jpeg" title="2016 Hyundai Elantra" alt="2016 Hyundai Elantra">
                <img src="imagenes/Sedan/2016 Hyundai Elantra (7).jpeg" title="2016 Hyundai Elantra" alt="2016 Hyundai Elantra">
                <img src="imagenes/Sedan/2016 Hyundai Elantra (8).jpeg" title="2016 Hyundai Elantra" alt="2016 Hyundai Elantra">
                <img src="imagenes/Sedan/2016 Hyundai Elantra (9).jpeg" title="2016 Hyundai Elantra" alt="2016 Hyundai Elantra">
                <img src="imagenes/Sedan/2016 Hyundai Elantra (3).jpeg" title="2016 Hyundai Elantra" alt="2016 Hyundai Elantra">
                <img src="imagenes/Sedan/2016 Hyundai Elantra (4).jpeg" title="2016 Hyundai Elantra" alt="2016 Hyundai Elantra">
                <img src="imagenes/Sedan/2016 Hyundai Elantra (5).jpeg" title="2016 Hyundai Elantra" alt="2016 Hyundai Elantra">
                <img src="imagenes/Sedan/2016 Hyundai Elantra (6).jpeg" title="2016 Hyundai Elantra" alt="2016 Hyundai Elantra">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2016 Hyundai Elantra</h3>
                <div>
                    <p><b>Miles:</b> 180.000</p>
                    <p><b>Cash:</b> $6,000</p>
                </div>
                <button onclick="openForm('2016 Hyundai Elantra')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2003 Toyota corolla  (2).jpeg" title="2003 Toyota corolla" alt="2003 Toyota corolla">
                <img src="imagenes/Sedan/2003 Toyota corolla  (8).jpeg" title="2003 Toyota corolla" alt="2003 Toyota corolla">
                <img src="imagenes/Sedan/2003 Toyota corolla  (3).jpeg" title="2003 Toyota corolla" alt="2003 Toyota corolla">
                <img src="imagenes/Sedan/2003 Toyota corolla  (4).jpeg" title="2003 Toyota corolla" alt="2003 Toyota corolla">
                <img src="imagenes/Sedan/2003 Toyota corolla  (5).jpeg" title="2003 Toyota corolla" alt="2003 Toyota corolla">
                <img src="imagenes/Sedan/2003 Toyota corolla  (6).jpeg" title="2003 Toyota corolla" alt="2003 Toyota corolla">
                <img src="imagenes/Sedan/2003 Toyota corolla  (7).jpeg" title="2003 Toyota corolla" alt="2003 Toyota corolla">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2003 Toyota corolla</h3>
                <div>
                    <p><b>Miles:</b> 190.000</p>
                    <p><b>Cash:</b> $10,500</p>
                </div>
                <button onclick="openForm('2003 Toyota corolla')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2009  Honda Accord (13).jpeg" title="2009  Honda Accord" alt="2009  Honda Accord">
                <img src="imagenes/Sedan/2009  Honda Accord (8).jpeg" title="2009  Honda Accord" alt="2009  Honda Accord">
                <img src="imagenes/Sedan/2009  Honda Accord (7).jpeg" title="2009  Honda Accord" alt="2009  Honda Accord">
                <img src="imagenes/Sedan/2009  Honda Accord (9).jpeg" title="2009  Honda Accord" alt="2009  Honda Accord">
                <img src="imagenes/Sedan/2009  Honda Accord (10).jpeg" title="2009  Honda Accord" alt="2009  Honda Accord">
                <img src="imagenes/Sedan/2009  Honda Accord (11).jpeg" title="2009  Honda Accord" alt="2009  Honda Accord">
                <img src="imagenes/Sedan/2009  Honda Accord (12).jpeg" title="2009  Honda Accord" alt="2009  Honda Accord">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2009  Honda Accord</h3>
                <div>
                    <p><b>Miles:</b> 170.000 </p>
                    <p><b>Cash:</b> $5,700</p>
                </div>
                <button onclick="openForm('2009  Honda Accord')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2012 Toyota Corolla (1).jpeg" title="2012 Toyota Corolla" alt="2012 Toyota Corolla">
                <img src="imagenes/Sedan/2012 Toyota Corolla (2).jpeg" title="2012 Toyota Corolla" alt="2012 Toyota Corolla">
                <img src="imagenes/Sedan/2012 Toyota Corolla (3).jpeg" title="2012 Toyota Corolla" alt="2012 Toyota Corolla">
                <img src="imagenes/Sedan/2012 Toyota Corolla (4).jpeg" title="2012 Toyota Corolla" alt="2012 Toyota Corolla">
                <img src="imagenes/Sedan/2012 Toyota Corolla (5).jpeg" title="2012 Toyota Corolla" alt="2012 Toyota Corolla">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2012 Toyota Corolla</h3>
                <div>
                    <p><b>Miles:</b> 200.000 </p>
                    <p><b>Cash:</b> $5,500</p>
                </div>
                <button onclick="openForm('2012 Toyota Corolla')">Request Information</button>
            </div>
        </div>
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
                <img src="imagenes/Sedan/2019 Kia optima (1).jpeg" title="2019 Kia optima" alt="2019 Kia optima">
                <img src="imagenes/Sedan/2019 Kia optima (2).jpeg" title="2019 Kia optima" alt="2019 Kia optima">
                <img src="imagenes/Sedan/2019 Kia optima (3).jpeg" title="2019 Kia optima" alt="2019 Kia optima">
                <img src="imagenes/Sedan/2019 Kia optima (5).jpeg" title="2019 Kia optima" alt="2019 Kia optima">
                <img src="imagenes/Sedan/2019 Kia optima (4).jpeg" title="2019 Kia optima" alt="2019 Kia optima">
                <img src="imagenes/Sedan/2019 Kia optima (6).jpeg" title="2019 Kia optima" alt="2019 Kia optima">
                <img src="imagenes/Sedan/2019 Kia optima (7).jpeg" title="2019 Kia optima" alt="2019 Kia optima">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2019 Kia optima</h3>
                <div>
                    <p><b>Miles:</b> 130,000</p>
                    <p><b>Cash:</b> $9,000</p>
                </div>
                <button onclick="openForm('2019 Kia optima')">Request Information</button>
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
                <img src="imagenes/Sedan/Lexus 2008 es 350  (2).jpeg" title="Lexus 2008 es 350" alt="Lexus 2008 es 350">
                <img src="imagenes/Sedan/Lexus 2008 es 350  (1).jpeg" title="Lexus 2008 es 350" alt="Lexus 2008 es 350">
                <img src="imagenes/Sedan/Lexus 2008 es 350  (3).jpeg" title="Lexus 2008 es 350" alt="Lexus 2008 es 350">
                <img src="imagenes/Sedan/Lexus 2008 es 350  (5).jpeg" title="Lexus 2008 es 350" alt="Lexus 2008 es 350">
                <img src="imagenes/Sedan/Lexus 2008 es 350  (4).jpeg" title="Lexus 2008 es 350" alt="Lexus 2008 es 350">
                <img src="imagenes/Sedan/Lexus 2008 es 350  (6).jpeg" title="Lexus 2008 es 350" alt="Lexus 2008 es 350">
                <img src="imagenes/Sedan/Lexus 2008 es 350  (7).jpeg" title="Lexus 2008 es 350" alt="Lexus 2008 es 350">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>Lexus 2008 es 350</h3>
                <div>
                    <p><b>Miles:</b> 132.000</p>
                    <p><b>Cash:</b> $6.500</p>
                </div>
                <button onclick="openForm('Lexus 2008 es 350')">Request Information</button>
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
                <img src="imagenes/Sedan/Honda civic 2016  (1).jpeg" title="Honda civic 2016" alt="Honda civic 2016">
                <img src="imagenes/Sedan/Honda civic 2016  (3).jpeg" title="Honda civic 2016" alt="Honda civic 2016">
                <img src="imagenes/Sedan/Honda civic 2016  (4).jpeg" title="Honda civic 2016" alt="Honda civic 2016">
                <img src="imagenes/Sedan/Honda civic 2016  (5).jpeg" title="Honda civic 2016" alt="Honda civic 2016">
                <img src="imagenes/Sedan/Honda civic 2016  (2).jpeg" title="Honda civic 2016" alt="Honda civic 2016">
                <img src="imagenes/Sedan/Honda civic 2016  (6).jpeg" title="Honda civic 2016" alt="Honda civic 2016">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>Honda civic 2016</h3>
                <div>
                    <p><b>Miles:</b> 166,000</p>
                    <p><b>Cash:</b> $8.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $12.400 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('Honda civic 2016')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/Kia rio 2021 (1).jpeg" title="Kia rio 2021" alt="Kia rio 2021">
                <img src="imagenes/Sedan/Kia rio 2021 (3).jpeg" title="Kia rio 2021" alt="Kia rio 2021">
                <img src="imagenes/Sedan/Kia rio 2021 (4).jpeg" title="Kia rio 2021" alt="Kia rio 2021">
                <img src="imagenes/Sedan/Kia rio 2021 (5).jpeg" title="Kia rio 2021" alt="Kia rio 2021">
                <img src="imagenes/Sedan/Kia rio 2021 (2).jpeg" title="Kia rio 2021" alt="Kia rio 2021">
                <img src="imagenes/Sedan/Kia rio 2021 (6).jpeg" title="Kia rio 2021" alt="Kia rio 2021">
                <img src="imagenes/Sedan/Kia rio 2021 (7).jpeg" title="Kia rio 2021" alt="Kia rio 2021">
                <img src="imagenes/Sedan/Kia rio 2021 (8).jpeg" title="Kia rio 2021" alt="Kia rio 2021">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>Kia rio 2021</h3>
                <div>
                    <p><b>Miles:</b> 75,000</p>
                    <p><b>Cash:</b> $8.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $12.800 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('Kia rio 2021')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/Toyota Corolla 2010  (1).jpeg" title="Toyota Corolla 2010" alt="Toyota Corolla 2010">
                <img src="imagenes/Sedan/Toyota Corolla 2010  (3).jpeg" title="Toyota Corolla 2010" alt="Toyota Corolla 2010">
                <img src="imagenes/Sedan/Toyota Corolla 2010  (5).jpeg" title="Toyota Corolla 2010" alt="Toyota Corolla 2010">
                <img src="imagenes/Sedan/Toyota Corolla 2010  (2).jpeg" title="Toyota Corolla 2010" alt="Toyota Corolla 2010">
                <img src="imagenes/Sedan/Toyota Corolla 2010  (4).jpeg" title="Toyota Corolla 2010" alt="Toyota Corolla 2010">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>Toyota Corolla 2010</h3>
                <div>
                    <p><b>Miles:</b> 75,000</p>
                    <p><b>Cash:</b> $6.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $9.800 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('Toyota Corolla 2010')">Request Information</button>
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
                    <p><b>Cash:</b> $6.000</p>
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
                <img src="imagenes/Sedan/2013 Toyota Corolla Le Premium (1).jpeg" title="2013 Toyota Corolla Le Premium" alt="2013 Toyota Corolla Le Premium">
                <img src="imagenes/Sedan/2013 Toyota Corolla Le Premium (2).jpeg" title="2013 Toyota Corolla Le Premium" alt="2013 Toyota Corolla Le Premium">
                <img src="imagenes/Sedan/2013 Toyota Corolla Le Premium (8).jpeg" title="2013 Toyota Corolla Le Premium" alt="2013 Toyota Corolla Le Premium">
                <img src="imagenes/Sedan/2013 Toyota Corolla Le Premium (3).jpeg" title="2013 Toyota Corolla Le Premium" alt="2013 Toyota Corolla Le Premium">
                <img src="imagenes/Sedan/2013 Toyota Corolla Le Premium (5).jpeg" title="2013 Toyota Corolla Le Premium" alt="2013 Toyota Corolla Le Premium">
                <img src="imagenes/Sedan/2013 Toyota Corolla Le Premium (4).jpeg" title="2013 Toyota Corolla Le Premium" alt="2013 Toyota Corolla Le Premium">
                <img src="imagenes/Sedan/2013 Toyota Corolla Le Premium (6).jpeg" title="2013 Toyota Corolla Le Premium" alt="2013 Toyota Corolla Le Premium">
                <img src="imagenes/Sedan/2013 Toyota Corolla Le Premium (7).jpeg" title="2013 Toyota Corolla Le Premium" alt="2013 Toyota Corolla Le Premium">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2013 Toyota Corolla Le</h3>
                <div>
                    <p><b>Miles:</b> 173.000</p>
                    <p><b>Cash:</b> $7.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $11.500(Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.500(Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2013 Toyota Corolla Le Premium')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Sedan/2016 Toyota avalo (1).jpeg" title="2016 Toyota avalo" alt="2016 Toyota avalo">
                <img src="imagenes/Sedan/2016 Toyota avalo (3).jpeg" title="2016 Toyota avalo" alt="2016 Toyota avalo">
                <img src="imagenes/Sedan/2016 Toyota avalo (5).jpeg" title="2016 Toyota avalo" alt="2016 Toyota avalo">
                <img src="imagenes/Sedan/2016 Toyota avalo (2).jpeg" title="2016 Toyota avalo" alt="2016 Toyota avalo">
                <img src="imagenes/Sedan/2016 Toyota avalo (4).jpeg" title="2016 Toyota avalo" alt="2016 Toyota avalo">
                <img src="imagenes/Sedan/2016 Toyota avalo (6).jpeg" title="2016 Toyota avalo" alt="2016 Toyota avalo">
                <img src="imagenes/Sedan/2016 Toyota avalo (7).jpeg" title="2016 Toyota avalo" alt="2016 Toyota avalo">
                <img src="imagenes/Sedan/2016 Toyota avalo (8).jpeg" title="2016 Toyota avalo" alt="2016 Toyota avalo">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2016 Toyota avalo</h3>
                <div>
                    <p><b>Miles:</b> 168.000</p>
                    <p><b>Cash:</b> $9.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                    <p><b>Financing:</b> $15.500 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $3.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2016 Toyota avalo')">Request Information</button>
            </div>
        </div>
        <!--Mas sedans aqui -->
    </div>
    <hr>
    <h2 id="SUV">SUV</h2>
    <hr>
    <div class="caja_img">
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2009  Toyota rav4 (3).jpeg" title="2009  Toyota rav4" alt="2009  Toyota rav4">
            <img src="imagenes/Suv/2009  Toyota rav4 (1).jpeg" title="2009  Toyota rav4" alt="2009  Toyota rav4">
            <img src="imagenes/Suv/2009  Toyota rav4 (2).jpeg" title="2009  Toyota rav4" alt="2009  Toyota rav4">
            <img src="imagenes/Suv/2009  Toyota rav4 (4).jpeg" title="2009  Toyota rav4" alt="2009  Toyota rav4">
            <img src="imagenes/Suv/2009  Toyota rav4 (5).jpeg" title="2009  Toyota rav4" alt="2009  Toyota rav4">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2009 Toyota rav4</h3>
                <div>
                    <p><b>Miles:</b> 208.000</p>
                    <p><b>Cash:</b> $7,000</p>
                </div>
                <button onclick="openForm('2009 Toyota rav4')">Request Information</button>
            </div>
        </div>
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
                    <p><b>Cash:</b> $6.000</p>
                </div>
                <button onclick="openForm('2009 Honda pilot')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2010 Crv (1).jpeg" title="2010 Crv" alt="2010 Crv">
            <img src="imagenes/Suv/2010 Crv (6).jpeg" title="2010 Crv" alt="2010 Crv">
            <img src="imagenes/Suv/2010 Crv (5).jpeg" title="2010 Crv" alt="2010 Crv">
            <img src="imagenes/Suv/2010 Crv (2).jpeg" title="2010 Crv" alt="2010 Crv">
            <img src="imagenes/Suv/2010 Crv (4).jpeg" title="2010 Crv" alt="2010 Crv">
            <img src="imagenes/Suv/2010 Crv (3).jpeg" title="2010 Crv" alt="2010 Crv">
            <img src="imagenes/Suv/2010 Crv (7).jpeg" title="2010 Crv" alt="2010 Crv">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2010 Crv</h3>
                <div>
                    <p><b>Miles:</b> 193.000</p>
                    <p><b>Cash:</b> $11,500</p>
                </div>
                <button onclick="openForm('2010 Crv')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2018 Subaru (1).jpeg" title="2018 Subaru" alt="2018 Subaru">
            <img src="imagenes/Suv/2018 Subaru (8).jpeg" title="2018 Subaru" alt="2018 Subaru">
            <img src="imagenes/Suv/2018 Subaru (3).jpeg" title="2018 Subaru" alt="2018 Subaru">
            <img src="imagenes/Suv/2018 Subaru (4).jpeg" title="2018 Subaru" alt="2018 Subaru">
            <img src="imagenes/Suv/2018 Subaru (5).jpeg" title="2018 Subaru" alt="2018 Subaru">
            <img src="imagenes/Suv/2018 Subaru (6).jpeg" title="2018 Subaru" alt="2018 Subaru">
            <img src="imagenes/Suv/2018 Subaru (7).jpeg" title="2018 Subaru" alt="2018 Subaru">
            <img src="imagenes/Suv/2018 Subaru (2).jpeg" title="2018 Subaru" alt="2018 Subaru">
            <img src="imagenes/Suv/2018 Subaru (9).jpeg" title="2018 Subaru" alt="2018 Subaru">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2018 Subaru</h3>
                <div>
                    <p><b>Miles:</b> 186.000</p>
                    <p><b>Cash:</b> $7.500</p>
                </div>
                <button onclick="openForm('2018 Subaru')">Request Information</button>
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
                    <p><b>Cash:</b> $7.500</p>
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
                    <p><b>Cash:</b> $8.500</p>
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
                    <p><b>Cash:</b> $8.500</p>
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
            <img src="imagenes/Suv/Hyundai Elantra gt 2013 (1).jpeg" title="Hyundai Elantra gt 2013" alt="Hyundai Elantra gt 2013">
            <img src="imagenes/Suv/Hyundai Elantra gt 2013 (4).jpeg" title="Hyundai Elantra gt 2013" alt="Hyundai Elantra gt 2013">
            <img src="imagenes/Suv/Hyundai Elantra gt 2013 (2).jpeg" title="Hyundai Elantra gt 2013" alt="Hyundai Elantra gt 2013">
            <img src="imagenes/Suv/Hyundai Elantra gt 2013 (5).jpeg" title="Hyundai Elantra gt 2013" alt="Hyundai Elantra gt 2013">
            <img src="imagenes/Suv/Hyundai Elantra gt 2013 (3).jpeg" title="Hyundai Elantra gt 2013" alt="Hyundai Elantra gt 2013">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>Hyundai Elantra gt 2013</h3>
                <div>
                    <p><b>Miles:</b> 101.000</p>
                    <p><b>Cash:</b> $5.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b> $10.500 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('Hyundai Elantra gt 2013')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2008 Toyota fj (1).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (2).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (3).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (4).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (5).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (6).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (7).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (8).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2008 Toyota fj</h3>
                <div>
                    <p><b>Miles:</b> 101.000</p>
                    <p><b>Cash:</b> $5.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b> $10.500 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2008 Toyota fj')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2008 Toyota fj (1).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (2).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (3).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (4).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (5).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (6).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (7).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
            <img src="imagenes/Suv/2008 Toyota fj (8).jpeg" title="2008 Toyota fj" alt="2008 Toyota fj">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2008 Toyota fj</h3>
                <div>
                    <p><b>Miles:</b> 208.000</p>
                    <p><b>Cash:</b> $10.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b> $14.500 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $4.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2008 Toyota fj')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2009 Mercedes Benz Gl- class 450 (1).jpeg" title="2009 Mercedes Benz Gl- class 450" alt="2009 Mercedes Benz Gl- class 450">
            <img src="imagenes/Suv/2009 Mercedes Benz Gl- class 450 (2).jpeg" title="2009 Mercedes Benz Gl- class 450" alt="2009 Mercedes Benz Gl- class 450">
            <img src="imagenes/Suv/2009 Mercedes Benz Gl- class 450 (3).jpeg" title="2009 Mercedes Benz Gl- class 450" alt="2009 Mercedes Benz Gl- class 450">
            <img src="imagenes/Suv/2009 Mercedes Benz Gl- class 450 (4).jpeg" title="2009 Mercedes Benz Gl- class 450" alt="2009 Mercedes Benz Gl- class 450">
            <img src="imagenes/Suv/2009 Mercedes Benz Gl- class 450 (5).jpeg" title="2009 Mercedes Benz Gl- class 450" alt="2009 Mercedes Benz Gl- class 450">
            <img src="imagenes/Suv/2009 Mercedes Benz Gl- class 450 (6).jpeg" title="2009 Mercedes Benz Gl- class 450" alt="2009 Mercedes Benz Gl- class 450">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2009 Mercedes Benz Gl</h3>
                <div>
                    <p><b>Miles:</b> 194.000</p>
                    <p><b>Cash:</b> $4.000</p>
                </div>
                <button onclick="openForm('2009 Mercedes Benz Gl- class 450')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (1).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (2).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (3).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (4).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (5).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (6).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2013 Hyundai Elantra gt</h3>
                <div>
                    <p><b>Miles:</b> 101.000</p>
                    <p><b>Cash:</b> $5.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b> $10.000 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2013 Hyundai Elantra gt')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (1).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (2).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (3).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (4).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (5).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
            <img src="imagenes/Suv/2013 Hyundai Elantra gt (6).jpeg" title="2013 Hyundai Elantra gt" alt="2013 Hyundai Elantra gt">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2013 Hyundai Elantra gt</h3>
                <div>
                    <p><b>Miles:</b> 101.000</p>
                    <p><b>Cash:</b> $5.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b> $10.000 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $2.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2013 Hyundai Elantra gt')">Request Information</button>
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
                    <p><b>Cash:</b> $8.000</p>
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
            <img src="imagenes/Suv/2012 kia soul (1).jpeg" title="2012 kia soul" alt="2012 kia soul">
            <img src="imagenes/Suv/2012 kia soul (2).jpeg" title="2012 kia soul" alt="2012 kia soul">
            <img src="imagenes/Suv/2012 kia soul (3).jpeg" title="2012 kia soul" alt="2012 kia soul">
            <img src="imagenes/Suv/2012 kia soul (4).jpeg" title="2012 kia soul" alt="2012 kia soul">
            <img src="imagenes/Suv/2012 kia soul (5).jpeg" title="2012 kia soul" alt="2012 kia soul">
            <img src="imagenes/Suv/2012 kia soul (6).jpeg" title="2012 kia soul" alt="2012 kia soul">
            <img src="imagenes/Suv/2012 kia soul (7).jpeg" title="2012 kia soul" alt="2012 kia soul">
            <img src="imagenes/Suv/2012 kia soul (8).jpeg" title="2012 kia soul" alt="2012 kia soul">
            <img src="imagenes/Suv/2012 kia soul (9).jpeg" title="2012 kia soul" alt="2012 kia soul">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
               </div>
                <h3>2012 kia soul</h3>
                <div>
                    <p><b>Miles:</b> 155,366</p>
                    <p><b>Cash:</b> $4.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                    <div class="more-info">
                    <p><b>Financing:</b>$9.000 (Negotiable)</p> <!-- Garantia incluida-->
                    <p><b>Down:</b> $1.500 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2012 kia soul')">Request Information</button>
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
                <img src="imagenes/Trucks/2006  RAM (1).jpeg" title="2006  RAM" alt="2006  RAM">
                <img src="imagenes/Trucks/2006  RAM (2).jpeg" title="2006  RAM" alt="2006  RAM">
                <img src="imagenes/Trucks/2006  RAM (3).jpeg" title="2006  RAM" alt="2006  RAM">
                <img src="imagenes/Trucks/2006  RAM (4).jpeg" title="2006  RAM" alt="2006  RAM">
                <img src="imagenes/Trucks/2006  RAM (5).jpeg" title="2006  RAM" alt="2006  RAM">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2006 RAM</h3>
                <div>
                    <p><b>Miles:</b> 199.000</p>
                    <p><b>Cash:</b> $7,000</p>
                </div>
                <button onclick="openForm('2006 RAM')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Trucks/2013 Ram 1500 TRADESMAN (5).jpeg" title="2013 Ram 1500 TRADESMAN" alt="2013 Ram 1500 TRADESMAN ">
                <img src="imagenes/Trucks/2013 Ram 1500 TRADESMAN (6).jpeg" title="2013 Ram 1500 TRADESMAN" alt="2013 Ram 1500 TRADESMAN ">
                <img src="imagenes/Trucks/2013 Ram 1500 TRADESMAN (7).jpeg" title="2013 Ram 1500 TRADESMAN" alt="2013 Ram 1500 TRADESMAN ">
                <img src="imagenes/Trucks/2013 Ram 1500 TRADESMAN (8).jpeg" title="2013 Ram 1500 TRADESMAN" alt="2013 Ram 1500 TRADESMAN ">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2013 Ram 1500 TRADESMAN</h3>
                <div>
                    <p><b>Miles:</b> 175,890</p>
                    <p><b>Cash:</b> $7.500</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                <p><b>Financing:</b> $12.500 (Negotiable)</p>
                <p><b>Down:</b> $3.000 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2013 Ram 1500 TRADESMAN')">Request Information</button>
            </div>
        </div>
        <div class="car">
            <div class="car-images">
                <img src="imagenes/Trucks/2007 Chevrolet silverado 2500 (1).jpeg" title="2007 Chevrolet silverado 2500" alt="2007 Chevrolet silverado 2500 ">
                <img src="imagenes/Trucks/2007 Chevrolet silverado 2500 (2).jpeg" title="2007 Chevrolet silverado 2500" alt="2007 Chevrolet silverado 2500 ">
                <img src="imagenes/Trucks/2007 Chevrolet silverado 2500 (3).jpeg" title="2007 Chevrolet silverado 2500" alt="2007 Chevrolet silverado 2500 ">
                <img src="imagenes/Trucks/2007 Chevrolet silverado 2500 (4).jpeg" title="2007 Chevrolet silverado 2500" alt="2007 Chevrolet silverado 2500 ">
                <img src="imagenes/Trucks/2007 Chevrolet silverado 2500 (5).jpeg" title="2007 Chevrolet silverado 2500" alt="2007 Chevrolet silverado 2500 ">
                <img src="imagenes/Trucks/2007 Chevrolet silverado 2500 (6).jpeg" title="2007 Chevrolet silverado 2500" alt="2007 Chevrolet silverado 2500 ">
                <img src="imagenes/Trucks/2007 Chevrolet silverado 2500 (7).jpeg" title="2007 Chevrolet silverado 2500" alt="2007 Chevrolet silverado 2500 ">
                <img src="imagenes/Trucks/2007 Chevrolet silverado 2500 (8).jpeg" title="2007 Chevrolet silverado 2500" alt="2007 Chevrolet silverado 2500 ">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2007 Chevrolet silverado</h3>
                <div>
                    <p><b>Miles:</b> 255.000 </p>
                    <p><b>Cash:</b> $5.000</p>
                    <button class="more-info-btn" onclick="toggleMoreInfo(this)">Show details &#9660;</button>
                <div class="more-info">
                <p><b>Financing:</b> $8.500 (Negotiable)</p>
                <p><b>Down:</b> $1.700 (Negotiable)</p>
                </div>
                </div>
                <button onclick="openForm('2007 Chevrolet silverado 2500')">Request Information</button>
            </div>
        </div>
        <!--Mas Trucks aqui -->
    </div>
    <hr>
    <h2 id="Luxury">Luxury</h2>
    <hr>
    <div class="caja_img">
        <div class="car">
            <div class="car-images">
            <img src="imagenes/Luxury/2016  Ford Mustang v6 (4).jpeg" title="2016 Ford Mustang" alt="2016 Ford Mustang">
            <img src="imagenes/Luxury/2016  Ford Mustang v6 (1).jpeg" title="2016 Ford Mustang" alt="2016 Ford Mustang">
            <img src="imagenes/Luxury/2016  Ford Mustang v6 (2).jpeg" title="2016 Ford Mustang" alt="2016 Ford Mustang">
            <img src="imagenes/Luxury/2016  Ford Mustang v6 (3).jpeg" title="2016 Ford Mustang" alt="2016 Ford Mustang">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2016 Ford Mustang</h3>
                <div>
                    <p><b>Miles:</b> 147.000</p>
                    <p><b>Cash:</b> $9.500</p>
                </div>
                <button onclick="openForm('2016 Ford Mustang')">Request Information</button>
            </div>
        </div>
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
                    <p><b>Cash:</b> $21.000</p>
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