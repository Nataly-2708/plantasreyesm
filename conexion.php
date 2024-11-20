<?php
$host = 'localhost'; // Cambia si tu servidor PostgreSQL no está en localhost
$dbname = 'Plantas.Reyes.M'; // Reemplaza con el nombre de tu base de datos
$user = 'postgres'; // Usualmente 'postgres'
$password = 'cucei'; // Contraseña de tu usuario

try {
    // Crear conexión con PDO
    $pdo = new PDO("pgsql:host=$host;port=5432;dbname=$dbname", $user, $password);

    // Configuramos PDO para que arroje excepciones en caso de error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Confirmar conexión exitosa
    // echo "Conexión exitosa a PostgreSQL"; // Puedes comentar esto
} catch (PDOException $e) {
    // Error de conexión
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
?>
