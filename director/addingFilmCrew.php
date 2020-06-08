<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
    <script>
          $(function() {
          $().datepicker();
          });
    </script>
</head>
<body>
<h1>Додати знімальну групу</h1>

<form action="" method="post">

<div>
  Дата початку роботи: <input type="date" name="date_start" maxlength="50" tabindex="2" required><br>
  Дата закінчення роботи: <input type="date" name="date_end" maxlength="50" tabindex="2" required><br>

</div>

<input type="submit" value="Додати" name="add"><br>

</form>
</body>

</html>


<?php

if (isset($_POST['add'])){
  $mysql = new mysqli('localhost','root','root','filmStudio');

  $max_id = $mysql->query("SELECT MAX(`number_of_film_crew`) FROM `film_crew`");
  $stroka = mysqli_fetch_array($max_id);
  $num = $stroka[0] + 1;

$dateStart = filter_var(trim($_POST['date_start']),FILTER_SANITIZE_STRING);
$dateEnd = filter_var(trim($_POST['date_end']),FILTER_SANITIZE_STRING);


$result = $mysql->query("INSERT INTO `film_crew` (`number_of_film_crew`, `date_start_crew`, `date_finish_film_crew`)
VALUES ('$num', '$dateStart', '$dateEnd')");

$mysql->close();

header('Location: /filmStudio/director/main.php');

}

 ?>
