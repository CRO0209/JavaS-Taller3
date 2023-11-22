<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="text-bg-secondary">

    <div class="container bg-primary-subtle">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">ICar Plus</span>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item mx-1"><a href="index.php" class="nav-link active" aria-current="page">Inventario</a></li>
                <li class="nav-item mx-1"><a href="producto-add.php" class="nav-link active" aria-current="page">Agregar a Inventario</a></li>
            </ul>
        </header>
    </div>

    <div class="container">
        <div class="row text-bg-light rounded py-5 px-3">
            <form id="formulario-modificar">
                <input type="hidden" id="id-act" value="<?php echo $_GET['id_act']; ?>">
                <div class="row my-3">
                    <div class="col"><label for="descripcion">Descripcion</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion">
                    </div>

                    <div class="col">
                        <label for="marca">Marca:</label>
                        <input type="text" class="form-control" id="marca" name="marca" required>
                    </div>

                    <div class="col">
                        <label for="modelo">Modelo del Vehiculo:</label>
                        <input type="text" class="form-control" id="modelo" name="modelo">
                    </div>

                    <div class="col">
                        <label for="tipo">Tipo:</label>
                        <input type="text" class="form-control" id="tipo" name="tipo">
                    </div>

                    <div class="col">
                        <label for="año">Año</label>
                        <input type="number" class="form-control" id="año" name="año">
                    </div>
                </div>
                <div class="col text-center">
                    <button type="submit" class="btn btn-primary" onclick="modificarRegistro(event)">Modificar</button>
                </div>
            </form>
        </div>
    </div>




    <script src="js/scripts.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>