<?php
// api/conexion.php
header('Content-Type: application/json');

$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$dbname = getenv('DB_NAME');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

$connection_string = "host=$host port=$port dbname=$dbname user=$user password=$password sslmode=require";
$dbconn = pg_connect($connection_string);

if (!$dbconn) {
    echo json_encode(["error" => "No se pudo conectar a la base de datos."]);
    exit;
}

echo json_encode(["message" => "Conexión exitosa"]);
?>
