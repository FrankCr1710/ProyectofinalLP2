<?php

require_once "Conn.php";

class matriculas{

     
     private $id_estudiante_matricula;
     private $id_curso_matricula;
     

     

     public function mostrarPorId($id){
      $conn = new Conn();
      $conexion = $conn->conectar();
      $sql = "SELECT * FROM matriculas WHERE id_matricula=$id";
      $resultado = $conexion->query($sql);  

      $conn->cerrar();
      return $resultado;
   }

     public function mostrar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM matriculas";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
     }

     

     public function guardar(){
      $conn = new Conn();
      $conexion = $conn->conectar();
      $sql = "INSERT INTO matriculas(id_estudiante_matricula, id_curso_matricula) 
               VALUES(".$this->id_estudiante_matricula.",".$this->id_curso_matricula.")";
      $resultado = $conexion->exec($sql);
      $conn->cerrar();
      return $resultado;
     }


     public function actualizar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE matriculas
                SET id_estudiante_matricula='".$this->id_estudiante_matricula."', id_curso_matricula='".$this->id_curso_matricula."'
                WHERE id_matricula = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }


     public function eliminar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM matriculas WHERE id_matricula=$id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
       }


     public function setEstudiante($id_estudiante_matricula){
      $this->id_estudiante_matricula=$id_estudiante_matricula;
     }

     public function setCurso($id_curso_matricula){
      $this->id_curso_matricula=$id_curso_matricula;
     }

     
     

     


}

?>