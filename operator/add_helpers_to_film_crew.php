﻿<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Додати помічників оператора</title>
</head>
<body>

<h1 align="center">Помічники оператора</h1>

<table border="1" width = "2000">
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
<td>Обрати помічника оператора</td>
</tr>
<form action="operator_check.php" method="POST">
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


$result_others=$mysqli->query("SELECT * FROM others WHERE `name_of_position` = 'помічник оператора' AND others_id NOT IN (SELECT DISTINCT others_id FROM others_filmcrew WHERE number_of_film_crew
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
    echo"<td>" ."<input type=\"checkbox\" value = \"" . $stroka['others_id'] . "\" name=\"helpers_id[]\" >";
    echo"</tr>";
   }

?>

</table>
<button name="done">Додати обраних співробітників</button></form>
</body>
</html>
