<?php

if (isset($_POST['done'])){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$helpers_id =  $_POST['helpers_id'];


$number_of_film_crew = $_POST['number_of_filmCrewww'];

if ( $helpers_id != '') {
        foreach($helpers_id as $value){
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
