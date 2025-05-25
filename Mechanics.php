<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once("comunes/head.php") ?>
    <link rel="stylesheet" href="css/Mechanics.css">
    <title>Mechanical Services</title>
</head>
<body>
<?php require_once("comunes/nav.php")?>

<section class="mechanic-services container py-5">
    <h2 class="text-center text-light mb-4">Mechanical Services</h2>
    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-laptop-code fa-3x mb-3"></i>
                    <h5 class="card-title">Computerized Diagnostics</h5>
                    <p class="card-text">Detailed analysis of the vehicle's electronic system.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-wind fa-3x mb-3"></i>
                    <h5 class="card-title">Air Conditioning Diagnostics</h5>
                    <p class="card-text">Inspection and maintenance of the air conditioning system.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-car-side fa-3x mb-3"></i>
                    <h5 class="card-title">Complete Front End Service</h5>
                    <p class="card-text">Maintenance and repair of suspension components.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-tools fa-3x mb-3"></i>
                    <h5 class="card-title">Transmission Replacement</h5>
                    <p class="card-text">Inspection and replacement of the vehicle's transmission.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-oil-can fa-3x mb-3"></i>
                    <h5 class="card-title">Oil Change</h5>
                    <p class="card-text">Oil and filter replacement for better performance.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-cogs fa-3x mb-3"></i>
                    <h5 class="card-title">Engine Support</h5>
                    <p class="card-text">Inspection and replacement of worn engine mounts.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                    <i class="fas fa-brands fa-searchengin fa-3x mb-3"></i>
                    <h5 class="card-title">Engine Replacement and Repair</h5>
                    <p class="card-text">Repair or replacement of faulty engines.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body text-center">
                <i class="fas fa-car-crash fa-3x mb-3"></i>
                    <h5 class="card-title">Brake Replacement</h5>
                    <p class="card-text">Replacement of front and rear brakes.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="btn-container">
        <button  onclick="openForm()">Request Mechanic service</button>
    </div>
</section>


<div id="contactForm" class="form-popup">
    <form class="form-container" action="https://formspree.io/f/myzwqdey" method="POST" onsubmit="return validarenvio()">
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

        <h6>Mechanic service</h6>
        <label><input type="checkbox" name="service[]" value="Computerized Diagnostics"> Computerized Diagnostics</label>
        <label><input type="checkbox" name="service[]" value="Air Conditioning Diagnostics"> Air Conditioning Diagnostics</label>
        <label><input type="checkbox" name="service[]" value="Complete Front End Service"> Complete Front End Service</label>
        <label><input type="checkbox" name="service[]" value="Transmission Replacement"> Transmission Replacement</label>
        <label><input type="checkbox" name="service[]" value="Oil Change"> Oil Change</label>
        <label><input type="checkbox" name="service[]" value="Engine Support"> Engine Support</label>
        <label><input type="checkbox" name="service[]" value="Engine Replacement and Repair"> Engine Replacement and Repair</label>
        <label><input type="checkbox" name="service[]" value="Brake Replacement"> Brake Replacement</label>


        <input type="submit" class="btn" value="Send">
    </form>
</div>


<?php require_once("comunes/footer.php")?>
<script src="js/Mechanics.js"></script>
</body>
</html>