<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

header nav ul li a {
    color: white; /* Color de los enlaces */
    text-decoration: none;
    font-weight: bold;
    transition: color 0.5s ease;
    font-size: 19px;
    margin-left: 5px;
    font-family:'Avenir Next', sans-serif;
}
header nav ul li a:hover {
    color: #6A4B4F; /* Color de los enlaces */
}

#Link-I{
    background-color: #6A4B4F;
    border-radius: 15px;
    padding: 12px;
    color: white;
    transition: background-color 0.5s ease;
    text-align: center;
}

#Link-I:hover{
    background-color: white;
    color:black;
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
</style>
<body>
<header>
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="imagenes/GARLI MOTORS-11 (2).png" alt="Logo Taekyon" width="250" height="100" class="d-inline-block align-text-top">
            </a>
            <h1 class="navbar-brand fs-4 d-none d-sm-inline d-lg-inline fs-lg-2 text-white">
              <b>Buy and Finance cars</b>
            </h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-white"></i>
            </button>
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="Get approved.html">Pre-Approval</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="Link-I" href="Inventory.php">View inventory</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>  
</body>
</html>