<?php


$id = $_GET["id"];

        require_once "controladores/CursoController.php";
        
        $uc = new CursoController();
        $resultado = $uc->eliminar($id);
     
            if($resultado!=0){
                header("location: Mostrarcursos.php");
            }else{
                echo "Error: no se han eliminado los datos";
            }
            
        

?>