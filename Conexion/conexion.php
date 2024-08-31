<?php
$serverName = "WALTERRUYAN\SQLEXPRESS"; // Nombre o IP del servidor SQL Server
$database = "TestBD"; // Nombre de la base de datos
$username = "sa"; // Usuario de SQL Server
$password = "admin123"; // Contraseña de SQL Server


try {
    // Cadena de conexión a SQL Server utilizando PDO
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);

    // Establecer el modo de error a excepción para manejar los errores
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //  echo "Conexión exitosa a SQL Server!";
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>
