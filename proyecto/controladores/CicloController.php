<?php

require_once "modelos/Ciclos.php";


class CicloController{
    public function mostrar(){
        $ciclos = new Ciclos();
        return  $ciclos->mostrar();
    }

    public function mostrarPorId($id){
        $ciclos = new Ciclos();
        return  $ciclos->mostrarPorId($id);
    }


    public function guardar( $numero_ciclo){
        $ciclos = new Ciclos();
        $ciclos->setCiclo($numero_ciclo);
        

        return  $ciclos->guardar();
    }

    public function actualizar($numero_ciclo){
        $ciclos = new Ciclos();
        $ciclos->setCiclo($numero_ciclo);
        
        return $ciclos->actualizar($numero_ciclo);            
    }

    public function eliminar($numero_ciclo){

        $ciclos = new Ciclos();
        return $ciclos->eliminar($numero_ciclo);
    }



}

?>