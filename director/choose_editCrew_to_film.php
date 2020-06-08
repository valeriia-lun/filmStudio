<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Обрати групу монтажерів</title>
</head>
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
<td>Id голови групи монтажерів</td>
<td>Вибір</td>
</tr>

<script>
  function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('check2')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>
<form action="director_check.php" method="POST">
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result_edit_crews = $mysqli->query("SELECT * FROM `edit_crew`");
//$mysqli->close();
$name_of_movie = $_POST['name_of_movie'];
echo "<input type=\"hidden\" value = \"" .$name_of_movie . "\" name=\"name_of_moviee\" >";
while ($stroka = mysqli_fetch_array($result_edit_crews)){
    echo"<tr>";
    echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
    echo"<td>" . $stroka['date_start_edit_crew'] . "</td>";
    echo"<td>" . $stroka['date_finish_edit_crew'] . "</td>";
    echo"<td>" . $stroka['editor_crew_head_id'] . "</td>";
    echo"<td>" ."<input type=\"checkbox\" name=\"check2\"  value = \"" . $stroka['number_of_edit_crew'] . "\" onclick=\"onlyOne(this)\" >";
    echo"</tr>";
   }

?>

</table>
<form><button name="done">Обрати</button></form>
</body>
</html>
