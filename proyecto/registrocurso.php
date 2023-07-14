<!DOCTYPE html>
<html>
<head>
    <title>Registro de Cursos</title>
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
        <h2>Ingrese registro del Curso</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <label>Nombre del curso:</label>
            <input type="text" name="nombre_curso" placeholder="Ingrese nombre del curso" required>
            
            <label>Id del horario del curso:</label>
            <input type="number" name="id_horario_curso" placeholder="Ingrese id del horario del curso" required>
            
            <label>Id de la carrera del curso:</label>
            <input type="number" name="id_carrera_curso" placeholder="Ingrese id de la carrera del curso" required>
            
            <label>Id del ciclo del curso:</label>
            <input type="number" name="id_ciclo_curso" placeholder="Ingrese id del ciclo del curso" required>
            
            <label>Id del usuario del curso:</label>
            <input type="number" name="id_usuario_curso" placeholder="Ingrese id del usuario del curso" required>
            
            <input type="submit" value="Guardar">
        </form>

        <?php
        if (!empty($_POST)) {
            $nombre_curso = $_POST["nombre_curso"];
            $id_horario_curso = $_POST["id_horario_curso"];
            $id_carrera_curso = $_POST["id_carrera_curso"];
            $id_ciclo_curso = $_POST["id_ciclo_curso"];
            $id_usuario_curso = $_POST["id_usuario_curso"];

            require_once "controladores/CursoController.php";

            $uc = new CursoController();
            $resultado = $uc->guardar($nombre_curso, $id_horario_curso, $id_carrera_curso, $id_ciclo_curso, $id_usuario_curso);

            if ($resultado != 0) {
                header("location: Mostrarcursos.php");
                exit();
            } else {
                echo "<p class='error-message'>Error: no se han guardado los datos</p>";
            }
        }
        ?>
    </div>
</body>
</html>
