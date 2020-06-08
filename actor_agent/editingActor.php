<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
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
<h1>Змінити Актора</h1>

<form action="" method="post">

<div style="float: left;">
  Ім'я:
  <?php
  if (isset($_POST['editBtn'])){
    $id = filter_var(trim($_POST['actor_id']),FILTER_SANITIZE_STRING);

  }

$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `actor_name` FROM `actors` WHERE `actor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"first_name\" value=\"$res[0]\" required>";
   ?><br>
  Прізвище:
  <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `actor_surname` FROM `actors` WHERE `actor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"last_name\" value=\"$res[0]\" required>";
   ?><br>
  По-батькові: <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `actor_middle_name` FROM `actors` WHERE `actor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"middle_name\" value=\"$res[0]\" required>";
   ?><br>
  Телефон: <div class="field_wrapper_Phones">
<?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id` = $id");

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
$result = $mysql->query("SELECT `actor_home_address` FROM `actors` WHERE `actor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"address\" value=\"$res[0]\" required>";
   ?><br>


      Контакти близьких: <div class="field_wrapper_Contacts">
       <?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $resultt = $mysql->query("SELECT `actor_relatives_phone_numbers`  FROM `actor_contacts_of_relatives` WHERE `actor_id` = $id");


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

</div>


Стаж:
<?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `actor_experience` FROM `actors` WHERE `actor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"years\" value=\"$res[0]\" required>";
 ?><br>
Працюе з: <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `actor_works_since` FROM `actors` WHERE `actor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\" name=\"work_since\" value=\"$res[0]\" required>";
  ?><br>
Працюе до:
<?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `actor_works_until` FROM `actors` WHERE `actor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\" name=\"work_until\" value=\"$res[0]\">";
  ?><br>

Рейтинги фільмів, у яких брал(а) участь: <div class="field_wrapper_Ratings">
 <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$resultt = $mysql->query("SELECT `rating` FROM `Previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating`  FROM `actors_previous_movies_ratings` WHERE `actor_id` = $id)");
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
$result = $mysql->query("SELECT `actor_date_of_birth` FROM `actors` WHERE `actor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\" name=\"date_of_birth\" value=\"$res[0]\" required>";
  ?><br>

Заробітня плата:<?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `actor_salary` FROM `actors` WHERE `actor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"salary\" value=\"$res[0]\" required>";
 ?><br>
Місце народження: <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `actor_place_of_birth` FROM `actors` WHERE `actor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"place_of_birth\" value=\"$res[0]\" required>";
 ?><br>
E-mail: <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `actor_e-mail` FROM `actors` WHERE `actor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"email\" value=\"$res[0]\" required>";
 ?><br>
</div>
<h1>Зовнішність</h1>
<div style="float: left;">
   Стать:
   <select name="sex">
   <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `actor_sex` FROM `actors` WHERE `actor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<option selected>$res[0]</option> ";
   if($res[0] == 'Жіноча'){
     echo "<option>Чоловіча</option> ";
   }
   if($res[0] == 'Чоловіча'){
     echo "<option>Жіноча</option> ";
   }


    ?><br>


   </select><br>

   Зріст: <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `actor_height` FROM `actors` WHERE `actor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"height\" value=\"$res[0]\" required>";
    ?><br>
   Колір волосся:
   <select name="hairColor">
     <?php
      $mysql = new mysqli("localhost","root","root","filmstudio");
      $mysql->query("SET NAMES 'utf8'");
      $result = $mysql->query("SELECT `actor_color_of_hair` FROM `actors` WHERE `actor_id` = $id");

      $res = mysqli_fetch_array($result);

      echo "<option selected>$res[0]</option> ";

      if($res[0] == 'Чорний'){
        echo "<option>Блонд</option> ";
        echo "<option>Рудий</option> ";
        echo "<option>Коричневий</option> ";
        echo "<option>Білий</option> ";
      }
      if($res[0] == 'Рудий'){
        echo "<option>Блонд</option> ";
        echo "<option>Чорний</option> ";
        echo "<option>Коричневий</option> ";
        echo "<option>Білий</option> ";
      }

      if($res[0] == 'Коричневий'){
        echo "<option>Блонд</option> ";
        echo "<option>Рудий</option> ";
        echo "<option>Чорний</option> ";
        echo "<option>Білий</option> ";
      }
      if($res[0] == 'Білий'){
        echo "<option>Блонд</option> ";
        echo "<option>Рудий</option> ";
        echo "<option>Коричневий</option> ";
        echo "<option>Чорний</option> ";
      }
      if($res[0] == 'Блонд'){
        echo "<option>Чорний</option> ";
        echo "<option>Рудий</option> ";
        echo "<option>Коричневий</option> ";
        echo "<option>Білий</option> ";
      }
       ?><br>

   </select><br>


   Довжина волосся:<?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `actor_length_of_hair` FROM `actors` WHERE `actor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"hairLen\" value=\"$res[0]\" required>";
    ?><br>

   Колір очей:
   <select name="eyes">
     <?php
      $mysql = new mysqli("localhost","root","root","filmstudio");
      $mysql->query("SET NAMES 'utf8'");
      $result = $mysql->query("SELECT `actor_color_of_eyes` FROM `actors` WHERE `actor_id` = $id");

      $res = mysqli_fetch_array($result);

      echo "<option selected>$res[0]</option> ";
      if($res[0] == 'Блакитний'){
        echo "<option>Сірий</option> ";
        echo "<option>Зелений</option> ";
        echo "<option>Карі</option> ";
      }
      if($res[0] == 'Блакитний'){
        echo "<option>Сірий</option> ";
        echo "<option>Зелений</option> ";
        echo "<option>Карі</option> ";
      }

      if($res[0] == 'Зелений'){
        echo "<option>Сірий</option> ";
        echo "<option>Блакитний</option> ";
        echo "<option>Карі</option> ";
      }
      if($res[0] == 'Карі'){
        echo "<option>Сірий</option> ";
        echo "<option>Зелений</option> ";
        echo "<option>Блакитний</option> ";
      }
       ?><br>

   </select><br>

   Статура:
   <select name="stature">
   <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `actor_stature` FROM `actors` WHERE `actor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<option selected>$res[0]</option> ";
   if($res[0] == 'Худий'){
     echo "<option>Спортивний</option> ";
     echo "<option>Товстий</option> ";
   }
   if($res[0] == 'Спортивний'){
     echo "<option>Худий</option> ";
     echo "<option>Товстий</option> ";
   }

   if($res[0] == 'Товстий'){
     echo "<option>Спортивний</option> ";
     echo "<option>Худий</option> ";
   }
    ?><br>


   </select><br>
</div>
<div>
   Розмір взуття: <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `actor_shoe_size` FROM `actors` WHERE `actor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"shoe\" value=\"$res[0]\" required>";
    ?><br>
   Розмір одягу: <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `actor_clothing_size` FROM `actors` WHERE `actor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"size\" value=\"$res[0]\" required>";
    ?><br>
   Національність: <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `actor_nationality` FROM `actors` WHERE `actor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"nationality\" value=\"$res[0]\" required>";
    ?><br>
   Інше: <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `actor_other_appearance` FROM `actors` WHERE `actor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"otherApp\" value=\"$res[0]\">";
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
$place_of_birth = filter_var(trim($_POST['place_of_birth']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);

$sex = filter_var(trim($_POST['sex']),FILTER_SANITIZE_STRING);
$height = filter_var(trim($_POST['height']),FILTER_SANITIZE_STRING);
$hairColor = filter_var(trim($_POST['hairColor']),FILTER_SANITIZE_STRING);
$hairLen = filter_var(trim($_POST['hairLen']),FILTER_SANITIZE_STRING);
$eyes = filter_var(trim($_POST['eyes']),FILTER_SANITIZE_STRING);
$stature = filter_var(trim($_POST['stature']),FILTER_SANITIZE_STRING);
$shoe = filter_var(trim($_POST['shoe']),FILTER_SANITIZE_STRING);
$size = filter_var(trim($_POST['size']),FILTER_SANITIZE_STRING);
$nationality = filter_var(trim($_POST['nationality']),FILTER_SANITIZE_STRING);
$otherApp = filter_var(trim($_POST['otherApp']),FILTER_SANITIZE_STRING);

$amount_of_films = count($ratings);

$rating = 0;

foreach ($ratings as $value) {
  $rating += $value;
}

$rating /= $amount_of_films;

  $age = date("Y") - date("Y",$birthDate );

$ans = $mysql->query("UPDATE `actors` SET `actor_salary` = '$salary', `actor_name` = '$name', `actor_surname`= '$last_name', `actor_middle_name` = '$middle_name',
  `actor_home_address` = '$address', `actor_work_since` = '$work_since', `actor_experience` = '$years',
  `actor_date_of_birth` = '$birthDate', `actor_e-mail` = '$email', `amount_of_films_actor_took_part_in` = '$amount_of_films', `rating_of_employee` = '$rating',
  `actor_place_of_birth` = '$place_of_birth', `actor_age` = '$age', `actor_sex` = '$sex',  `actor_height` = '$height', `actor_color_of_eyes` = '$eyes',
  `actor_color_of_hair` = '$hairColor', `actor_length_of_hair` = '$hairLen', `actor_stature` = '$stature', `actor_shoe_size` = '$shoe',
  `actor_clothing_size` = '$size', `actor_nationality` = '$nationality' WHERE `actor_id` = '$id' ");
if ($ans) {
   echo "Success!";
 }
else {
    echo "Error! $mysql->error <br>";
  }
if($work_until != NULL){
  $anss = $mysql->query("UPDATE `actors` SET `actor_works_until` = '$work_until' WHERE `actor_id` = '$id'");if ($ans) {
    if ($anss) {
       echo "Success!";
     }
    else {
        echo "Error! $mysql->error <br>";
      }
}
}

if($otherApp != NULL){
  $anss = $mysql->query("UPDATE `actors` SET  `actor_other_appearance` = '$otherApp' WHERE `actor_id` = '$id'");if ($ans) {
    if ($anss) {
       echo "Success!";
     }
    else {
        echo "Error! $mysql->error <br>";
      }
}
}


$mysql->query("DELETE FROM `actors_phones` WHERE `actor_id` = '$id'");
$mysql->query("DELETE FROM `actors_contacts_of_relatives` WHERE `actor_id` = '$id'");
$mysql->query("DELETE FROM `actors_previous_movies_ratings` WHERE `actor_id` = '$id'");





foreach ($phones as $value) {
  $mysql->query("INSERT INTO `actors_phones`(`actor_phone_number`, `actor_id`)
  VALUES ('$value','$id')");

}


foreach ($contacts as $value) {
$result = $mysql->query("INSERT INTO `actors_contacts_of_relatives`(`actor_relatives_phone_numbers`, `actor_id`)
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
    $result = $mysql->query("INSERT INTO `actors_previous_movies_ratings`(`id_previous_movie_rating`, `actor_id`)
  VALUES ('$value','$id')");
}
$mysql->close();

header('Location: /filmStudio/actor_agent/main.php');

}

 ?>
