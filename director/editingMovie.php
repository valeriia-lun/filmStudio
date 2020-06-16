
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
    $(document).ready(function(){
        var maxFieldDur = 10; //Input fields increment limitation
        var addButtonDur = $('.add_button_Dur'); //Add button selector
        var wrapperDur = $('.field_wrapper_Dur'); //Input field wrapper
        var fieldHTMLDur = '<div><div class=\" container col-5\"><input type="text" name="field_name_Dur[]" class= "form-control" value=""/><a href="javascript:void(0);" class="remove_button_Dur"><img src="../img/delete_icon.png" width="20" height="20"/></a></div></div>'; //New input field html
        var xDur = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButtonDur).click(function(){
            //Check maximum number of input fields
            if(xDur < maxFieldDur){
                xDur++; //Increment field counter
                $(wrapperDur).append(fieldHTMLDur); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapperDur).on('click', '.remove_button_Dur', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            xDur--; //Decrement field counter
        });
          });


          var maxFieldGenre = 10; //Input fields increment limitation
          var addButtonGenre = $('.add_button_Skills'); //Add button selector
          var wrapperGenre = $('.field_wrapper_Skills'); //Input field wrapper
          var fieldHTMLGenre = '<div><select  class= "form-control" name="field_name_Genre[]"><option value="1" selected>Бойовик</option><option value="2">Драма</option><option value="3">Триллер</option><option value="4">Жахи</option><option value="5">Детектив</option><option value="6">Комедія</option><option value="7">Вестерн</option><option value="8">Трагедія</option><option value="9">Документальний</option><option value="10">Історичний</option></select><a href="javascript:void(0);" class="remove_button_Genre"><img src="../img/delete_icon.png" width="20" height="20"/></a></div>'; //New input field html
          var xGenre = 1; //Initial field counter is 1

          //Once add button is clicked
          $(addButtonGenre).click(function(){
              //Check maximum number of input fields
              if(xGenre < maxFieldGenre){
                  xGenre++; //Increment field counter
                  $(wrapperGenre).append(fieldHTMLGenre); //Add field html
              }
          });

          //Once remove button is clicked
          $(wrapperGenre).on('click', '.remove_button_Genre', function(e){
              e.preventDefault();
              $(this).parent('div').remove(); //Remove field html
              xGenre--; //Decrement field counter
          });

// $(function() {
//           $().datepicker();
//           });
    </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="..\style.css">
<script>
function lal(el) {
  if (el.value.match( /[^0-9]/ ) ) {
        alert( "Неправильний формат числа! \nМожна використовувати тільки цифри" );
        el.value = el.value.replace( /[^0-9]/ , "" )
    }
}

</script>
</head>
<body class="text-center body3">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="..\index.php">Вибір посади</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Головна<span class="sr-only"></span></a>
      </li>
    </ul>

    <form class=" my-2 my-lg-0">
      <label class=" mr-sm-2" >Режисер</label>
    </form>
  </div>
</nav>

<br><br><h1 class="colorForAllText">Змінити фільм</h1>
<small>Поля, позначені </small><small style="color:red;">*</small><small> - обов'язкові.</small></br></br>



  <form action="" method="post">
  <div class="row text-center" style="margin:10px;">
    <div class=" container col-4" >  <label class="colorText">Назва:  </label><label style="color:red;">*</label>
  <?php


  //if (isset($_POST['editBtn'])){
    $name = filter_var(trim($_POST['name_of_movie']),FILTER_SANITIZE_STRING);
    // echo $name;
    // echo "string";
  //  $name = "anuka";
  //}
  //print_r( $name);
  echo "<input type=\"hidden\" value = \"" .$name . "\" name=\"name_of_movie\" >";

echo "<input type= \"text\" maxlength=\"50\" class=\"form-control\" name=\"name_of_movie_new\" tabindex=\"2\" value=\"$name\" required>";

?><br>
  </div>
    <div class=" container col-3" >
    <label class="colorText">Жанр:</label><label style="color:red;">*</label><div class="field_wrapper_Genre">
    <select class="form-control">
    <?php

    $mysql = new mysqli("localhost","root","root","filmstudio");
    $mysql->query("SET NAMES 'utf8'");
    $result = $mysql->query("SELECT genre FROM genres WHERE id_movie_genre IN (SELECT id_movie_genre FROM Movie_genres WHERE name_of_movie = \"$name\")");
    $resulttt = $mysql->query("SELECT id_movie_genre FROM Movie_genres WHERE name_of_movie = \"$name\"");


$rows = mysqli_num_rows($result); // количество полученных строк
    for ($i = 0 ; $i < $rows ; ++$i)
    {
    $row = mysqli_fetch_row($result);
    $roww = mysqli_fetch_row($resulttt);
      for ($j = 0 ; $j < 1 ; ++$j){
        echo "<div><option value=\"$roww[$j]\" selected>$row[$j]</option>";
        if($row[$j] == 'Бойовик'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Драма'){
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Триллер'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Жахи'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Детектив'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Комедія'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Вестерн'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";


echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Трагедія'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Документальний'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Історичний'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"1\">Бойовик</option>";
        }
        if($i == 0){
            echo "<a href=\"javascript:void(0);\" class=\"add_button_Genre\" title=\"Add field\"><img src=\"../img/add_icon.png\" height='35' width='35'/></a></div>";
        } else{
              echo "<a href=\"javascript:void(0);\" class=\"remove_button_Genre\"><img src=\"../img/delete_icon.png\" width=\"20\" height=\"20\"/></a></div>";
        }
      }
    }
    ?>
  </select>

  </div>
  </div>
  <div class=" container col-2" >  <label class="colorText">  Дата випуску:   </label>
<?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT date_of_release FROM movie WHERE name_of_movie = \"$name\"");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"date_of_release\" value=\"$res[0]\" >";
   ?><br>
  </div>
          </div>



<div class="row text-center" style="margin:10px;">
<div class=" container col-3" >
           <label class="colorText"> Бюджет:</label> <label style="color:red;">*</label><?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT budget_of_movie FROM movie WHERE name_of_movie = \"$name\"");

$res = mysqli_fetch_array($result);

echo "  <div class=\" container col-5\"><input type= \"text\" maxlength=\"50\" onkeyup=\"lal(this)\" class=\"form-control\" tabindex=\"2\" name=\"budget\" value=\"$res[0]\" required></div>";
   ?><br>
 </div>

    <div class=" container col-3" >
    <label class="colorText">Тривалість:</label>
  <div class="field_wrapper_Dur">
<?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT duration_of_movie FROM Movie_duration WHERE name_of_movie = \"$name\"");

$rows = mysqli_num_rows($result); // количество полученных строк
for ($i = 0 ; $i < $rows ; ++$i)
{
$row = mysqli_fetch_row($result);
    for ($j = 0 ; $j < 1 ; ++$j){
      echo "<div><div class=\" container col-5\"><input type= \"text\" maxlength=\"50\" class=\"form-control\" name=\"field_name_Dur[]\" tabindex=\"2\" value=\"$row[$j]\" ></div>";
      if($i == 0){
          echo "<a href=\"javascript:void(0);\" class=\"add_button_Dur\" title=\"Add field\"><img src=\"../img/add_icon.png\" height='35' width='35'/></a></div>";
      } else{
            echo "<a href=\"javascript:void(0);\" class=\"remove_button_Dur\"><img src=\"../img/delete_icon.png\" width=\"20\" height=\"20\"/></a></div>";
      }
    }
}
?></div><br>

</div>
    <div class=" container col-3" >
    <label class="colorText">Рейтинг:</label><?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT rating_of_movie FROM movie WHERE name_of_movie = \"$name\"");

$res = mysqli_fetch_array($result);

echo "<div class=\" container col-5\"><input type= \"text\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"rating\" value=\"$res[0]\" ></div>";
   ?>   </div>  </div>
   </div><br><br>

   <br><br><h1 class="colorForAllText">Змінити знімальну групу</h1><br>


   <div class="row text-center" style="margin:10px;">
       <div class=" container col-3" >
       <label class="colorText">Номер знімальної групи: </label>
       <?php

   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");


   $result = $mysql->query("SELECT number_of_film_crew FROM movie WHERE name_of_movie = '$name'");


   $numb = mysqli_fetch_array($result);



   $resultt = $mysql->query("SELECT number_of_film_crew FROM film_crew WHERE number_of_film_crew = '$numb[0]'");

   $res = mysqli_fetch_array($resultt);


   echo "<input type= \"text\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"number_of_film_crew\" value=\"$res[0]\" required>";
      ?><br>
       </div>
       <div class=" container col-3" >
       <label class="colorText">Дата початку роботи: </label> <?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT date_start_crew FROM film_crew WHERE number_of_film_crew = '$numb[0]'");

     $res = mysqli_fetch_array($result);

     echo "<input type= \"date\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"date_start_film_crew\" value=\"$res[0]\" required>";
       ?><br>

   </div>
     <div class=" container col-3" >
     <label class="colorText">Дата закінчення роботи:</label>
     <?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT date_finish_film_crew FROM film_crew WHERE number_of_film_crew = '$numb[0]'");

     $res = mysqli_fetch_array($result);

     echo "<input type= \"date\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"date_finish_film_crew\" value=\"$res[0]\" required>";
       ?><br>

   </div>
   </div>
</br>
</br>
</br>

   <div class="container col-11" >
   <label class="colorText">Склад:</label>
   <table border="1" class=" table table-dark table-hover" >
   <thead class="thead-dark " style="background-color: #252527;">
   <tr>
   <td>Id</td>
   <td>ПІБ</td>
   <td>Стаж</td>
   <td>Рейтинг</td>
   <td>Кількість фільмів, у яких брав участь</td>
   <td>Професія</td>
   <td>Вік</td>
   <td>Ел.пошта</td>
   <td>Телефон</td>
   <td>Контакти близьких</td>
   <td>Прибрати зі складу групи</td>
   </tr></thead>
   <?php

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

   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");


$result = $mysql->query("SELECT * FROM actors WHERE actor_id IN(SELECT actor_id FROM actor_filmcrew  WHERE  number_of_film_crew = '$numb[0]')");

   while ($stroka = mysqli_fetch_array($result)){
     $temp = $stroka['actor_id'];

     $result_phones = $mysql->query("SELECT actor_phone_number FROM actors_phones WHERE actor_id  = $temp");

     $result_contacts_rel = $mysql->query("SELECT actor_relatives_phone_numbers FROM actor_contacts_of_relatives WHERE actor_id  = $temp");

     echo"<tr>";
     echo"<td>" . $stroka['actor_id'] . "</td>";
     echo"<td>" . $stroka['actor_surname'] . " " . $stroka['actor_name']. " " . $stroka['actor_middle_name'] .  "</td>";
     echo"<td>" . $stroka['actor_experience'] . "</td>";
     echo"<td>" . $stroka['rating_of_employee'] . "</td>";
     echo"<td>" . $stroka['amount_of_films_actor_took_part_in'] . "</td>";
     echo"<td>" . $stroka['name_of_position'] . "</td>";
     echo"<td>" . $stroka['actor_age'] . "</td>";
     echo"<td>" . $stroka['actor_e-mail'] . "</td>";
     echo"<td>" .  res($result_phones) . "</td>";
     echo"<td>" .  res($result_contacts_rel) . "</td>";
     echo"</tr>";

   }

   $result_understudies = $mysql->query("SELECT * FROM understudies WHERE understudy_id IN(SELECT understudy_id FROM understudies_filmcrew  WHERE  number_of_film_crew = '$numb[0]')");


   while ($stroka = mysqli_fetch_array($result_understudies)){
     $temp = $stroka['understudy_id'];

     $result_phones = $mysql->query("SELECT `understudy_phone_number` FROM `understudy_phones` WHERE `understudy_id` IN (SELECT `understudy_id` FROM  `understudies` WHERE `understudy_id` = $temp)");

     $result_contacts_rel = $mysql->query("SELECT `understudy_relatives_phone_numbers` FROM `understudies_contacts_of_relatives` WHERE `understudy_id` IN (SELECT `understudy_id` FROM  `understudies` WHERE `understudy_id` = $temp)");


     echo"<tr>";
     echo"<td>" . $stroka['understudy_id'] . "</td>";
     echo"<td>" . $stroka['understudy_surname'] . " " . $stroka['understudy_name']. " " . $stroka['understudy_middle_name'] .  "</td>";
     echo"<td>" . $stroka['understudy_experience'] . "</td>";
     echo"<td>" . $stroka['rating_of_employee'] . "</td>";
     echo"<td>" . $stroka['amount_of_films_understudy_took_part_in'] . "</td>";
     echo"<td>" . $stroka['name_of_position'] . "</td>";
     echo"<td>" . $stroka['understudy_age'] . "</td>";
     echo"<td>" . $stroka['understudy_e-mail'] . "</td>";
      echo"<td>" .  res($result_phones) . "</td>";
     echo"<td>" .  res($result_contacts_rel) . "</td>";
     echo"</tr>";
   }

   $result_others = $mysql->query("SELECT * FROM others WHERE others_id IN(SELECT others_id FROM others_filmcrew  WHERE  number_of_film_crew = '$numb[0]')");


   while ($stroka = mysqli_fetch_array($result_others)){
     $temp = $stroka['others_id'];

     $result_phones = $mysql->query("SELECT `others_phone_number` FROM `others_phones` WHERE `others_id` IN (SELECT `others_id` FROM  `others` WHERE `others_id` = $temp)");
     $result_contacts_rel = $mysql->query("SELECT `others_relatives_phone_numbers` FROM `others_contacts_of_relatives` WHERE `others_id` IN (SELECT `others_id` FROM  `others` WHERE `others_id` = $temp)");


     echo"<tr id=\"others_row\">";
     echo"<td>" . $stroka['others_id'] . "</td>";
     echo"<td>" . $stroka['others_surname'] . " " . $stroka['others_name']. " " . $stroka['others_middle_name'] .  "</td>";
     echo"<td>" . $stroka['others_experience'] . "</td>";
     echo"<td>" . $stroka['rating_of_employee'] . "</td>";
     echo"<td>" . $stroka['amount_of_films_others_took_part_in'] . "</td>";
     echo"<td>" . $stroka['name_of_position'] . "</td>";
     echo"<td>" . $stroka['others_age'] . "</td>";
     echo"<td>" . $stroka['others_e-mail'] . "</td>";
     echo"<td>" .  res($result_phones) . "</td>";
     echo"<td>" .  res($result_contacts_rel) . "</td>";

     $res = $mysql->query("SELECT * FROM `others_filmCrew` WHERE `number_of_film_crew` = '$numb[0]' AND `others_id` = $temp  AND  `others_id` IN(SELECT `others_id` FROM `others` WHERE (`name_of_position` = 'сценарист' OR
       `name_of_position` = 'режисер' )OR `name_of_position` = 'лінійний продюсер' )");

     $re = mysqli_fetch_array($res);

     if($stroka['name_of_position'] == "режисер" || $stroka['name_of_position'] == "лінійний продюсер" || $stroka['name_of_position'] == "сценарист"){
       if($re[0] != "") {
         echo"<td>" ."<input type=\"checkbox\" checked class=\"form-control\" value = \"" . $stroka['others_id'] . "\" name=\"others_id[]\" >";

       }else{
         echo"<td>" ."<input type=\"checkbox\" class=\"form-control\" value = \"" . $stroka['others_id'] . "\" name=\"others_id[]\" >";
       }
     }



     echo"</tr>";


// if($stroka['name_of_position'] == "лінійний продюсер" || $stroka['name_of_position'] == "режисер" || $stroka['name_of_position'] == "сценарист"){
//        echo"<form action=\"\" method=\"post\">";
//    echo "<input type=\"hidden\" value = \"" .$stroka['others_id'] . "\" name=\"others_id\" >";
//    echo "<td>"."<div class = \"btn noprint\">"."<button class =\" btn btn-danger\" id=\"btn_for_delete\" name=\"delete\">Прибрати</button>"."</div></td></form>";
//      }
//      echo"</tr>";
   }










   if (isset($_POST['addToFilmCrew'])){
     $mysqli = new mysqli("localhost","root","root","filmstudio");
     $mysqli->query("SET NAMES 'utf8'");
     $result = $mysqli->query("SELECT number_of_film_crew FROM movie WHERE name_of_movie = '$name'");


     $numb = mysqli_fetch_array($result);

     $number_of_filmCrew = $numb[0];

    $start = $mysqli->query("SELECT `date_start_crew` FROM `film_crew` WHERE `number_of_film_crew` = $number_of_filmCrew");
    $finish = $mysqli->query("SELECT `date_finish_film_crew` FROM `film_crew` WHERE `number_of_film_crew` = $number_of_filmCrew");
    $date_start_this_film_crew = mysqli_fetch_array($start); //arrays with 1 element
    $date_finish_this_film_crew = mysqli_fetch_array($finish);
    $used_start = $date_start_this_film_crew[0];
    $used_finish = $date_finish_this_film_crew[0];


    $result_others=$mysqli->query("SELECT * FROM others WHERE (`name_of_position` = 'лінійний продюсер' OR  `name_of_position` = 'сценарист' OR  `name_of_position` = 'режисер') AND (others_id NOT IN (SELECT DISTINCT others_id FROM others_filmcrew WHERE number_of_film_crew
     IN(SELECT number_of_film_crew FROM film_crew WHERE ((date_finish_film_crew BETWEEN '$used_start' AND '$used_finish') OR
    (date_start_crew BETWEEN  '$used_start' AND  '$used_finish')))) )");


    while ($stroka = mysqli_fetch_array($result_others)){
      $temp = $stroka['others_id'];

      $result_others_phones = $mysqli->query("SELECT `others_phone_number` FROM `others_phones` WHERE `others_id` IN (SELECT `others_id` FROM  `others` WHERE `others_id` = $temp)");
      $result_others_contacts_rel = $mysqli->query("SELECT `others_relatives_phone_numbers` FROM `others_contacts_of_relatives` WHERE `others_id` IN (SELECT `others_id` FROM  `others` WHERE `others_id` = $temp)");

      echo"<tr>";
      echo"<td>" . $stroka['others_id'] . "</td>";
      echo"<td>" . $stroka['others_surname'] . " " . $stroka['others_name']. " " . $stroka['others_middle_name'] .  "</td>";
      echo"<td>" . $stroka['others_experience'] . "</td>";
      echo"<td>" . $stroka['rating_of_employee'] . "</td>";
      echo"<td>" . $stroka['amount_of_films_others_took_part_in'] . "</td>";
      echo"<td>" . $stroka['name_of_position'] . "</td>";
      echo"<td>" . $stroka['others_age'] . "</td>";
      echo"<td>" . $stroka['others_e-mail'] . "</td>";
      echo"<td>" .  res($result_others_phones) . "</td>";
      echo"<td>" .  res($result_others_contacts_rel) . "</td>";


        $res = $mysqli->query("SELECT * FROM `others_filmCrew` WHERE `number_of_film_crew` = $number_of_filmCrew AND `others_id` = $temp");

        $re = mysqli_fetch_array($res);

        if($re[0] != ""){
          echo"<td>" ."<input type=\"checkbox\" checked class=\"form-control\" value = \"" . $stroka['others_id'] . "\" name=\"others_id[]\" >";

        }else{
          echo"<td>" ."<input type=\"checkbox\" class=\"form-control\" value = \"" . $stroka['others_id'] . "\" name=\"others_id[]\" >";
        }

        echo"</tr>";
        }
   }
   ?>

   <br>
   </table>

 </div>


   <div class="btn">
   <input type="submit" class ="button btn btn-primary" value="Додати" name="addToFilmCrew">
   </div><br><br><br></div><br>





   <br><br><h1 class="colorForAllText">Змінити групу монтажерів</h1><br>

   <div class="row text-center" style="margin:10px;">
       <div class=" container col-3" >
       <label class="colorText">Номер групи монтажерів: </label>
       <?php
       $mysql = new mysqli("localhost","root","root","filmstudio");
       $mysql->query("SET NAMES 'utf8'");
       $result = $mysql->query("SELECT number_of_edit_crew FROM movie WHERE name_of_movie = '$name'");


       $numb = mysqli_fetch_array($result);


   $result = $mysql->query("SELECT number_of_edit_crew FROM edit_crew WHERE number_of_edit_crew = '$numb[0]'");

   $res = mysqli_fetch_array($result);

   echo "<input type= \"text\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"number_of_edit_crew\" value=\"$res[0]\" required>";
      ?><br>
   </div>
   <div class=" container col-3" >
       <label class="colorText">Дата початку роботи: </label> <?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT date_start_edit_crew FROM edit_crew WHERE number_of_edit_crew = '$numb[0]'");

     $res = mysqli_fetch_array($result);

     echo "<input type= \"date\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"date_start_edit_crew\" value=\"$res[0]\" required>";
       ?><br>
   </div>
   <div class=" container col-3" >
     <label class="colorText">Дата закінчення роботи:</label><?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT date_finish_edit_crew FROM edit_crew WHERE number_of_edit_crew = '$numb[0]'");

     $res = mysqli_fetch_array($result);

     echo "<input type= \"date\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"date_finish_edit_crew\" value=\"$res[0]\" required>";
       ?><br>
   </div></div><br>


   <div class="row text-center" style="margin:10px;">
       <div class=" container col-4" >
       <label class="colorText">Голова: </label>
       <?php
       $mysql = new mysqli("localhost","root","root","filmstudio");
       $mysql->query("SET NAMES 'utf8'");

       $number_of_editCreww = $mysql->query("SELECT number_of_edit_crew FROM movie WHERE name_of_movie =  \"$name\"");
       $number_of_editCrew = mysqli_fetch_array($number_of_editCreww);
       $num = $number_of_editCrew[0];


       $start = $mysql->query("SELECT date_start_edit_crew FROM edit_crew WHERE number_of_edit_crew = $num");
       $finish = $mysql->query("SELECT date_finish_edit_crew FROM edit_crew WHERE number_of_edit_crew = $num");

       $date_start_this_edit_crew = mysqli_fetch_array($start); //arrays with 1 element
       $date_finish_this_edit_crew = mysqli_fetch_array($finish);
       $used_start = $date_start_this_edit_crew[0];
       $used_finish = $date_finish_this_edit_crew[0];

      // echo $num;
       $result_editor_head =$mysql->query("SELECT *  FROM editor WHERE editor_id IN (SELECT editor_crew_head_id FROM edit_crew WHERE number_of_edit_crew = $num)");
       echo "<select name=\"head\" class=\"select selectpicker  required form-control\">";
       $stroka = mysqli_fetch_array($result_editor_head);
       if($stroka != 0){
         echo "<option selected>" . $stroka['editor_surname'] ." ".  $stroka['editor_name'] . " ". $stroka['editor_middle_name'] .", ". "id: " . $stroka['editor_id'] . "</option>";
         $head_editor_id = $stroka['editor_id'];
       } else{
         echo "<option selected>" . "</option>";
       }


       $result_editor =$mysql->query("SELECT *  FROM editor WHERE editor_id NOT IN (SELECT DISTINCT editor_id FROM editor_crewedit WHERE number_of_edit_crew
        IN(SELECT number_of_edit_crew FROM edit_crew WHERE ((date_finish_edit_crew BETWEEN '$used_start' AND '$used_finish') OR
       (date_start_edit_crew BETWEEN  '$used_start' AND  '$used_finish'))))  OR editor_id IN (SELECT editor_id FROM editor_crewedit WHERE number_of_edit_crew = '$num')");

      while($stroka = mysqli_fetch_array($result_editor)){
        if($stroka != 0){
          if($stroka['editor_id'] != $head_editor_id){
            echo "<option>" . $stroka['editor_surname'] ." ".  $stroka['editor_name'] . " ". $stroka['editor_middle_name'] .", ". "id: " . $stroka['editor_id'] . "</option>";
          }
        }
      }
      echo "</select>";


         ?><br>
   </div></div><br>


   <div class="row text-center" style="margin:10px;">
   <div class="container col-11" >
       <label class="colorText">Склад: </label>
       <table border="1" class=" table table-dark table-hover" >
       <thead class="thead-dark " style="background-color: #252527;">
       <tr>
       <td>Id</td>
       <td>ПІБ</td>
       <td>Стаж</td>
       <td>Ел.пошта</td>
       <td>Телефон</td>
       <td>Контакти близьких</td>
       </tr></thead>

       <?php
       $mysql = new mysqli("localhost","root","root","filmstudio");
       $mysql->query("SET NAMES 'utf8'");
    $result_editors = $mysql->query("SELECT * FROM editor WHERE editor_id IN(SELECT editor_id FROM editor_crewedit  WHERE  number_of_edit_crew = '$num')");


    while ($stroka = mysqli_fetch_array($result_editors)){
      $temp = $stroka['editor_id'];

      $result_phones = $mysql->query("SELECT `editor_phone_number` FROM `editor_phones` WHERE `editor_id` IN (SELECT `editor_id` FROM  `editor` WHERE `editor_id` = $temp)");
      $result_contacts_rel = $mysql->query("SELECT `editor_relatives_phone_numbers` FROM `editor_contacts_of_relatives` WHERE `editor_id` IN (SELECT `editor_id` FROM  `editor` WHERE `editor_id` = $temp)");


      echo"<tr>";
      echo"<td>" . $stroka['editor_id'] . "</td>";
      echo"<td>" . $stroka['editor_surname'] . " " . $stroka['editor_name']. " " . $stroka['editor_middle_name'] .  "</td>";
      echo"<td>" . $stroka['editor_experience'] . "</td>";
      echo"<td>" . $stroka['editor_e-mail'] . "</td>";
      echo"<td>" .  res($result_phones) . "</td>";
      echo"<td>" .  res($result_contacts_rel) . "</td>";
      echo"<tr>";


}

         ?>
       </table><br>
   </div></div><br>







   <div class="btn">
   <input type="submit" class ="button btn btn-primary" value="Змінити" name="edit">
   </div><br><br><br>



</form>
</body>

</html>


<?php




if (isset($_POST['edit'])){

$mysql = new mysqli('localhost','root','root','filmStudio');

$durations = $_POST['field_name_Dur'];
$genres = $_POST['field_name_Genre'];

$movieName = filter_var(trim($_POST['name_of_movie']),FILTER_SANITIZE_STRING);
$newName = filter_var(trim($_POST['name_of_movie_new']),FILTER_SANITIZE_STRING);

$dateRelease = filter_var(trim($_POST['date_of_release']),FILTER_SANITIZE_STRING);
$rating = filter_var(trim($_POST['rating']),FILTER_SANITIZE_STRING);
$budget = filter_var(trim($_POST['budget']),FILTER_SANITIZE_STRING);

$ans = $mysql->query("UPDATE movie SET name_of_movie = '$newName', budget_of_movie = '$budget' WHERE name_of_movie = '$movieName' ");
if ($ans) {
   echo "Success!";
 }
else {
    echo "Error! $mysql->error <br>";
  }

  if($dateRelease != NULL){
    $anss = $mysql->query("UPDATE movie SET date_of_release = '$dateRelease' WHERE name_of_movie = '$newName'");
      if ($anss) {
         echo "Success!";
       }
      else {
          echo "Error! $mysql->error <br>";
        }
  }

  if($rating != NULL){
    $anss = $mysql->query("UPDATE movie SET rating_of_movie = '$rating' WHERE name_of_movie = '$newName'");
      if ($anss) {
         echo "Success!";
       }
      else {
          echo "Error! $mysql->error <br>";
        }
        $number_film_crew = filter_var(trim($_POST['number_of_film_crew']),FILTER_SANITIZE_STRING);

        $rating = filter_var(trim($_POST['rating']),FILTER_SANITIZE_STRING);

        $actors_ids = $mysql->query("SELECT `actor_id` FROM `actor_filmcrew` WHERE `number_of_film_crew` = '$number_film_crew'");

        while ($stroka = mysqli_fetch_array($actors_ids)){
          $temp = $stroka['actor_id'];
          $actors_amount = $mysql->query("SELECT `amount_of_films_actor_took_part_in` FROM `actors` WHERE `actor_id` = '$temp'");
          $s = mysqli_fetch_array($actors_amount);
          $amount = $s[0];

          $actors_rating = $mysql->query("SELECT `rating_of_employee` FROM `actors` WHERE `actor_id` = '$temp'");
          $s = mysqli_fetch_array($actors_rating);
          $old_rating = $s[0];

          $new_rating = ((($old_rating * $amount) + $rating) / ($amount + 1));
          $amount++;

            $rating *= 10;
            $result = $mysql->query("INSERT INTO `actors_previous_movies_rating` (`id_previous_movie_rating`, `actor_id`) VALUES('$rating', '$temp')");
            if ($result) {
               echo "Success!";
               $result = $mysql->query("UPDATE actors SET rating_of_employee = '$new_rating', amount_of_films_actor_took_part_in = '$amount' WHERE actor_id = '$temp'");
               if ($result) {
                  echo "Success!";
                }
              else {
                   echo "Error! $mysql->error <br>";
                 }
             }
           else {
                echo "Error! $mysql->error <br>";
              }

        }



        $understudies_ids = $mysql->query("SELECT `understudy_id` FROM `understudies_filmcrew` WHERE `number_of_film_crew` = '$number_film_crew'");
        while ($stroka = mysqli_fetch_array($understudies_ids)){
          $temp = $stroka['understudy_id'];
          $rating = filter_var(trim($_POST['rating']),FILTER_SANITIZE_STRING);

          $understudies_amount = $mysql->query("SELECT `amount_of_films_understudy_took_part_in` FROM `understudies` WHERE `understudy_id` = '$temp'");
          $s = mysqli_fetch_array($understudies_amount);
          $amount = $s[0];

          $understudies_rating = $mysql->query("SELECT `rating_of_employee` FROM `understudies` WHERE `understudy_id` = '$temp'");
          $s = mysqli_fetch_array($understudies_rating);
          $old_rating = $s[0];

          $new_rating = ((($old_rating * $amount) + $rating) / ($amount + 1));
          $amount++;

            $rating *= 10;
            $result = $mysql->query("INSERT INTO `understudy_previous_movies_ratings` (`id_previous_movie_rating`, `understudy_id`) VALUES('$rating', '$temp')");
            if ($result) {
               echo "Success!";
               $result = $mysql->query("UPDATE understudies SET rating_of_employee = '$new_rating', amount_of_films_understudy_took_part_in = '$amount' WHERE understudy_id = '$temp'");
               if ($result) {
                  echo "Success!";
                }
              else {
                   echo "Error! $mysql->error <br>";
                 }
             }
           else {
                echo "Error! $mysql->error <br>";
              }
        }


        $others_ids = $mysql->query("SELECT `others_id` FROM `others_filmcrew` WHERE `number_of_film_crew` = '$number_film_crew'");
         while ($stroka = mysqli_fetch_array($others_ids)){
        $rating = filter_var(trim($_POST['rating']),FILTER_SANITIZE_STRING);

          $temp = $stroka['others_id'];
          $others_amount = $mysql->query("SELECT `amount_of_films_others_took_part_in` FROM `others` WHERE `others_id` = '$temp'");
          $s = mysqli_fetch_array($others_amount);
          $amount = $s[0];

          $others_rating = $mysql->query("SELECT `rating_of_employee` FROM `others` WHERE `others_id` = '$temp'");
          $s = mysqli_fetch_array($others_rating);
          $old_rating = $s[0];

          $new_rating = ((($old_rating * $amount) + $rating) / ($amount + 1));
          $amount++;

            $rating *= 10;
            $result = $mysql->query("INSERT INTO `others_previous_movies_ratings` (`id_previous_movie_rating`, `others_id`) VALUES('$rating', '$temp')");
            if ($result) {
               echo "Success!";
               $result = $mysql->query("UPDATE others SET rating_of_employee = '$new_rating', amount_of_films_others_took_part_in = '$amount' WHERE others_id = '$temp'");
               if ($result) {
                  echo "Success!";
                }
              else {
                   echo "Error! $mysql->error <br>";
                 }
             }
           else {
                echo "Error! $mysql->error <br>";
              }
        }







  }



  $mysql->query("DELETE FROM Movie_genres WHERE name_of_movie = '$movieName'");
  $mysql->query("DELETE FROM Movie_duration WHERE name_of_movie = '$movieName'");


foreach ($genres as $value) {
  $result = $mysql->query("INSERT INTO Movie_genres(id_movie_genre, name_of_movie)
    VALUES ('$value','$newName')");
    if ($result) {
       echo "Success!";
     }
   else {
        echo "Error! $mysql->error <br>";
      }
  }


  foreach ($durations as $value) {
  $result = $mysql->query("INSERT INTO Movie_duration(duration_of_movie, name_of_movie)
    VALUES ('$value','$newName')");
    if ($result) {
       echo "Success!";
     }
   else {
        echo "Error! $mysql->error <br>";
      }
  }





  $number_film_crew = filter_var(trim($_POST['number_of_film_crew']),FILTER_SANITIZE_STRING);

  $dateStart_filmcrew = filter_var(trim($_POST['date_start_film_crew']),FILTER_SANITIZE_STRING);
  $dateFinish_filmcrew = filter_var(trim($_POST['date_finish_film_crew']),FILTER_SANITIZE_STRING);


  $result = $mysql->query("SELECT number_of_film_crew FROM movie WHERE name_of_movie = '$name'");

  $numb = mysqli_fetch_array($result);
  $ans = $mysql->query("UPDATE `film_crew` SET `number_of_film_crew` = '$number_film_crew', `date_start_crew` = '$dateStart_filmcrew', `date_finish_film_crew`= '$dateFinish_filmcrew' WHERE `number_of_film_crew` = '$numb' ");
  if ($ans) {
   echo "Success!";
  }
  else {
    echo "Error! $mysql->error <br>";
  }





  $number_edit_crew = filter_var(trim($_POST['number_of_edit_crew']),FILTER_SANITIZE_STRING);
  $dateStart_editcrew = filter_var(trim($_POST['date_start']),FILTER_SANITIZE_STRING);
  $dateFinish_editcrew = filter_var(trim($_POST['date_finish']),FILTER_SANITIZE_STRING);
  $head = filter_var(trim($_POST['head']),FILTER_SANITIZE_STRING);


  $result = $mysql->query("SELECT number_of_edit_crew FROM movie WHERE name_of_movie = '$name'");

  $numb = mysqli_fetch_array($result);

  $ans = $mysql->query("UPDATE `edit_crew` SET `number_of_edit_crew` = '$number_edit_crew', `date_start_edit_crew` = '$dateStart_editcrew', `date_finish_edit_crew`= '$dateFinish_editcrew' ,`editor_crew_head_id`= '$head' WHERE `number_of_edit_crew` = '$numb' ");
  if ($ans) {
   echo "Success!";
  }
  else {
    echo "Error! $mysql->error <br>";
  }




  $number_film_crew = filter_var(trim($_POST['number_of_film_crew']),FILTER_SANITIZE_STRING);

  $others_id =  $_POST['others_id'];



  $ans = $mysql->query("DELETE FROM `others_filmCrew` WHERE `number_of_film_crew` = '$number_film_crew' AND `others_id` IN(SELECT `others_id` FROM `Others` WHERE `name_of_position` = 'сценарист' OR `name_of_position` = 'лінійний продюсер' OR `name_of_position` = 'режисер')");

  foreach($others_id as $value){
    $result = $mysql->query("INSERT INTO `others_filmcrew`(`number_of_film_crew`, `others_id`, `others_fee`) VALUES ('$number_film_crew', '$value','0')");
  if ($result) {
    // echo "</br></br></br><h1 class=\"colorForAllText\">Сценаристів успішно додано до знімальної групи!</h1>";
   }
else {
  // echo "</br></br></br><h1 class=\"colorForAllText\">Здається, щось пішло не так, сценаристів не було додано..</h1>";
  echo "<a href=\"#\"  class=\"btn btn-danger\" onclick=\"history.back();return false;\">Назад</a>";
    }

    if ($result) {
     echo "Success!";
    }
    else {
      echo "Error! $mysql->error <br>";
    }
  }






$mysql->close();

header('Location: successfullyEditedMovie.php');


sleep(2);

//Redirect using the Location header.
header('Location: editingMovie.php');



//exit to prevent the rest of the script from executing
}


 ?>
