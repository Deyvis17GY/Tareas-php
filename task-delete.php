<?php
include('database.php');

if(isset($_POST['id'])){
$id= $_POST['id'];
$query= "DELETE FROM task WHERE id=$id";
$result= mysqli_query($conectar,$query);
if(!$result){
  die("Consulta Fallida");
}

echo "Tarea eliminada con exito";

}
 ?>
