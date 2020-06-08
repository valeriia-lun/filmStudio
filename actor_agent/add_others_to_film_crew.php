<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Співробітники</title>
</head>
<style>
  #button_find{
    right: 20px;
    left: 2200px;
    top: 200px;
    bottom: 1500px;
  }
</style>
<body>

<h1>Актори</h1>
<table border="1" width = "2000">
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Стаж</td>
<td>Рейтинг</td>
<td>Зарплата</td>
<td>Працює з</td>
<td>Працює до</td>
<td>Кількість фільмів, у яких брав участь</td>
<td>Дата народження</td>
<td>Місце народження</td>
<td>Місце проживання</td>
<td>Професія</td>
<td>Вік</td>
<td>Стать</td>
<td>Ріст</td>
<td>Колір волосся</td>
<td>Довжина волосся</td>
<td>Колір очей</td>
<td>Статура</td>
<td>Розмір взуття</td>
<td>Розмір одягу</td>
<td>Національність</td>
<td>Інші елементи зовнішності</td>
<td>Ел.пошта</td>
<td>Id керуючого</td>
<td>Фото</td>
<td>Телефон</td>
<td>Контакти близьких</td>
<td>Рейтинги фільмів, в яких брали участь </td>
<td>Обрати актора</td>
</tr>
<form action="actors_agent_check.php" method="POST">
<?php

$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


$number_of_filmCrew = $_POST['number_of_film_crew'];
echo "<input type=\"hidden\" value = \"" .$number_of_filmCrew . "\" name=\"number_of_filmCreww\" >";


$start = $mysqli->query("SELECT `date_start_crew` FROM `film_crew` WHERE `number_of_film_crew` = $number_of_filmCrew");
$finish = $mysqli->query("SELECT `date_finish_film_crew` FROM `film_crew` WHERE `number_of_film_crew` = $number_of_filmCrew");
$date_start_this_film_crew = mysqli_fetch_array($start); //arrays with 1 element
$date_finish_this_film_crew = mysqli_fetch_array($finish);
$used_start = $date_start_this_film_crew[0];
$used_finish = $date_finish_this_film_crew[0];



$result_actors=$mysqli->query("SELECT * FROM actors WHERE actor_id NOT IN (SELECT DISTINCT actor_id FROM actor_filmcrew WHERE number_of_film_crew 
 IN(SELECT number_of_film_crew FROM film_crew WHERE ((date_finish_film_crew BETWEEN '$used_start' AND '$used_finish') OR 
(date_start_crew BETWEEN  '$used_start' AND  '$used_finish'))))");

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
  


 while ($stroka = mysqli_fetch_array($result_actors)){
  $current_actor_id = $stroka['actor_id'];
  $result_photos = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $current_actor_id");

  $result_phones = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id` = $current_actor_id");

  $result_contacts_rel = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id` = $current_actor_id");

  $result_ratings = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $current_actor_id)");

    echo"<tr>";
    echo"<td>" . $stroka['actor_id'] . "</td>";
    echo"<td>" . $stroka['actor_name'] . "</td>";
    echo"<td>" . $stroka['actor_surname'] . "</td>";
    echo"<td>" . $stroka['actor_middle_name'] . "</td>";
    echo"<td>" . $stroka['actor_experience'] . "</td>";
    echo"<td>" . $stroka['rating_of_employee'] . "</td>";
    echo"<td>" . $stroka['actor_salary'] . "</td>";
    echo"<td>" . $stroka['actor_works_since'] . "</td>";
    echo"<td>" . $stroka['actor_works_until'] . "</td>";
    echo"<td>" . $stroka['amount_of_films_actor_took_part_in'] . "</td>";
    echo"<td>" . $stroka['actor_date_of_birth'] . "</td>";
    echo"<td>" . $stroka['actor_place_of_birth'] . "</td>";
    echo"<td>" . $stroka['actor_home_address'] . "</td>";
    echo"<td>" . $stroka['name_of_position'] . "</td>";
    echo"<td>" . $stroka['actor_age'] . "</td>";
    echo"<td>" . $stroka['actor_sex'] . "</td>";
    echo"<td>" . $stroka['actor_height'] . "</td>";
    echo"<td>" . $stroka['actor_color_of_hair'] . "</td>";
    echo"<td>" . $stroka['actor_length_of_hair'] . "</td>";
    echo"<td>" . $stroka['actor_color_of_eyes'] . "</td>";
    echo"<td>" . $stroka['actor_stature'] . "</td>";
    echo"<td>" . $stroka['actor_shoe_size'] . "</td>";
    echo"<td>" . $stroka['actor_clothing_size'] . "</td>";
    echo"<td>" . $stroka['actor_nationality'] . "</td>";
    echo"<td>" . $stroka['actor_other_appearance'] . "</td>";
    echo"<td>" . $stroka['actor_e-mail'] . "</td>";
    echo"<td>" . $stroka['actors_head_id'] . "</td>";
    echo"<td>" .  res($result_photos) . "</td>";
    echo"<td>" .  res($result_phones) . "</td>";
    echo"<td>" .  res($result_contacts_rel) . "</td>";
    echo"<td>" .  res($result_ratings) . "</td>";
    echo"<td>" ."<input type=\"checkbox\" value = \"" . $stroka['actor_id'] . "\" name=\"actor_id[]\" >";
    echo"</tr>";
 
   }
  
?>
</table>



<h1>Дублери</h1>
<table border="1" width = "2000">
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Стаж</td>
<td>Рейтинг</td>
<td>Зарплата</td>
<td>Працює з</td>
<td>Працює до</td>
<td>Кількість фільмів, у яких брав участь</td>
<td>Дата народження</td>
<td>Місце народження</td>
<td>Місце проживання</td>
<td>Професія</td>
<td>Вік</td>
<td>Стать</td>
<td>Ріст</td>
<td>Колір волосся</td>
<td>Довжина волосся</td>
<td>Колір очей</td>
<td>Статура</td>
<td>Розмір взуття</td>
<td>Розмір одягу</td>
<td>Національність</td>
<td>Інші елементи зовнішності</td>
<td>Ел.пошта</td>
<td>Id керуючого</td>
<td>Особливі навички</td>
<td>Фото</td>
<td>Телефон</td>
<td>Контакти близьких</td>
<td>Рейтинги фільмів, в яких брали участь </td>
<td>Обрати дублера</td>
</tr>

<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
 
//$mysqli->close();
$number_of_filmCrew = $_POST['number_of_film_crew'];
echo "<input type=\"hidden\" value = \"" .$number_of_filmCrew . "\" name=\"number_of_filmCrewww\" >";

$start = $mysqli->query("SELECT `date_start_crew` FROM `film_crew` WHERE `number_of_film_crew` = $number_of_filmCrew");
$finish = $mysqli->query("SELECT `date_finish_film_crew` FROM `film_crew` WHERE `number_of_film_crew` = $number_of_filmCrew");
$date_start_this_film_crew = mysqli_fetch_array($start); //arrays with 1 element
$date_finish_this_film_crew = mysqli_fetch_array($finish);
$used_start = $date_start_this_film_crew[0];
$used_finish = $date_finish_this_film_crew[0];


$result_understudies=$mysqli->query("SELECT * FROM understudies WHERE understudy_id NOT IN (SELECT DISTINCT understudy_id FROM understudies_filmcrew WHERE number_of_film_crew 
 IN(SELECT number_of_film_crew FROM film_crew WHERE ((date_finish_film_crew BETWEEN '$used_start' AND '$used_finish') OR 
(date_start_crew BETWEEN  '$used_start' AND  '$used_finish'))))");

while ($stroka = mysqli_fetch_array($result_understudies)){
  $temp = $stroka['understudy_id'];
  $result_skills = $mysqli->query("SELECT `skill` FROM `skills` WHERE `skills_id` IN (SELECT `skills_id` FROM  `understudies_skills` WHERE `understudy_id` = $temp)");
  $result_photos = $mysqli->query("SELECT `understudy_photo` FROM `understudies_photo` WHERE `understudy_id` IN (SELECT `understudy_id` FROM  `understudies` WHERE `understudy_id` = $temp)");
  $result_phones = $mysqli->query("SELECT `understudy_phone_number` FROM `understudy_phones` WHERE `understudy_id` IN (SELECT `understudy_id` FROM  `understudies` WHERE `understudy_id` = $temp)");
  $result_contacts_rel = $mysqli->query("SELECT `understudy_relatives_phone_numbers` FROM `understudies_contacts_of_relatives` WHERE `understudy_id` IN (SELECT `understudy_id` FROM  `understudies` WHERE `understudy_id` = $temp)");
  $result_ratings = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `understudy_previous_movies_ratings` WHERE `understudy_id` = $temp)");
  
    echo"<tr>";
    echo"<td>" . $stroka['understudy_id'] . "</td>";
    echo"<td>" . $stroka['understudy_name'] . "</td>";
    echo"<td>" . $stroka['understudy_surname'] . "</td>";
    echo"<td>" . $stroka['understudy_middle_name'] . "</td>";
    echo"<td>" . $stroka['understudy_experience'] . "</td>";
    echo"<td>" . $stroka['rating_of_employee'] . "</td>";
    echo"<td>" . $stroka['understudy_salary'] . "</td>";
    echo"<td>" . $stroka['understudy_works_since'] . "</td>";
    echo"<td>" . $stroka['understudy_works_until'] . "</td>";
    echo"<td>" . $stroka['amount_of_films_understudy_took_part_in'] . "</td>";
    echo"<td>" . $stroka['understudy_date_of_birth'] . "</td>";
    echo"<td>" . $stroka['understudy_place_of_birth'] . "</td>";
    echo"<td>" . $stroka['understudy_home_address'] . "</td>";
    echo"<td>" . $stroka['name_of_position'] . "</td>";
    echo"<td>" . $stroka['understudy_age'] . "</td>";
    echo"<td>" . $stroka['understudy_sex'] . "</td>";
    echo"<td>" . $stroka['understudy_height'] . "</td>";
    echo"<td>" . $stroka['understudy_color_of_hair'] . "</td>";
    echo"<td>" . $stroka['understudy_length_of_hair'] . "</td>";
    echo"<td>" . $stroka['understudy_color_of_eyes'] . "</td>";
    echo"<td>" . $stroka['understudy_stature'] . "</td>";
    echo"<td>" . $stroka['understudy_shoe_size'] . "</td>";
    echo"<td>" . $stroka['understudy_clothing_size'] . "</td>";
    echo"<td>" . $stroka['understudy_nationality'] . "</td>";
    echo"<td>" . $stroka['understudy_other_appearance'] . "</td>";
    echo"<td>" . $stroka['understudy_e-mail'] . "</td>";
    echo"<td>" . $stroka['understudy_head_id'] . "</td>";
    echo"<td>" .  res($result_skills) . "</td>";
    echo"<td>" .  res($result_photos) . "</td>";
    echo"<td>" .  res($result_phones) . "</td>";
    echo"<td>" .  res($result_contacts_rel) . "</td>";
    echo"<td>" .  res($result_ratings) . "</td>"; 
    echo"<td>" ."<input type=\"checkbox\" value = \"" . $stroka['understudy_id'] . "\" name=\"understudy_id[]\" >";
    echo"</tr>";
   }
  
  
?>

</table>
<button name="done">Додати обраних співробітників</button></form>
</body>
</html>