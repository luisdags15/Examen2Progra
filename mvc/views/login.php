    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Agregar Articulo</title>
</head>
<body>

    <div class="container mt-5">
        <h1>Agregar Artículo</h1>
        <form action="index.php" method="GET">
            <div class="row">
                <div class="col-12">
                    
                </div>
                <div class="col-12 mb-2">
                    <label for="text">Nombre</label>
                    <input type="hidden" name="page" value="nombre">
                    <input type="text" class="form-control" name="nombre">
                </div>
                <div class="col-12 mb-2">
                <label for="">Precio</label>
                    <input type="text" class="form-control" name="articulo">
                </div>

                <div class="col-12 mb-2">
                <label for="">Aplica IVA</label>
                </div>
               
                <div class="col-12 mb-2">      
                <input class="form-check-input" type="checkbox" id="ivasi" value="ivasi">
                <label class="form-check-label" for="inlineCheckbox1">Si</label>
                </div>
                <div class="col-12 mb-2">
                <input class="form-check-input" type="checkbox" id="ivano" value="ivano">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
               <!--Boton-->
                <div class="col-12">
                    <input type="submit" class="btn btn-success" value="Agregar">
                </div>
               
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>