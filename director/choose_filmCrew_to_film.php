<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Обрати знімальну групу</title>
</head>

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

<table border="1" >
<tr>
<td>Номер знімальної групи</td>
<td>Дата початку роботи знімальної групи</td>
<td>Дата закінчення роботи знімальної групи</td>
<td>Вибір</td>

</tr>
<script>
  function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check1')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>
<form action="director_check.php" method="POST">
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
 $result_film_crews = $mysqli->query("SELECT * FROM `film_crew`");

 $name_of_movie = $_POST['name_of_movie'];
 echo "<input type=\"hidden\" value = \"" .$name_of_movie . "\" name=\"name_of_moviee\" >";
//$mysqli->close();
echo  $name_of_movie;
while ($stroka = mysqli_fetch_array($result_film_crews)){

  echo "<div>";
    echo"<tr>";
    echo"<td>" . $stroka['number_of_film_crew'] . "</td>";
    echo"<td>" . $stroka['date_start_crew'] . "</td>";
    echo"<td>" . $stroka['date_finish_film_crew'] . "</td>";
    echo"<td>" ."<input type=\"checkbox\" name=\"check1\" value = \"" . $stroka['number_of_film_crew'] . "\" onclick=\"onlyOne(this)\">";
    echo"</tr>";
    echo "</div>";
   }

?>

</table>
</table>
<button  name="done">Обрати</button></form>
</body>
</body>
</html>
