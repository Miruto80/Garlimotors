<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Discover the best car deals in Texas with GARLI MOTORS. Offering 0% interest financing, warranty included, and a wide range of reliable vehicles. Drive with confidence today!">
    <meta name="keywords" content="buy used cars in Texas, car dealership in Texas, 0% interest car financing, GARLI MOTORS, affordable cars Texas, car sales with warranty">
    <title>Garlimotors</title>
    <?php require_once("comunes/head.php"); ?>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
   <?php require_once("comunes/nav.php")?>
   <section class="Inicio">
      <div class="text-center">
      <h2>Best price in town</h2>
      <br>
      <h3>0% interest Warranty Incluided</h3>
      <button onclick="location.href='Inventory.php'">View inventory</button>
  </div>
  </section>

  <section class="about-us">
    <div class="container">
        <h2>About GARLI MOTORS</h2>
        <p>GARLI MOTORS is a company dedicated to the buying and selling of cars, financing, and vehicle rentals. We focus on offering our customers accessible, reliable, and modern options to meet their mobility needs.</p>
        <p>We provide 0% interest financing options and comprehensive warranties with every purchase, ensuring you drive with confidence and peace of mind.</p>
        <h3>Why Choose Us?</h3>
        <ul>
            <li><strong>Extensive Inventory:</strong> From sports cars to family SUVs, we have something for everyone.</li>
            <li><strong>Trusted Service:</strong> Our team is dedicated to making your car-buying experience as smooth as possible.</li>
            <li><strong>Flexible Financing:</strong> We offer 0% interest financing with no hidden fees.</li>
            <li><strong>Warranty Included:</strong> Every car comes with a warranty, so you can drive with confidence.</li>
        </ul>
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

<section id="reviewsList">
  <h3 class="text-center">Recent Reviews</h3>
  <?php
  $conn = new mysqli('localhost', 'u417714339_Garlimotors', 'Basededatos15.', 'u417714339_reviewsGarli');
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
          $result = $conn->query("SELECT name, rating, review, created_at FROM reviews ORDER BY created_at DESC LIMIT 3");
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $stars = str_repeat('★', $row['rating']) . str_repeat('☆', 5 - $row['rating']);
              
              // Formatear la fecha a un formato más amigable (February 9, 2025)
              $created_at = date("F j, Y", strtotime($row['created_at']));
              
              echo "<div>
                      <strong>" . htmlspecialchars($row['name']) . " <span class='star-rating'>($stars)</span></strong>
                      <p>" . htmlspecialchars($row['review']) . "</p>
                      <small>Reviewed on: $created_at</small>
                    </div>";
            }
          } else {
            echo "<p>No reviews yet. Be the first to leave one!</p>";
          }
          $conn->close();
          ?>
<button onclick="location.href='Reviews.php'">Leave a review here</button>
</section>
  
<div style="width: 100%; margin: 0;">
<iframe 
 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d209.0449521907248!2d-96.99270610475544!3d33.037526678603015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c2f001e52fb91%3A0xf43b8ad891d7f07f!2sGarli%20Motors!5e0!3m2!1ses!2sus!4v1741445403441!5m2!1ses!2sus" 
 width="100%" 
 height="450" 
 style="border:0;" 
 allowfullscreen="" 
 loading="lazy" 
 referrerpolicy="no-referrer-when-downgrade">
</iframe>
</div>
   <?php require_once("comunes/footer.php")?>
<script src="js/index.js"></script>
</body>
</html>