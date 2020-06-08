<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Групи монтажерів</title>
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

<style type="text/css">
@media print {
  .noprint { display: none; }
  @page { margin: 0;  }
}
</style>
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
      <label class=" mr-sm-2" >Режисер</label>
    </form>
  </div>
</nav>
<div>
<h1 align="center" class="colorForAllText">Групи монтажерів</h1></br>
</div>

<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td>Номер групи монтажерів</td>
<td>Дата початку роботи групи монтажерів</td>
<td>Дата закінчення роботи групи монтажерів</td>
<td>Id голови групи монтажерів</td>
<td><div class = "noprint">Змінити інформацію</div></td>
<td><div class = "noprint">Додати головного монтажера</div></td>
</tr></thead>

<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
function res($result){
  $print = "";
    if($result)
    {
        $rows = mysqli_num_rows($result); // количество полученных строк
        for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($result);
                for ($j = 0 ; $j < 1 ; ++$j)   $print .= "$row[$j]"."<br/>";
        }
    }
    return $print;
  }
  $selecting =  $_POST['selecting'];

if (isset($_POST['done'])){
  $mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


switch($selecting){
  case 'finish_edit_crew':
    $result_edit_crews =  $mysqli->query("SELECT  * FROM edit_crew WHERE `date_finish_edit_crew` = '2020-06-19'");
//$mysqli->close();
while ($stroka = mysqli_fetch_array($result_edit_crews)){
    echo"<tr>";
    echo"<form action=\"add_main_editor_to_edit_crew.php\" method=\"post\">";

    echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
    echo"<td>" . $stroka['date_start_edit_crew'] . "</td>";
    echo"<td>" . $stroka['date_finish_edit_crew'] . "</td>";
    echo"<td>" . $stroka['editor_crew_head_id'] . "</td>";

    echo "<td>"."<div class = \"btn noprint\">"."<button class =\" btn btn-danger\" value = \"" . $stroka['number_of_edit_crew'] . "\" name=\"number_of_edit_crew\">Додати</button>"."</div></td></form>";
    echo"<form action=\"editingEditCrew.php\" method=\"post\">";

echo "<input type=\"hidden\" value = \"" .$stroka['number_of_edit_crew'] . "\" name=\"number_of_edit_crew\" >";
    echo "<td>"."<div class = \"btn noprint\">"."<button class =\" btn btn-danger\" name=\"editBtn\">Змінити</button>"."</div></td></form>";
    echo"</tr>";
   }
}}
?>

</table>
</div>
<div class="btn noprint">
<button class ="button btn btn-danger" onclick="window.print()">Друкувати</button></br></br></br>
</div>
</body>
</html>
