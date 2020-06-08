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

<div>
<table border="1" >
<tr>
<td>Номер знімальної групи</td>
<td>Дата початку роботи знімальної групи</td>
<td>Дата закінчення роботи знімальної групи</td>
<td><div class = "noprint">Змінити інформацію</div></td>
<td><div class = "noprint">Додати сценариста і лінійного продюсера</div></td>
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
  case 'finish_film_crew':
    $result_film_crews =  $mysqli->query("SELECT  * FROM film_crew WHERE `date_finish_film_crew` = '2019-12-15'");

    while ($stroka = mysqli_fetch_array($result_film_crews)){
        echo"<tr>";
        echo"<form action=\"add_others_to_film_crew.php\" method=\"post\">";

        echo"<td>" . $stroka['number_of_film_crew'] . "</td>";
        echo"<td>" . $stroka['date_start_crew'] . "</td>";
        echo"<td>" . $stroka['date_finish_film_crew'] . "</td>";

        echo "<td>"."<div  class = \"noprint\">"."<button value = \"" . $stroka['number_of_film_crew'] . "\" name=\"number_of_film_crew\">Додати</button>"."</div></td></form>";

            echo"<form action=\"editingFilmCrew.php\" method=\"post\">";

        echo "<input type=\"hidden\" value = \"" .$stroka['number_of_film_crew'] . "\" name=\"number_of_film_crew\" >";
            echo "<td>"."<div class = \"noprint\">"."<button name=\"editBtn\">Змінити</button>"."</div></td></form>";
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
