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
        <h1>Engadir editorial</h1>
        <a href="index.php">Volver ao listado</a>
        <form method="post">
            <div class="mb-3">
                <label for="editorName" class="form-label">Nome editorial</label>
                <input type="text" class="form-control" id="editorName" name="nomeEditor" required>
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>

</body>

</html>
<?php
require_once "connection.php";
require_once "util.php";

if (isset($_POST["nomeEditor"])) {
    $nomeEditor = $_POST["nomeEditor"];
    if (trim($nomeEditor) !== "") {
        if (addEditor($nomeEditor)) {
            showMsg(" A editorial creouse con éxito.", "alert-success");
        } else {

            showMsg("Non se puido crear a editorial.", "alert-danger");
        }
    } else {
        showMsg(" Non se permiten espazos.", "alert-primary");
    }
}

?>