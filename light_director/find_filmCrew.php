﻿<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Знімальні групи</title>
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
@media screen
{
    #printOnly{display:none;}
}

@media print {
  
  .noprint { display: none; }

#printOnly{}
@page { margin: 0; }

  }
  #content {
    display: table;
}

#pageFooter {
    display: table-footer-group;
}

#pageFooter:after {
    counter-increment: page;
    content: counter(page) ;
    
    font-size: 20pt;
}
</style>
<body class="text-center body3">

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="..\loginFirm.php">Вихід</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item nav-link active"><a href="main.php" style="color:red;">На головну<span
                            class="sr-only">(current)</span></a></li>
            </ul>
            <form class=" my-2 my-lg-0">
                <label class=" mr-sm-2">Посада:&nbsp;&nbsp;Гафер</label>
            </form>
        </div>
    </div>
</nav>

<div>
<h1 align="center" class="colorForAllText">Знімальні групи</h1></br>
</div>
<div class="noprint">
<form action="find_film_crew_zapyty.php" method="post">
<div class="row">

<div class=" container col-3" >
    <label class="colorText">Дата початку роботи: </label><input type="date" class="form-control" name="date_start" maxlength="50" tabindex="2" ><br>
  </div><div class=" container col-3" >
    <label class="colorText">Назва фільму: </label>
    <?php
    $mysqli = new mysqli("localhost","root","root","filmstudio");
    $mysqli->query("SET NAMES 'utf8'");
    $result_films = $mysqli->query("SELECT `name_of_movie` FROM `movie`");
    echo "<select name=\"selectingFilms\"  class=\"select selectpicker  form-control\"><option></option>";
    while($stroka = mysqli_fetch_array($result_films)){
    for ($i=0; $i<count($stroka); $i+=2){
      echo "<option>$stroka[$i]</option>";
    }
    }
    echo "</select>";
    ?>
    <br>
  </div>
  <div class=" container col-3" >
    <label class="colorText">Дата кінця роботи: </label><input type="date" class="form-control" name="date_finish" maxlength="50" tabindex="2" ><br>
  </div>
</div>
<div class="btn">
  <button class ="button btn btn-primary" name="done">Знайти</button>
</div>
</form>
</div>

<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td>Номер знімальної групи</td><td>Назва фільму</td>
<td>Дата початку роботи знімальної групи</td>
<td>Дата закінчення роботи знімальної групи</td>
<td><div class = "noprint">Додати помічників гафера</div></td>
</tr></thead>
<form action = "add_helpers_to_film_crew.php" method="post">
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
 $result_film_crews = $mysqli->query("SELECT * FROM `film_crew`");

//$mysqli->close();
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

while ($stroka = mysqli_fetch_array($result_film_crews)){
  $temp = $stroka['number_of_film_crew'];

  $result_movie = $mysqli->query("SELECT `name_of_movie` FROM `movie` WHERE `number_of_film_crew` = $temp");
    $value = res($result_movie);
    echo"<tr>";

  


   
    echo"<td name=\"number_of_film_crew\">" . $stroka['number_of_film_crew'] . "</td>";
	 echo"<td>" . $value . "</td>";
    echo"<td>" . $stroka['date_start_crew'] . "</td>";
    echo"<td>" . $stroka['date_finish_film_crew'] . "</td>";

     $res = $mysqli->query("SELECT * FROM `film_crew` WHERE `date_finish_film_crew` > CURDATE() AND `number_of_film_crew` = $temp");
     $re = mysqli_fetch_array($res);
     if($re){
      echo "<td>"."<div class = \"btn noprint\">"."<button class =\" btn btn-danger\" value = \"" . $stroka['number_of_film_crew'] . "\" name=\"number_of_film_crew\">Додати</button>"."</div></td>";
     }else{
      echo "<td></td>";
     }

    echo"</tr>";}

?>

</table>
</div><div id="printOnly"><p>&nbsp;&nbsp;&nbsp;Дата друку: 
  <?php 
    $currentDateTime = date('Y-m-d'); 
    echo $currentDateTime;
  ?></p></div>
  
  <div id="printOnly" class="row ">
<div class="col-12 container fixed-bottom">
  <div id="content">
  <div id="pageFooter"></div></div></div></div>
<div class="btn noprint">
<button class ="button btn btn-danger" onclick="window.print()">Друкувати</button></br></br></br>
</div>
</form>

</body>
</html>
