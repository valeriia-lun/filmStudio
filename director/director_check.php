<?php

if (isset($_POST['done'])){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$check1 =  $_POST['check1'];
$check2 =  $_POST['check2'];
$name_of_movie = $_POST['name_of_moviee'];

echo $name_of_movie;

if ( $check1 != '') {
     
          $result = $mysqli->query("UPDATE `movie` SET `number_of_film_crew`  = $check1");
        if ($result) {
           echo "Success!";
         }
      else {
            echo "Error! $mysqli->error <br>";
          }
        
    }

    if ( $check2 != '') {
     
      $result = $mysqli->query("UPDATE `movie` SET `number_of_edit_crew`  = $check2");
    if ($result) {
       echo "Success!";
     }
  else {
        echo "Error! $mysqli->error <br>";
      }
    
}

}
$mysqli->close();
?>
