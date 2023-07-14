<?php



require_once "Conn.php";

class carreras{

     
     private $nombre_carrera;
     

     

     public function mostrarPorId($id){
      $conn = new Conn();
      $conexion = $conn->conectar();
      $sql = "SELECT * FROM carreras WHERE id_carrera=$id";
      $resultado = $conexion->query($sql);  

      $conn->cerrar();
      return $resultado;
   }

     public function mostrar(){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "SELECT * FROM carreras";
        $resultado = $conexion->query($sql);
        $conn->cerrar();
        return $resultado;
     }

     

     public function guardar(){
      $conn = new Conn();
      $conexion = $conn->conectar();
      $sql = "INSERT INTO carreras(nombre_carrera) 
               VALUES('".$this->nombre_carrera."')";
      $resultado = $conexion->exec($sql);
      $conn->cerrar();
      return $resultado;
     }


     public function actualizar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "UPDATE carreras
                SET nombre_carrera='".$this->nombre_carrera."'
                WHERE id_carrera = $id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
    }


     public function eliminar($id){
        $conn = new Conn();
        $conexion = $conn->conectar();
        $sql = "DELETE FROM carreras WHERE id_carrera=$id";
        $resultado = $conexion->exec($sql);
        $conn->cerrar();
        return $resultado;
       }


     public function setCarrera($nombre_carrera){
      $this->nombre_carrera=$nombre_carrera;
     }

     

     
     

     


}

?>
     

     
