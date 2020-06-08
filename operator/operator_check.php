<?php

if (isset($_POST['done']) && isset($_POST['helpers_id'])){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$helpers_id =  $_POST['helpers_id'];


$number_of_film_crew = $_POST['number_of_filmCrewww'];

if ($helpers_id != '') {
        foreach($helpers_id as $value){
          $result = $mysqli->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_of_film_crew', '$value','0')");
        if ($result) {
           echo "<h1>Помічників оператора успішно додано до знімальної групи!</h1>";
         }
      else {
        echo "<h1>Здається, щось пішло не так..</h1>";
        echo"<form action=\"add_helpers_to_film_crew.php\" method=\"POST\"><button >Назад</button></form>";
          }
        }
    }
}else{
  echo "<h1>Ви не обрали жодного співробітника!</h1>";
  echo"<form action=\"add_helpers_to_film_crew.php\" method=\"POST\"><button >Назад</button></form>";
}
$mysqli->close();
?>
