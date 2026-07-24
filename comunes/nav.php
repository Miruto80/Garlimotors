<!DOCTYPE html>
<html lang="en">
<head>
</head>
<style>
 header {
    background-color: #1F2023; /* Color del header */
    position:sticky;
    top: 0;
    z-index: 1000;
}

header h1 {
    color: white; /* Color del texto del h1 */
    font-size: 1.5rem; /* Tamaño del h1 para que no sea demasiado grande */
    font-weight: bold;
}

header nav ul li a, 
header nav .dropdown-toggle {
    color: white !important; /* Color de los enlaces */
    text-decoration: none;
    font-weight: bold;
    transition: color 0.5s ease;
    font-size: 19px;
    margin-left: 5px;
    font-family:'Avenir Next', sans-serif;
}

header nav ul li a:hover,
header nav .dropdown-toggle:hover {
    color: #6A4B4F !important; /* Color de los enlaces al hacer hover */
}

/* Estilos para el menú desplegable */
.dropdown-menu {
    background-color: #1F2023;
    border: 1px solid #6A4B4F;
}

.dropdown-item {
    color: white !important;
    font-family:'Avenir Next', sans-serif;
    font-size: 16px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.dropdown-item:hover {
    background-color: #6A4B4F !important;
    color: white !important;
}

#Link-I{
    background-color: #6A4B4F;
    border-radius: 15px;
    padding: 12px;
    color: white !important;
    transition: background-color 0.5s ease;
    text-align: center;
}

#Link-I:hover{
    background-color: white !important;
    color: black !important;
}

.navbar-toggler i {
    font-size: 1.5rem;
}
.navbar-toggler {
    border: 2px solid white !important; /* Borde blanco */
    border-radius: 5px; /* Bordes ligeramente redondeados */
    padding: 6px 10px; /* Espaciado interno para que el icono no quede pegado al borde */
    background: transparent; /* Fondo transparente */
    transition: all 0.3s ease;
}

.navbar-toggler:hover {
    background: rgba(255, 255, 255, 0.1); /* Fondo sutil al hacer hover */
    transform: scale(1.05); /* Pequeño efecto de agrandamiento */
}

@media (max-width: 768px) {
  #logo{
    width: 150px;
    height: 50px
  }
}
</style>
<body>
<header>
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
          <img src="imagenes/Imgcom/GARLI MOTORS-11 (2).webp" id="logo" alt="Logo Garlimotors" width="200" height="80" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars text-white"></i>
        </button>
        
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="index.php"><?php echo $text['home']; ?></a>
            </li>

            <!-- 🏛️ DROPDOWN: Approvals -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="approvalsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $text['approvals']; ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="approvalsDropdown">
                <li><a class="dropdown-item" href="Pre-approval.php"><?php echo $text['pre_approval']; ?></a></li>
                <li><a class="dropdown-item" href="Bank-approval.php"><?php echo $text['bank_approval']; ?></a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="Mechanics.php"><?php echo $text['mechanics']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact"><?php echo $text['contact_us']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Reviews.php"><?php echo $text['reviews']; ?></a>
            </li>

            <!-- 🚗 DROPDOWN: Inventories -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="Link-I" href="#" id="inventoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $text['view_inventory']; ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="inventoryDropdown">
                <li><a class="dropdown-item" href="Inventory.php"><?php echo $text['general_inventory']; ?></a></li>
                <li><a class="dropdown-item" href="Inventory_B.php"><?php echo $text['bank_inventory']; ?></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>  
</body>
</html>