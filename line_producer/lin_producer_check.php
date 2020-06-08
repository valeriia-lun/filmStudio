<?php

if (isset($_POST['done'])){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$admin_maidan_id =  $_POST['admin_maidan_id'];
$gafer_id =  $_POST['gafer_id'];
$zvukorezhiser_id =  $_POST['zvukorezhiser_id'];
$operator_id =  $_POST['operator_id'];
$hud_po_kost_id =  $_POST['hud_po_kost_id'];
$hud_post_id =  $_POST['hud_post_id'];
$agent_id =  $_POST['agent_id'];

$number_of_film_crew = $_POST['number_of_filmCrewww'];

if ( $admin_maidan_id != '') {
        foreach($admin_maidan_id as $value){
          $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
        if ($result) {
           echo "Success!";
         }
      else {
            echo "Error! $mysqli->error <br>";
          }
        }
    }

    if ( $gafer_id != '') {
      foreach($gafer_id as $value){
        $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
      if ($result) {
         echo "Success!";
       }
    else {
          echo "Error! $mysqli->error <br>";
        }
      }
  }

  if ( $zvukorezhiser_id != '') {
    foreach($zvukorezhiser_id as $value){
      $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
    if ($result) {
       echo "Success!";
     }
  else {
        echo "Error! $mysqli->error <br>";
      }
    }
}

if ( $operator_id != '') {
  foreach($operator_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
  if ($result) {
     echo "Success!";
   }
else {
      echo "Error! $mysqli->error <br>";
    }
  }
}

if ( $hud_po_kost_id != '') {
  foreach($hud_po_kost_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
  if ($result) {
     echo "Success!";
   }
else {
      echo "Error! $mysqli->error <br>";
    }
  }
}

if ( $hud_post_id != '') {
  foreach($hud_post_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
  if ($result) {
     echo "Success!";
   }
else {
      echo "Error! $mysqli->error <br>";
    }
  }
}

if ($agent_id != '') {
  foreach($agent_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
  if ($result) {
     echo "Success!";
   }
else {
      echo "Error! $mysqli->error <br>";
    }
  }
}


}
$mysqli->close();
?>
