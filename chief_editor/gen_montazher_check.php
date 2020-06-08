<?php

if (isset($_POST['done']) && isset($_POST['editor_id'])){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$editor_id =  $_POST['editor_id'];
$number_of_editCrew = $_POST['number_of_editCrewww'];
$is_head = $_POST['is_head'];

if ( $editor_id != '') {
if(isset($_POST['is_head']) && $_POST['is_head'] == 'Yes')
{
  foreach($editor_id as $value){
    $result = $mysqli->query("INSERT INTO `editor_crewEdit`(`number_of_edit_crew`, `editor_id`, `editor_fee`, `is_head`) VALUES ('$number_of_editCrew', '$value','0', '1')");
  if ($result) {
    echo "<h1>Монтажерів успішно додано до монтажної групи!</h1>";
   }
else {
  echo "<h1>Здається, щось пішло не так, монтажерів не було додано..</h1>";
  echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
    }
  }
}
else
{
  foreach($editor_id as $value){
    $result = $mysqli->query("INSERT INTO `editor_crewedit`(`number_of_edit_crew`, `editor_id`, `editor_fee`, `is_head`) VALUES ('$number_of_editCrew', '$value','0', '$0')");
  if ($result) {
    echo "<h1>Монтажерів успішно додано до монтажної групи!</h1>";
   }
else {
  echo "<h1>Здається, щось пішло не так, монтажерів не було додано..</h1>";
  echo "<script><a href=\"#\" onclick=\"history.back();return false;\">Назад</a></script>";
    }
  }
}



    }

}else{
  echo "<h1>Ви не обрали жодного співробітника!</h1>";
  echo "<a href=\"#\" onclick=\"history.back();return false;\">Назад</a>";
}

?>
