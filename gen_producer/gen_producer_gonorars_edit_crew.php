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





<h1 class="colorForAllText">Монтажери</h1>
<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Гонорар</td><td>Призначення</td>
</tr></thead>
<?php
/*ob_start();
include('gen_producer_choose.php');
$inc_data = ob_get_contents();
ob_end_clean();*/

$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$name_movie = $_POST['moive_name_edit_crew'];


$number = mysqli_fetch_array($mysqli->query("SELECT number_of_edit_crew FROM `movie` WHERE `name_of_movie` = '$name_movie'"));
//echo "hello";
//echo $number;

$result = $mysqli->query("SELECT *
 FROM `editor` WHERE `editor_id` IN (SELECT `editor_id` FROM `editor_crewedit` WHERE `number_of_edit_crew`  IN(SELECT `number_of_edit_crew` FROM `movie` WHERE `name_of_movie` = '$name_movie'))");
while ($stroka = mysqli_fetch_array($result)){
  $id_e = $stroka['editor_id'];
  $gonorars_result = $mysqli->query("SELECT editor_fee FROM editor_crewedit WHERE editor_id =  $id_e AND number_of_edit_crew IN(SELECT `number_of_edit_crew` FROM `movie` WHERE `name_of_movie` = '$name_movie')");
  $gonorars_res = mysqli_fetch_array($gonorars_result);
  $gonorars_use = $gonorars_res[0];

  echo"<form  action = \"gonorars_check.php\" method=\"post\"><tr>";
  echo "<input type=\"hidden\" value = \"" .$number[0] . "\" name=\"number_of_editCrew\" >";
    echo"<td>" . $stroka['editor_id'] . "</td>";
    echo"<td>" . $stroka['editor_name'] . "</td>";
    echo"<td>" . $stroka['editor_surname'] . "</td>";
    echo"<td>" . $stroka['editor_middle_name'] . "</td>";
    echo"<td>" ."<input type=\"text\"  class=\"form-control\" onkeyup=\"lal(this)\" value = \"$gonorars_use\" name=\"gonorar4\">". "</td>";
    echo "<input type=\"hidden\" value = \"" . $stroka['editor_id'] . "\" name=\"editor_id\" >";
    echo"<td>" ."<input type=\"submit\" class=\" btn btn-danger\"  name=\"done4\"  value=\"Зберегти\"/>". "</td>";
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
       el.value = el.value= "" ;
    }
}
</script>
</body>
</html>
