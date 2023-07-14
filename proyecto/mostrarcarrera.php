<?php

    
    require_once "controladores/CarrerasController.php";
    $ut = new CarrerasController();
        $resultado = $ut->mostrar();
        
        ?>
            <table border="1">
                <tr>
                    <th>Id_carrera</th>
                    <th>nombre_carrera</th>
                    <th>Eliminar</th>
                    <th>&nbsp</th>
                </tr>

        <?php
        foreach($resultado as $carreras){
            echo "<tr>
                    <td>".$carreras["id_carrera"]."</td>
                    <td>".$carreras["nombre_carrera"]."</td>
                    <td><a href='eliminarcarrera.php?id=".$carreras["id_carrera"]."'>Eliminar</a></td>
                 </tr>";

        }
        ?>
        </table>