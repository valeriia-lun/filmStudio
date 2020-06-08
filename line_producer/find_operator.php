<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Знайти оператора</title>
</head>

<style type="text/css">
@media print {
  .noprint { display: none; }
}
</style>
<body>
<div>
<h1 align="center">Оператори</h1>
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
<td><div class = "noprint">Зміна інформації</div></td>
</tr>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
 $result_others = $mysqli->query("SELECT * FROM `others` WHERE `name_of_position`= 'оператор'");

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
    echo"<form action=\"editingStaffFilmCrew.php\" method=\"post\">";

echo "<input type=\"hidden\" value = \"" .$stroka['others_id'] . "\" name=\"others_id\" >";
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
