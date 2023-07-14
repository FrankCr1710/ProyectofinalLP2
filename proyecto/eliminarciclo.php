<?php


$id = $_GET["id"];

        require_once "controladores/CicloController.php";
        
        $uc = new CicloController();
        $resultado = $uc->eliminar($id);
     
            if($resultado!=0){
                header("location: mostrarciclo.php");
            }else{
                echo "Error: no se han eliminado los datos";
            }
            
        

?>
