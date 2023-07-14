<?php


$id = $_GET["id"];

        require_once "controladores/EstudianteController.php";
        
        $uc = new EstudianteController();
        $resultado = $uc->eliminar($id);
     
            if($resultado!=0){
                header("location: MostrarEstudiante.php");
            }else{
                echo "Error: no se han eliminado los datos";
            }
            
        

?>
