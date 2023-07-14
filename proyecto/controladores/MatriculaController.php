<?php

require_once "modelos/Matriculas.php";


class MatriculaController{
    public function mostrar(){
        $matriculas = new Matriculas();
        return  $matriculas->mostrar();
    }

    public function mostrarPorId($id){
        $matriculas = new Matriculas();
        return  $matriculas->mostrarPorId($id);
    }


    public function guardar( $id_estudiante_matricula, $id_curso_matricula){
        $matriculas = new Matriculas();
        $matriculas->setEstudiante($id_estudiante_matricula);
        $matriculas->setCurso($id_curso_matricula);

        return  $matriculas->guardar();
    }

    public function actualizar($id_matricula, $id_estudiante_matricula, $id_curso_matricula){
        $matriculas = new Matriculas();
        $matriculas->setEstudiante($id_estudiante_matricula);
        $matriculas->setCurso($id_curso_matricula);
        return $matriculas->actualizar($id_matricula);            
    }

    public function eliminar($id_matricula){

        $matriculas = new Matriculas();
        return $matriculas->eliminar($id_matricula);
    }


    


}

?>