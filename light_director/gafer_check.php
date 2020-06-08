<?php

if (isset($_POST['done']) && isset($_POST(['helper_id']))){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$helper_id =  $_POST['helper_id'];
$number_of_filmCrew = $_POST['number_of_filmCrewww'];


if ( $helper_id != '') {
        foreach($helper_id as $value){
          $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_filmCrew', '$value','0')");
        if ($result) {
          echo "<h1>Співробітників успішно додано до знімальної групи!</h1>";
         }
      else {
        echo "<h1>Здається, щось пішло не так, співробітників не було додано..</h1>";
        echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
          }
        }
    }

}else{
  echo "<h1>Ви не обрали жодного співробітника!</h1>";
  echo "<a href=\"#\" onclick=\"history.back();return false;\">Назад</a>";
}

?>
