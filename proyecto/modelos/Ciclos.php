<?php

require_once "Conn.php";

class ciclos{

     
     private $numero_ciclo;
     

     

     public function mostrarPorId($id){
      $conn = new Conn();
      $conexion = $conn->conectar();
      $sql = "SELECT * FROM ciclos WHERE id_ciclo=$id";
      $resultado = $conexion->query($sql);  

      $conn->cerrar();
      return $resultado;
   }

     public function mostrar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM ciclos";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
     }

     

     public function guardar(){
      $conn = new Conn();
      $conexion = $conn->conectar();
      $sql = "INSERT INTO ciclos(numero_ciclo) 
               VALUES(".$this->numero_ciclo.")";
      $resultado = $conexion->exec($sql);
      $conn->cerrar();
      return $resultado;
     }


     public function actualizar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE ciclos
                SET numero_ciclo='".$this->numero_ciclo."'
                WHERE id_ciclo = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }


     public function eliminar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM ciclos WHERE id_ciclo=$id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
       }


     public function setCiclo($numero_ciclo){
      $this->numero_ciclo=$numero_ciclo;
     }

     

     
     

     


}

?>