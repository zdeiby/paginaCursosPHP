<?php  
include 'apiDB.php';

if($_POST){
    $correo=$_POST["email"];
    $password=$_POST["password"];
   // echo $correo. " ". $password;

    foreach($objRespuesta->body as $key){
        if($correo == $key->email && $password==  $key->password){
            session_start();  // para compartir info mediante archivos php 
            $_SESSION["usuario"]=$key->email;
            $valor =  $key->name;

            // Imprimir el valor en una etiqueta de script
            echo '<script>localStorage.setItem("miVariable", "' . $valor . '");</script>';
            header("Location: index.php");
exit(); // Asegúrate de usar exit() después de la redirección para detener la ejecución del script actual
        }
    }
}

echo $_SESSION["usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('components/head.php'); ?> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('components/nav.php'); ?> 
<section class="py-5">
        <div class="container py-5">
            <div class="row mb-4 mb-lg-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <p class="fw-bold text-success mb-2">Inicio de sesión</p>
                    <h2 class="fw-bold">Bienvenido</h2>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body text-center d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                                </svg></div>
                            <form action="" method="post">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Contraseña"></div>
                                <div class="mb-3"><button class="btn btn-primary shadow d-block w-100" type="submit">Iniciar sesión</button></div>
                             <!--   <p class="text-muted">¿Olvidaste tu <a href="">contraseña</a>?</p> -->
                                <p class="text-muted">¿No tienes una cuenta?&nbsp;<a href="register.php">Regístrate</a>.<br></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Start: Footer Multi Column -->
<?php include('components/footer.php'); ?>    
</body>
</html>