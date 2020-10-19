<?php
include('database.php');
/*date_default_timezone_set  ('America/Bogota');
$time2=date('Y-m-d, h:i:s', time());
$time1=date('h:i:s',time());
$time3=date('g:ia');
$time4=date('G:i');
$zona = new DateTime();
$zona->format('Y/m/d - G:i:s');
*/
$query= "SELECT * FROM task";
$result= mysqli_query($conectar,$query);

if(!$result){
  die('Error en la Consulta '.mysqli_error($conectar));
}
$json= array();
while($row= mysqli_fetch_array($result)){
  $json[]=array(
    'time'=>$row['hora'],
    'name'=> $row['name'],
    'description'=> $row['description'],
    'id'=> $row['id']


  );
}
$jsonString = json_encode($json);
echo $jsonString;



 ?>
