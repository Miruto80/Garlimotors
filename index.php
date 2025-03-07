<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garlimotors</title>
    <?php require_once("comunes/head.php"); ?>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
   <?php require_once("comunes/nav.php")?>
   <section class="Inicio">
      <div class="text-center">
      <h2>Buy cars here</h2>
      <br>
      <h4>Ready to drive your dream car? <br> Discover unbeatable prices and find the perfect ride today!</h4>
      <button onclick="location.href='Inventory.html'">View inventory</button>
  </div>
  </section>
<section class="car-carousel">
  <div class="carousel-container">
      <h2 class="carousel-title">Last adds</h2>
      <button class="carousel-arrow left-arrow" onclick="previousImage()">&#8249;</button>
      <div class="carousel-image">
          <img id="carousel-bg" src="imagenes/Last adds/Last add (1).jpeg" alt="Car 1">
      </div>
      <button class="carousel-arrow right-arrow" onclick="nextImage()">&#8250;</button>
  </div>
</section>
   <?php require_once("comunes/footer.php")?>
<script src="js/index.js"></script>
</body>
</html>