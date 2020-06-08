<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Призначення гонорарів</title>
</head>
<body>

<h1>Актори</h1>
<table border="1" >
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Гонорар</td>
<td>Призначення</td>
</tr>


<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$number = $_POST['numb'];
//echo "hello";
//echo $number;

//$count = 0;
//$id;
$result = $mysqli->query("SELECT * FROM `actors` WHERE `actor_id` IN (SELECT `actor_id` FROM `actor_filmcrew` WHERE `number_of_film_crew` = $number)");
while ($stroka = mysqli_fetch_array($result)){
  $id_a = $stroka['actor_id'];
  $gonorars_result = $mysqli->query("SELECT actor_fee FROM actor_filmcrew WHERE actor_id =  $id_a AND number_of_film_crew = $number");
  $gonorars_res = mysqli_fetch_array($gonorars_result);
  $gonorars_use = $gonorars_res[0];
    echo"<form action = \"gonorars_check.php\" method=\"post\"><tr>";
    echo "<input type=\"hidden\" value = \"" .$number . "\" name=\"number_of_filmCrew\" >";
    echo"<td>" . $stroka['actor_id'] . "</td>";
    echo"<td>" . $stroka['actor_name'] . "</td>";
    echo"<td>" . $stroka['actor_surname'] . "</td>";
    echo"<td>" . $stroka['actor_middle_name'] . "</td>";
    echo"<td>" ."<input type=\"text\" onkeyup=\"lal(this)\" value = \"$gonorars_use\" name=\"gonorar\"/>". "</td>";
    echo "<input type=\"hidden\" value = \"" . $stroka['actor_id'] . "\" name=\"actor_id\" >";
    echo"<td>" ."<input type=\"submit\" name=\"done\"  value=\"Зберегти\"/>". "</td>";
    echo"</tr></form>";
   }
?>
</table>




<div>
<h1>Дублери</h1>
<table border="1" >
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Гонорар</td>
<td>Призначення</td>
</tr>

<?php

$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");

$number = $_POST['numb'];
//echo "hello";
//echo $number;

$result = $mysqli->query("SELECT *
 FROM `understudies` WHERE `understudy_id` IN (SELECT `understudy_id` FROM `understudies_filmcrew` WHERE `number_of_film_crew`  = $number)");
while ($stroka = mysqli_fetch_array($result)){

  $id_u = $stroka['understudy_id'];
  $gonorars_result = $mysqli->query("SELECT understudy_fee FROM understudies_filmcrew WHERE understudy_id =  $id_u AND number_of_film_crew = $number");
  $gonorars_res = mysqli_fetch_array($gonorars_result);
  $gonorars_use = $gonorars_res[0];

    echo"<form  action = \"gonorars_check.php\" method=\"post\"><tr>";
    echo "<input type=\"hidden\" value = \"" .$number . "\" name=\"number_of_filmCreww\" >";
    echo"<td>" . $stroka['understudy_id'] . "</td>";
    echo"<td>" . $stroka['understudy_name'] . "</td>";
    echo"<td>" . $stroka['understudy_surname'] . "</td>";
    echo"<td>" . $stroka['understudy_middle_name'] . "</td>";
    echo"<td>" ."<input type=\"text\" onkeyup=\"lal(this)\" value = \"$gonorars_use\" name=\"gonorar2\">". "</td>";
    echo "<input type=\"hidden\" value = \"" . $stroka['understudy_id'] . "\" name=\"understudy_id\" >";
    echo"<td>" ."<input type=\"submit\" name=\"done2\"  value=\"Зберегти\"/>". "</td>";
    echo"</tr></form>";
   }

?>
</table>
</div>


<div>
<h1>Інші співробітники</h1>
<table border="1" >
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Професія</td>
<td>Гонорар</td>
<td>Призначення</td>
</tr>
<?php

$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");

$number = $_POST['numb'];
//echo "hello";
//echo $number;
$result = $mysqli->query("SELECT *
 FROM `others` WHERE `others_id` IN (SELECT `others_id` FROM `others_filmcrew` WHERE `number_of_film_crew`  = $number)");
while ($stroka = mysqli_fetch_array($result)){
  $id_o = $stroka['others_id'];
  $gonorars_result = $mysqli->query("SELECT others_fee FROM others_filmcrew WHERE others_id =  $id_o AND number_of_film_crew = $number");
  $gonorars_res = mysqli_fetch_array($gonorars_result);
  $gonorars_use = $gonorars_res[0];
  echo"<form  action = \"gonorars_check.php\" method=\"post\"><tr>";
  echo "<input type=\"hidden\" value = \"" .$number . "\" name=\"number_of_filmCrewww\" >";
    echo"<td>" . $stroka['others_id'] . "</td>";
    echo"<td>" . $stroka['others_name'] . "</td>";
    echo"<td>" . $stroka['others_surname'] . "</td>";
    echo"<td>" . $stroka['others_middle_name'] . "</td>";
    echo"<td>" . $stroka['name_of_position'] . "</td>";
    echo"<td>" ."<input type=\"text\" onkeyup=\"lal(this)\" value = \"$gonorars_use\" name=\"gonorar3\">". "</td>";
    echo "<input type=\"hidden\" value = \"" . $stroka['others_id'] . "\" name=\"others_id\" >";
    echo"<td>" ."<input type=\"submit\" name=\"done3\"  value=\"Зберегти\"/>". "</td>";
    echo"</tr></form>";
   }

?>
</table>


</div>



<?php

/*if(isset($_POST["done"])){
if(empty($_POST["gonorar1"]) || empty($_POST["gonorar2"]) || empty($_POST["gonorar3"]) || empty($_POST["gonorar4"]))
{
  echo '<script language="javascript">';
  echo 'alert("Всі поля мають бути заповнені!")';
  echo '</script>';
}

}*/
?>

<script>
function lal(el) {
  if (el.value.match( /[^0-9]/ ) ) {
        alert( "Неправильний формат числа! \nМожна використовувати тільки цифри" );
        el.value = el.value.replace( /[^0-9]/ , "" )
    }
}
</script>
</body>
</html>
