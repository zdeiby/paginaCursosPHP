<?php 
   include 'constructor.php';
   $info= new Texto();
    $info->textoEnviar("Prepárate para hacer de tu web un sitio dinámico y con funcionalidades del lado del cliente","javascript");
    $info2= new Texto();
    $info2->textoEnviar("Aprende el lenguaje de programación mas utilizado por todo el mundo","php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include('components/nav.php'); ?> 

<div class="container py-5">
            <div class="mx-auto" style="max-width: 900px;">
                <div class="row row-cols-1 row-cols-md-2 d-flex justify-content-center">
                    <div class="col mb-4">
                        <div class="card bg-primary-light">
                            <div class="card-body text-center px-4 py-5 px-md-5">
                                <p class="fw-bold text-primary card-text mb-2"><?php echo $info->title; ?></p>
                                <h5 class="fw-bold card-title mb-3"><?php echo $info->text; ?></h5><a href="cursos/javascript.php"><button class="btn btn-primary btn-sm" type="button">Learn more</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card bg-success-light">
                            <div class="card-body text-center px-4 py-5 px-md-5">
                                <p class="fw-bold text-success card-text mb-2"><?php echo $info2->title; ?></p>
                                <h5 class="fw-bold card-title mb-3"><?php echo $info2->text; ?></h5><a href="cursos/php.php"><button class="btn btn-primary btn-sm" type="button">Learn more</button></a>
                            </div>
                        </div>
                    </div>
                    
</div>
</div>
</div>

<?php include('components/footer.php'); ?> 
</body>
</html>