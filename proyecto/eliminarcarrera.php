<?php


$id = $_GET["id"];

        require_once "controladores/CarrerasController.php";
        
        $uc = new CarrerasController();
        $resultado = $uc->eliminar($id);
     
            if($resultado!=0){
                header("location: mostrarcarrera.php");
            }else{
                echo "Error: no se han eliminado los datos";
            }
            
        

?>
