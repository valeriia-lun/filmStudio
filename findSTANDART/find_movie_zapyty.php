<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Фільми</title>
</head>
<style type="text/css">
@media print {
  .noprint { display: none; }
}
</style>
<body>
<div>

<h1 align="center">Фільми</h1>
</div>
<div class="noprint">

</div>
<div>
<table border="1" width = "2000">
<tr>
<td>Назва фільму</td>
<td>Дата виходу фільму в прокат</td>
<td>Бюджет фільму</td>
<td>Рейтинг фільму</td>
<td>Номер знімальної групи</td>
<td>Номер групи монтажерів</td>
<td>Жанр</td>
<td>Тривалість</td>
</tr>

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
  case 'max_rating':
    $result_movies = $mysqli->query("SELECT * FROM `movie` WHERE `rating_of_movie` = (SELECT MAX(`rating_of_movie`) FROM  `movie`)");//5
  while ($stroka = mysqli_fetch_array($result_movies)){
    $temp = $stroka['name_of_movie'];

    $result_movies_genres = $mysqli->query("SELECT `genre` FROM `genres` WHERE `id_movie_genre` IN (SELECT `id_movie_genre` FROM  `movie_genres` WHERE `name_of_movie` = \"$temp\")");

    $result_movies_duration = $mysqli->query("SELECT `duration_of_movie` FROM `movie_duration` WHERE `name_of_movie` IN (SELECT `name_of_movie` FROM  `movie` WHERE `name_of_movie` = \"$temp\")");

      echo"<tr>";
      echo"<td>" . $stroka['name_of_movie'] . "</td>";
      echo"<td>" . $stroka['date_of_release'] . "</td>";
      echo"<td>" . $stroka['budget_of_movie'] . "</td>";
      echo"<td>" . $stroka['rating_of_movie'] . "</td>";
      echo"<td>" . $stroka['number_of_film_crew'] . "</td>";
      echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
      echo"<td>" .  res($result_movies_genres) . "</td>";
      echo"<td>" .  res($result_movies_duration) . "</td>";
      echo"</tr>";
     }
    break;

    case 'max_gonorars':
      $zapyt7_1 =  $mysqli->query("CREATE VIEW Help AS SELECT Actor_filmCrew.number_of_film_crew, SUM(Actor_filmCrew.actor_fee) AS SUM_FEE FROM Actor_filmCrew
GROUP BY Actor_filmCrew.number_of_film_crew");

    //Запит:
$result_movies = $mysqli->query("SELECT * FROM Movie WHERE Movie.Number_of_film_crew IN(
SELECT Help.number_of_film_crew
FROM Help
WHERE Help.SUM_FEE = (
SELECT MAX(SUM_FEE)
FROM Help))");

    while ($stroka = mysqli_fetch_array($result_movies)){
      $temp = $stroka['name_of_movie'];

      $result_movies_genres = $mysqli->query("SELECT `genre` FROM `genres` WHERE `id_movie_genre` IN (SELECT `id_movie_genre` FROM  `movie_genres` WHERE `name_of_movie` = \"$temp\")");

      $result_movies_duration = $mysqli->query("SELECT `duration_of_movie` FROM `movie_duration` WHERE `name_of_movie` IN (SELECT `name_of_movie` FROM  `movie` WHERE `name_of_movie` = \"$temp\")");

        echo"<tr>";
        echo"<td>" . $stroka['name_of_movie'] . "</td>";
        echo"<td>" . $stroka['date_of_release'] . "</td>";
        echo"<td>" . $stroka['budget_of_movie'] . "</td>";
        echo"<td>" . $stroka['rating_of_movie'] . "</td>";
        echo"<td>" . $stroka['number_of_film_crew'] . "</td>";
        echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
        echo"<td>" .  res($result_movies_genres) . "</td>";
        echo"<td>" .  res($result_movies_duration) . "</td>";
        echo"</tr>";
       }
      break;


      case 'detectives':
        $result_movies = $mysqli->query("SELECT * FROM `movie` WHERE `name_of_movie` IN (
          SELECT  `name_of_movie` FROM `movie_genres` WHERE `id_movie_genre` IN(
            SELECT `id_movie_genre` FROM `genres` WHERE `genre` = 'детектив'))");

      while ($stroka = mysqli_fetch_array($result_movies)){
        $temp = $stroka['name_of_movie'];

        $result_movies_genres = $mysqli->query("SELECT `genre` FROM `genres` WHERE `id_movie_genre` IN (SELECT `id_movie_genre` FROM  `movie_genres` WHERE `name_of_movie` = \"$temp\")");

        $result_movies_duration = $mysqli->query("SELECT `duration_of_movie` FROM `movie_duration` WHERE `name_of_movie` IN (SELECT `name_of_movie` FROM  `movie` WHERE `name_of_movie` = \"$temp\")");

          echo"<tr>";
          echo"<td>" . $stroka['name_of_movie'] . "</td>";
          echo"<td>" . $stroka['date_of_release'] . "</td>";
          echo"<td>" . $stroka['budget_of_movie'] . "</td>";
          echo"<td>" . $stroka['rating_of_movie'] . "</td>";
          echo"<td>" . $stroka['number_of_film_crew'] . "</td>";
          echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
          echo"<td>" .  res($result_movies_genres) . "</td>";
          echo"<td>" .  res($result_movies_duration) . "</td>";
          echo"</tr>";
         }
        break;

        case 'all_understudies':
          $result_movies =  $mysqli->query("SELECT *
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

        while ($stroka = mysqli_fetch_array($result_movies)){
          $temp = $stroka['name_of_movie'];

          $result_movies_genres = $mysqli->query("SELECT `genre` FROM `genres` WHERE `id_movie_genre` IN (SELECT `id_movie_genre` FROM  `movie_genres` WHERE `name_of_movie` = \"$temp\")");

          $result_movies_duration = $mysqli->query("SELECT `duration_of_movie` FROM `movie_duration` WHERE `name_of_movie` IN (SELECT `name_of_movie` FROM  `movie` WHERE `name_of_movie` = \"$temp\")");

            echo"<tr>";
            echo"<td>" . $stroka['name_of_movie'] . "</td>";
            echo"<td>" . $stroka['date_of_release'] . "</td>";
            echo"<td>" . $stroka['budget_of_movie'] . "</td>";
            echo"<td>" . $stroka['rating_of_movie'] . "</td>";
            echo"<td>" . $stroka['number_of_film_crew'] . "</td>";
            echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
            echo"<td>" .  res($result_movies_genres) . "</td>";
            echo"<td>" .  res($result_movies_duration) . "</td>";
            echo"</tr>";
           }
          break;

          case 'rating_4':
            $result_movies =  $mysqli->query("SELECT * FROM `movie` WHERE `rating_of_movie` = '4'");
          while ($stroka = mysqli_fetch_array($result_movies)){
            $temp = $stroka['name_of_movie'];

            $result_movies_genres = $mysqli->query("SELECT `genre` FROM `genres` WHERE `id_movie_genre` IN (SELECT `id_movie_genre` FROM  `movie_genres` WHERE `name_of_movie` = \"$temp\")");

            $result_movies_duration = $mysqli->query("SELECT `duration_of_movie` FROM `movie_duration` WHERE `name_of_movie` IN (SELECT `name_of_movie` FROM  `movie` WHERE `name_of_movie` = \"$temp\")");

              echo"<tr>";
              echo"<td>" . $stroka['name_of_movie'] . "</td>";
              echo"<td>" . $stroka['date_of_release'] . "</td>";
              echo"<td>" . $stroka['budget_of_movie'] . "</td>";
              echo"<td>" . $stroka['rating_of_movie'] . "</td>";
              echo"<td>" . $stroka['number_of_film_crew'] . "</td>";
              echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
              echo"<td>" .  res($result_movies_genres) . "</td>";
              echo"<td>" .  res($result_movies_duration) . "</td>";
              echo"</tr>";
             }
            break;

            case 'actors_rating_9_more':
              $result_movies =  $mysqli->query("SELECT  *
              FROM movie AS M1
              WHERE NOT EXISTS(
              SELECT *
              FROM actors
              WHERE rating_of_employee > 9 AND actor_id NOT IN (
              SELECT actor_id
              FROM actor_filmcrew
              WHERE number_of_film_crew = M1.number_of_film_crew))");
               while ($stroka = mysqli_fetch_array($result_movies)){
                $temp = $stroka['name_of_movie'];

                $result_movies_genres = $mysqli->query("SELECT `genre` FROM `genres` WHERE `id_movie_genre` IN (SELECT `id_movie_genre` FROM  `movie_genres` WHERE `name_of_movie` = \"$temp\")");

                $result_movies_duration = $mysqli->query("SELECT `duration_of_movie` FROM `movie_duration` WHERE `name_of_movie` IN (SELECT `name_of_movie` FROM  `movie` WHERE `name_of_movie` = \"$temp\")");

                  echo"<tr>";
                  echo"<td>" . $stroka['name_of_movie'] . "</td>";
                  echo"<td>" . $stroka['date_of_release'] . "</td>";
                  echo"<td>" . $stroka['budget_of_movie'] . "</td>";
                  echo"<td>" . $stroka['rating_of_movie'] . "</td>";
                  echo"<td>" . $stroka['number_of_film_crew'] . "</td>";
                  echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
                  echo"<td>" .  res($result_movies_genres) . "</td>";
                  echo"<td>" .  res($result_movies_duration) . "</td>";
                  echo"</tr>";
                 }
                break;
  }
}
?>
</table>
</div>
<div class="noprint">
<button onclick="window.print()">Друкувати</button>
</div>
</body>
</html>
