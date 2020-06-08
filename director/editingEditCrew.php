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
<h1>Змінити групу монтажерів</h1>

<form action="" method="post">

<div>
  Номер групи монтажерів:  <?php
  if (isset($_POST['editBtn'])){
    $numb = filter_var(trim($_POST['number_of_edit_crew']),FILTER_SANITIZE_STRING);

  }

$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `number_of_edit_crew` FROM `edit_crew` WHERE `number_of_edit_crew` = $numb");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"number_of_edit_crew\" value=\"$res[0]\" required>";
   ?><br>

  Дата початку роботи: <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `date_start_edit_crew` FROM `edit_crew` WHERE `number_of_edit_crew` = $numb");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\" name=\"date_start\" value=\"$res[0]\" required>";
    ?><br>

  Дата закінчення роботи: <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `date_finish_edit_crew` FROM `edit_crew` WHERE `number_of_edit_crew` = $numb");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\" name=\"date_finish\" value=\"$res[0]\" required>";
    ?><br>


    Голова: <?php
    $mysql = new mysqli("localhost","root","root","filmstudio");
    $mysql->query("SET NAMES 'utf8'");
    $result = $mysql->query("SELECT `editor_crew_head_id` FROM `edit_crew` WHERE `number_of_edit_crew` = $numb");

    $res = mysqli_fetch_array($result);

    echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"head\" value=\"$res[0]\" required>";
      ?><br>
</div>

<input type="submit" value="Змінити" name="edit"><br>

</form>
</body>

</html>



<?php
if (isset($_POST['edit'])){

$mysql = new mysqli('localhost','root','root','filmStudio');

$number = filter_var(trim($_POST['number_of_edit_crew']),FILTER_SANITIZE_STRING);
$dateStart = filter_var(trim($_POST['date_start']),FILTER_SANITIZE_STRING);
$dateFinish = filter_var(trim($_POST['date_finish']),FILTER_SANITIZE_STRING);
$head = filter_var(trim($_POST['head']),FILTER_SANITIZE_STRING);



$mysql = new mysqli('localhost','root','root','filmStudio');
$ans = $mysql->query("UPDATE `edit_crew` SET `number_of_edit_crew` = '$number', `date_start_edit_crew` = '$dateStart', `date_finish_edit_crew`= '$dateFinish' ,`editor_crew_head_id`= '$head' WHERE `number_of_film_crew` = '$numb' ");
if ($ans) {
 echo "Success!";
}
else {
  echo "Error! $mysql->error <br>";
}

$mysql->close();

header('Location: /filmStudio/director/main.php');

}

 ?>
