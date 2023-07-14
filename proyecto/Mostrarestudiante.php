<?php

    
    require_once "controladores/EstudianteController.php";
    $ut = new EstudianteController();
        $resultado = $ut->mostrar();
        
        ?>
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Codigo</th>
                    <th>Dni</th>
                    <th>Contraseña</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                    <th>&nbsp</th>
                </tr>

        <?php

    
        foreach($resultado as $estudiantes){
            echo "<tr>
                    <td>".$estudiantes["id_estudiante"]."</td>
                    <td>".$estudiantes["nombre_estudiante"]."</td>
                    <td>".$estudiantes["apellido_estudiante"]."</td>
                    <td>".$estudiantes["codigo_estudiante"]."</td>
                    <td>".$estudiantes["dni_estudiante"]."</td>
                    <td>".$estudiantes["contrasena_estudiante"]."</td>
                    <td><a href='actualizarestudiante.php?id=".$estudiantes["id_estudiante"]."'>Actualizar</a></td>
                    <td><a href='eliminarestudiante.php?id=".$estudiantes["id_estudiante"]."'>Eliminar</a></td>
                 </tr>";

        }
        ?>
        </table>