<?php

if (isset($_POST['done'])){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$scenarist_id =  $_POST['scenarist_id'];
$lin_produser_id =  $_POST['lin_produser_id'];


$number_of_film_crew = $_POST['number_of_filmCrewww'];

if ( $scenarist_id != '') {
        foreach($scenarist_id as $value){
          $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
        if ($result) {
           echo "Success!";
         }
      else {
            echo "Error! $mysqli->error <br>";
          }
        }
    }

    if ( $lin_produser_id != '') {
      foreach($lin_produser_id as $value){
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

?>
