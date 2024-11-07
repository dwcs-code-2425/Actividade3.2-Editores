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

        <a href="add_editor.php">Engadir unha editorial</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id.</th>
                    <th scope="col">Nome</th>
                </tr>
            </thead>
            <tbody>
                <?php

                require_once 'util.php';
                $resultados = getAllPublishers();
                if (is_null($resultados)) {
                    showMsg("Ocurriu un erro. Non se puideron recupar os editores.", "alert-danger");
                } else {
                    showPublishers($resultados);
                }


                ?>

            </tbody>
        </table>
    </div>

</body>

</html>