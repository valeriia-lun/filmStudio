<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Монтажери</title>
</head>
<style type="text/css">
@media print {
  .noprint { display: none; }
}
</style>
<body>
<div>
<h1 align="center">Монтажери</h1>
</div>
<div class="noprint">
<form action="find_editor_zapyty.php" method="post">
<select name="selecting">
  <option value="khanenko">Монтажер Ханенко</option>
</select>

<input type="text" name="entering_values">
  <button name="done">Знайти</button>

</form>
</div>
<div>
<table border="1" >
<tr>
<td>Id </td>
<td>Ім'я</td>
<td>Прізвище </td>
<td>По-батькові </td>
<td>Зарплата </td>
<td>Місце проживання</td>
<td>Працює з</td>
<td>Працює до</td>
<td>Стаж</td>
<td>Дата народження</td>
<td>Ел.пошта</td>
<td>Телефон</td>
<td>Контакти близьких</td>
</tr>

<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result_editors = $mysqli->query("SELECT * FROM `editor`");

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
//$mysqli->close();

while ($stroka = mysqli_fetch_array($result_editors)){
  $temp = $stroka['editor_id'];

  $result_phones = $mysqli->query("SELECT `editor_phone_number` FROM `editor_phones` WHERE `editor_id` IN (SELECT `editor_id` FROM  `editor` WHERE `editor_id` = $temp)");
  $result_contacts_rel = $mysqli->query("SELECT `editor_relatives_phone_numbers` FROM `editor_contacts_of_relatives` WHERE `editor_id` IN (SELECT `editor_id` FROM  `editor` WHERE `editor_id` = $temp)");

    echo"<tr>";
    echo"<td>" . $stroka['editor_id'] . "</td>";
    echo"<td>" . $stroka['editor_name'] . "</td>";
    echo"<td>" . $stroka['editor_surname'] . "</td>";
    echo"<td>" . $stroka['editor_middle_name'] . "</td>";
    echo"<td>" . $stroka['editor_salary'] . "</td>";
    echo"<td>" . $stroka['editor_home_address'] . "</td>";
    echo"<td>" . $stroka['editor_works_since'] . "</td>";
    echo"<td>" . $stroka['editor_works_until'] . "</td>";
    echo"<td>" . $stroka['editor_experience'] . "</td>";
    echo"<td>" . $stroka['editor_date_of_birth'] . "</td>";
    echo"<td>" . $stroka['editor_e-mail'] . "</td>";

    echo"<td>" .  res($result_phones) . "</td>";
    echo"<td>" .  res($result_contacts_rel) . "</td>";
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
