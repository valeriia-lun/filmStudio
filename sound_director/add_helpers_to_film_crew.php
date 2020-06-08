<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Додати помічників звукорежисера</title>
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
<style>
  #button_find{
    right: 20px;
    left: 2200px;
    top: 200px;
    bottom: 1500px;
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
      <label class=" mr-sm-2" >Звукорежисер</label>
    </form>
  </div>
</nav>
<h1 align="center" class="colorForAllText">Помічники звукорежисера</h1></br>


<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Стаж</td>
<td>Рейтинг</td>
<td>Зарплата</td>
<td>Місце проживання</td>
<td>Працює з</td>
<td>Працює до</td>
<td>Кількість фільмів, у яких брав участь</td>
<td>Дата народження</td>
<td>Місце народження</td>
<td>Професія</td>
<td>Ел.пошта</td>
<td>Id керуючого</td>
<td>Телефон</td>
<td>Контакти близьких</td>
<td>Рейтинги фільмів, в яких брали участь </td>
<td>Обрати помічника звукорежисера</td>
</tr></thead>
<form action="zvukorezhyser_check.php" method="POST">
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


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

$number_of_filmCrew = $_POST['number_of_film_crew'];
echo "<input type=\"hidden\" value = \"" .$number_of_filmCrew . "\" name=\"number_of_filmCrewww\" >";
$start = $mysqli->query("SELECT `date_start_crew` FROM `film_crew` WHERE `number_of_film_crew` = $number_of_filmCrew");
$finish = $mysqli->query("SELECT `date_finish_film_crew` FROM `film_crew` WHERE `number_of_film_crew` = $number_of_filmCrew");
$date_start_this_film_crew = mysqli_fetch_array($start); //arrays with 1 element
$date_finish_this_film_crew = mysqli_fetch_array($finish);
$used_start = $date_start_this_film_crew[0];
$used_finish = $date_finish_this_film_crew[0];


$result_others=$mysqli->query("SELECT * FROM others WHERE `name_of_position` = 'помічник звукорежисера' AND others_id NOT IN (SELECT DISTINCT others_id FROM others_filmcrew WHERE number_of_film_crew
 IN(SELECT number_of_film_crew FROM film_crew WHERE ((date_finish_film_crew BETWEEN '$used_start' AND '$used_finish') OR
(date_start_crew BETWEEN  '$used_start' AND  '$used_finish'))))");
while ($stroka = mysqli_fetch_array($result_others)){
  $temp = $stroka['others_id'];

  $result_others_phones = $mysqli->query("SELECT `others_phone_number` FROM `others_phones` WHERE `others_id` IN (SELECT `others_id` FROM  `others` WHERE `others_id` = $temp)");
  $result_others_contacts_rel = $mysqli->query("SELECT `others_relatives_phone_numbers` FROM `others_contacts_of_relatives` WHERE `others_id` IN (SELECT `others_id` FROM  `others` WHERE `others_id` = $temp)");
  $result_others_ratings = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `others_previous_movies_ratings` WHERE `others_id` = $temp)");

    echo"<tr>";
    echo"<tr>";
    echo"<td>" . $stroka['others_id'] . "</td>";
    echo"<td>" . $stroka['others_name'] . "</td>";
    echo"<td>" . $stroka['others_surname'] . "</td>";
    echo"<td>" . $stroka['others_middle_name'] . "</td>";
    echo"<td>" . $stroka['others_experience'] . "</td>";
    echo"<td>" . $stroka['rating_of_employee'] . "</td>";
    echo"<td>" . $stroka['others_salary'] . "</td>";
    echo"<td>" . $stroka['others_home_address'] . "</td>";
    echo"<td>" . $stroka['others_work_since'] . "</td>";
    echo"<td>" . $stroka['others_work_until'] . "</td>";
    echo"<td>" . $stroka['amount_of_films_others_took_part_in'] . "</td>";
    echo"<td>" . $stroka['others_date_of_birth'] . "</td>";
    echo"<td>" . $stroka['others_place_of_birth'] . "</td>";
    echo"<td>" . $stroka['name_of_position'] . "</td>";
    echo"<td>" . $stroka['others_e-mail'] . "</td>";
    echo"<td>" . $stroka['others_head_id'] . "</td>";
    echo"<td>" .  res($result_others_phones) . "</td>";
    echo"<td>" .  res($result_others_contacts_rel) . "</td>";
    echo"<td>" .  res($result_others_ratings) . "</td>";
    echo"<td>" ."<input type=\"checkbox\" class=\"form-control\" value = \"" . $stroka['others_id'] . "\" name=\"helpers_id[]\" >";
    echo"</tr>";
   }

?>

</table>
</div>
<div class="btn">
<button  class ="button btn btn-danger" name="done">Додати обраних співробітників</button>
  </div></form>
</body>
</html>
