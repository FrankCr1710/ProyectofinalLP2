<?php

require_once "Conn.php";

class estudiantes{

     
     private $nombre_estudiante;
     private $apellido_estudiante;
     private $codigo_estudiante;
     private $dni_estudiante;
     private $contrasena_estudiante;
     

     

     public function mostrarPorId($id){
      $conn = new Conn();
      $conexion = $conn->conectar();
      $sql = "SELECT * FROM estudiantes WHERE id=$id";
      $resultado = $conexion->query($sql);  

      $conn->cerrar();
      return $resultado;
   }

     public function mostrar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM estudiantes";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
     }

     

     public function guardar(){
      $conn = new Conn();
      $conexion = $conn->conectar();
      $sql = "INSERT INTO estudiantes(nombre_estudiante, apellido_estudiante, codigo_estudiante, dni_estudiante, contrasena_estudiante) 
               VALUES('".$this->nombre_estudiante."','".$this->apellido_estudiante."',".$this->codigo_estudiante.",".$this->dni_estudiante.",'".$this->contrasena_estudiante."')";
      $resultado = $conexion->exec($sql);
      $conn->cerrar();
      return $resultado;
     }


     public function eliminar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM estudiantes WHERE id_estudiante=$id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
       }

      public function actualizar($id){
         $conn = new Conn();
         $conexion = $conn->conectar();
         $sql = "UPDATE estudiantes
                 SET nombre_estudiante='".$this->nombre_estudiante."', apellido_estudiante='".$this->apellido_estudiante."', codigo_estudiante='".$this->codigo_estudiante."', dni_estudiante='".$this->dni_estudiante."', contrasena_estudiante='".$this->contrasena_estudiante."' 
                 WHERE id_estudiante = $id";
         $resultado = $conexion->exec($sql);
         $conn->cerrar();
         return $resultado;
     }  

     public function setNombre($nombre_estudiante){
      $this->nombre_estudiante=$nombre_estudiante;
     }

     public function setApellido($apellido_estudiante){
      $this->apellido_estudiante=$apellido_estudiante;
     }

     public function setCodigo($codigo_estudiante){
        $this->codigo_estudiante=$codigo_estudiante;
    }

       public function setDni($dni_estudiante){
        $this->dni_estudiante=$dni_estudiante;
    }

       public function setContrasena($contrasena_estudiante){
        $this->contrasena_estudiante=$contrasena_estudiante;
    }

     
     

     


}

?>