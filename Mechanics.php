<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once("comunes/head.php") ?>
    <link rel="stylesheet" href="css/Mechanics.css">
    <title><?php echo $text['mechanical_services']; ?></title>
</head>
<body>
<?php require_once("comunes/nav.php")?>
<?php require_once("comunes/Ws.php")?>


<section class="mechanic-services container py-5">
    <h2 class="text-center text-light mb-4"><?php echo $text['mechanical_services']; ?></h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-laptop-code fa-3x mb-3"></i>
                    <h5 class="card-title"><?php echo $text['computerized_diagnostics']; ?></h5>
                    <p class="card-text"><?php echo $text['computerized_diagnostics_text']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-wind fa-3x mb-3"></i>
                    <h5 class="card-title"><?php echo $text['air_conditioning_diagnostics']; ?></h5>
                    <p class="card-text"><?php echo $text['air_conditioning_diagnostics_text']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-car-side fa-3x mb-3"></i>
                    <h5 class="card-title"><?php echo $text['complete_front_end_service']; ?></h5>
                    <p class="card-text"><?php echo $text['complete_front_end_service_text']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-tools fa-3x mb-3"></i>
                    <h5 class="card-title"><?php echo $text['transmission_replacement']; ?></h5>
                    <p class="card-text"><?php echo $text['transmission_replacement_text']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-oil-can fa-3x mb-3"></i>
                    <h5 class="card-title"><?php echo $text['oil_change']; ?></h5>
                    <p class="card-text"><?php echo $text['oil_change_text']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-cogs fa-3x mb-3"></i>
                    <h5 class="card-title"><?php echo $text['engine_support']; ?></h5>
                    <p class="card-text"><?php echo $text['engine_support_text']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-brands fa-searchengin fa-3x mb-3"></i>
                    <h5 class="card-title"><?php echo $text['engine_replacement_repair']; ?></h5>
                    <p class="card-text"><?php echo $text['engine_replacement_repair_text']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                <i class="fas fa-car-crash fa-3x mb-3"></i>
                    <h5 class="card-title"><?php echo $text['brake_replacement']; ?></h5>
                    <p class="card-text"><?php echo $text['brake_replacement_text']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-container">
        <button  onclick="openForm()"><?php echo $text['request_mechanic_service']; ?></button>
    </div>
</section>


<div id="contactForm" class="form-popup">
    <form class="form-container" action="https://formspree.io/f/myzwqdey" method="POST" onsubmit="return validarenvio()">
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

        <h6><?php echo $text['mechanic_service']; ?></h6>
        <label><input type="checkbox" name="service[]" value="Computerized Diagnostics"> <?php echo $text['computerized_diagnostics']; ?></label>
        <label><input type="checkbox" name="service[]" value="Air Conditioning Diagnostics"> <?php echo $text['air_conditioning_diagnostics']; ?></label>
        <label><input type="checkbox" name="service[]" value="Complete Front End Service"> <?php echo $text['complete_front_end_service']; ?></label>
        <label><input type="checkbox" name="service[]" value="Transmission Replacement"> <?php echo $text['transmission_replacement']; ?></label>
        <label><input type="checkbox" name="service[]" value="Oil Change"> <?php echo $text['oil_change']; ?></label>
        <label><input type="checkbox" name="service[]" value="Engine Support"> <?php echo $text['engine_support']; ?></label>
        <label><input type="checkbox" name="service[]" value="Engine Replacement and Repair"> <?php echo $text['engine_replacement_repair']; ?></label>
        <label><input type="checkbox" name="service[]" value="Brake Replacement"> <?php echo $text['brake_replacement']; ?></label>


        <input type="submit" class="btn" value="<?php echo $text['send']; ?>">
    </form>
</div>


<?php require_once("comunes/footer.php")?>
<script src="js/Mechanics.js"></script>
</body>
</html>