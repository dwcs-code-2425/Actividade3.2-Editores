<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <h1>Listado de editoriais</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Publisher Id.</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                <?php

                require_once 'util.php';
                $resultados = getAllPublishers();
                if (is_null($resultados)) {
                ?>

                    <div class="alert alert-danger" role="alert">
                        Ha ocurrido un error. No se han podido recupar los editores.
                    </div>

                <?php } else {

                    foreach ($resultados as $fila) {
                        //echo "<tr><td>". $fila["publisher_id"]. "</td></tr>";
                        echo "<tr>
                    <td> {$fila["publisher_id"]} </td>
                     <td> {$fila["name"]} </td>
                    </tr>";
                    }
                }


                ?>

            </tbody>
        </table>
    </div>

</body>

</html>