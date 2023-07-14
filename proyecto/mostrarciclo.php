<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Ciclos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url("https://www.ngenespanol.com/wp-content/uploads/2023/03/que-es-una-galaxia-y-como-se-forman-estas-colonias-espaciales.jpg"); /* Ruta a la imagen de fondo */
            background-size: cover; 
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.8); 
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        th {
            background-color: #42FF33;
        }
        a {
            text-decoration: none;
            color: #000;
        }
        .eliminar {
            background-color: #ff0000;
            color: #fff;
        }
        a.eliminar:hover {
            background-color: #d90000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mostrar Ciclos</h1>
        <table>
            <tr>
                <th>Id_ciclo</th>
                <th>numero_ciclo</th>
                <th>Eliminar</th>
                <th>&nbsp;</th>
            </tr>

            <?php
            require_once "controladores/CicloController.php";
            $ut = new CicloController();
            $resultado = $ut->mostrar();
            
            foreach($resultado as $ciclos){
                echo "<tr>
                        <td>".$ciclos["id_ciclo"]."</td>
                        <td>".$ciclos["numero_ciclo"]."</td>
                        <td><a href='eliminarciclo.php?id=".$ciclos["id_ciclo"]."' class='eliminar'>Eliminar</a></td>
                     </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
