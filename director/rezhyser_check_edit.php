<?php

if (isset($_POST['done'])){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$editor_id =  $_POST['editor_id'];
$number_of_edit_crew = $_POST['number_of_editCrewww'];

if ( $editor_id != '') {
        foreach($editor_id as $value){
          $result = $mysqli->query("INSERT INTO `editor_crewedit`(`number_of_edit_crew`, `editor_id`, `editor_fee`,`is_head`) VALUES ('$number_of_edit_crew', '$value','0','1')");
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
