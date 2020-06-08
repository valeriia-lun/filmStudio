<?php

if (isset($_POST['done']) && (isset($_POST['actor_id']) || isset($_POST['understudy_id']) )){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$actor_id =  $_POST['actor_id'];
$understudy_id  =  $_POST['understudy_id'];

$number_of_filmCrew_actors = $_POST['number_of_filmCreww'];
$number_of_filmCrew_understudies = $_POST['number_of_filmCrewww'];
//echo $number_of_filmCrew_actors;

if ( $actor_id != '') {
        foreach($actor_id as $value){
          $result = $mysqli->query("INSERT INTO `actor_filmcrew`(`number_of_film_crew`, `actor_id`, `actor_fee`) VALUES ('$number_of_filmCrew_actors', '$value','0')");
        if ($result) {
          echo "<h1>Акторів успішно додано до знімальної групи!</h1>";
         }
      else {
        echo "<h1>Здається, щось пішло не так, акторів не було додано..</h1>";
        echo "<a href=\"#\" onclick=\"history.back();return false;\">Назад</a>";
          }
        }
    }

    if ($understudy_id != '') {
        foreach($understudy_id as $value2){
          $result = $mysqli->query("INSERT INTO `understudies_filmcrew`(`number_of_film_crew`, `understudy_id`, `understudy_fee`) VALUES ('$number_of_filmCrew_understudies', '$value2','0')");
        if ($result) {
          echo "<h1>Дублерів успішно додано до знімальної групи!</h1>";
         }
      else {
        echo "<h1>Здається, щось пішло не так, дублерів не було додано..</h1>";
        echo "<a href=\"#\" onclick=\"history.back();return false;\">Назад</a>";
          }
        }
    }
}else{
  echo "<h1>Ви не обрали жодного співробітника!</h1>";
  echo "<a href=\"#\" onclick=\"history.back();return false;\">Назад</a>";
}
$mysqli->close();
?>
