<?php

function getAllPublishers(): array|null
{
    require_once "connection.php";

    try {
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT * FROM publishers ORDER BY publisher_id");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $ex) {
        error_log("No se han podido recuperar los datos de la tabla publishers: " . $ex->getMessage() . $ex->getTraceAsString());
        return null;
    }
}

function showPublishers(array $resultados)
{
    foreach ($resultados as $fila) {
        //echo "<tr><td>". $fila["publisher_id"]. "</td></tr>";
        echo "<tr>
    <td> {$fila["publisher_id"]} </td>
     <td> {$fila["name"]} </td>
    </tr>";
    }
}


function addEditor(string $name): bool
{

    try {
        $conn = getConnection();

        $stmt = $conn->prepare("INSERT INTO `publishers` (`name`) 
    VALUES (:nombre) ");
        $stmt->bindValue("nombre", $name);
        return $stmt->execute();
    } catch (Exception $e) {
        error_log("Non se puido engadir un editor: " . $e->getMessage() . "-" . $e->getTraceAsString());
        return false;
    } finally {
        $conn = null;
        $stmt = null;
    }
}

function showMsg(string $msg, string $cssClass){
    echo "  <div class=\"alert $cssClass mt-3\" role=\"alert\">
               $msg
            </div>";
}
