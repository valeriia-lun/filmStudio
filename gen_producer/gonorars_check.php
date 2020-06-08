<?php
if (isset($_POST['done'])){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");

$actor_id = $_POST['actor_id'];
$number_of_film_crew = $_POST['number_of_filmCrew'];
$gonorar = $_POST['gonorar'];

//echo ($actor_id);
//echo ($number_of_film_crew);
//echo ($gonorar);
//print_r($gonorar);
//$counter = 0;



$result = $mysqli->query("UPDATE `actor_filmcrew` SET  `actor_fee` = '$gonorar' WHERE `number_of_film_crew` = '$number_of_film_crew' AND `actor_id` = '$actor_id'");
if ($result) {
    echo "<h1>Гонорар успішно додано!</h1>";
}
else {
    echo "Error! $mysqli->error <br>";
}

}

if (isset($_POST['done2'])){
    $mysqli = new mysqli("localhost","root","root","filmstudio");
    $mysqli->query("SET NAMES 'utf8'");

    $understudy_id = $_POST['understudy_id'];
    $number_of_film_crew = $_POST['number_of_filmCreww'];
    $gonorar2 = $_POST['gonorar2'];

   // echo ($understudy_id);
   // echo ($number_of_film_crew);
   // echo ($gonorar2);
    //print_r($gonorar);
    //$counter = 0;

    $result = $mysqli->query("UPDATE `understudies_filmcrew` SET  `understudy_fee` = '$gonorar2' WHERE `number_of_film_crew` = '$number_of_film_crew' AND `understudy_id` = '$understudy_id'");
    if ($result) {
        echo "<h1>Гонорар успішно додано!</h1>";
    }
    else {
        echo "Error! $mysqli->error <br>";
    }

    }


    if (isset($_POST['done3'])){
        $mysqli = new mysqli("localhost","root","root","filmstudio");
        $mysqli->query("SET NAMES 'utf8'");

        $others_id = $_POST['others_id'];
        $number_of_film_crew = $_POST['number_of_filmCrewww'];
        $gonorar3 = $_POST['gonorar3'];

     //   echo ($others_id);
      //  echo ($number_of_film_crew);
       // echo ($gonorar3);
        //print_r($gonorar);
        //$counter = 0;

        $result = $mysqli->query("UPDATE `others_filmcrew` SET  `others_fee` = '$gonorar3' WHERE `number_of_film_crew` = '$number_of_film_crew' AND `others_id` = '$others_id'");
        if ($result) {
            echo "<h1>Гонорар успішно додано!</h1>";
        }
        else {
            echo "Error! $mysqli->error <br>";
        }

        }


    if (isset($_POST['done4'])){
        $mysqli = new mysqli("localhost","root","root","filmstudio");
        $mysqli->query("SET NAMES 'utf8'");

        $editor_id = $_POST['editor_id'];
        $number_of_editCrew = $_POST['number_of_editCrew'];
        $gonorar4 = $_POST['gonorar4'];

       // echo ($editor_id);
        //echo ($number_of_editCrew);
       // echo ($gonorar4);
        //print_r($gonorar);
        //$counter = 0;

        $result = $mysqli->query("UPDATE `editor_crewedit` SET  `editor_fee` = '$gonorar4' WHERE `number_of_edit_crew` = '$number_of_editCrew' AND `editor_id` = '$editor_id'");
        if ($result) {
            echo "<h1>Гонорар успішно додано!</h1>";
        }
        else {
            echo "Error! $mysqli->error <br>";
        }

        }


$mysqli->close();
?>
