<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <link rel="stylesheet" href="css/Inventory.css">
    <?php require_once("comunes/head.php")?>
    <title><?php echo $text['InventoryB']; ?></title>
</head>
<body>
<?php require_once("comunes/nav.php")?>
<?php require_once("comunes/Ws.php")?>

<div class="title-select-container">
    <h1 id="header"><?php echo $text['BankFinancing']; ?></h1>
</div>

<div class="container mt-5">
        <div class="row">
            <div class="col-md-2 d-none d-md-block" id="filters">
                <h5><?php echo $text['filters']; ?></h5>
                <form>
                    <h6><?php echo $text['type']; ?></h6>
                    <label><input type="checkbox" name="make" value="Sedan"> <?php echo $text['sedan']; ?></label><br>
                    <label><input type="checkbox" name="make" value="Suv"> <?php echo $text['suv']; ?></label><br>
                    <label><input type="checkbox" name="make" value="Truck"> <?php echo $text['truck']; ?></label><br>
                    <label><input type="checkbox" name="make" value="Luxury"> <?php echo $text['luxury']; ?></label><br>
                    <label><input type="checkbox" name="make" value="Boat"> <?php echo $text['boat']; ?></label><br>
                </form>
            </div>
            

            <div class="col-md-10">
                <div class="d-flex justify-content-between align-items-center mb-1">
                    <h5 class="mb-3" id="results-count"><?php echo sprintf($text['showing_results'], 12); ?></h5>
                    <nav aria-label="Page navigation">
                        <ul class="pagination mb-3" id="pagination"></ul>
                    </nav>
                </div>
            
                <div class="row g-2" id="car-list" data-page="bank">
                    <!-- Aquí se generarán los autos dinámicamente -->
                </div>
                <div class="d-flex justify-content-end mt-3">
        <nav aria-label="Page navigation">
            <ul class="pagination mb-3" id="pagination-bottom"></ul>
        </nav>
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
                                <p><strong><?php echo $text['cash']; ?>:</strong> <span id="car-cash"></span></p>
                                <p><strong><?php echo $text['down']; ?>:</strong> <span id="car-down"></span></p>
                                <p><strong><?php echo $text['financing']; ?>:</strong> <span id="car-financing"></span></p>
                                <p><strong><?php echo $text['mileage']; ?>:</strong> <span id="car-mileage"></span></p>
                                <p id="descripcion"><strong><?php echo $text['description']; ?>:</strong> <span id="car-description"></span></p>
                                <button class="btn btn-success w-100" onclick="openForm('${car.title}')"><?php echo $text['request_information']; ?></button>
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
        <h3><?php echo $text['request_information']; ?></h3>
        <button type="button" class="close-icon" onclick="closeForm()">✖</button>
        </div>
        <label for="name"><?php echo $text['name']; ?></label>
        <input type="text" name="name" id="name" placeholder="<?php echo $text['your_name']; ?>" required>
        <span id="sname" class="errorform"></span>

        <label for="contact"><?php echo $text['contact']; ?></label>
        <input type="text" name="contact" id="contact" placeholder="<?php echo $text['your_phone_number']; ?>" required>
        <span id="scontact" class="errorform"></span>

        <label for="car"><?php echo $text['car_of_interest']; ?></label>
        <input type="text" name="car" id="car" readonly>

        <input type="submit" class="btn" value="<?php echo $text['send']; ?>">
    </form>
</div>

    <div class="centrar_texto">
        <h2><a href="#header"><?php echo $text['back_to_home']; ?></a></h2>
    </div>

<?php require_once("comunes/footer.php")?>
<script src="js/Inventory.js?v=<?= filemtime('js/Inventory.js') ?>"></script>
</body>
</html>