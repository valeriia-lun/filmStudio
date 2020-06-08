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


        var maxFieldSkills = 10; //Input fields increment limitation
        var addButtonSkills = $('.add_button_Skills'); //Add button selector
        var wrapperSkills = $('.field_wrapper_Skills'); //Input field wrapper
        var fieldHTMLSkills = '<div><select name="field_name_Skills[]"><option value="1" selected>швидко бігає</option><option value="2">стрибає</option><option value="3">акробат</option><option value="4">плаває</option><option value="5">катається на ковзанах</option><option value="6">професійний плавець</option><option value="7">каскадер</option><option value="8">пригає на скакалці</option><option value="9">жонглює</option><option value="10">знає іспанську</option></select><a href="javascript:void(0);" class="remove_button_Skills"><img src="../img/delete-icon.png" /></a></div>'; //New input field html
        var xSkills = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButtonSkills).click(function(){
            //Check maximum number of input fields
            if(xSkills < maxFieldSkills){
                xSkills++; //Increment field counter
                $(wrapperSkills).append(fieldHTMLSkills); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapperSkills).on('click', '.remove_button_Skills', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            xSkills--; //Decrement field counter
        });

    });

    $(function() {
    $().datepicker();
    });


  </script>
</head>
<body>
<h1>Додати дублера</h1>

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
            <input type="text" name="field_name_Ratings[]" value=""/>
            <a href="javascript:void(0);" class="add_button_Ratings" title="Add field"><img src="../img/add-icon.png" width='10'/></a>
        </div>
    </div>

    Дата народження: <input type="date" name="date_of_birth" maxlength="50" tabindex="2" required><br>
    Заробітня плата:<input type="text" name="salary" maxlength="50" tabindex="2" required><br>
    Місце народження: <input type="text" name="place_of_birth" maxlength="50" tabindex="2" required><br>
    E-mail: <input type="text" maxlength="50" name="email" tabindex="2" required><br>
    </div>

  <h1>Зовнішність</h1>
  <div style="float: left;">
     Стать: <select name="sex">
     <option selected>Жіноча</option>
     <option>Чоловіча</option>
     </select><br>

     Зріст: <input type="text" name="height" maxlength="50" tabindex="2" required><br>
     Колір волосся:
     <select name="hair_color">
     <option selected>Чорний</option>
     <option>Блонд</option>
     <option>Рудий</option>
     <option>Коричневий</option>
     <option>Білий</option>
     </select><br>

     Довжина волосся:<input type="text" name="hair_len" maxlength="50" tabindex="2" required><br>

     Колір очей:
     <select name="eyes">
     <option selected>Блакитний</option>
     <option>Сірий</option>
     <option>Зелений</option>
     <option>Карі</option>
     </select><br>

     Статура:
     <select name="stature">
     <option selected>Худий</option>
     <option>Спортивний</option>
     <option>Товстий</option>
     </select><br>
  </div>
  <div>
     Розмір взуття: <input type="text" name="shoe_size" maxlength="50" tabindex="2" required><br>
     Розмір одягу: <input type="text" name="size" maxlength="50" tabindex="2" required><br>
     Національність: <input type="text" name="nationality" maxlength="50" tabindex="2" required><br>
     Інше: <input type="text" name="other" maxlength="50" tabindex="2" required><br>
  </div>

<div style="clear: left;">
  Особливі навички:

  <div class="field_wrapper_Skills">
         <div>
             <select name="field_name_Skills[]">
                <option value="1" selected>швидко бігає</option>
                <option value="2">стрибає</option>
                <option value="3">акробат</option>
                <option value="4">плаває</option>
                <option value="5">катається на ковзанах</option>
                <option value="6">професійний плавець</option>
                <option value="7">каскадер</option>
                <option value="8">пригає на скакалці</option>
                <option value="9">жонглює</option>
                <option value="10">знає іспанську</option>
              </select>
             <a href="javascript:void(0);" class="add_button_Skills" title="Add field"><img src="../img/add-icon.png" width='10'/></a>
         </div>
     </div>
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
  $id = 222;

  $age = date("Y") - date("Y",filter_var(trim($_POST['date_of_birth']),FILTER_SANITIZE_STRING));
  $sex = filter_var(trim($_POST['sex']),FILTER_SANITIZE_STRING);
  $height = filter_var(trim($_POST['height']),FILTER_SANITIZE_STRING);
  $hairColor = filter_var(trim($_POST['hair_color']),FILTER_SANITIZE_STRING);
  $hairLen = filter_var(trim($_POST['hair_len']),FILTER_SANITIZE_STRING);
  $eyes = filter_var(trim($_POST['eyes']),FILTER_SANITIZE_STRING);
  $stature = filter_var(trim($_POST['stature']),FILTER_SANITIZE_STRING);
  $shoe = filter_var(trim($_POST['shoe_size']),FILTER_SANITIZE_STRING);
  $size = filter_var(trim($_POST['size']),FILTER_SANITIZE_STRING);
  $nationality =  filter_var(trim($_POST['nationality']),FILTER_SANITIZE_STRING);
  $otherApp =  filter_var(trim($_POST['other']),FILTER_SANITIZE_STRING);


  $mysql = new mysqli('localhost','root','root','filmStudio');
  $max_id = $mysql->query("SELECT MAX(`understudy_id`) FROM `Understudies`");
  $stroka = mysqli_fetch_array($max_id);
  $id = $stroka[0] + 1;

  $mysql->query("SET NAMES 'utf8'");

  $result = $mysql->query("INSERT INTO `Understudies` (`understudy_id`,
    `understudy_salary`,
    `understudy_name`,
    `understudy_surname`, `understudy_middle_name`,
    `understudy_home_address`,`understudy_works_since`,`understudy_experience`,
    `rating_of_employee`, `amount_of_films_understudy_took_part_in`,
    `understudy_date_of_birth`, `understudy_place_of_birth`, `name_of_position`, `understudy_age`, `understudy_sex`, `understudy_height`, `understudy_color_of_hair`,
    `understudy_length_of_hair`, `understudy_color_of_eyes`,`understudy_other_appearance`, `understudy_stature`, `understudy_shoe_size`, `understudy_clothing_size`, `understudy_nationality`,
    `understudy_e-mail`
      )
  VALUES ('$id','$salary',
     '$name', '$last_name','$middle_name',
     '$address', '$work_since', '$years', '$rating',
      '$amount_of_films', '$birthDate', '$place_of_birth',
  'Дублер', '$age', '$sex', '$height', '$hairColor', '$hairLen', '$eyes','$otherApp', '$stature', '$shoe', '$size', '$nationality',  '$email')");

  if ($result) {
   echo "Success!";
  }
  else {
    echo "Error! $mysql->error <br>";
  }

  foreach ($phones as $value) {
    $mysql->query("INSERT INTO `Understudy_phones`(`understudy_phone_number`, `understudy_id`)
    VALUES ('$value','$id')");

  }


  foreach ($contacts as $value) {
  $result = $mysql->query("INSERT INTO `Understudies_contacts_of_relatives`(`understudy_relatives_phone_numbers`, `understudy_id`)
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
      $result = $mysql->query("INSERT INTO `Understudy_previous_movies_ratings`(`id_previous_movie_rating`, `understudy_id`)
    VALUES ('$value','$id')");
  }






$mysql->close();

header('Location: /filmStudio/actor_agent/main.php');

}

 ?>
