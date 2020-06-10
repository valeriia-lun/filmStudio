<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Актори</title>
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
<h1 align="center" class="colorForAllText">Актори</h1></br>

</div>
<div class="noprint">

</div>
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
</tr></thead>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");

//прості
$zapyt1 =  $mysqli->query("SELECT * FROM `actors` WHERE `actor_experience` = (SELECT MAX(`actor_experience`) FROM  `actors`)"); // 1
$zapyt2 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_sex` = 'Ж' AND `actor_age` > 25");//2
$zapyt3 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_salary` < 20000");//3
$zapyt4 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_color_of_hair` = 'Блонд'");//4
$zapyt5 = $mysqli->query("SELECT * FROM `movie` WHERE `rating_of_movie` = (SELECT MAX(`rating_of_movie`) FROM  `movie`)");//5


//складні
$zapyt6 = $mysqli->query("SELECT * FROM `actors` WHERE actor_id IN (SELECT actor_id FROM `actor_filmcrew` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = 'Золото'))");

    //Допоміжний запит Help:
$zapyt7_1 =  $mysqli->query("CREATE VIEW Help AS SELECT Actor_filmCrew.number_of_film_crew, SUM(Actor_filmCrew.actor_fee) AS SUM_FEE FROM Actor_filmCrew
GROUP BY Actor_filmCrew.number_of_film_crew");

    //Запит:
$zapyt7_2 = $mysqli->query("SELECT * FROM Movie WHERE Movie.Number_of_film_crew IN(
SELECT Help.number_of_film_crew
FROM Help
WHERE Help.SUM_FEE = (
SELECT MAX(SUM_FEE)
FROM Help))");


$zapyt8 =  $mysqli->query("SELECT  *
FROM movie AS M1
WHERE NOT EXISTS(
SELECT *
FROM actors
WHERE rating_of_employee > 9 AND actor_id NOT IN (
SELECT actor_id
FROM actor_filmcrew
WHERE number_of_film_crew = M1.number_of_film_crew));");


//параметричні
$zapyt9 =   $mysqli->query("SELECT * FROM `actors` WHERE `actor_shoe_size` = [Введіть розмір взуття:]");


//------------------------------------------LERA------------------------------------------------------------

//прості
$result_movies =  $mysqli->query("SELECT * FROM `movie` WHERE `rating_of_movie` = '4'");
$zapyt22 = $mysqli->query("SELECT * FROM `editor` WHERE `editor_surname` = 'Ханенко'");
$zapyt33 = $mysqli->query("SELECT * FROM `others` WHERE `name_of_position` = 'адміністратор майданчика'");
$zapyt44 = $mysqli->query("SELECT *  FROM `others` WHERE `amount_of_films_others_took_part_in` > '10'");
$zapyt55 = $mysqli->query("SELECT * FROM `others` WHERE `others_e-mail` = 'o.glushenko@gmail.com'");


//складні
$zapyt66 = $mysqli->query("SELECT * FROM `movie` WHERE `name_of_movie` IN (
  SELECT  `name_of_movie` FROM `movie_genres` WHERE `id_movie_genre` IN(
    SELECT `id_movie_genre` FROM `genres` WHERE `genre` = 'детектив'))");


$zapyt77_1 = $mysqli->query("CREATE VIEW Help1 AS SELECT DISTINCT actor_filmcrew.actor_id, actor_filmcrew.number_of_film_crew
FROM actor_filmcrew
WHERE actor_filmCrew.number_of_film_crew IN(
SELECT movie.Number_of_film_crew
FROM movie
WHERE movie.budget_of_movie >700000)");

$zapyt77_2 =  $mysqli->query("SELECT Help1.actor_id, actors.actor_name, actors.actor_surname, actors.actor_middle_name, actors.actor_home_address, 
actors.actor_works_since,	actors.actor_works_until, actors.actor_experience, actors.rating_of_employee, actors.amount_of_films_actor_took_part_in,
 actors.actor_date_of_birth, actors.actor_place_of_birth, actors.name_of_position,actors.actor_age, actors.actor_sex,actors.actor_height,
 actors.actor_color_of_hair, 	actors.actor_length_of_hair,actors.actor_color_of_eyes,  actors.actor_stature,actors.actor_shoe_size, 
 actors.actor_clothing_size, actors.actor_nationality,actors.actor_other_appearance,actors.actor_e-mail,actors.actors_head_id,actors.actor_salary,	  
   COUNT(number_of_film_crew) AS amount_of_movies
FROM Help1 INNER JOIN actors ON Help1.actor_id = actors.actor_id
GROUP BY Help1.actor_id, actors.actor_name, actors.actor_surname");


$zapyt88 =  $mysqli->query("SELECT *
FROM movie
WHERE  movie.number_of_film_crew IN(
SELECT film_crew.number_of_film_crew
FROM film_crew
WHERE NOT EXISTS ( 
SELECT * 
FROM understudies 
WHERE NOT EXISTS (
SELECT * 
FROM understudies_filmcrew
WHERE understudies_filmcrew.number_of_film_crew = film_crew.number_of_film_crew AND understudies_filmcrew.understudy_id = understudies.understudy_id  )))");


//параметричні
$zapyt99 =   $mysqli->query("SELECT * FROM `understudies` WHERE `understudy_color_of_hair` = [Введіть колір волосся:]");
//echo res($zapyt99);


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
  $entering_values = $_POST['entering_values'];
if (isset($_POST['done'])){
  $mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


switch($selecting){
  case 'max_experience':


$result_actors =  $mysqli->query("SELECT * FROM `actors` WHERE `actor_experience` = (SELECT MAX(`actor_experience`) FROM  `actors`)"); // 1
while ($stroka = mysqli_fetch_array($result_actors)){
  $temp = $stroka['actor_id'];
  $result_photos = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp");
  $result_phones = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp");
  $result_contacts_rel = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp");
  $result_ratings = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp)");

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
    echo"</tr>";
   }
  break;
  


  case 'female':
    $result_actors2 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_sex` = 'Жіноча'");//2

    while ($stroka = mysqli_fetch_array($result_actors2)){
      $temp = $stroka['actor_id'];
      $result_photos = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp");
      $result_phones = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp");
      $result_contacts_rel = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp");
      $result_ratings = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp)");
    
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
        echo"</tr>";
       }
      break;

  

  case  'salary_20000_more':
    $result_actors3 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_salary` < 20000");//3
    while ($stroka3 = mysqli_fetch_array($result_actors3)){
      $temp3 = $stroka3['actor_id'];
      $result_photos3 = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp3");
      $result_phones3 = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp3");
      $result_contacts_rel3 = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp3");
      $result_ratings3 = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp3)");
    
        echo"<tr>";
        echo"<td>" . $stroka3['actor_id'] . "</td>";
        echo"<td>" . $stroka3['actor_name'] . "</td>";
        echo"<td>" . $stroka3['actor_surname'] . "</td>";
        echo"<td>" . $stroka3['actor_middle_name'] . "</td>";
        echo"<td>" . $stroka3['actor_experience'] . "</td>";
        echo"<td>" . $stroka3['rating_of_employee'] . "</td>";
        echo"<td>" . $stroka3['actor_salary'] . "</td>";
        echo"<td>" . $stroka3['actor_works_since'] . "</td>";
        echo"<td>" . $stroka3['actor_works_until'] . "</td>";
        echo"<td>" . $stroka3['amount_of_films_actor_took_part_in'] . "</td>";
        echo"<td>" . $stroka3['actor_date_of_birth'] . "</td>";
        echo"<td>" . $stroka3['actor_place_of_birth'] . "</td>";
        echo"<td>" . $stroka3['actor_home_address'] . "</td>";
        echo"<td>" . $stroka3['name_of_position'] . "</td>";
        echo"<td>" . $stroka3['actor_age'] . "</td>";
        echo"<td>" . $stroka3['actor_sex'] . "</td>";
        echo"<td>" . $stroka3['actor_height'] . "</td>";
        echo"<td>" . $stroka3['actor_color_of_hair'] . "</td>";
        echo"<td>" . $stroka3['actor_length_of_hair'] . "</td>";
        echo"<td>" . $stroka3['actor_color_of_eyes'] . "</td>";
        echo"<td>" . $stroka3['actor_stature'] . "</td>";
        echo"<td>" . $stroka3['actor_shoe_size'] . "</td>";
        echo"<td>" . $stroka3['actor_clothing_size'] . "</td>";
        echo"<td>" . $stroka3['actor_nationality'] . "</td>";
        echo"<td>" . $stroka3['actor_other_appearance'] . "</td>";
        echo"<td>" . $stroka3['actor_e-mail'] . "</td>";
        echo"<td>" . $stroka3['actors_head_id'] . "</td>";
        echo"<td>" .  res($result_photos3) . "</td>";
        echo"<td>" .  res($result_phones3) . "</td>";
        echo"<td>" .  res($result_contacts_rel3) . "</td>";
        echo"<td>" .  res($result_ratings3) . "</td>";
        echo"</tr>";
       }
      break;


      case  'blond':
        $result_actors3 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_color_of_hair` = 'Блонд'");//4
        while ($stroka3 = mysqli_fetch_array($result_actors3)){
          $temp3 = $stroka3['actor_id'];
          $result_photos3 = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp3");
          $result_phones3 = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp3");
          $result_contacts_rel3 = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp3");
          $result_ratings3 = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp3)");
        
            echo"<tr>";
            echo"<td>" . $stroka3['actor_id'] . "</td>";
            echo"<td>" . $stroka3['actor_name'] . "</td>";
            echo"<td>" . $stroka3['actor_surname'] . "</td>";
            echo"<td>" . $stroka3['actor_middle_name'] . "</td>";
            echo"<td>" . $stroka3['actor_experience'] . "</td>";
            echo"<td>" . $stroka3['rating_of_employee'] . "</td>";
            echo"<td>" . $stroka3['actor_salary'] . "</td>";
            echo"<td>" . $stroka3['actor_works_since'] . "</td>";
            echo"<td>" . $stroka3['actor_works_until'] . "</td>";
            echo"<td>" . $stroka3['amount_of_films_actor_took_part_in'] . "</td>";
            echo"<td>" . $stroka3['actor_date_of_birth'] . "</td>";
            echo"<td>" . $stroka3['actor_place_of_birth'] . "</td>";
            echo"<td>" . $stroka3['actor_home_address'] . "</td>";
            echo"<td>" . $stroka3['name_of_position'] . "</td>";
            echo"<td>" . $stroka3['actor_age'] . "</td>";
            echo"<td>" . $stroka3['actor_sex'] . "</td>";
            echo"<td>" . $stroka3['actor_height'] . "</td>";
            echo"<td>" . $stroka3['actor_color_of_hair'] . "</td>";
            echo"<td>" . $stroka3['actor_length_of_hair'] . "</td>";
            echo"<td>" . $stroka3['actor_color_of_eyes'] . "</td>";
            echo"<td>" . $stroka3['actor_stature'] . "</td>";
            echo"<td>" . $stroka3['actor_shoe_size'] . "</td>";
            echo"<td>" . $stroka3['actor_clothing_size'] . "</td>";
            echo"<td>" . $stroka3['actor_nationality'] . "</td>";
            echo"<td>" . $stroka3['actor_other_appearance'] . "</td>";
            echo"<td>" . $stroka3['actor_e-mail'] . "</td>";
            echo"<td>" . $stroka3['actors_head_id'] . "</td>";
            echo"<td>" .  res($result_photos3) . "</td>";
            echo"<td>" .  res($result_phones3) . "</td>";
            echo"<td>" .  res($result_contacts_rel3) . "</td>";
            echo"<td>" .  res($result_ratings3) . "</td>";
            echo"</tr>";
           }
          break;

          case  'movie_zoloto':
            $result_actors3 = $mysqli->query("SELECT * FROM `actors` WHERE actor_id IN (SELECT actor_id FROM `actor_filmcrew` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = 'Золото'))");
            while ($stroka3 = mysqli_fetch_array($result_actors3)){
              $temp3 = $stroka3['actor_id'];
              $result_photos3 = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp3");
              $result_phones3 = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp3");
              $result_contacts_rel3 = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp3");
              $result_ratings3 = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp3)");
            
                echo"<tr>";
                echo"<td>" . $stroka3['actor_id'] . "</td>";
                echo"<td>" . $stroka3['actor_name'] . "</td>";
                echo"<td>" . $stroka3['actor_surname'] . "</td>";
                echo"<td>" . $stroka3['actor_middle_name'] . "</td>";
                echo"<td>" . $stroka3['actor_experience'] . "</td>";
                echo"<td>" . $stroka3['rating_of_employee'] . "</td>";
                echo"<td>" . $stroka3['actor_salary'] . "</td>";
                echo"<td>" . $stroka3['actor_works_since'] . "</td>";
                echo"<td>" . $stroka3['actor_works_until'] . "</td>";
                echo"<td>" . $stroka3['amount_of_films_actor_took_part_in'] . "</td>";
                echo"<td>" . $stroka3['actor_date_of_birth'] . "</td>";
                echo"<td>" . $stroka3['actor_place_of_birth'] . "</td>";
                echo"<td>" . $stroka3['actor_home_address'] . "</td>";
                echo"<td>" . $stroka3['name_of_position'] . "</td>";
                echo"<td>" . $stroka3['actor_age'] . "</td>";
                echo"<td>" . $stroka3['actor_sex'] . "</td>";
                echo"<td>" . $stroka3['actor_height'] . "</td>";
                echo"<td>" . $stroka3['actor_color_of_hair'] . "</td>";
                echo"<td>" . $stroka3['actor_length_of_hair'] . "</td>";
                echo"<td>" . $stroka3['actor_color_of_eyes'] . "</td>";
                echo"<td>" . $stroka3['actor_stature'] . "</td>";
                echo"<td>" . $stroka3['actor_shoe_size'] . "</td>";
                echo"<td>" . $stroka3['actor_clothing_size'] . "</td>";
                echo"<td>" . $stroka3['actor_nationality'] . "</td>";
                echo"<td>" . $stroka3['actor_other_appearance'] . "</td>";
                echo"<td>" . $stroka3['actor_e-mail'] . "</td>";
                echo"<td>" . $stroka3['actors_head_id'] . "</td>";
                echo"<td>" .  res($result_photos3) . "</td>";
                echo"<td>" .  res($result_phones3) . "</td>";
                echo"<td>" .  res($result_contacts_rel3) . "</td>";
                echo"<td>" .  res($result_ratings3) . "</td>";
                echo"</tr>";
               }
              break;


              case  'entered_shoe_size':
                $result_actors3 =   $mysqli->query("SELECT * FROM `actors` WHERE `actor_shoe_size` = $entering_values");
                while ($stroka3 = mysqli_fetch_array($result_actors3)){
                  $temp3 = $stroka3['actor_id'];
                  $result_photos3 = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp3");
                  $result_phones3 = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp3");
                  $result_contacts_rel3 = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp3");
                  $result_ratings3 = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp3)");
                
                    echo"<tr>";
                    echo"<td>" . $stroka3['actor_id'] . "</td>";
                    echo"<td>" . $stroka3['actor_name'] . "</td>";
                    echo"<td>" . $stroka3['actor_surname'] . "</td>";
                    echo"<td>" . $stroka3['actor_middle_name'] . "</td>";
                    echo"<td>" . $stroka3['actor_experience'] . "</td>";
                    echo"<td>" . $stroka3['rating_of_employee'] . "</td>";
                    echo"<td>" . $stroka3['actor_salary'] . "</td>";
                    echo"<td>" . $stroka3['actor_works_since'] . "</td>";
                    echo"<td>" . $stroka3['actor_works_until'] . "</td>";
                    echo"<td>" . $stroka3['amount_of_films_actor_took_part_in'] . "</td>";
                    echo"<td>" . $stroka3['actor_date_of_birth'] . "</td>";
                    echo"<td>" . $stroka3['actor_place_of_birth'] . "</td>";
                    echo"<td>" . $stroka3['actor_home_address'] . "</td>";
                    echo"<td>" . $stroka3['name_of_position'] . "</td>";
                    echo"<td>" . $stroka3['actor_age'] . "</td>";
                    echo"<td>" . $stroka3['actor_sex'] . "</td>";
                    echo"<td>" . $stroka3['actor_height'] . "</td>";
                    echo"<td>" . $stroka3['actor_color_of_hair'] . "</td>";
                    echo"<td>" . $stroka3['actor_length_of_hair'] . "</td>";
                    echo"<td>" . $stroka3['actor_color_of_eyes'] . "</td>";
                    echo"<td>" . $stroka3['actor_stature'] . "</td>";
                    echo"<td>" . $stroka3['actor_shoe_size'] . "</td>";
                    echo"<td>" . $stroka3['actor_clothing_size'] . "</td>";
                    echo"<td>" . $stroka3['actor_nationality'] . "</td>";
                    echo"<td>" . $stroka3['actor_other_appearance'] . "</td>";
                    echo"<td>" . $stroka3['actor_e-mail'] . "</td>";
                    echo"<td>" . $stroka3['actors_head_id'] . "</td>";
                    echo"<td>" .  res($result_photos3) . "</td>";
                    echo"<td>" .  res($result_phones3) . "</td>";
                    echo"<td>" .  res($result_contacts_rel3) . "</td>";
                    echo"<td>" .  res($result_ratings3) . "</td>";
                    echo"</tr>";
                   }
                  break;


//?????????????????????????????
case  'expensive':
  $result_actors3 =  $mysqli->query("SELECT actors.actor_id, actors.actor_name, actors.actor_surname,actors.actor_middle_name, actors.actor_experience, actors.rating_of_employee,actors.actor_salary, 
  actors.actor_works_since,	actors.actor_works_until,  actors.amount_of_films_actor_took_part_in, actors.actor_home_address,
  actors.actor_date_of_birth, actors.actor_place_of_birth, actors.name_of_position,actors.actor_age, actors.actor_sex,actors.actor_height,
  actors.actor_color_of_hair, 	actors.actor_length_of_hair,actors.actor_color_of_eyes,  actors.actor_stature,actors.actor_shoe_size, 
  actors.actor_clothing_size, actors.actor_nationality,actors.actor_other_appearance, actors.`actor_e-mail`,actors.actors_head_id, SUM(actor_filmcrew.actor_fee) FROM (actors INNER JOIN actor_filmcrew ON actors.actor_id = actor_filmcrew.actor_id) GROUP BY actor_filmcrew.actor_id;");


                   
                    while ($stroka3 = mysqli_fetch_array($result_actors3)){
                      $temp3 = $stroka3['actors.actor_id'];
                      $result_photos3 = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp3");
                      $result_phones3 = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp3");
                      $result_contacts_rel3 = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp3");
                      $result_ratings3 = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp3)");
                    
                        echo"<tr>";
                        echo"<td>" . $stroka3['actor_id'] . "</td>";
                        echo"<td>" . $stroka3['actor_name'] . "</td>";
                        echo"<td>" . $stroka3['actor_surname'] . "</td>";
                        echo"<td>" . $stroka3['actor_middle_name'] . "</td>";
                        echo"<td>" . $stroka3['actor_experience'] . "</td>";
                        echo"<td>" . $stroka3['rating_of_employee'] . "</td>";
                        echo"<td>" . $stroka3['actor_salary'] . "</td>";
                        echo"<td>" . $stroka3['actor_works_since'] . "</td>";
                        echo"<td>" . $stroka3['actor_works_until'] . "</td>";
                        echo"<td>" . $stroka3['amount_of_films_actor_took_part_in'] . "</td>";
                        echo"<td>" . $stroka3['actor_date_of_birth'] . "</td>";
                        echo"<td>" . $stroka3['actor_place_of_birth'] . "</td>";
                        echo"<td>" . $stroka3['actor_home_address'] . "</td>";
                        echo"<td>" . $stroka3['name_of_position'] . "</td>";
                        echo"<td>" . $stroka3['actor_age'] . "</td>";
                        echo"<td>" . $stroka3['actor_sex'] . "</td>";
                        echo"<td>" . $stroka3['actor_height'] . "</td>";
                        echo"<td>" . $stroka3['actor_color_of_hair'] . "</td>";
                        echo"<td>" . $stroka3['actor_length_of_hair'] . "</td>";
                        echo"<td>" . $stroka3['actor_color_of_eyes'] . "</td>";
                        echo"<td>" . $stroka3['actor_stature'] . "</td>";
                        echo"<td>" . $stroka3['actor_shoe_size'] . "</td>";
                        echo"<td>" . $stroka3['actor_clothing_size'] . "</td>";
                        echo"<td>" . $stroka3['actor_nationality'] . "</td>";
                        echo"<td>" . $stroka3['actor_other_appearance'] . "</td>";
                        echo"<td>" . $stroka3['actor_e-mail'] . "</td>";
                        echo"<td>" . $stroka3['actors_head_id'] . "</td>";
                        echo"<td>" .  res($result_photos3) . "</td>";
                        echo"<td>" .  res($result_phones3) . "</td>";
                        echo"<td>" .  res($result_contacts_rel3) . "</td>";
                        echo"<td>" .  res($result_ratings3) . "</td>";
                  
                        echo"</tr>";
                       }
                      break;
//?????????????????????????????
}
}



 
?>

  


</table>
</div>
<div class="btn noprint">
<button class ="button btn btn-danger" onclick="window.print()">Друкувати</button></br></br></br>
</div>
</body>
</html>