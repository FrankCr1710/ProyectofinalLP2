<?php

require_once "Conn.php";

class cursos{

     
     private $nombre_curso;
     private $id_horario_curso;
     private $id_carrera_curso;
     private $id_ciclo_curso;
     private $id_usuario_curso;
     

     public function mostrarPorId($id){
      $conn = new Conn();
      $conexion = $conn->conectar();
      $sql = "SELECT * FROM cursos WHERE id=$id";
      $resultado = $conexion->query($sql);  

      $conn->cerrar();
      return $resultado;
   }

     public function mostrar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM cursos";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
     }

     

     public function guardar(){
      $conn = new Conn();
      $conexion = $conn->conectar();
      $sql = "INSERT INTO cursos(nombre_curso, id_horario_curso, id_carrera_curso, id_ciclo_curso, id_usuario_curso) 
               VALUES('".$this->nombre_curso."','".$this->id_horario_curso."',".$this->id_carrera_curso.",".$this->id_ciclo_curso.",'".$this->id_usuario_curso."')";
      $resultado = $conexion->exec($sql);
      $conn->cerrar();
      return $resultado;
     }


     public function eliminar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM cursos WHERE id_curso=$id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
       }


     public function setNombre($nombre_curso){
      $this->nombre_curso=$nombre_curso;
     }

     public function setHorario($id_horario_curso){
      $this->id_horario_curso=$id_horario_curso;
     }
     public function setCarrera($id_carrera_curso){
        $this->id_carrera_curso=$id_carrera_curso;
     }

     public function setCiclo($id_ciclo_curso){
        $this->id_ciclo_curso=$id_ciclo_curso;
     }

       public function setUsuario($id_usuario_curso){
        $this->id_usuario_curso=$id_usuario_curso;
     }

     

     
     

     


}

?>