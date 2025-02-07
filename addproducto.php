<?php 
require 'config/database.php';

$db = new Database();
$con = $db->conectar();
$comando = $con->prepare("SELECT * FROM marcas ORDER BY idm DESC");
$comando->execute();
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda - Agregar Producto</title>
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
                    <h4 class="text-white mb-4">Agregar Producto</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form class="row g-3 text-white" method="POST" action="guardarproducto.php" autocomplete="off">
                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Nombre</label>
                            <input type="text" id="namep" name="namep" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-8">
                            <label for="descripcion" class="form-label">Marcas</label>
                            <select class="form-select" name="marca" required>
                                <option selected>Selecciona una marca</option>
                                <?php foreach ($resultado as $row) {?>
                                <option value="<?=number_format($row['idm'])?>"><?=$row['brand']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Cantidad</label>
                            <input type="text" id="count" name="count" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Codigo</label>
                            <input type="text" id="code" name="code" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Descripción</label>
                            <input type="text" id="descrip" name="descrip" class="form-control" required autofocus>
                        </div>
                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="productos.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>