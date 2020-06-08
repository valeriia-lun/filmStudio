<!DOCTYPE html>
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

<div>
<table border="1" >
<tr>
<td>Номер групи монтажерів</td>
<td>Дата початку роботи групи монтажерів</td>
<td>Дата закінчення роботи групи монтажерів</td>
<td>Id голови групи монтажерів</td>
<td><div class = "noprint">Додати монтажерів</div></td>
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
  case 'finish_edit_crew':
    $result_edit_crews =  $mysqli->query("SELECT  * FROM edit_crew WHERE `date_finish_edit_crew` = '2020-06-19'");
//$mysqli->close();
while ($stroka = mysqli_fetch_array($result_edit_crews)){
    echo"<tr>";
    echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
    echo"<td>" . $stroka['date_start_edit_crew'] . "</td>";
    echo"<td>" . $stroka['date_finish_edit_crew'] . "</td>";
    echo"<td>" . $stroka['editor_crew_head_id'] . "</td>";
    echo "<td>"."<div  class = \"noprint\">"."<button value = \"" . $stroka['number_of_edit_crew'] . "\" name=\"number_of_edit_crew\">Додати</button>"."</div></td>";
    echo"</tr>";
   }
}}
?>

</table>
</div>
<div class="noprint">
<button onclick="window.print()">Друкувати</button>
</div>
</body>
</html>
