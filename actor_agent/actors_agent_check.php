<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Агент по акторах</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="..\style.css">
</head>
<body class="text-center body3">

<nav class="navbar navbar-expand-lg navbar-light bg-light style=width=100%;">
  <a class="navbar-brand" href="..\index.php">Вибір посади</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Головна<span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <form class=" my-2 my-lg-0">
      <label class=" mr-sm-2" >Агент по акторах</label>
    </form>
  </div>
</nav>

<?php

if (isset($_POST['done']) && (isset($_POST['actor_id']) || isset($_POST['understudy_id']) )){
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");




$actor_id =  $_POST['actor_id'];
$understudy_id  =  $_POST['understudy_id'];

$number_of_filmCrew_actors = $_POST['number_of_filmCreww'];
$number_of_filmCrew_understudies = $_POST['number_of_filmCrewww'];

$mysqli->query("DELETE FROM `actor_filmCrew` WHERE `number_of_film_crew` = $number_of_filmCrew_actors");
$mysqli->query("DELETE FROM `understudies_filmCrew` WHERE `number_of_film_crew` = $number_of_filmCrew_actors");


//echo $number_of_filmCrew_actors;

if ( $actor_id != '') {
        foreach($actor_id as $value){
          $result = $mysqli->query("INSERT INTO `actor_filmcrew`(`number_of_film_crew`, `actor_id`, `actor_fee`) VALUES ('$number_of_filmCrew_actors', '$value','0')");
        if ($result) {
          echo "</br></br></br><h1 class=\"colorForAllText\">Акторів успішно додано до знімальної групи!</h1>";
         }
      else {
        echo "</br></br></br><h1 class=\"colorForAllText\">Здається, щось пішло не так, акторів не було додано..</h1>";
        echo "<a href=\"#\" class=\"btn btn-danger\" onclick=\"history.back();return false;\">Назад</a>";
          }
        }
    }

    if ($understudy_id != '') {
        foreach($understudy_id as $value2){
          $result = $mysqli->query("INSERT INTO `understudies_filmcrew`(`number_of_film_crew`, `understudy_id`, `understudy_fee`) VALUES ('$number_of_filmCrew_understudies', '$value2','0')");
        if ($result) {
          echo "</br></br></br><h1 class=\"colorForAllText\">Дублерів успішно додано до знімальної групи!</h1>";
         }
      else {
        echo "</br></br></br><h1 class=\"colorForAllText\">Здається, щось пішло не так, дублерів не було додано..</h1>";
        echo "<a href=\"#\" class=\"btn btn-danger\" onclick=\"history.back();return false;\">Назад</a>";
          }
        }
    }
}else{
  echo "</br></br></br><h1 class=\"colorForAllText\">Ви не обрали жодного співробітника!</h1>";
  echo "<a href=\"#\" class=\"btn btn-danger\" onclick=\"history.back();return false;\">Назад</a>";
}
$mysqli->close();
?>
