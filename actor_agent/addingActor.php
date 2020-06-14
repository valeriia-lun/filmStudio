<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){

        var dateOfBirthh = document.getElementById('date_of_birth');
        dateOfBirthh.addEventListener('change', function() {
          if(dateOfBirthh >= Date()){
                  alert("Дата народження повинна бути меншою за сьогодні!!!");
                  document.getElementById('date_of_birth').value = "";
                }
        });


        var maxFieldPhones = 10; //Input fields increment limitation
        var addButtonPhones = $('.add_button_Phones'); //Add button selector
        var wrapperPhones = $('.field_wrapper_Phones'); //Input field wrapper
        var fieldHTMLPhones = '<div><input type="text" class="form-control" name="field_name_Phones[]" value=""/><a href="javascript:void(0);" class="remove_button_Phones"><img src="../img/delete_icon.png" width=\'20\' height=\'20\'/></a></div>'; //New input field html
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
        var fieldHTMLContacts = '<div><input type="text" class="form-control" name="field_name_Contacts[]" value=""/><a href="javascript:void(0);" class="remove_button_Contacts"><img src="../img/delete_icon.png" width=\'20\' height=\'20\'/></a></div>'; //New input field html
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
        var fieldHTMLRatings = '<div><input type="text" class="form-control" name="field_name_Ratings[]" value=""/><a href="javascript:void(0);" class="remove_button_Ratings"><img src="../img/delete_icon.png" width=\'20\' height=\'20\' /></a></div>'; //New input field html
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



    $(function() {
    $().datepicker();
    });
});

  </script>


 <!-- Latest compiled and minified JavaScript -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
      <label class=" mr-sm-2" >Агент по акторах</label>
    </form>
  </div>
</nav>
<br><br><h1 class="colorForAllText">Додати актора</h1>
<small>Поля, позначені </small><small style="color:red;">*</small><small> - обов'язкові.</small></br></br>


<form id = "form_id" action="" method="post" >
<div class="row text-center" style="margin:10px;">
    <div class=" container col-3" >
    <label class="colorText">Ім'я: </label><label style="color:red;">*</label><input type="text" class="form-control" name="first_name" maxlength="50" tabindex="2" required><br>
  </div>
  <div class="container col-3">
  <label class="colorText">Прізвище:</label> <label style="color:red;">*</label><input type="text" class="form-control" name="last_name" maxlength="50" tabindex="2" required><br>
  </div>
  <div class="container col-3">
  <label class="colorText">По-батькові: </label><label style="color:red;">*</label><input type="text" class="form-control" name="middle_name" maxlength="50" tabindex="2" required><br>
  </div>  </div></br>

  <div class="row">
  <div class=" container col-3">
  <label class="colorText">Телефон:</label><label style="color:red;">*</label>
  <div class="field_wrapper_Phones">
         <div>
             <input type="text" onkeyup="lal(this)" class="form-control" name="field_name_Phones[]" value="" required/>
             <a href="javascript:void(0);" class="add_button_Phones" title="Add field"><img src="../img/add_icon.png"  height='35' width='35'/></a>
         </div>
     </div>
     </div>
     <div class=" container col-3">
     <label class="colorText">Контакти близьких:</label><label style="color:red;">*</label>
  <div class="field_wrapper_Contacts">
         <div>
             <input type="text" onkeyup="lal(this)" class="form-control" name="field_name_Contacts[]" value="" required/>
             <a href="javascript:void(0);" class="add_button_Contacts" title="Add field"><img src="../img/add_icon.png" height='35' width='35'/></a>
         </div>
     </div>
  </div>
  <div class=" container col-3">
  <label class="colorText">Рейтинги фільмів, у яких брал(а) участь:</label>
  <div class="field_wrapper_Ratings">
      <div>  <div class=" container col-5">
          <input type="text" style="width:100px;" class="form-control" name="field_name_Ratings[]" value=""/>
          </div>
          <a href="javascript:void(0);" class="add_button_Ratings" title="Add field"><img src="../img/add_icon.png" height='35' width='35'/></a>
      </div>     </div>
  </div>
    </div> </br>

    <div class="row">
    <div class=" container col-2">
  <label class="colorText">Дата народження: </label><label style="color:red;">*</label><input type="date" class="form-control" name="date_of_birth" maxlength="50" tabindex="2" required><br>
  </div>
  <div class=" container col-3">
  <label class="colorText">Заробітня плата:</label><label style="color:red;">*</label>
  <div class=" container col-6">
  <input onkeyup="lal(this)" type="text" class="form-control"  name="salary" maxlength="50" tabindex="2" required><br></div>
  </div>



    <div class=" container col-3">
  <label class="colorText">Стаж: </label><label style="color:red;">*</label>
  <div class=" container col-5">
  <input type="text" onkeyup="lal(this)" class="form-control" name="years" maxlength="50" tabindex="2" required><br>
  </div>
  </div>
  <div class=" container col-2">
  <label class="colorText"> Працює з: </label><label style="color:red;">*</label><input type="date" class="form-control" name="work_since" maxlength="50" tabindex="2" required><br>
  </div>
  </div></br>


  <div class="row">
  <div class=" container col-5">
    <label class="colorText">Домашня адреса: </label><label style="color:red;">*</label><input type="text" class="form-control" name="address" maxlength="50" tabindex="2" required><br>
    </div>
  <div class=" container col-5">
  <label class="colorText">Місце народження: </label><label style="color:red;">*</label><input type="text" class="form-control" name="place_of_birth" maxlength="50" tabindex="2" required><br>
  </div> </div></br>

  <div class="row">
  <div class=" container col-4">
  <label class="colorText">E-mail: </label><label style="color:red;">*</label><input type="text" maxlength="50" id='email' class="form-control" name="email" tabindex="2" required><br>
  </div> </div>

  </br>  </br>
  <hr  size="50"  color="black;" />
<h1 class="colorForAllText text-center">Зовнішність</h1>


<div class="row">
  <div class=" container col-3">
<label class="colorText">Стать: </label><label style="color:red;">*</label><select class="form-control" name="sex">
   <option selected>Жіноча</option>
   <option>Чоловіча</option>
   </select><br>
   </div>
   <div class=" container col-3">
   <label class="colorText">Зріст: </label><label style="color:red;">*</label>
 <div class=" container col-5">
   <input onkeyup="lal(this)" type="text" class="form-control" name="height" maxlength="50" tabindex="2" required><br>
 </div>
   </div>
   <div class=" container col-3">
   <label class="colorText">Колір волосся:</label><label style="color:red;">*</label>
   <select class="form-control" name="hair_color">
   <option selected>Чорний</option>
   <option>Блонд</option>
   <option>Рудий</option>
   <option>Коричневий</option>
   <option>Білий</option>
   </select>
   </div></div><br>

   <div class="row">
  <div class=" container col-3">
   <label class="colorText">Довжина волосся:</label><label style="color:red;">*</label>
<div class=" container col-5">
   <input onkeyup="lal(this)" type="text" class="form-control" name="hair_len" maxlength="50" tabindex="2" required><br>
</div>
   </div>
   <div class=" container col-3">

<label class="colorText">Розмір взуття: </label><label style="color:red;">*</label>
<div class=" container col-5">
<input onkeyup="lal(this)" type="text" class="form-control" name="shoe_size" maxlength="50" tabindex="2" required><br>
</div>
</div>
<div class=" container col-3">
<label class="colorText"> Розмір одягу: </label><label style="color:red;">*</label>
 <div class=" container col-5">
<input onkeyup="lal(this)" type="text" class="form-control" name="size" maxlength="50" tabindex="2" required><br></div>
</div>
</div><br>

<div class="row">
<div class=" container col-3">
   <label class="colorText"> Колір очей:</label><label style="color:red;">*</label>
   <select class="form-control" name="eyes">
   <option selected>Блакитний</option>
   <option>Сірий</option>
   <option>Зелений</option>
   <option>Карі</option>
   </select><br>
   </div>
   <div class=" container col-3">
   <label class="colorText"> Статура:</label><label style="color:red;">*</label>
   <select class="form-control" name="stature">
   <option selected>Худий</option>
   <option>Спортивний</option>
   <option>Товстий</option>
   </select>
   </div>
  
<div class=" container col-3">
<label class="colorText"> Національність: </label><label style="color:red;">*</label><input type="text" class="form-control" name="nationality" maxlength="50" tabindex="2" required><br>
</div> </div>
<div class="row">
  <div class=" container col-6">
  <label class="colorText"> Інше: </label><input type="text" name="other" class="form-control" maxlength="50" tabindex="2" ><br>
</div></div><br>

<div class="btn">
<input type="submit" class ="button btn btn-primary"  id='validate' value="Додати" name="add">

</div></br></br>

</br>
</form>


</body>

</html>


<?php
if (isset($_POST['add'])){

  $phones = $_POST['field_name_Phones'];


  $contacts = $_POST['field_name_Contacts'];
  $ratings = $_POST['field_name_Ratings'];

  $mysql = new mysqli('localhost','root','root','filmStudio');

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
  $age = date("Y") - date("Y",$birthDate );
  $amount_of_films = count($ratings);

  $rating = 0;

  foreach ($ratings as $value) {
    $rating += $value;
  }

  $rating /= $amount_of_films;


$max_id = $mysql->query("SELECT MAX(`actor_id`) FROM `actors`");
$stroka = mysqli_fetch_array($max_id);
$id = $stroka[0] + 1;


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



  $mysql->query("SET NAMES 'utf8'");

  $result = $mysql->query("INSERT INTO `actors` (`actor_id`, `actor_middle_name`,`actor_home_address`,`actor_works_since`,`actor_experience`,
    `rating_of_employee`, `amount_of_films_actor_took_part_in`,
    `actor_date_of_birth`, `actor_place_of_birth`, `name_of_position`, `actor_age`, `actor_sex`, `actor_height`, `actor_color_of_hair`,
    `actor_length_of_hair`, `actor_color_of_eyes`, `actor_stature`, `actor_shoe_size`, `actor_clothing_size`, `actor_nationality`,
    `actor_other_appearance`,`actor_e-mail`,
     `actor_salary`, `actor_name`, `actor_surname`)
  VALUES ('$id', '$middle_name', '$address', '$work_since', '$years', '$rating', '$amount_of_films', '$birthDate', '$place_of_birth',
  'Актор', '$age', '$sex', '$height', '$hairColor', '$hairLen', '$eyes', '$stature', '$shoe', '$size', '$nationality', '$otherApp', '$email',
'$salary', '$name', '$last_name')");

if ($result) {
   echo "Success!";
 }
else {
    echo "Error! $mysql->error <br>";
  }

  foreach ($phones as $value) {
    $mysql->query("INSERT INTO `actors_phones`(`actor_phone_number`, `actor_id`)
    VALUES ('$value','$id')");

  }


  foreach ($contacts as $value) {
  $result = $mysql->query("INSERT INTO `actor_contacts_of_relatives`(`actor_relatives_phone_numbers`, `actor_id`)
    VALUES ('$value','$id')");
    if ($result) {
       echo "Success!";
     }
   else {
        echo "Error! $mysql->error <br>";
      }
  }



  foreach ($ratings as $value) {
  //   $id_r = $mysql->query("SELECT id_previous_movie_rating FROM `Previous_movies_rating` WHERE rating = $value");
  $value *= 10;
      $result = $mysql->query("INSERT INTO `actors_previous_movies_ratings`(`id_previous_movie_rating`, `actor_id`)
    VALUES ('$value','$id')");
  }






  $mysql->close();

  header('Location: successfullyAdded.php');

}

 ?>
