<?php

if (isset($_POST['done'])&& (isset($_POST['cooker_id']) || isset($_POST['driver_id']) ||isset($_POST['vantazhnyk_id']) ||
isset($_POST['prybyralnik_id']) ||isset($_POST['ohoronets_id']))){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$cooker_id =  $_POST['cooker_id'];
$driver_id  =  $_POST['driver_id'];
$vantazhnyk_id =  $_POST['vantazhnyk_id'];
$prybyralnik_id  =  $_POST['prybyralnik_id'];
$ohoronets_id =  $_POST['ohoronets_id'];



$number_of_filmCrew = $_POST['number_of_filmCrewww'];
//echo $number_of_filmCrew;

if ( $cooker_id != '') {
        foreach($cooker_id as $value){
          $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_filmCrew', '$value','0')");
        if ($result) {
          echo "<h1>Кухарів успішно додано до знімальної групи!</h1>";
         }
      else {
        echo "<h1>Здається, щось пішло не так, кухарів не було додано..</h1>";
        echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
          }
        }
    }


if ( $driver_id != '') {
  foreach($driver_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_filmCrew', '$value','0')");
  if ($result) {
    echo "<h1>Водіїв успішно додано до знімальної групи!</h1>";
   }
else {
  echo "<h1>Здається, щось пішло не так, водіїв не було додано..</h1>";
  echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
    }
  }
}

if ( $vantazhnyk_id != '') {
  foreach($vantazhnyk_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_filmCrew', '$value','0')");
  if ($result) {
    echo "<h1>Вантажників успішно додано до знімальної групи!</h1>";
   }
else {
  echo "<h1>Здається, щось пішло не так, вантажників не було додано..</h1>";
  echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
    }
  }
}

if ( $prybyralnik_id != '') {
  foreach($prybyralnik_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_filmCrew', '$value','0')");
  if ($result) {
    echo "<h1>Прибиральників успішно додано до знімальної групи!</h1>";
   }
else {
  echo "<h1>Здається, щось пішло не так, прибиральників не було додано..</h1>";
  echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
    }
  }
}

if ( $ohoronets_id != '') {
  foreach($ohoronets_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_filmCrew', '$value','0')");
  if ($result) {
    echo "<h1>Охоронців успішно додано до знімальної групи!</h1>";
   }
else {
  echo "<h1>Здається, щось пішло не так, охоронців не було додано..</h1>";
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
