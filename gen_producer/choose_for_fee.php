<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Обрати групу</title>
<style>
   select {
    width: 300px;
   }
   .verstka2{
  text-align: center;
  float: left;
}
  </style>
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
      <label class=" mr-sm-2" >Генеральний продюсер</label>
    </form>
  </div>
</nav>

</br></br></br></br>
<div class="row">
<div class="container col-md-4">

<form action = "gen_producer_gonorars_film_crew.php" method="post">
<h1 class="colorForAllText"> Обрати Фільм</h1>
    <select  class=" form-control " name="moive_name_film_crew">
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result = $mysqli->query("SELECT `name_of_movie` FROM `movie`");
$movie;
while ($stroka = mysqli_fetch_array($result)){
    echo"<option>" . $stroka['name_of_movie'] . "</option>";
    $movie =  $stroka['name_of_movie'];
   }
?>
</select>

</br>
<div class="btn  col-md-4">
  <button class="button btn btn-danger"  name="filmCrew">Призначити гонорари знімальній групі</button>
</div></div>
</br></br></br></br>
</form>

<div class="container col-4">
<form action = "gen_producer_gonorars_edit_crew.php" method="post">
<h1 class="colorForAllText"> Обрати Фільм</h1>
    <select  class=" form-control " name="moive_name_edit_crew">
<?php

$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result = $mysqli->query("SELECT `name_of_movie` FROM `movie`");
$movie;
while ($stroka = mysqli_fetch_array($result)){
    echo"<option>" . $stroka['name_of_movie'] . "</option>";
    $movie =  $stroka['name_of_movie'];
   }
?>
</select>

</br>
<div class="btn  col-4">
  <button class="button btn btn-danger"  name="filmCrew">Призначити гонорари групі монтажерів</button>
</div></div></div>
</br></br></br></br>
</form>




<?php
if (isset($_POST['filmCrew'])){

  $movie = $_POST['movie_name'];

  $mysqli = new mysqli("localhost","root","root","filmstudio");
  $mysqli->query("SET NAMES 'utf8'");

  $result = $mysqli->query("SELECT `number_of_filmCrew`
   FROM `movie` WHERE `name_of_movie` = $movie");

   $number_filmCrew = mysqli_fetch_array($result);

   echo"<form action=\"gen_producer_gonorars_film_crew.php\" method=\"post\">";
   echo "<input type=\"hidden\" value = \"" .$number_filmCrew . "\" name=\"number\" ></form>";

  // header("location: /filmStudio/gen_producer/gen_producer_gonorars_film_crew.php");

}



 ?>


</body>
</html>
