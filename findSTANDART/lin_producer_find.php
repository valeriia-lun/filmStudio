<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Головні монтажери</title>

<style type="text/css">
@media print {
  .noprint { display: none; }
}
</style>
</head>

<div>
<h1 align="center">Головні монтажери</h1>
</div>
<div class="noprint">
<select>
  <option>Найдешевший головний монтажер</option>
  <option>Найдорожчий головний монтажер</option>
  <option>Головний монтажер з найбльшим стажем</option>
</select>

<form>
  <button>Знайти</button>
</form>
</div>
<div>
<table border="1" width = "1000">
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Стаж</td>
<td>Працює з</td>
<td><div class = "noprint">Вибір</div></td>
</tr>

<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
 $result_others = $mysqli->query("SELECT * FROM `editor` WHERE `editor_id` IN(SELECT `editor_id` FROM `editor_crewedit` WHERE `is_head` = 1)");

//$mysqli->close();

while ($stroka = mysqli_fetch_array($result_others)){
    echo"<tr>";
    echo"<td>" . $stroka['editor_id'] . "</td>";
    echo"<td>" . $stroka['editor_name'] . "</td>";
    echo"<td>" . $stroka['editor_surname'] . "</td>";
    echo"<td>" . $stroka['editor_middle_name'] . "</td>";
    echo"<td>" . $stroka['editor_experience'] . "</td>";
    echo"<td>" . $stroka['editor_works_since'] . "</td>";
    echo "<td>"."<div class = \"noprint\">"."<form><button>Обрати</button></form>"."</div></td>";
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
