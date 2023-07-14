<?php


$id = $_GET["id"];

        require_once "controladores/MatriculaController.php";
        
        $uc = new MatriculaController();
        $resultado = $uc->eliminar($id);
     
            if($resultado!=0){
                header("location: mostrarmatricula.php");
            }else{
                echo "Error: no se han eliminado los datos";
            }
            
        

?>
