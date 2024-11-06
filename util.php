<?php

function getAllPublishers(): array|null
{
    require_once "connection.php";

    try {
        $conn = getConnection();

        $stmt = $conn->prepare("SELECT * FROM publishers ORDER BY publisher_id");

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $ex){
        error_log("No se han podido recuperar los datos de la tabla publishers: " . $ex->getMessage() . $ex->getTraceAsString());
        return null;
    }
    
}