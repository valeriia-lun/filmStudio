<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
    $(document).ready(function(){
        var maxFieldPhones = 10; //Input fields increment limitation
        var addButtonPhones = $('.add_button_Phones'); //Add button selector
        var wrapperPhones = $('.field_wrapper_Phones'); //Input field wrapper
        var fieldHTMLPhones = '<div><input type="text" name="field_name_Phones[]" value=""/><a href="javascript:void(0);" class="remove_button_Phones"><img src="../img/delete-icon.png" /></a></div>'; //New input field html
        var xPhones = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButtonPhones).click(function(){
            //Check maximum number of input fields
            if(xPhones < maxFieldPhones){
                xPhones++; //Increment field counter
                $(wrapperPhones).append(fieldHTMLPhones); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapperPhones).on('click', '.remove_button_Phones', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            xPhones--; //Decrement field counter
        });

        var maxFieldContacts = 10; //Input fields increment limitation
        var addButtonContacts = $('.add_button_Contacts'); //Add button selector
        var wrapperContacts = $('.field_wrapper_Contacts'); //Input field wrapper
        var fieldHTMLContacts = '<div><input type="text" name="field_name_Contacts[]" value=""/><a href="javascript:void(0);" class="remove_button_Contacts"><img src="../img/delete-icon.png" /></a></div>'; //New input field html
        var xContacts = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButtonContacts).click(function(){
            //Check maximum number of input fields
            if(xContacts < maxFieldContacts){
                xContacts++; //Increment field counter
                $(wrapperContacts).append(fieldHTMLContacts); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapperContacts).on('click', '.remove_button_Contacts', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            xContacts--; //Decrement field counter
        });

        var maxFieldRatings = 10; //Input fields increment limitation
        var addButtonRatings = $('.add_button_Ratings'); //Add button selector
        var wrapperRatings = $('.field_wrapper_Ratings'); //Input field wrapper
        var fieldHTMLRatings = '<div><input type="text" name="field_name_Ratings[]" value=""/><a href="javascript:void(0);" class="remove_button_Ratings"><img src="../img/delete-icon.png" /></a></div>'; //New input field html
        var xRatings = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButtonRatings).click(function(){
            //Check maximum number of input fields
            if(xRatings < maxFieldRatings){
                xRatings++; //Increment field counter
                $(wrapperRatings).append(fieldHTMLRatings); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapperRatings).on('click', '.remove_button_Ratings', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            xRatings--; //Decrement field counter
        });



    });
          $(function() {
          $().datepicker();
          });
    </script>
</head>
<body>
<h1>Змінити співробітника знімальної групи</h1>

<form action="" method="post">

<div style="float: left;">
   Назва посади:
   <?php
   if (isset($_POST['editBtn'])){
     $id = filter_var(trim($_POST['others_id']),FILTER_SANITIZE_STRING);

   }

$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `name_of_position` FROM `Others` WHERE `others_id` = $id");
$res = mysqli_fetch_array($result);
echo $res[0];
    ?><br>
   Ім'я:
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `others_name` FROM `Others` WHERE `others_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"first_name\" value=\"$res[0]\" required>";
    ?><br>
   Прізвище:
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `others_surname` FROM `Others` WHERE `others_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"last_name\" value=\"$res[0]\" required>";
    ?><br>
   По-батькові: <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `others_middle_name` FROM `Others` WHERE `others_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"middle_name\" value=\"$res[0]\" required>";
    ?><br>
   Телефон: <div class="field_wrapper_Phones">
 <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `others_phone_number` FROM `Others_phones` WHERE `others_id` = $id");

$rows = mysqli_num_rows($result); // количество полученных строк
for ($i = 0 ; $i < $rows ; ++$i)
{
 $row = mysqli_fetch_row($result);
     for ($j = 0 ; $j < 1 ; ++$j){
       echo "<div><input type= \"text\" maxlength=\"50\" name=\"field_name_Phones[]\" tabindex=\"2\" value=\"$row[$j]\" required>";
       if($i == 0){
           echo "<a href=\"javascript:void(0);\" class=\"add_button_Phones\" title=\"Add field\"><img src=\"../img/add-icon.png\" width='10'/></a></div>";
       } else{
             echo "<a href=\"javascript:void(0);\" class=\"remove_button_Phones\"><img src=\"../img/delete-icon.png\" /></a></div>";
       }
     }
}
?></div><br>

   Домашня адреса:
    <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `others_home_address` FROM `Others` WHERE `others_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"address\" value=\"$res[0]\" required>";
    ?><br>

   Контакти близьких: <div class="field_wrapper_Contacts">
    <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $resultt = $mysql->query("SELECT `others_relatives_phone_numbers`  FROM `Others_contacts_of_relatives` WHERE `others_id` = $id");


 $rows = mysqli_num_rows($resultt); // количество полученных строк
 for ($i = 0 ; $i < $rows ; ++$i)
 {
     $row = mysqli_fetch_row($resultt);
         for ($j = 0 ; $j < 1 ; ++$j){
           echo "<div><input type= \"text\" maxlength=\"50\" name=\"field_name_Contacts[]\" tabindex=\"2\" value=\"$row[$j]\" required>";
           if($i == 0){
               echo "<a href=\"javascript:void(0);\" class=\"add_button_Contacts\" title=\"Add field\"><img src=\"../img/add-icon.png\" width='10'/></a></div>";
           } else{
                 echo "<a href=\"javascript:void(0);\" class=\"remove_button_Contacts\"><img src=\"../img/delete-icon.png\" /></a></div>";
           }
         }
 }
  ?></div><br>
</div>

<div>
   Стаж:
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `others_experience` FROM `Others` WHERE `others_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"years\" value=\"$res[0]\" required>";
    ?><br>
   Працюе з: <?php
 $mysql = new mysqli("localhost","root","root","filmstudio");
 $mysql->query("SET NAMES 'utf8'");
 $result = $mysql->query("SELECT `others_work_since` FROM `Others` WHERE `others_id` = $id");

 $res = mysqli_fetch_array($result);

 echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\" name=\"work_since\" value=\"$res[0]\" required>";
     ?><br>
   Працюе до:
   <?php
 $mysql = new mysqli("localhost","root","root","filmstudio");
 $mysql->query("SET NAMES 'utf8'");
 $result = $mysql->query("SELECT `others_work_until` FROM `Others` WHERE `others_id` = $id");

 $res = mysqli_fetch_array($result);

 echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\" name=\"work_until\" value=\"$res[0]\">";
     ?><br>

   Рейтинги фільмів, у яких брал(а) участь: <div class="field_wrapper_Ratings">
    <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $resultt = $mysql->query("SELECT `rating` FROM `Previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating`  FROM `Others_previous_movies_ratings` WHERE `others_id` = $id)");
  if ($resultt) {
     echo "Success!";
   }
  else {
      echo "Error! $mysql->error <br>";
    }

 $rows = mysqli_num_rows($resultt); // количество полученных строк
 for ($i = 0 ; $i < $rows ; ++$i)
 {
     $row = mysqli_fetch_row($resultt);
         for ($j = 0 ; $j < 1 ; ++$j){
           echo "<div><input type= \"text\" maxlength=\"50\" name=\"field_name_Ratings[]\" tabindex=\"2\" value=\"$row[$j]\" required>";
           if($i == 0){
               echo "<a href=\"javascript:void(0);\" class=\"add_button_Ratings\" title=\"Add field\"><img src=\"../img/add-icon.png\" width='10'/></a></div>";
           } else{
                 echo "<a href=\"javascript:void(0);\" class=\"remove_button_Ratings\"><img src=\"../img/delete-icon.png\" /></a></div>";
           }
         }
 }
  ?></div><br>
   Дата народження:  <?php
 $mysql = new mysqli("localhost","root","root","filmstudio");
 $mysql->query("SET NAMES 'utf8'");
 $result = $mysql->query("SELECT `others_date_of_birth` FROM `Others` WHERE `others_id` = $id");

 $res = mysqli_fetch_array($result);

 echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\" name=\"date_of_birth\" value=\"$res[0]\" required>";
     ?><br>

   Заробітня плата:<?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `others_salary` FROM `Others` WHERE `others_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"salary\" value=\"$res[0]\" required>";
    ?><br>
   Місце народження: <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `others_place_of_birth` FROM `Others` WHERE `others_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"placeBirth\" value=\"$res[0]\" required>";
    ?><br>
   E-mail: <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `others_e-mail` FROM `Others` WHERE `others_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"email\" value=\"$res[0]\" required>";
    ?><br>
</div>

<input type="submit" value="Змінити" name="edit"><br>

</form>


</body>

</html>


<?php
if (isset($_POST['edit'])){

$mysql = new mysqli('localhost','root','root','filmStudio');



$phones = $_POST['field_name_Phones'];


$contacts = $_POST['field_name_Contacts'];

$ratings = $_POST['field_name_Ratings'];



$name = filter_var(trim($_POST['first_name']),FILTER_SANITIZE_STRING);
$last_name = filter_var(trim($_POST['last_name']),FILTER_SANITIZE_STRING);
$middle_name = filter_var(trim($_POST['middle_name']),FILTER_SANITIZE_STRING);
$address = filter_var(trim($_POST['address']),FILTER_SANITIZE_STRING);
$years = filter_var(trim($_POST['years']),FILTER_SANITIZE_STRING);
$work_since = filter_var(trim($_POST['work_since']),FILTER_SANITIZE_STRING);
$birthDate= filter_var(trim($_POST['date_of_birth']),FILTER_SANITIZE_STRING);
$salary = filter_var(trim($_POST['salary']),FILTER_SANITIZE_STRING);
$place_of_birth = filter_var(trim($_POST['placeBirth']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);

$amount_of_films = count($ratings);

$rating = 0;

foreach ($ratings as $value) {
  $rating += $value;
}

$rating /= $amount_of_films;

$ans = $mysql->query("UPDATE `Others` SET `others_salary` = '$salary', `others_name` = '$name', `others_surname`= '$last_name', `others_middle_name` = '$middle_name',
  `others_home_address` = '$address', `others_work_since` = '$work_since', `others_experience` = '$years',
  `others_date_of_birth` = '$birthDate', `others_e-mail` = '$email', `amount_of_films_others_took_part_in` = '$amount_of_films', `rating_of_employee` = '$rating',
  `others_place_of_birth` = '$place_of_birth' WHERE `others_id` = '$id' ");
if ($ans) {
   echo "Success!";
 }
else {
    echo "Error! $mysql->error <br>";
  }
if($work_until != NULL){
  $anss = $mysql->query("UPDATE `Others` SET `others_work_until` = '$work_until' WHERE `others_id` = '$id'");if ($ans) {
    if ($anss) {
       echo "Success!";
     }
    else {
        echo "Error! $mysql->error <br>";
      }
}
}


$mysql->query("DELETE FROM `Others_phones` WHERE `others_id` = '$id'");
$mysql->query("DELETE FROM `Others_contacts_of_relatives` WHERE `others_id` = '$id'");
$mysql->query("DELETE FROM `Others_previous_movies_ratings` WHERE `others_id` = '$id'");


foreach ($phones as $value) {
  $anss = $mysql->query("UPDATE `others_phones` SET `others_phone_number` = $value WHERE `others_id` = '$id'");
  if ($anss) {
     echo "Success!";
   }
  else {
      echo "Error! $mysql->error <br>";
    }
}


foreach ($phones as $value) {
  $mysql->query("INSERT INTO `Others_phones`(`others_phone_number`, `others_id`)
  VALUES ('$value','$id')");

}


foreach ($contacts as $value) {
$result = $mysql->query("INSERT INTO `Others_contacts_of_relatives`(`others_relatives_phone_numbers`, `others_id`)
  VALUES ('$value','$id')");
  if ($result) {
     echo "Success!";
   }
 else {
      echo "Error! $mysql->error <br>";
    }
}



foreach ($ratings as $value) {
  echo "PEZDA";
//   $id_r = $mysql->query("SELECT id_previous_movie_rating FROM `Previous_movies_rating` WHERE rating = $value");
$value *= 10;
    $result = $mysql->query("INSERT INTO `Others_previous_movies_ratings`(`id_previous_movie_rating`, `others_id`)
  VALUES ('$value','$id')");
}


$mysql->close();

header('Location: /filmStudio/line_producer/main.php');

}

 ?>
