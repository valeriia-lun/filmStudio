<?php

if (isset($_POST['done']) && isset($_POST['editor_id'])){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$editor_id =  $_POST['editor_id'];
$number_of_edit_crew = $_POST['number_of_editCrewww'];

if ( $editor_id != '') {
        foreach($editor_id as $value){
         // $result = $mysqli->query("INSERT INTO `editor_crewedit`(`number_of_edit_crew`, `editor_id`, `editor_fee`,`is_head`) VALUES ('$number_of_edit_crew', '$value','0','1')");
          $result2 = $mysqli->query("UPDATE `edit_crew` SET  `editor_crew_head_id` = $value WHERE `number_of_edit_crew` = $number_of_edit_crew");
        if ($result2) {
          echo "<h1>Головного монтажера успішно додано до монтажної групи!</h1>";
         }
      else {
        echo "<h1>Здається, щось пішло не так,головного монтажера не було додано..</h1>";
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
