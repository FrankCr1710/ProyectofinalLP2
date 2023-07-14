<!DOCTYPE html>
<html>
<head>
    <title>Ingresar Ciclo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
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
        <h1>Ingresar Ciclo</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <input type="number" name="numero_ciclo" placeholder="Ingrese ciclo" required><br>
            <input type="submit" value="Guardar"><br>
        </form>

        <?php
        if (!empty($_POST)) {
            $numero_ciclo = $_POST["numero_ciclo"];

            require_once "controladores/CicloController.php";

            $uc = new CicloController();
            $resultado = $uc->guardar($numero_ciclo);

            if ($resultado != 0) {
                header("location: mostrarciclo.php");
                exit();
            } else {
                echo "<p class='error-message'>Error: no se han guardado los datos</p>";
            }
        }
        ?>
    </div>
</body>
</html>
