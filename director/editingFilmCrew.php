<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
    <script>
          $(function() {
          $().datepicker();
          });
    </script>
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="..\index.php">Вибір посади</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Головна<span class="sr-only"></span></a>
      </li>     
    </ul>
   
    <form class=" my-2 my-lg-0">
      <label class=" mr-sm-2" >Режисер</label>
    </form>
  </div>
</nav>
<br><br><h1 class="colorForAllText">Змінити знімальну групу</h1><br>


<form action="" method="post">

<div class="row text-center" style="margin:10px;">
    <div class=" container col-3" >
    <label class="colorText">Номер знімальної групи: </label><?php
  if (isset($_POST['editBtn'])){
    $numb = filter_var(trim($_POST['number_of_film_crew']),FILTER_SANITIZE_STRING);

  }

$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `number_of_film_crew` FROM `film_crew` WHERE `number_of_film_crew` = $numb");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"number_of_film_crew\" value=\"$res[0]\" required>";
   ?><br>
    </div>
    <div class=" container col-3" >
    <label class="colorText">Дата початку роботи: </label> <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `date_start_crew` FROM `film_crew` WHERE `number_of_film_crew` = $numb");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"date\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"date_start\" value=\"$res[0]\" required>";
    ?><br>

</div>
  <div class=" container col-3" >
  <label class="colorText">Дата закінчення роботи:</label>  <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `date_finish_film_crew` FROM `film_crew` WHERE `number_of_film_crew` = $numb");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"date\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"date_finish\" value=\"$res[0]\" required>";
    ?><br>

</div>  </div><br>
<div class="btn">
<input type="submit" class ="button btn btn-primary" value="Змінити" name="edit">
</div><br><br><br>


</form>
</body>

</html>


<?php
if (isset($_POST['edit'])){

  $number = filter_var(trim($_POST['number_of_film_crew']),FILTER_SANITIZE_STRING);

  $dateStart = filter_var(trim($_POST['date_start']),FILTER_SANITIZE_STRING);
  $dateFinish = filter_var(trim($_POST['date_finish']),FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost','root','root','filmStudio');
$ans = $mysql->query("UPDATE `film_crew` SET `number_of_film_crew` = '$number', `date_start_crew` = '$dateStart', `date_finish_film_crew`= '$dateFinish' WHERE `number_of_film_crew` = '$numb' ");
if ($ans) {
   echo "Success!";
 }
else {
    echo "Error! $mysql->error <br>";
  }

$mysql->close();

header('Location: successfullyEditedFilmCrew.php');

}

 ?>
