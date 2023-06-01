<?php
$data = $_POST['data'];

// Realiza las operaciones necesarias con los datos recibidos
// ...

// Envía una respuesta al cliente
//echo $data

?>


<?php echo ($data == "null")?'': '<li class="nav-item"><a class="nav-link" href="./register.php"><b>Registrate</b></a></li><div class="div1-efecto"><a class="btn btn-primary shadow div2-efecto" role="button"
                href="login.php">Iniciar sesión</a></div>' ?>