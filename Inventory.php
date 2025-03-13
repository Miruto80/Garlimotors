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
        <div class="car" data-location="Arlington-Texas">
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
        <div class="car" data-location="Arlington-Texas">
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
        <div class="car" data-location="Arlington-Texas">
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
        <div class="car" data-location="Arlington-Texas">
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
        <div class="car" data-location="Arlington-Texas">
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
        <div class="car" data-location="Arlington-Texas">
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
    </div>
    <hr>
    <h2 id="SUV">SUV</h2>
    <hr>
    <div class="caja_img">
        <div class="car" data-location="Arlington-Texas">
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
        <div class="car" data-location="Arlington-Texas">
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
        <div class="car" data-location="Arlington-Texas">
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
        <div class="car" data-location="Arlington-Texas">
            <div class="car-images">
            <img src="imagenes/Suv/2014 Honda odysea (1).jpeg" title="2014 Honda odysea" alt="2014 Honda odysea">
            <img src="imagenes/Suv/2014 Honda odysea (2).jpeg" title="2014 Honda odysea" alt="2014 Honda odysea">
            <img src="imagenes/Suv/2014 Honda odysea (4).jpeg" title="2014 Honda odysea" alt="2014 Honda odysea">
            <img src="imagenes/Suv/2014 Honda odysea (3).jpeg" title="2014 Honda odysea" alt="2014 Honda odysea">
            <img src="imagenes/Suv/2014 Honda odysea (6).jpeg" title="2014 Honda odysea" alt="2014 Honda odysea">
            <img src="imagenes/Suv/2014 Honda odysea (5).jpeg" title="2014 Honda odysea" alt="2014 Honda odysea">
            <img src="imagenes/Suv/2014 Honda odysea (8).jpeg" title="2014 Honda odysea" alt="2014 Honda odysea">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2014 Honda odysea</h3>
                <div>
                    <p><b>Miles:</b> 180.000</p>
                    <p><b>Cash:</b> $7.500</p>
                </div>
                <button onclick="openForm('2014 Honda odysea')">Request Information</button>
            </div>
        </div>
        <div class="car" data-location="Arlington-Texas">
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
        <div class="car" data-location="Arlington-Texas">
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
        <div class="car" data-location="Arlington-Texas">
            <div class="car-images">
            <img src="imagenes/Suv/2015 Yaris (1).jpeg" title="2015 Yaris " alt="2015 Yaris ">
            <img src="imagenes/Suv/2015 Yaris (5).jpeg" title="2015 Yaris " alt="2015 Yaris ">
            <img src="imagenes/Suv/2015 Yaris (4).jpeg" title="2015 Yaris " alt="2015 Yaris ">
            <img src="imagenes/Suv/2015 Yaris (6).jpeg" title="2015 Yaris " alt="2015 Yaris ">
            <img src="imagenes/Suv/2015 Yaris (3).jpeg" title="2015 Yaris " alt="2015 Yaris ">
            <img src="imagenes/Suv/2015 Yaris (2).jpeg" title="2015 Yaris " alt="2015 Yaris ">
        </div>
        
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2015 Yaris</h3>
                <div>
                    <p><b>Miles:</b> 140.000</p>
                    <p><b>Cash:</b> $7.500</p>
                </div>
                <button onclick="openForm('2015 Yaris')">Request Information</button>
            </div>
        </div>
    </div>
    <hr>
    <h2 id="Trucks">Trucks</h2>
    <hr>
    <div class="caja_img">
        <div class="car" data-location="Arlington-Texas">
            <div class="car-images">
                <img src="imagenes/Trucks/2013 Ram 1500 TRADESMAN (1).jpeg" title="2013 Ram 1500 TRADESMAN" alt="2013 Ram 1500 TRADESMAN">
                <img src="imagenes/Trucks/2013 Ram 1500 TRADESMAN (2).jpeg" title="2013 Ram 1500 TRADESMAN" alt="2013 Ram 1500 TRADESMAN">
                <img src="imagenes/Trucks/2013 Ram 1500 TRADESMAN (3).jpeg" title="2013 Ram 1500 TRADESMAN" alt="2013 Ram 1500 TRADESMAN">
                <img src="imagenes/Trucks/2013 Ram 1500 TRADESMAN (4).jpeg" title="2013 Ram 1500 TRADESMAN" alt="2013 Ram 1500 TRADESMAN">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2013 Ram 1500 TRADESMAN</h3>
                <div>
                    <p><b>Miles:</b> 175,890</p>
                    <p><b>Cash:</b> $9,000</p>
                </div>
                <button onclick="openForm('2013 Ram 1500 TRADESMAN')">Request Information</button>
            </div>
        </div>
        <div class="car" data-location="Arlington-Texas">
            <div class="car-images">
                <img src="imagenes/Trucks/2018 Chevrolet Silverado 1500 (1).jpeg" title="2018 Chevrolet Silverado 1500" alt="2018 Chevrolet Silverado 1500">
                <img src="imagenes/Trucks/2018 Chevrolet Silverado 1500 (2).jpeg" title="2018 Chevrolet Silverado 1500" alt="2018 Chevrolet Silverado 1500">
                <img src="imagenes/Trucks/2018 Chevrolet Silverado 1500 (3).jpeg" title="2018 Chevrolet Silverado 1500" alt="2018 Chevrolet Silverado 1500">
                <img src="imagenes/Trucks/2018 Chevrolet Silverado 1500 (4).jpeg" title="2018 Chevrolet Silverado 1500" alt="2018 Chevrolet Silverado 1500">
                <img src="imagenes/Trucks/2018 Chevrolet Silverado 1500 (5).jpeg" title="2018 Chevrolet Silverado 1500" alt="2018 Chevrolet Silverado 1500">
                <img src="imagenes/Trucks/2018 Chevrolet Silverado 1500 (6).jpeg" title="2018 Chevrolet Silverado 1500" alt="2018 Chevrolet Silverado 1500">
            </div>
            
            <div class="car-info">
                <div class="car-controls">
                    <button class="arrow" onclick="prevImage(this)">&#9664;</button>
                    <button class="arrow" onclick="nextImage(this)">&#9654;</button>
                </div>
                <h3>2018 Chevrolet Silverado</h3>
                <div>
                    <p><b>Miles:</b> 170,721</p>
                    <p><b>Cash:</b> $10,500</p>
                </div>
                <button onclick="openForm('2018 Chevrolet Silverado 1500')">Request Information</button>
            </div>
        </div>
        <div class="car" data-location="Arlington-Texas">
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
    </div>
    <hr>
    <h2 id="Luxury">Luxury</h2>
    <hr>
    <div class="caja_img">
        <div class="car" data-location="Arlington-Texas">
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