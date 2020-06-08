<?php

if (isset($_POST['done']) && (isset($_POST['scenarist_id']) || isset($_POST['lin_produser_id']))){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$scenarist_id =  $_POST['scenarist_id'];
$lin_produser_id =  $_POST['lin_produser_id'];


$number_of_film_crew = $_POST['number_of_filmCrewww'];

if ( $scenarist_id != '') {
        foreach($scenarist_id as $value){
          $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
        if ($result) {
          echo "<h1>Сценаристів успішно додано до знімальної групи!</h1>";
         }
      else {
        echo "<h1>Здається, щось пішло не так, сценаристів не було додано..</h1>";
        echo "<a href=\"#\" onclick=\"history.back();return false;\">Назад</a>";
          }
        }
    }

    if ( $lin_produser_id != '') {
      foreach($lin_produser_id as $value){
        $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
      if ($result) {
        echo "<h1>Лінійних продюсерів успішно додано до знімальної групи!</h1>";
       }
    else {
      echo "<h1>Здається, щось пішло не так, лінійних продюсерів не було додано..</h1>";
      echo "<a href=\"#\" onclick=\"history.back();return false;\">Назад</a>";
        }
      }
  }
}else{
  echo "<h1>Ви не обрали жодного співробітника!</h1>";
  echo "<a href=\"#\" onclick=\"history.back();return false;\">Назад</a>";
}

?>
