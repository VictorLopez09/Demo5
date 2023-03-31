<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de productos</title>
</head>
<body>
    <h1>Lista de productos</h1>
    <div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'Models/Producto.php';
                    $producto=new Producto();
                    $resultado=$producto->ObtenerProductos();
                    if(count($resultado)>0){
                        foreach ($resultado as $registro) {
                        echo '<tr>';
                        echo '<th>'.$registro['ID'].'</th>';
                        echo '<th>'.$registro['Nombre'].'</th>';
                        echo '<th>'.$registro['Precio'].'</th>';
                        echo '<th>'.$registro['Existencias'].'</th>';
                        echo '</tr>';
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>