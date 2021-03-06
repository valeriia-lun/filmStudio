﻿<!DOCTYPE html>
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
                <label class=" mr-sm-2">Посада:&nbsp;&nbsp;Адміністратор майданчика</label>
            </form>
        </div>
    </div>
</nav>

<div>
<h1 align="center" class="colorForAllText">Групи монтажерів</h1></br>

</div>

<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td>Номер групи монтажерів</td><td>Назва фільму</td>
<td>Дата початку роботи групи монтажерів</td>
<td>Дата закінчення роботи групи монтажерів</td>
<td>Id голови групи монтажерів</td>

</tr></thead>
<div class="noprint">
<form action="find_editCrew_zapyty.php" method="post">

<div class="row">
<div class=" container col-3" >
    <label class="colorText">Дата початку роботи: </label><input type="date" class="form-control" name="date_start" maxlength="50" tabindex="2" ><br>
  </div>
  <div class=" container col-3" >
    <label class="colorText">Дата кінця роботи: </label><input type="date" class="form-control" name="date_finish" maxlength="50" tabindex="2" ><br>
  </div>
   <div class="col-3 container">
<label class="colorText" >Табельний номер голови:</label>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result_headId = $mysqli->query("SELECT `editor_crew_head_id` FROM `edit_crew`");
echo "<select name=\"selectingHeadId\"  class=\"select selectpicker  form-control\"><option></option>";
while($stroka = mysqli_fetch_array($result_headId)){
for ($i=0; $i<count($stroka); $i+=2){
  echo "<option>$stroka[$i]</option>"; 
}
}
echo "</select>";
?>
</div>
<div class=" container col-3" >
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
</div>

<div class="btn">
  <button class ="button btn btn-danger" name="done">Знайти</button>
</div>
</form>
</div>
<?php function res($result){
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

if (isset($_POST['done'])){
   $mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");

        $date_start =  $_POST['date_start'];
        $date_finish =  $_POST['date_finish'];
        $selectingHeadId =  $_POST['selectingHeadId'];
        $movieName =  $_POST['selectingFilms'];
        

        $quer = "SELECT * FROM `edit_crew` WHERE ";

                $isFirst = true;

                if($date_start != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "date_start_edit_crew = '$date_start'";
                  $isFirst = false;
                }    
                
               

                if($date_finish != NULL){
                //  $isLast = false;
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "date_finish_edit_crew = '$date_finish'";
                  $isFirst = false;
                }
                if($selectingHeadId != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "editor_crew_head_id = \"$selectingHeadId\"";
                  $isFirst = false;
                }
                
                if($movieName != NULL){
                //  $isLast = false;
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "number_of_edit_crew IN(SELECT `number_of_edit_crew` FROM `movie` WHERE `name_of_movie` = '$movieName') ";
                  $isFirst = false;
                 // echo $quer;
                }


                $result_filter = $mysqli->query($quer);
                if ($result_filter) {
                //   echo "Success!";
                 }
                else {
                    echo "Error! $mysqli->error <br>";
                  }

                $result_filter = $mysqli->query($quer);
   
//$mysqli->close();
while ($stroka = mysqli_fetch_array($result_filter)){
     $temp = $stroka['number_of_edit_crew'];
  $result_movie = $mysqli->query("SELECT `name_of_movie` FROM `movie` WHERE `number_of_edit_crew` = $temp");

    echo"<tr>";

    echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";

    $valuee = res($result_movie);

    echo"<td>" . $valuee . "</td>";

    echo"<td>" . $stroka['date_start_edit_crew'] . "</td>";
    echo"<td>" . $stroka['date_finish_edit_crew'] . "</td>";
$value = $stroka['editor_crew_head_id'];
    $result_head_editor = $mysqli->query("SELECT * FROM `editor` WHERE `editor_id` = '$value'");
    $strokaa = mysqli_fetch_array($result_head_editor);

    echo"<td>Id: " . $stroka['editor_crew_head_id'] . " " . $strokaa['editor_surname'] . " " . $strokaa['editor_name'] . " " . $strokaa['editor_middle_name'] . "</td>";
    echo"</tr>";
   }
}
?>

</table>
</div>
<div id="printOnly"><p>&nbsp;&nbsp;&nbsp;Дата друку: 
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
</body>
</html>