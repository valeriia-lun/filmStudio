﻿<!DOCTYPE html>
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
<td>Чи є головою?</td>
<td><div class = "noprint">Зміна інформації про монтажера</div></td>
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
  $entering_values = $_POST['entering_values'];

if (isset($_POST['done'])){
  $mysqli = new mysqli("localhost","root","","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


switch($selecting){
  case 'khanenko':
    $result_editors = $mysqli->query("SELECT * FROM `editor` WHERE `editor_surname` = 'Ханенко'");
    while ($stroka = mysqli_fetch_array($result_editors)){
      $temp = $stroka['editor_id'];

      $result_editors_phones = $mysqli->query("SELECT `editor_phone_number` FROM `editor_phones` WHERE `editor_id` IN (SELECT `editor_id` FROM  `editor` WHERE `editor_id` = $temp)");

      $result_editors_contacts_rel = $mysqli->query("SELECT `editor_relatives_phone_numbers` FROM `editor_contacts_of_relatives` WHERE `editor_id` IN (SELECT `editor_id` FROM  `editor` WHERE `editor_id` = $temp)");

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
        echo"<td>" .  res($result_editors_phones) . "</td>";
        echo"<td>" .  res($result_editors_contacts_rel) . "</td>";
        echo"<td>" ."<form><input type=\"checkbox\" ></form>";

                echo"<form action=\"editingEditor.php\" method=\"post\">";

            echo "<input type=\"hidden\" value = \"" .$stroka['editor_id'] . "\" name=\"editor_id\" >";
                echo "<td>"."<div class = \"noprint\">"."<button name=\"editBtn\">Змінити</button>"."</div></td></form>";
                    echo"</tr>";
       }
  break;
}}
?>

</table>
</div>
<div class="noprint">
<button onclick="window.print()">Друкувати</button>
</div>
</body>
</html>
