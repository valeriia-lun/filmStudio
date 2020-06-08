<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Знімальні групи</title>
</head>
<style type="text/css">
@media print {
  .noprint { display: none; }
}

</style>
<body>
<div>
<h1 align="center">Знімальні групи</h1>
</div>
<div class="noprint">
<form action="find_film_crew_zapyty.php" method="post">
<select name="selecting">
  <option value="finish_film_crew">Знімальні групи, які закінчили свою роботу 15.12.2019</option>
</select>
  <button name="done">Знайти</button>
</form>
</div>

<div>
<table border="1" >
<tr>
<td>Номер знімальної групи</td>
<td>Дата початку роботи знімальної групи</td>
<td>Дата закінчення роботи знімальної групи</td>
<td><div class = "noprint">Додати акторів та дублерів</div></td>
</tr>

<form action = "add_others_to_film_crew.php" method="post">
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
 $result_film_crews = $mysqli->query("SELECT * FROM `film_crew`");

//$mysqli->close();

while ($stroka = mysqli_fetch_array($result_film_crews)){

  //$number_of_film_crew = $stroka['number_of_film_crew'];
  //$_SESSION['number_of_film_crew'] = $number_of_film_crew;
    echo"<tr>";
    echo"<td name=\"number_of_film_crew\">" . $stroka['number_of_film_crew'] . "</td>";
    echo"<td>" . $stroka['date_start_crew'] . "</td>";
    echo"<td>" . $stroka['date_finish_film_crew'] . "</td>";
    echo "<td>"."<div  class = \"noprint\">"."<button value = \"" . $stroka['number_of_film_crew'] . "\" name=\"number_of_film_crew\">Додати</button>"."</div></td>";
    echo"</tr>";
   }
?>

</table>
</div>
<div class="noprint">
<button onclick="window.print()">Друкувати</button>
</form>
</div>
</body>
</html>
