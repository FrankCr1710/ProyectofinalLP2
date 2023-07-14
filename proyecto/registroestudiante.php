<!DOCTYPE html>
<html>
<head>
    <title>Registro del Estudiante</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
            color: #333;
        }
        
        form {
            margin-top: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }
        
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            font-size: 14px;
            margin-bottom: 10px;
        }
        
        textarea {
            height: 80px;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        
        .error-message {
            color: #ff0000;
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Ingrese registro del Estudiante</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <label>Nombre:</label>
            <input type="text" name="nombre_estudiante" placeholder="Ingrese nombre" required>
            
            <label>Apellido:</label>
            <input type="text" name="apellido_estudiante" placeholder="Ingrese apellido" required>
            
            <label>Código:</label>
            <input type="number" name="codigo_estudiante" placeholder="Ingrese código" required>
            
            <label>DNI:</label>
            <input type="number" name="dni_estudiante" placeholder="Ingrese DNI" required>
            
            <label>Contraseña:</label>
            <input type="text" name="contrasena_estudiante" placeholder="Ingrese contraseña" required>
            
            <input type="submit" value="Guardar">
        </form>

        <?php
        if (!empty($_POST)) {
            $nombre_estudiante = $_POST["nombre_estudiante"];
            $apellido_estudiante = $_POST["apellido_estudiante"];
            $codigo_estudiante = $_POST["codigo_estudiante"];
            $dni_estudiante = $_POST["dni_estudiante"];
            $contrasena_estudiante = $_POST["contrasena_estudiante"];

            require_once "controladores/EstudianteController.php";

            $uc = new EstudianteController();
            $resultado = $uc->guardar($nombre_estudiante, $apellido_estudiante, $codigo_estudiante, $dni_estudiante, $contrasena_estudiante);

            if ($resultado != 0) {
                header("location: Mostrarestudiante.php");
                exit();
            } else {
                echo "<p class='error-message'>Error: no se han guardado los datos</p>";
            }
        }
        ?>
    </div>
</body>
</html>
