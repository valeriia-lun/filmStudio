<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title></title>
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

<h1 align="center">Монтажери</h1>



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
<td>Обрати</td>
</tr>
<script>
  function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('editor_id[]')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>
<form action="rezhyser_check_edit.php" method="POST">
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
$number_of_editCrew = $_POST['number_of_edit_crew'];
echo "<input type=\"hidden\" value = \"" .$number_of_editCrew . "\" name=\"number_of_editCrewww\" >";
$start = $mysqli->query("SELECT `date_start_edit_crew` FROM `edit_crew` WHERE `number_of_edit_crew` = $number_of_editCrew");
$finish = $mysqli->query("SELECT `date_finish_edit_crew` FROM `edit_crew` WHERE `number_of_edit_crew` = $number_of_editCrew");
$date_start_this_edit_crew = mysqli_fetch_array($start); //arrays with 1 element
$date_finish_this_edit_crew = mysqli_fetch_array($finish);
$used_start = $date_start_this_edit_crew[0];
$used_finish = $date_finish_this_edit_crew[0];


$result_editors=$mysqli->query("SELECT * FROM editor WHERE editor_id NOT IN (SELECT DISTINCT editor_id FROM editor_crewedit WHERE number_of_edit_crew
 IN(SELECT number_of_edit_crew FROM edit_crew WHERE ((date_finish_edit_crew BETWEEN '$used_start' AND '$used_finish') OR
(date_start_edit_crew BETWEEN  '$used_start' AND  '$used_finish'))))");
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
    echo"<td>" ."<input type=\"checkbox\"  onclick=\"onlyOne(this)\" value = \"" . $stroka['editor_id'] . "\" name=\"editor_id[]\" >";
    echo"</tr>";
   }
?>

</table>
<button name="done">Додати головного монтажера</button></form>
</body>
</html>
