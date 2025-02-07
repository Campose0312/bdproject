<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda - Pagina Principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="py-3">
    <main class="container bg-dark rounded-2 shadow text-white">
        <div class="p-3 rounded">
            <h1>Mi Tienda</h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card border-0 shadow bg-primary p-2 text-white">
                        <div class="card-body">
                            <h1>Proveedores</h1>
                            <a class="btn btn-sm btn-dark" href="proveedores.php">Ver Lista</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-0 shadow bg-danger p-2 text-white">
                        <div class="card-body">
                            <h1>Marcas</h1>
                            <a class="btn btn-sm btn-dark" href="marcas.php">Ver Lista</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card border-0 shadow bg-success p-2 text-white">
                        <div class="card-body">
                            <h1>Productos</h1>
                            <a class="btn btn-sm btn-dark" href="productos.php">Ver Lista</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>