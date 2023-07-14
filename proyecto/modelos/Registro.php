<?php
// Verificar si se ha enviado el formulario de registro
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Validar los datos ingresados
    if (empty($nombre) || empty($email) || empty($password)) {
        $error = "Por favor, complete todos los campos.";
    } else {
        // Conectar a la base de datos (modifica los valores de acuerdo a tu configuración)
        $db_host = "localhost";
        $db_user = "usuario";
        $db_password = "contraseña";
        $db_name = "nombre_basedatos";
        $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

        if ($conn->connect_error) {
            die("Error al conectar a la base de datos: " . $conn->connect_error);
        }

        // Verificar si el correo electrónico ya está registrado
        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            $error = "El correo electrónico ya está registrado.";
        } else {
            // Generar el hash de la contraseña
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insertar el nuevo usuario en la base de datos
            $query = "INSERT INTO usuarios (nombre, email, password) VALUES ('$nombre', '$email', '$hashedPassword')";
            if ($conn->query($query) === TRUE) {
                header("Location: login.php");
                exit();
            } else {
                $error = "Error al registrar el usuario: " . $conn->error;
            }
        }

        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de usuario</title>
</head>
<body>
    <h1>Registro de usuario</h1>
    <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
