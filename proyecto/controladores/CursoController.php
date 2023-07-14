<?php

require_once "modelos/Cursos.php";


class CursoController{
    public function mostrar(){
        $cursos = new Cursos();
        return  $cursos->mostrar();
    }

    public function mostrarPorId($id){
        $cursos = new Cursos();
        return  $cursos->mostrarPorId($id);
    }


    public function guardar( $nombre_curso, $id_horario_curso, $id_carrera_curso, $id_ciclo_curso, $id_usuario_curso){
        $cursos = new Cursos();
        $cursos->setNombre($nombre_curso);
        $cursos->setHorario($id_horario_curso);
        $cursos->setCarrera($id_carrera_curso);
        $cursos->setCiclo($id_ciclo_curso);
        $cursos->setUsuario($id_usuario_curso);

        return  $cursos->guardar();
    }

    public function eliminar($id_curso){
        $cursos = new Cursos();
        return $cursos->eliminar($id_curso);
    }

}

?>