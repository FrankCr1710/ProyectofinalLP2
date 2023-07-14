<?php
// Código PHP

// ...
?>

<!DOCTYPE html>
<html>
<head>
    <title>Botón de Redirección</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("https://itpeers.com/wp-content/uploads/2019/08/Imagem-para-os-blogs-1024x683.png"); /* Ruta a la imagen de fondo */
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }
        h2 {
            text-align: center;
            
        }
        p {
            text-align: center;
        }
        .buttons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .buttons a {
            text-decoration: none;
            margin: 10px;
        }
        .buttons img {
            display: block;
            width: 100px;
            height: 100px;
            margin-bottom: 10px;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h2>BIENVENIDO ESTUDIANTE:</h2>
        <p>ESCOJA LAS SIGUIENTES OPCIONES.</p>
        <div class="buttons">
            <a href="registrociclos.php">
                <img src="https://conceptodefinicion.de/wp-content/uploads/2022/05/sistema.jpg" alt="Ciclo">
                <button>CICLO</button>
            </a>
            <a href="registrocarrera.php">
                <img src="https://concepto.de/wp-content/uploads/2018/08/software-de-sistema-1-e1534948748523.jpg" alt="Carrera">
                <button>CARRERA</button>
            </a>
            <a href="registromatricula.php">
                <img src="https://files.pucp.education/puntoedu/wp-content/uploads/2021/02/23010149/matricula-2020-2-pucp.jpg" alt="Matricula">
                <button>MATRICULA</button>
            </a>
            <a href="registrocurso.php">
                <img src="https://www.paho.org/sites/default/files/styles/max_1500x1500/public/2022-04/online-learning.jpg?itok=r_uEtKaZ" alt="Curso">
                <button>CURSO</button>
            </a>
            <a href="registroestudiante.php">
                <img src="https://keystoneacademic-res.cloudinary.com/image/upload/v1575892550/element/12/126310_shutterstock_206744158.jpg" alt="Estudiante">
                <button>ESTUDIANTE</button>
            </a>
        </div>
    </div>
</body>
</html>
