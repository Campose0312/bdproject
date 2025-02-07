<?php

require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$correcto = false;

$name = $_POST['brand'];
$idp = $_POST['idp'];

$query = $con->prepare("INSERT INTO marcas (brand, idp) VALUES (:brand, :idp)");
$resultado = $query->execute(array('brand' => $name, 'idp' => $idp));

if ($resultado) {
    $correcto = true;
    echo $con->lastInsertId();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda - Guardar Cambios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="py-3">
    <main class="container bg-dark rounded-2 shadow text-white">
        <div class="p-3 rounded">
            <div class="row">
                <div class="col">
                    <?php if ($correcto) { ?>
                        <h3>Registro guardado</h3>
                    <?php } else { ?>
                        <h3>Error al guardar</h3>
                    <?php }  ?>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a class="btn btn-primary" href="marcas.php">Regresar</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>