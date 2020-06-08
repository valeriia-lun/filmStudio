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
<h1>Додати групу монтажерів</h1>



<div>
  <form action="" method="post">
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

  $max_id = $mysql->query("SELECT MAX(`number_of_edit_crew`) FROM `edit_crew`");
  $stroka = mysqli_fetch_array($max_id);
  $num = $stroka[0] + 1;

  $dateStart = filter_var(trim($_POST['date_start']),FILTER_SANITIZE_STRING);
  $dateEnd = filter_var(trim($_POST['date_end']),FILTER_SANITIZE_STRING);


  $success = $mysql->query("INSERT INTO `edit_crew` (`number_of_edit_crew`, `date_start_edit_crew`, `date_finish_edit_crew`)
  VALUES ('$num', '$dateStart', '$dateEnd')");

  $mysql->close();
  header('Location: /filmStudio/director/main.php');



}

 ?>
