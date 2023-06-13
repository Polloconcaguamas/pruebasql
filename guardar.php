<?php
$servername = "localhost";
$username = "manuelgit";
$password = "123456";
$dbname = "libreria_cf";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO usersgit (nombre, email) VALUES ('$nombre', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Registro guardado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
