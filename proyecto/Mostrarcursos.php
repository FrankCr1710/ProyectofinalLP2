<?php

    
    require_once "controladores/CursoController.php";
    $ut = new CursoController();
        $resultado = $ut->mostrar();
        
        ?>
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Nombre Del Curso</th>
                    <th>Id horario de curso</th>
                    <th>Id carrerade curso</th>
                    <th>id ciclo del curso</th>
                    <th>&nbsp</th>
                </tr>
        
        <?php
        foreach($resultado as $cursos){
            echo "<tr>
                    <td>".$cursos["id_curso"]."</td>
                    <td>".$cursos["nombre_curso"]."</td>
                    <td>".$cursos["id_horario_curso"]."</td>
                    <td>".$cursos["id_carrera_curso"]."</td>
                    <td>".$cursos["id_ciclo_curso"]."</td>
                    <td><a href='eliminarcurso.php?id=".$cursos["id_curso"]."'>Eliminar</a></td>
                  
                 </tr>";

        }
        ?>
      
        