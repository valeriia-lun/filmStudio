<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Актори</title>
</head>
<style type="text/css">
@media print {
  .noprint { display: none; }
}
</style>
<body>
<div>

<h1 align="center">Актори</h1>
</div>
<div class="noprint">
<form action="find_actors_zapyty.php" method="post">
<select name="selecting">
  <option value="max_experience">Актори з найбільшим стажем</option>
  <option value="female">Актори жіночого роду</option>
  <option value="salary_20000_more">Актори із зарплатнею < 20 000 грн</option>
  <option value="blond">Актори блондини</option>
  <option value="movie_zoloto">Актори, що знялися в фільмі 'Золото'</option>
  <option value="entered_shoe_size">Актори із введеним розміром взуття</option>
  <option value="entered_shoe_size">Найдорожчі актори</option>
</select>
<script>
function lal(el) {
  if (el.value.match( /[^0-9]/ ) ) {
        alert( "Неправильний формат числа! \nМожна використовувати тільки цифри" );
        el.value = el.value.replace( /[^0-9]/ , "" )
    }
}
</script>
<input type="text" onkeyup="lal(this)" name="entering_values">
  <button name="done">Знайти</button>
</form>
</div>
<div>
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
<td><div class = "noprint">Зміна інформації про актора</div></td>
</tr>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
 $result_actors = $mysqli->query("SELECT * FROM `actors`");

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
  $temp = $stroka['actor_id'];


  $result_photos = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id` IN (SELECT `actor_id` FROM  `actors` WHERE `actor_id` = $temp)");
  $result_phones = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id` IN (SELECT `actor_id` FROM  `actors` WHERE `actor_id` = $temp)");
  $result_contacts_rel = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id` IN (SELECT `actor_id` FROM  `actors` WHERE `actor_id` = $temp)");
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
    echo"<form action=\"editingActor.php\" method=\"post\">";

echo "<input type=\"hidden\" value = \"" .$stroka['actor_id'] . "\" name=\"actor_id\" >";
    echo "<td>"."<div class = \"noprint\">"."<button name=\"editBtn\">Змінити</button>"."</div></td></form>";    echo"</tr>";
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
