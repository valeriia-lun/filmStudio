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
<h1>Додати Режисера</h1>

<form action="" method="post">

<div style="float: left;">
   Ім'я: <input type="text" name="first_name" maxlength="50" tabindex="2" required><br>
   Прізвище: <input type="text" name="last_name" maxlength="50" tabindex="2" required><br>
   По-батькові: <input type="text" name="middle_name" maxlength="50" tabindex="2" required><br>

   Телефон:
   <div class="field_wrapper_Phones">
          <div>
              <input type="text" name="field_name_Phones[]" value=""/>
              <a href="javascript:void(0);" class="add_button_Phones" title="Add field"><img src="../img/add-icon.png" width='10'/></a>
          </div>
      </div>

   Домашня адреса: <input type="text" name="address" maxlength="50" tabindex="2" required><br>

   Контакти близьких:
   <div class="field_wrapper_Contacts">
          <div>

              <input type="text" name="field_name_Contacts[]" value=""/>
              <a href="javascript:void(0);" class="add_button_Contacts" title="Add field"><img src="../img/add-icon.png" width='10'/></a>
          </div>
      </div>
</div>

<div style="float: left;">
   Стаж: <input type="text" name="years" maxlength="50" tabindex="2" required><br>
   Працюе з: <input type="date" name="work_since" maxlength="50" tabindex="2" required><br>

   Рейтинги фільмів, у яких брал(а) участь:
   <div class="field_wrapper_Ratings">
       <div>
    <!--     <select  name="field_name_Ratings[]" value="">
           <div>
           <//?php
    /*       $mysqli = new mysqli("localhost","root","root","filmStudio");
           $mysqli->query("SET NAMES 'utf8'");

           $result = $mysqli->query("SELECT rating FROM `Previous_movies_rating`");

           while ($stroka = mysqli_fetch_array($result)){
               echo"<option>" . $stroka['rating'] . "</option>";*/
             }
            ?>
            <a href="javascript:void(0);" class="add_button_Ratings" title="Add field"><img src="../img/add-icon.png" width='10'/></a>
          </div>
        </select> -->
           <input type="text" name="field_name_Ratings[]" value=""/>
           <a href="javascript:void(0);" class="add_button_Ratings" title="Add field"><img src="../img/add-icon.png" width='10'/></a>
       </div>
   </div>

   Дата народження: <input type="date" name="date_of_birth" maxlength="50" tabindex="2" required><br>
   Заробітня плата:<input type="text" name="salary" maxlength="50" tabindex="2" required><br>
   Місце народження: <input type="text" name="place_of_birth" maxlength="50" tabindex="2" required><br>
   E-mail: <input type="text" maxlength="50" name="email" tabindex="2" required><br>
</div>

<input type="submit" value="Додати" name="add"><br>
</form>



</body>

</html>


<?php
if (isset($_POST['add'])){



$phones = $_POST['field_name_Phones'];


$contacts = $_POST['field_name_Contacts'];

$ratings = $_POST['field_name_Ratings'];

print_r($ratings);

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

$amount_of_films = count($ratings);

$rating = 0;

foreach ($ratings as $value) {
  $rating += $value;
}

$rating /= $amount_of_films;

$mysql = new mysqli('localhost','root','root','filmStudio');
$mysql->query("SET NAMES 'utf8'");

$max_id = $mysql->query("SELECT MAX(`others_id`) FROM `Others`");
$stroka = mysqli_fetch_array($max_id);
$id = $stroka[0] + 1;

$result = $mysql->query("INSERT INTO `Others` (`others_id`, `others_salary`, `others_name`, `others_surname`,
   `others_middle_name`, `others_home_address`, `others_work_since` ,`others_experience`, `amount_of_films_others_took_part_in`,
 `rating_of_employee`, `others_date_of_birth`, `others_place_of_birth`, `name_of_position`, `others_e-mail`)
VALUES ('$id', '$salary', '$name', '$last_name', '$middle_name', '$address', '$work_since', '$years', '$amount_of_films','$rating',
   '$birthDate', '$place_of_birth', 'Режисер', '$email')");

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

header('Location: /filmStudio/gen_producer/main.php');


}
 ?>
