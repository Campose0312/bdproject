<?php
require 'config/database.php';

$db = new Database();
$con = $db->conectar();

$id = $_GET['id'];

$query = $con->prepare("SELECT * FROM proveedores WHERE id = :id");
$query->execute(['id' => $id]);
$num = $query->rowCount();
if ($num > 0) {
    $row = $query->fetch(PDO::FETCH_ASSOC);
} else {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda - Editar Producto</title>
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
                    <h4>Editar proveedor</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <form class="row g-3" method="POST" action="guardarproveedor.php" autocomplete="off">
                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                        <div class="col-md-4">
                            <label for="codigo" class="form-label">Nombre</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?php echo $row['name']; ?>" required autofocus>
                        </div>
                        <div class="col-md-8">
                            <label for="descripcion" class="form-label">Direccion</label>
                            <input type="text" id="direction" name="direction" class="form-control" value="<?php echo $row['direction']; ?>" required>
                        </div>
                        <div class="col-md-12">
                            <label for="descripcion" class="form-label">RIF</label>
                            <input type="text" id="rif" name="rif" class="form-control" value="<?php echo $row['rif']; ?>" required>
                        </div>
                        <div class="col-md-12">
                            <a class="btn btn-secondary" href="proveedores.php">Regresar</a>
                            <button type="submit" class="btn btn-primary" name="registro">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

</body>

</html>