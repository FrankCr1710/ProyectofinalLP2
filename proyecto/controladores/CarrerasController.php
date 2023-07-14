<?php

require_once "modelos/Carreras.php";


class CarrerasController{
    public function mostrar(){
        $carreras = new Carreras();
        return  $carreras->mostrar();
    }

    public function mostrarPorId($id){
        $carreras = new Carreras();
        return  $carreras->mostrarPorId($id);
    }


    public function guardar( $nombre_carrera){
        $carreras = new Carreras();
        $carreras->setCarrera($nombre_carrera);
        

        return  $carreras->guardar();
    }

    public function actualizar($nombre_carrera){
        $carreras = new Carreras();
        $carreras->setCiclo($nombre_carrera);
        
        return $carreras->actualizar($nombre_carrera);            
    }

    public function eliminar($nombre_carrera){

        $carreras = new Carreras();
        return $carreras->eliminar($nombre_carrera);
    }



}

?>