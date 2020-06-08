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
</head>
<body>

<div class="verstka2">
<h1> Обрати знімальну групу</h1>
<form action = "gen_producer_gonorars_film_crew.php" method="post">
    <select  name="numb">
<?php

$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result = $mysqli->query("SELECT `number_of_film_crew` FROM `film_crew`");
$num_filmCrew;
while ($stroka = mysqli_fetch_array($result)){
    echo"<option>" . $stroka['number_of_film_crew'] . "</option>";
    $num_filmCrew =  $stroka['number_of_film_crew'];
   }
?>
</select>
  <button>Призначити гонорари</button>
</form>
</div>



<div class="verstka2">
<h1> Обрати групу монтажерів</h1>
<form action = "gen_producer_gonorars_edit_crew.php" method="post">
    <select name="num">
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result = $mysqli->query("SELECT `number_of_edit_crew` FROM `edit_crew`");
$num_editCrew;
while ($stroka = mysqli_fetch_array($result)){
    echo"<option >" . $stroka['number_of_edit_crew'] . "</option>";
    $num_editCrew =  $stroka['number_of_edit_crew'];
   }

?>
</select>
  <button  >Призначити гонорари</button>
</form>
</div>


</body>
</html>
