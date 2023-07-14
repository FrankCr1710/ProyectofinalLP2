<?php

require_once "modelos/Estudiantes.php";


class EstudianteController{
    public function mostrar(){
        $estudiantes = new Estudiantes();
        return  $estudiantes->mostrar();
    }

    public function mostrarPorId($id){
        $estudiantes = new Estudiantes();
        return  $estudiantes->mostrarPorId($id);
    }


    public function guardar( $nombre_estudiante, $apellido_estudiante, $codigo_estudiante, $dni_estudiante, $contrasena_estudiante){
        $estudiantes = new Estudiantes();
        $estudiantes->setNombre($nombre_estudiante);
        $estudiantes->setApellido($apellido_estudiante);
        $estudiantes->setCodigo($codigo_estudiante);
        $estudiantes->setDni($dni_estudiante);
        $estudiantes->setContrasena($contrasena_estudiante);

        return  $estudiantes->guardar();
    }

    public function eliminar($id_estudiante){
        $estudiantes = new Estudiantes();
        return $estudiantes->eliminar($id_estudiante);
    }

}

?>