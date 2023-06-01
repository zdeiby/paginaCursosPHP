<?php

$jsCode = <<<EOD
<script>
    // Almacenar el valor en LocalStorage
    localStorage.setItem('miVariable', "caracoles");
</script>
EOD;

$data = $_POST['data'];

// Realiza las operaciones necesarias con los datos recibidos
// ...

// Envía una respuesta al cliente (opcional)

$login=true;
?>


<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="utf-8">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HV59T08TYC"></script>
    <script src="localstoraje.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Castelán Carpinteyro - Inicio</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9258502939818184"
     crossorigin="anonymous"></script>
    <meta name="theme-color" content="#5436cd">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://castelancarpinteyro.com/assets/img/castelancarpinteyro/DanteDEV-Black-Blackground.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://castelancarpinteyro.com/assets/img/castelancarpinteyro/DanteDEV-Black-Blackground.png">
    <link rel="icon" type="image/png" sizes="4398x3333" href="assets/img/castelancarpinteyro/DanteDEV.png">
    <link rel="icon" type="image/png" sizes="4398x3333" href="assets/img/castelancarpinteyro/DanteDEV.png">
    <link rel="icon" type="image/png" sizes="4405x3333" href="assets/img/castelancarpinteyro/DanteDEV-Black-Blackground.png">
    <link rel="icon" type="image/png" sizes="4398x3333" href="assets/img/castelancarpinteyro/DanteDEV.png">
    <link rel="icon" type="image/png" sizes="4405x3333" href="assets/img/castelancarpinteyro/DanteDEV-Black-Blackground.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/extra.css">
    <link rel="stylesheet" href="assets/css/uiverse.css">
</head> 

 
 <nav class="navbar navbar-dark navbar-expand-md sticky-top navbar-shrink py-3" id="mainNav">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href=""><span class="bs-icon-sm bs-icon-circle bs-icon-primary shadow d-flex justify-content-center align-items-center me-2 bs-icon rueda-logo"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-code-slash">
                        <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"></path>
                    </svg></span><span>Pagina Cursos</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <div id="respuesta">

                  </div>
                  <!--    <li class="nav-item"><a class="nav-link" href="products.php">Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="Software.php">Software</a></li>
                </ul> -->
            </div>
        </div>
    </nav>


<script>
  var data = localStorage.getItem('miVariable');

  // Envía los datos al servidor PHP
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'procesar.php', true);
  xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Actualizar el contenido del elemento "respuesta" en la página
      document.getElementById('respuesta').innerHTML = xhr.responseText;
    }
  };
  xhr.send('data=' + encodeURIComponent(data));
</script>
