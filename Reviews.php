<?php
  $conn = new mysqli('localhost', 'root', '', 'reviewsGarlimotors');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    $stmt = $conn->prepare("INSERT INTO reviews (name, rating, review) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $name, $rating, $review);
    $stmt->execute();
    $stmt->close();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <?php require_once("comunes/head.php") ?>
    <link rel="stylesheet" href="css/reviews.css">
</head>
<body>
<?php require_once("comunes/nav.php") ?>

<section id="reviews" class="text-center">
  <h2>Customer Reviews</h2>
  <button id="open-modal">Leave a Review Now</button>
</section>

<section id="reviewsList">
  <h3 class="text-center">Recent Reviews:</h3>
  <?php
          $result = $conn->query("SELECT name, rating, review, created_at FROM reviews ORDER BY created_at DESC");
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
          
</section>

<!-- Modal -->
<div id="modal">
  <div id="modal-content">
    <button id="close-modal">✖</button>
    <h3>Leave a Review</h3>
    <form method="POST" onsubmit="return validarenvio()">
              <label for="name">Name:</label>
                <input type="text" name="name" placeholder="Put your name here" id="name" required><br>
								<span id="sname" class="errorform"></span>
							
              <label for="rating">Rating (1-5):</label>
              <br>
              <select class="form-select" id="rating" name="rating">
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
									</select>
              <label for="review">Review:</label>
                <textarea name="review" id="review" required></textarea><br>
								<span id="sreview" class="form-text text-muted"></span>
       <button type="submit" class="text-center">Submit Review</button>
    </form>
  </div>
</div>

<?php require_once("comunes/footer.php") ?>

<script>
  const modal = document.getElementById('modal');
  const openModalButton = document.getElementById('open-modal');
  const closeModalButton = document.getElementById('close-modal');

  openModalButton.addEventListener('click', () => {
    modal.style.display = 'flex';
  });

  closeModalButton.addEventListener('click', () => {
    modal.style.display = 'none';
  });

  window.addEventListener('click', (event) => {
    if (event.target === modal) {
      modal.style.display = 'none';
    }
  });
  $("#name").on("keypress", function (e) {
    validarkeypress(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]*$/, e);
});

$("#name").on("keyup", function () {
    validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/, $(this), $("#sname"), "Only letters between 3 and 30 characters");
});

// Función de validación del envío
function validarenvio() {
    if (validarkeyup(/^[A-Za-z\b\s\u00f1\u00d1\u00E0-\u00FC]{3,30}$/, $("#name"), $("#sname"), "Only letters between 3 and 30 characters") == 0) {
        alert("Error in name");
        return false;
    }
    return true;
}

// Función para validar la entrada mientras se escribe
function validarkeypress(er, e) {
    key = e.keyCode;
    tecla = String.fromCharCode(key);
    a = er.test(tecla);
    if (!a) {
        e.preventDefault();
    }
}

// Función para validar la entrada después de escribir
function validarkeyup(er, etiqueta, etiquetamensaje, mensaje) {
    a = er.test(etiqueta.val());
    if (a) {
        etiquetamensaje.text("");
        return 1;
    } else {
        etiquetamensaje.text(mensaje);
        return 0;
    }
}
</script>
</body>
</html>