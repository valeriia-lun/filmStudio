﻿<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Групи монтажерів</title>
</head>

<style type="text/css">
@media print {
  .noprint { display: none; }
}
</style>
<body>
<div>
<h1 align="center">Групи монтажерів</h1>
</div>
<div class="noprint">
<form action="find_editCrew_zapyty.php" method="post">
<select name="selecting">
  <option value="finish_edit_crew">Групи монтажерів, які закінчили свою роботу 19.06.2020</option>
</select>
  <button name="done">Знайти</button>
</form>
</div>
<div>
<table border="1" >
<tr>
<td>Номер групи монтажерів</td>
<td>Дата початку роботи групи монтажерів</td>
<td>Дата закінчення роботи групи монтажерів</td>
<td>Id голови знімальної групи</td>
<td><div class = "noprint">Додати головного монтажера</div></td>
<td><div class = "noprint">Змінити інформацію</div></td>


</tr>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result_edit_crews = $mysqli->query("SELECT * FROM `edit_crew`");
//$mysqli->close();
while ($stroka = mysqli_fetch_array($result_edit_crews)){
    echo"<tr>";
    echo"<form action=\"add_main_editor_to_edit_crew.php\" method=\"post\">";

    echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
    echo"<td>" . $stroka['date_start_edit_crew'] . "</td>";
    echo"<td>" . $stroka['date_finish_edit_crew'] . "</td>";
    echo"<td>" . $stroka['editor_crew_head_id'] . "</td>";
    echo "<td>"."<div  class = \"noprint\">"."<button value = \"" . $stroka['number_of_edit_crew'] . "\" name=\"number_of_edit_crew\">Додати</button>"."</div></td></form>";
    echo"<form action=\"editingEditCrew.php\" method=\"post\">";

echo "<input type=\"hidden\" value = \"" .$stroka['number_of_edit_crew'] . "\" name=\"number_of_edit_crew\" >";
echo "<td>"."<div class = \"noprint\">"."<button name=\"editBtn\">Змінити</button>"."</div></td></form>";


    echo"</tr>";
   }

?>

</table>
</div>
<div class="noprint">
<button onclick="window.print()">Друкувати</button></form>
</div>
</body>
</html>
