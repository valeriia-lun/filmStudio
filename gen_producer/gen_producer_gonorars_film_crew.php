<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Призначення гонорарів</title>
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

<h1 class="colorForAllText">Актори</h1>

<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Гонорар</td>
<td>Призначення</td>
</tr></thead>


<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$name_movie = $_POST['moive_name_film_crew'];


$number = mysqli_fetch_array($mysqli->query("SELECT number_of_film_crew FROM `movie` WHERE `name_of_movie` = $name_movie"));
if ($number) {
    echo "Success!";
  }
else {
     echo "Error! $mysqli->error <br>";
   }
//echo "hello";
print_r($number);

//$count = 0;
//$id;
$result = $mysqli->query("SELECT * FROM `actors` WHERE `actor_id` IN (SELECT `actor_id` FROM `actor_filmcrew` WHERE `number_of_film_crew` IN(SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = $name_movie))");
while ($stroka = mysqli_fetch_array($result)){
  $id_a = $stroka['actor_id'];
  $gonorars_result = $mysqli->query("SELECT actor_fee FROM actor_filmcrew WHERE actor_id =  $id_a AND number_of_film_crew IN(SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = $name_movie))");
  $gonorars_res = mysqli_fetch_array($gonorars_result);
  $gonorars_use = $gonorars_res[0];
    echo"<form action = \"gonorars_check.php\" method=\"post\"><tr>";
    echo "<input type=\"hidden\" value = \"" .$number[0] . "\" name=\"number_of_filmCrew\" >";
    echo"<td>" . $stroka['actor_id'] . "</td>";
    echo"<td>" . $stroka['actor_name'] . "</td>";
    echo"<td>" . $stroka['actor_surname'] . "</td>";
    echo"<td>" . $stroka['actor_middle_name'] . "</td>";
    echo"<td>" ."<input type=\"text\"  class=\"form-control\" onkeyup=\"lal(this)\" value = \"$gonorars_use\" name=\"gonorar\"/>". "</td>";
    echo "<input type=\"hidden\" value = \"" . $stroka['actor_id'] . "\" name=\"actor_id\" >";
    echo"<td>" ."<input type=\"submit\" class=\" btn btn-danger\" name=\"done\"  value=\"Зберегти\"/>". "</td>";
    echo"</tr></form>";
   }
?>
</table>




<div>
<h1 class="colorForAllText">Дублери</h1>
<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Гонорар</td>
<td>Призначення</td>
</tr></thead>

<?php

$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");



//echo "hello";
//echo $number;

$result = $mysqli->query("SELECT *
 FROM `understudies` WHERE `understudy_id` IN (SELECT `understudy_id` FROM `understudies_filmcrew` WHERE `number_of_film_crew`  IN(SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = $name_movie))");
while ($stroka = mysqli_fetch_array($result)){

  $id_u = $stroka['understudy_id'];
  $gonorars_result = $mysqli->query("SELECT understudy_fee FROM understudies_filmcrew WHERE understudy_id =  $id_u AND number_of_film_crew IN(SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = $name_movie))");
  $gonorars_res = mysqli_fetch_array($gonorars_result);
  $gonorars_use = $gonorars_res[0];

    echo"<form  action = \"gonorars_check.php\" method=\"post\"><tr>";
    echo "<input type=\"hidden\" value = \"" .$number[0]  . "\" name=\"number_of_filmCreww\" >";
    echo"<td>" . $stroka['understudy_id'] . "</td>";
    echo"<td>" . $stroka['understudy_name'] . "</td>";
    echo"<td>" . $stroka['understudy_surname'] . "</td>";
    echo"<td>" . $stroka['understudy_middle_name'] . "</td>";
    echo"<td>" ."<input type=\"text\"  class=\"form-control\" onkeyup=\"lal(this)\" value = \"$gonorars_use\" name=\"gonorar2\">". "</td>";
    echo "<input type=\"hidden\" value = \"" . $stroka['understudy_id'] . "\" name=\"understudy_id\" >";
    echo"<td>" ."<input type=\"submit\" class=\" btn btn-danger\" name=\"done2\"  value=\"Зберегти\"/>". "</td>";
    echo"</tr></form>";
   }

?>
</table>
</div>


<div>
<h1 class="colorForAllText">Інші співробітники</h1>

<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Професія</td>
<td>Гонорар</td>
<td>Призначення</td>
</tr></thead>
<?php

$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


//echo "hello";
//echo $number;
$result = $mysqli->query("SELECT *
 FROM `others` WHERE `others_id` IN (SELECT `others_id` FROM `others_filmcrew` WHERE `number_of_film_crew`   IN(SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = $name_movie))");
while ($stroka = mysqli_fetch_array($result)){
  $id_o = $stroka['others_id'];
  $gonorars_result = $mysqli->query("SELECT others_fee FROM others_filmcrew WHERE others_id =  $id_o AND number_of_film_crew IN(SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = $name_movie))");
  $gonorars_res = mysqli_fetch_array($gonorars_result);
  $gonorars_use = $gonorars_res[0];
  echo"<form  action = \"gonorars_check.php\" method=\"post\"><tr>";
  echo "<input type=\"hidden\" value = \"" .$number[0]  . "\" name=\"number_of_filmCrewww\" >";
    echo"<td>" . $stroka['others_id'] . "</td>";
    echo"<td>" . $stroka['others_name'] . "</td>";
    echo"<td>" . $stroka['others_surname'] . "</td>";
    echo"<td>" . $stroka['others_middle_name'] . "</td>";
    echo"<td>" . $stroka['name_of_position'] . "</td>";
    echo"<td>" ."<input type=\"text\" class=\"form-control\" onkeyup=\"lal(this)\" value = \"$gonorars_use\" name=\"gonorar3\">". "</td>";
    echo "<input type=\"hidden\" value = \"" . $stroka['others_id'] . "\" name=\"others_id\" >";
    echo"<td>" ."<input type=\"submit\" class=\" btn btn-danger\" name=\"done3\"  value=\"Зберегти\"/>". "</td>";
    echo"</tr></form>";
   }

?>
</table>


</div>



<?php

/*if(isset($_POST["done"])){
if(empty($_POST["gonorar1"]) || empty($_POST["gonorar2"]) || empty($_POST["gonorar3"]) || empty($_POST["gonorar4"]))
{
  echo '<script language="javascript">';
  echo 'alert("Всі поля мають бути заповнені!")';
  echo '</script>';
}

}*/
?>

<script>
function lal(el) {
  if (el.value.match( /[^0-9]/ ) ) {
        alert( "Неправильний формат числа! \nМожна використовувати тільки цифри" );
        el.value = el.value.replace( /[^0-9]/ , "" )
    }
}
</script>
</body>
</html>
