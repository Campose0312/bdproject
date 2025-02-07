<?php
require 'config/database.php';

$db = new Database();
$con = $db->conectar();
$comando = $con->prepare("SELECT * FROM proveedores ORDER BY id DESC");
$comando->execute();
$resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
print_r($resultado);    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Tienda - Lista de Proveedores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="public/css/estilos.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="py-3">
    <main class="container bg-dark rounded-2 shadow text-white">
        <div class="p-3 rounded-2">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-white"><i class='bx bx-store-alt'></i> Mi Tienda - Proveedores
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="addproveedor.php" class="btn btn-sm btn-primary"><i class='bx bx-plus' ></i> Agregar proveedor</a>
                            <a href="index.php" class="btn btn-sm btn-secondary"><i class='bx bx-right-arrow-alt'></i> Regresar</a>
                        </div>
                    </h4>
                </div>
            </div>
            <div class="row py-3">
                <div class="col">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>RIF</th>
                                <th>Fecha de Registro</th>
                                <th><i class='bx bxs-buoy'></i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 0;
                            foreach ($resultado as $row) {
                                $count++;
                            ?>
                                <tr>
                                    <td><?php echo $count; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['direction']; ?></td>
                                    <td><?php echo $row['rif']; ?></td>
                                    <td><?php echo $row['register']; ?></td>
                                    <td><a href="editarproveedor.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary"><i class='bx bx-edit-alt'></i> Editar</a></td>
                                    <td><a href="eliminarproveedor.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger"><i class='bx bx-x'></i> Eliminar</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>