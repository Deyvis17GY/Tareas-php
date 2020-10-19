<?php
include('database.php');
$name= $_POST['name'];
$description= $_POST['description'];
$id= $_POST['id'];

$query= "UPDATE task SET name='$name',description='$description' WHERE id= '$id'";
$result= mysqli_query($conectar,$query);
if(!$result){
  die("Error en la CONSULTA");
}
echo "Tarea Actualizada con exito";
 ?>
