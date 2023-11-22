<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="">

    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

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

    <h1 class="text-center">Inventario</h1>

    <div class="container-principal mx-5">
        <?php
        require_once "./php/main.php";

        # Eliminar Producto #
        if (isset($_GET['id_del'])) {
            require_once "./php/producto_eliminar.php";
        }

        $url = "index.php";

        require_once "./php/producto_lista.php"
        ?>

    </div>

    <script src="js/scripts.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>