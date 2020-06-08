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
<form action="find_movie_zapyty.php" method="post">
<select name="selecting">
  <option value="max_rating">Фільми з найбільшим рейтингом</option>
  <option value="max_gonorars">Фільми, які витратили найбільше грошей на гонорари акторам</option>
  <option value="detectives">Фільми-детективи</option>
  <option value="all_understudies">Фільми, в яких брали участь всі дублери кіностудії</option>
  <option value="rating_4">Фільми з рейтингом 4</option>
  <option value="actors_rating_9_more">Фільми до складу яких входять актори з рейтингом 9+</option>
</select>

<input type="text" name="entering_values">
  <button name="done">Знайти</button>

</form>
</div>

<div>
<table border="1" >
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
$result_movies = $mysqli->query("SELECT * FROM `movie`");
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

?>


</table>
</div>
<div class="noprint">
<button onclick="window.print()">Друкувати</button>
</div>
</body>
</html>
