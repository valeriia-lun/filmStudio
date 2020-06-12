<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Монтажери</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="..\style.css">
</head>
<style>
  #button_find{
    right: 20px;
    left: 2200px;
    top: 200px;
    bottom: 1500px;
  }
</style>
<body class="text-center body3">

<nav class="navbar navbar-expand-lg navbar-light bg-light style=width=100%;">
  <a class="navbar-brand" href="..\index.php">Вибір посади</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Головна<span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <form class=" my-2 my-lg-0">
      <label class=" mr-sm-2" >Головний монтажер</label>
    </form>
  </div>
</nav>
<h1 align="center" class="colorForAllText">Інформація про групу монтажерів</h1></br>
<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td>Номер групи монтажерів</td>
<td>Дата початку роботи групи монтажерів</td>
<td>Дата закінчення роботи групи монтажерів</td>
<td>Назва фільму</td>
</tr></thead>

<?php 
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$number_of_editCrew = $_POST['number_of_edit_crew'];
$info = $mysqli->query("SELECT * FROM `edit_crew` WHERE `number_of_edit_crew` = $number_of_editCrew");
$infoFilm = $mysqli->query("SELECT * FROM `movie` WHERE `number_of_edit_crew` = $number_of_editCrew");
$stroka2 = mysqli_fetch_array($infoFilm);

while ($stroka = mysqli_fetch_array($info)){
 
    echo"<tr>";
    echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
    echo"<td>" . $stroka['date_start_edit_crew'] . "</td>";
    echo"<td>" . $stroka['date_finish_edit_crew'] . "</td>";
    echo"<td>" . $stroka2['name_of_movie'] . "</td>";
    echo"</tr>";

}
?>

</table></div>
<h1 align="center" class="colorForAllText">Монтажери</h1></br>




<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td>Id </td>
<td>Ім'я</td>
<td>Прізвище </td>
<td>По-батькові </td>
<td>Зарплата </td>
<td>Місце проживання</td>
<td>Працює з</td>
<td>Працює до</td>
<td>Стаж</td>
<td>Дата народження</td>
<td>Ел.пошта</td>
<td>Телефон</td>
<td>Контакти близьких</td>
<td>Чи є головою?</td>
<td>Обрати</td>
</tr></thead>
<form action="gen_montazher_check.php" method="POST">
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
//$result_editors = $mysqli->query("SELECT * FROM `editor`");
//$mysqli->close();

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

$number_of_editCrew = $_POST['number_of_edit_crew'];
echo "<input type=\"hidden\" value = \"" .$number_of_editCrew . "\" name=\"number_of_editCrewww\" >";

$start = $mysqli->query("SELECT `date_start_edit_crew` FROM `edit_crew` WHERE `number_of_edit_crew` = $number_of_editCrew");
$finish = $mysqli->query("SELECT `date_finish_edit_crew` FROM `edit_crew` WHERE `number_of_edit_crew` = $number_of_editCrew");
$date_start_this_edit_crew = mysqli_fetch_array($start); //arrays with 1 element
$date_finish_this_edit_crew = mysqli_fetch_array($finish);
$used_start = $date_start_this_edit_crew[0];
$used_finish = $date_finish_this_edit_crew[0];


$result_editors=$mysqli->query("SELECT * FROM editor WHERE editor_id NOT IN (SELECT DISTINCT editor_id FROM editor_crewedit WHERE number_of_edit_crew
 IN(SELECT number_of_edit_crew FROM edit_crew WHERE ((date_finish_edit_crew BETWEEN '$used_start' AND '$used_finish') OR
(date_start_edit_crew BETWEEN  '$used_start' AND  '$used_finish')))) OR  editor_id IN (SELECT editor_id FROM `editor_crewedit` WHERE number_of_edit_crew = $number_of_editCrew)  ");


while ($stroka = mysqli_fetch_array($result_editors)){
  $temp = $stroka['editor_id'];

  $result_editors_phones = $mysqli->query("SELECT `editor_phone_number` FROM `editor_phones` WHERE `editor_id` IN (SELECT `editor_id` FROM  `editor` WHERE `editor_id` = $temp)");
  $result_editors_contacts_rel = $mysqli->query("SELECT `editor_relatives_phone_numbers` FROM `editor_contacts_of_relatives` WHERE `editor_id` IN (SELECT `editor_id` FROM  `editor` WHERE `editor_id` = $temp)");

    echo"<tr>";
    echo"<td>" . $stroka['editor_id'] . "</td>";
    echo"<td>" . $stroka['editor_name'] . "</td>";
    echo"<td>" . $stroka['editor_surname'] . "</td>";
    echo"<td>" . $stroka['editor_middle_name'] . "</td>";
    echo"<td>" . $stroka['editor_salary'] . "</td>";
    echo"<td>" . $stroka['editor_home_address'] . "</td>";
    echo"<td>" . $stroka['editor_works_since'] . "</td>";
    echo"<td>" . $stroka['editor_works_until'] . "</td>";
    echo"<td>" . $stroka['editor_experience'] . "</td>";
    echo"<td>" . $stroka['editor_date_of_birth'] . "</td>";
    echo"<td>" . $stroka['editor_e-mail'] . "</td>";

    echo"<td>" .  res($result_editors_phones) . "</td>";
    echo"<td>" .  res($result_editors_contacts_rel) . "</td>";



    echo"<td>" ."<input type=\"checkbox\" onclick=\"document.getElementById('chk1').checked = this.checked;\"  class=\"form-control\" onclick=\"onlyOne(this)\" name=\"is_head\" value=\"Yes\">";

    $res = $mysqli->query("SELECT * FROM `editor_crewedit` WHERE `number_of_edit_crew` = $number_of_editCrew AND `editor_id` = $temp");
   //  echo "string";
   //  if ($res) {
   //     echo "Success!";
   //   }
   // else {
   //      echo "Error! $mysqli->error <br>";
   //    }
    //echo $re;
    $re = mysqli_fetch_array($res);
    // print_r($re);
    // echo $re[0];
    if($re[0] != ""){
      echo"<td>" ."<input type=\"checkbox\" checked id=\"chk1\" class=\"form-control\" value = \"" . $stroka['editor_id'] . "\" name=\"editor_id[]\" >";

    }else{
      echo"<td>" ."<input type=\"checkbox\" id=\"chk1\" class=\"form-control\" value = \"" . $stroka['editor_id'] . "\" name=\"editor_id[]\" >";
    }



    echo"</tr>";
   }
?>

</table>
</div>
<div class="btn">
<button  class ="button btn btn-danger" name="done">Додати обраних співробітників</button>
  </div>
</form>
<script>
  function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('is_head')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>
</body>
</html>
