<?php

if (isset($_POST['done']) && (isset($_POST['admin_maidan_id']) || isset($_POST['gafer_id']) || isset($_POST['zvukorezhiser_id']) || isset($_POST['operator_id']) || 
isset($_POST['hud_po_kost_id']) || isset($_POST['hud_post_id']) || isset($_POST['agent_id']))){
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
          echo "<h1>Адміністраторів майданчика успішно додано до знімальної групи!</h1>";
         }
      else {
        echo "<h1>Здається, щось пішло не так, адміністраторів майданчика не було додано..</h1>";
        echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
          }
        }
    }

    if ( $gafer_id != '') {
      foreach($gafer_id as $value){
        $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
      if ($result) {
        echo "<h1>Гаферів успішно додано до знімальної групи!</h1>";
       }
    else {
      echo "<h1>Здається, щось пішло не так, гаферів не було додано..</h1>";
      echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
        }
      }
  }

  if ( $zvukorezhiser_id != '') {
    foreach($zvukorezhiser_id as $value){
      $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
    if ($result) {
      echo "<h1>Звукорежисерів успішно додано до знімальної групи!</h1>";
     }
  else {
    echo "<h1>Здається, щось пішло не так, звукорежисерів не було додано..</h1>";
    echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
      }
    }
}

if ( $operator_id != '') {
  foreach($operator_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
  if ($result) {
    echo "<h1>Операторів успішно додано до знімальної групи!</h1>";
   }
else {
  echo "<h1>Здається, щось пішло не так, операторів не було додано..</h1>";
  echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
    }
  }
}

if ( $hud_po_kost_id != '') {
  foreach($hud_po_kost_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
  if ($result) {
    echo "<h1>Художників-постановщиків успішно додано до знімальної групи!</h1>";
   }
else {
  echo "<h1>Здається, щось пішло не так, художників-постановщиків не було додано..</h1>";
  echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
    }
  }
}

if ( $hud_post_id != '') {
  foreach($hud_post_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
  if ($result) {
    echo "<h1>Художників по костюмах успішно додано до знімальної групи!</h1>";
   }
else {
  echo "<h1>Здається, щось пішло не так, художників по костюмах не було додано..</h1>";
  echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
    }
  }
}

if ($agent_id != '') {
  foreach($agent_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
  if ($result) {
    echo "<h1>Агентів по акторах успішно додано до знімальної групи!</h1>";
   }
else {
  echo "<h1>Здається, щось пішло не так, агентів по акторах не було додано..</h1>";
  echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
    }
  }
}


}else{
  echo "<h1>Ви не обрали жодного співробітника!</h1>";
  echo "<a href=\"#\" onclick=\"history.back();return false;\">Назад</a>";
}
$mysqli->close();
?>
