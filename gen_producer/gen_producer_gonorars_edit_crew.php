<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Призначення гонорарів</title>
</head>
<body>



<div>
<h1>Монтажери</h1>
<table border="1" >
<tr>
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Гонорар</td>
</tr>
<?php
/*ob_start();
include('gen_producer_choose.php');
$inc_data = ob_get_contents();
ob_end_clean();*/

$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");

$number = $_POST['num'];
echo "hello";
echo $number;

$result = $mysqli->query("SELECT *
 FROM `editor` WHERE `editor_id` IN (SELECT `editor_id` FROM `editor_crewedit` WHERE `number_of_edit_crew`  = $number)");
while ($stroka = mysqli_fetch_array($result)){
  $id_e = $stroka['editor_id'];
  $gonorars_result = $mysqli->query("SELECT editor_fee FROM editor_crewedit WHERE editor_id =  $id_e AND number_of_edit_crew = $number");
  $gonorars_res = mysqli_fetch_array($gonorars_result);
  $gonorars_use = $gonorars_res[0];

  echo"<form  action = \"gonorars_check.php\" method=\"post\"><tr>";
  echo "<input type=\"hidden\" value = \"" .$number . "\" name=\"number_of_editCrew\" >";
    echo"<td>" . $stroka['editor_id'] . "</td>";
    echo"<td>" . $stroka['editor_name'] . "</td>";
    echo"<td>" . $stroka['editor_surname'] . "</td>";
    echo"<td>" . $stroka['editor_middle_name'] . "</td>";
    echo"<td>" ."<input type=\"text\" onkeyup=\"lal(this)\" value = \"$gonorars_use\" name=\"gonorar4\">". "</td>";
    echo "<input type=\"hidden\" value = \"" . $stroka['editor_id'] . "\" name=\"editor_id\" >";
    echo"<td>" ."<input type=\"submit\" name=\"done4\"  value=\"Зберегти\"/>". "</td>";
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
