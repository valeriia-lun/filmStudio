<?php

if (isset($_POST['done'])){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$cooker_id =  $_POST['cooker_id'];
$driver_id  =  $_POST['driver_id'];
$vantazhnyk_id =  $_POST['vantazhnyk_id'];
$prybyralnik_id  =  $_POST['prybyralnik_id'];
$ohoronets_id =  $_POST['ohoronets_id'];



$number_of_filmCrew = $_POST['number_of_filmCrewww'];
echo $number_of_filmCrew;

if ( $cooker_id != '') {
        foreach($cooker_id as $value){
          $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_filmCrew', '$value','0')");
        if ($result) {
           echo "Success!";
         }
      else {
            echo "Error! $mysqli->error <br>";
          }
        }
    }


if ( $driver_id != '') {
  foreach($driver_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_filmCrew', '$value','0')");
  if ($result) {
     echo "Success!";
   }
else {
      echo "Error! $mysqli->error <br>";
    }
  }
}

if ( $vantazhnyk_id != '') {
  foreach($vantazhnyk_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_filmCrew', '$value','0')");
  if ($result) {
     echo "Success!";
   }
else {
      echo "Error! $mysqli->error <br>";
    }
  }
}

if ( $prybyralnik_id != '') {
  foreach($prybyralnik_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_filmCrew', '$value','0')");
  if ($result) {
     echo "Success!";
   }
else {
      echo "Error! $mysqli->error <br>";
    }
  }
}

if ( $ohoronets_id != '') {
  foreach($ohoronets_id as $value){
    $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_filmCrew', '$value','0')");
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
