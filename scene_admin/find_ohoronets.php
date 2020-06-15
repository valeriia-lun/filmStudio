<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Знайти охоронця</title>
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
table{zoom: 40%;}
#printOnly{}
@page { margin: 0; size: landscape; }

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
      <label class=" mr-sm-2" >Адміністратор майданчика</label>
    </form>
  </div>
</nav>
<div>
<h1 align="center" class="colorForAllText">Охоронці</h1></br>

</div>
<div class="noprint">


<form>

</form>
</div>
<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td >Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Стаж</td>
<td>Рейтинг</td>
<td class = "noprint"><div class = "noprint">Зарплата</div></td>
<td>Місце проживання</td>
<td class = "noprint"><div class = "noprint">Працює з</div></td>
<td class = "noprint"><div class = "noprint">Працює до</div></td>
<td class = "noprint"><div class = "noprint">Кількість фільмів, у яких брав участь</div></td>
<td class = "noprint"><div class = "noprint">Дата народження</div></td>
<td class = "noprint"><div class = "noprint">Місце народження</div></td>
<td class = "noprint"><div class = "noprint">Професія</div></td>
<td >Ел.пошта</td>
<td>Телефон</td>
<td>Контакти близьких</td>
<td class = "noprint"><div class = "noprint">Рейтинги фільмів, в яких брали участь</div></td>
<td class = "noprint"><div class = "noprint">Зміна інформації</div></td>
</tr></thead>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
 $result_others = $mysqli->query("SELECT * FROM `others` WHERE `name_of_position` = 'Охоронник'");
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
  error_reporting(E_ERROR | E_PARSE);
//$mysqli->close();

while ($stroka = mysqli_fetch_array($result_others)){

  $temp = $stroka['others_id'];
  $result_phones = $mysqli->query("SELECT `others_phone_number` FROM `others_phones` WHERE `others_id` IN (SELECT `others_id` FROM  `others` WHERE `others_id` = $temp)");
  $result_contacts_rel = $mysqli->query("SELECT `others_relatives_phone_numbers` FROM `others_contacts_of_relatives` WHERE `others_id` IN (SELECT `others_id` FROM  `others` WHERE `others_id` = $temp)");
  $result_ratings = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `others_previous_movies_ratings` WHERE `others_id` = $temp)");


    echo"<tr>";
    echo"<form action=\"editingStaffFilmCrew.php\" method=\"post\">";

    echo"<td>" . $stroka['others_id'] . "</td>";
    echo"<td>" . $stroka['others_name'] . "</td>";
    echo"<td>" . $stroka['others_surname'] . "</td>";
    echo"<td>" . $stroka['others_middle_name'] . "</td>";
    echo"<td>" . $stroka['others_experience'] . "</td>";
    echo"<td>" . $stroka['rating_of_employee'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['others_salary'] . "</td>";
    echo"<td>" . $stroka['others_home_address'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['others_work_since'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['others_work_until'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['amount_of_films_others_took_part_in'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['others_date_of_birth'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['others_place_of_birth'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['name_of_position'] . "</td>";
    echo"<td>" . $stroka['others_e-mail'] . "</td>";

    echo"<td>" .  res($result_phones) . "</td>";
    echo"<td>" .  res($result_contacts_rel) . "</td>";
    echo"<td class = \" noprint\">" .  res($result_ratings) . "</td>";

echo "<input type=\"hidden\" value = \"" .$stroka['others_id'] . "\" name=\"others_id\" >";
    echo "<td class = \" noprint\">"."<div class = \"btn noprint\">"."<button class =\" btn btn-danger\" name=\"editBtn\">Змінити</button>"."</div></td></form>";    echo"</tr>";



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
