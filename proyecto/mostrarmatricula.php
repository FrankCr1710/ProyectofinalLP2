<?php

    
    require_once "controladores/MatriculaController.php";
    $ut = new MatriculaController();
        $resultado = $ut->mostrar();
        
        ?>
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>id_estudiante</th>
                    <th>id_curso</th>
                    <th>Eliminar</th>
                    <th>Actualizar</th>
                    <th>&nbsp</th>
                </tr>

        <?php
        foreach($resultado as $matriculas){
            echo "<tr>
                    <td>".$matriculas["id_matricula"]."</td>
                    <td>".$matriculas["id_estudiante_matricula"]."</td>
                    <td>".$matriculas["id_curso_matricula"]."</td>
                    <td><a href='eliminarmatricula.php?id=".$matriculas["id_matricula"]."'>Eliminar</a></td>
                    <td><a href='actualizarmatricula.php?id=".$matriculas["id_matricula"]."'>Actualizar</a></td>
                 </tr>";

        }
        ?>
        </table>