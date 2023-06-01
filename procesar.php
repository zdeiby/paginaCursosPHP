<?php
$data = $_POST['data'];

// Realiza las operaciones necesarias con los datos recibidos
// ...

// Envía una respuesta al cliente
//echo $data."hola";
include 'constructor.php';
$info= new Texto();
$info->textoEnviar("data","");



?>

<!DOCTYPE html>
<html lang="en">

<body>

<?php echo ($data != "null")?'': '<ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="./cursos.php">Cursos</a></li>
                 <li class="nav-item"><a class="nav-link" href="./register.php"><b>Registrate</b></a></li>
                 <div class="div1-efecto"><a class="btn btn-primary shadow div2-efecto" role="button"
                href="login.php">Iniciar sesión</a></div>' ?>
<?php echo ($data == "null")?'': '<ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="./index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="./cursos.php">Cursos</a></li>
                    
                    ' ?>

<?php echo($data == "null")?'':'<div class="nav-item dropdown no-arrow">
                    <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        <span class="d-none d-lg-inline me-2 text-gray-600 small"></span> <span id="resultado">
                      <?php echo  <script> '.$data.' </script>

                        </span>
                        <img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                        <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                            <div class="dropdown-divider"></div><a onclick(cerrar()) class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                        </div>
                    </div>
</div>'?>  

    <script>
        function cerrar(){
            localStorage.clear();
        }
    </script>


</body>
</html>


