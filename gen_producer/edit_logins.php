﻿<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Генеральний продюсер</title>
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

<form  action="edit_logins_check.php" method="post">
<div class="row">
<div class=" container col-3">
<?php


  $mysqli = new mysqli("localhost","root","root","filmstudio");
  $mysqli->query("SET NAMES 'utf8'");


  $position =  $_POST['position'];
  echo "</br><input type=\"hidden\" value = \"" .$position . "\" name=\"pos\" >";
echo "<label style=\" font-size: 20pt;\" class=\"colorForAllText\">   $position</label></div></div></br></br>";


  echo"<div class=\"row\"><div class=\" container col-3\">";
echo"<label class=\"colorText\"> Логін: </label>";


$result = $mysqli->query("SELECT `login` FROM `loginpassword` WHERE `position` = '$position'");
$res = mysqli_fetch_array($result);
echo "<input type= \"text\"  class=\"form-control\" name=\"log\" value=\"$res[0]\" required> </div>";

  

 

echo"<div class=\" container col-3\">";
echo "<label class=\"colorText\"> Пароль: </label>";
$result = $mysqli->query("SELECT `password` FROM `loginpassword` WHERE `position` = '$position'");
$res = mysqli_fetch_array($result);
echo "<input type= \"text\"  class=\"form-control\"  name=\"pass\" value=\"$res[0]\" required> </div> </div>";
 
  ?></br></br>
<div class="btn">
<input type="submit" class ="button btn btn-primary" name="edit_logins_button" value="Змінити" name="edit">
</div><br><br><br>
</form>
</body>
</html>