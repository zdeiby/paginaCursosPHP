<?php
$data = $_POST['data'];

// Realiza las operaciones necesarias con los datos recibidos
// ...

// Envía una respuesta al cliente
//echo $data."hola";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="javascript.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php echo ($data != "null")?'': '<ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="./cursos.php">Cursos</a></li>
                 <li class="nav-item"><a class="nav-link" href="./register.php"><b>Registrate</b></a></li>
                 <div class="div1-efecto"><a class="btn btn-primary shadow div2-efecto" role="button"
                href="login.php">Iniciar sesión</a></div>' ?>
<?php echo ($data == "null")?'': '<ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="../cursos.php">Cursos</a></li>

  <li class="nav-item dropdown no-arrow" >
                            <div class="nav-item dropdown no-arrow">
                                <a class="dropdown-toggle nav-link show" aria-expanded="true" data-bs-toggle="dropdown" >
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small"> Seccion Iniciada <?php echo $data ?> </span>
                                 <img class="border rounded-circle img-profile text-dark tamano" src="https://static.vecteezy.com/system/resources/thumbnails/005/544/718/small/profile-icon-design-free-vector.jpg"/></a>
                              <!--  <div class=`dropdown-menu shadow dropdown-menu-end animated--grow-in ${showMenues} bg-light`>
                                 <a class="dropdown-item"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400 "></i>&nbsp;Profile</a>
                                    <a class="dropdown-item" ><i class="fas fa-cogs fa-sm fa-fw me-2 "></i>&nbsp;Settings</a>
                                 
                                    <div class="dropdown-divider"></div><a class="dropdown-item"  onClick={salir} ><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 "></i >&nbsp;Logout</a>
                                </div> -->
                            </div>
                            </li>' ?>


    
</body>
</html>


