<?php

include('database.php');
$search = $_POST['search'];

if(!empty($search)){
  $query = "SELECT * FROM task WHERE name LIKE '$search%'";
  $result= mysqli_query($conectar,$query);
  if(!$result){
    die('ERROR EN LA CONSULTA '.mysqli_error($conectar));
  }

  $json = array();
  while($row = mysqli_fetch_array($result)){
    $json[]= array(
      'name' => $row['name'],
      'description' => $row['description'],
      'id' => $row['id']
    );
  }
  $jsonString= json_encode($json);
  echo $jsonString;
}





 ?>
