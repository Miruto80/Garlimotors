<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/Inventory copy.css">
    <?php require_once("comunes/head.php")?>
    <title>Inventory</title>
</head>
<body>
<?php require_once("comunes/nav.php")?>
<div class="title-select-container">
    <h1 id="header">Car Inventory</h1>
</div>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-2 d-none d-md-block" id="filters">
                <h5>Filters</h5>
                <form>
                    <h6>Type</h6>
                    <label><input type="checkbox" name="make" value="Sedan"> Sedan</label><br>
                    <label><input type="checkbox" name="make" value="Suv"> Suv</label><br>
                    <label><input type="checkbox" name="make" value="Truck"> Truck</label><br>
                    <label><input type="checkbox" name="make" value="Luxury"> Luxury</label><br>
                    <label><input type="checkbox" name="make" value="Boat"> Boat</label><br>
                </form>
            </div>
            

            <div class="col-md-10">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5 class="mb-3" id="results-count">Showing 12 results</h5>
                    <nav aria-label="Page navigation">
                        <ul class="pagination mb-3" id="pagination"></ul>
                    </nav>
                </div>
            
                <div class="row g-2" id="car-list">
                    <!-- Aquí se generarán los autos dinámicamente -->
                </div>
            </div>
            
            <!-- Modal para la galería de imágenes y datos del carro -->
            <div class="modal fade" id="carModal" tabindex="-1" aria-labelledby="carModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="carModalLabel"></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">✖</button>
                        </div>
                        <div class="modal-body d-flex flex-column flex-md-row">
                            <!-- Carrusel de imágenes (lado izquierdo) -->
                            <div class="w-100 w-md-50 pe-md-3">
                                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner" id="carousel-inner"></div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
            
                            <!-- Datos del carro (lado derecho) -->
                            <div class="w-100 w-md-50 mt-3 mt-md-0 ml-3">
                                <p><strong>Cash:</strong> <span id="car-cash"></span></p>
                                <p><strong>Down:</strong> <span id="car-down"></span></p>
                                <p><strong>Financing:</strong> <span id="car-financing"></span></p>
                                <p><strong>Mileage:</strong> <span id="car-mileage"></span></p>
                                <p id="descripcion"><strong>Description:</strong> <span id="car-description"></span></p>
                                <button class="btn btn-success w-100" onclick="openForm('${car.title}')">Request Information</button>
                     </div>
                 </div>
            </div>
         </div>
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
<script src="js/Inventory copy.js"></script>
</body>
</html>