<?php

    if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];

    require_once "controladores/MatriculaController.php";    
    $uc = new MatriculaController();
    $resultado = $uc->mostrarPorId($id);  
            
    foreach($resultado as $matriculas){
        $id_estudiante_matricula = $matriculas["id_estudiante_matricula"];
        $id_curso_matricula = $matriculas["id_curso_matricula"];
        
    } 
    }      
?>
<h1>Actualizar Matricula</h1>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <input type="number" name="id_estudiante_matricula" value="<?php echo $id_estudiante_matricula;?>" placeholder="Ingrese id matricula"><br>
    <input type="number" name="id_curso_matricula" value="<?php echo $id_curso_matricula;?>" placeholder="Ingrese id matricula"><br>
    <input type="submit" value="Actualizar"><br>
</form>
<?php
    if(!empty($_POST)){
        $id_matricula = $_POST["id_matricula"];
        $id_estudiante_matricula = $_POST["id_estudiante_matricula"];
        $id_curso_matricula = $_POST["id_curso_matricula"];
        

        require_once "controladores/MatriculaController.php";

        $uc = new MatriculaController();
        $resultado = $uc->actualizar($id_matricula, $id_estudiante_matricula, $id_curso_matricula);
     
        if($resultado!=0){
            header("location: mostrar.php");
        }else{
            echo "Error: no han actualizado los datos";
        }            
           
    }
?>