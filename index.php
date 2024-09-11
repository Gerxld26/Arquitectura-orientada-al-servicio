<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Cargas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Registrar Carga</h2>
        <div class="card p-4 shadow-lg">
            <form action="guardar_carga.php" method="POST">
                <div class="mb-3">
                    <label for="tipo_carga" class="form-label">Tipo de Carga:</label>
                    <input type="text" class="form-control" name="tipo_carga" required>
                </div>

                <div class="mb-3">
                    <label for="tamano_carga" class="form-label">Tamaño de Carga:</label>
                    <input type="text" class="form-control" name="tamano_carga" required>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado:</label>
                    <input type="text" class="form-control" name="estado" required>
                </div>

                <div class="mb-3">
                    <label for="costo" class="form-label">Costo:</label>
                    <input type="text" class="form-control" name="costo" required>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                </div>
            </form>
        </div>

        <h2 class="text-center my-4">Lista de Cargas</h2>
        <table class="table table-hover shadow-lg">
            <thead class="table-dark">
                <tr>
                    <th>Tipo de Carga</th>
                    <th>Tamaño de Carga</th>
                    <th>Estado</th>
                    <th>Costo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'db.php';
                $sql = "SELECT * FROM cargas";
                $stmt = $pdo->query($sql);
                while ($row = $stmt->fetch()) {
                    echo "<tr>
                            <td>{$row['tipo_carga']}</td>
                            <td>{$row['tamano_carga']}</td>
                            <td>{$row['estado']}</td>
                            <td>{$row['costo']}</td>
                            <td>
                                <a href='eliminar_carga.php?id={$row['id']}' class='btn btn-danger btn-sm'>Eliminar</a>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
