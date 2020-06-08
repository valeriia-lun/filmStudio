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
        var fieldHTMLRatings = '<div><input type="text" class="form-control" name="field_name_Ratings[]" value=""/><a href="javascript:void(0);" class="remove_button_Ratings"><img src="../img/delete_icon.png" width=\'20\' height=\'20\'/></a></div>'; //New input field html
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
      <label class=" mr-sm-2" >Генеральний продюсер</label>
    </form>
  </div>
</nav>
<br><br><h1 class="colorForAllText">Додати сценариста</h1><br>


<form action="" method="post">

<div class="row text-center" style="margin:10px;">
    <div class=" container col-3" >
    <label class="colorText">Ім'я: </label><input type="text" class="form-control" name="first_name" maxlength="50" tabindex="2" required><br>
  </div>
  <div class="container col-3">
  <label class="colorText">Прізвище:</label> <input type="text" class="form-control" name="last_name" maxlength="50" tabindex="2" required><br>
  </div>
  <div class="container col-3">
  <label class="colorText">По-батькові: </label><input type="text" class="form-control" name="middle_name" maxlength="50" tabindex="2" required><br>
  </div>  </div></br>

  <div class="row">
  <div class=" container col-3">
  <label class="colorText">Телефон:</label>
  <div class="field_wrapper_Phones">
         <div>
             <input type="text" class="form-control" name="field_name_Phones[]" value=""/>
             <a href="javascript:void(0);" class="add_button_Phones" title="Add field"><img src="../img/add_icon.png"  height='35' width='35'/></a>
         </div>
     </div>
     </div>
     <div class=" container col-3">
     <label class="colorText">Контакти близьких:</label>
  <div class="field_wrapper_Contacts">
         <div>
             <input type="text" class="form-control" name="field_name_Contacts[]" value=""/>
             <a href="javascript:void(0);" class="add_button_Contacts" title="Add field"><img src="../img/add_icon.png" height='35' width='35'/></a>
         </div>
     </div>
  </div>
  <div class=" container col-3">
  <label class="colorText">Рейтинги фільмів, у яких брал(а) участь:</label>
  <div class="field_wrapper_Ratings">
      <div>
          <input type="text" class="form-control" name="field_name_Ratings[]" value=""/>
          <a href="javascript:void(0);" class="add_button_Ratings" title="Add field"><img src="../img/add_icon.png" height='35' width='35'/></a>
      </div>     </div>
  </div>
    </div> </br> 

    <div class="row">
  <div class=" container col-3">
    <label class="colorText">Домашня адреса: </label><input type="text" class="form-control" name="address" maxlength="50" tabindex="2" required><br>
    </div>


    <div class=" container col-3">
  <label class="colorText">Стаж: </label><input type="text" class="form-control" name="years" maxlength="50" tabindex="2" required><br>
  </div>
  <div class=" container col-3">
  <label class="colorText"> Працюе з: </label><input type="date" class="form-control" name="work_since" maxlength="50" tabindex="2" required><br>
  </div>
  </div></br> 

  
  <div class="row">
  <div class=" container col-3">
  <label class="colorText">Дата народження: </label><input type="date" class="form-control" name="date_of_birth" maxlength="50" tabindex="2" required><br>
  </div>
  <div class=" container col-3">
  <label class="colorText">Заробітня плата:</label><input type="text" class="form-control"  name="salary" maxlength="50" tabindex="2" required><br>
  </div>
  <div class=" container col-3">
  <label class="colorText">Місце народження: </label><input type="text" class="form-control" name="place_of_birth" maxlength="50" tabindex="2" required><br>
  </div> </div></br>

  <div class="row">
  <div class=" container col-4">
  <label class="colorText">E-mail: </label><input type="text" maxlength="50" class="form-control" name="email" tabindex="2" required><br>
  </div> </div>
  <div class="btn">
<input type="submit" class ="button btn btn-primary" value="Додати" name="add">
</div><br><br><br>
</form>


</body>

</html>


<?php
if (isset($_POST['add'])){

$mysql = new mysqli('localhost','root','root','filmStudio');

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
   '$birthDate', '$place_of_birth', 'Сценарист', '$email')");

   if ($result) {
      echo "Success!";
    }
  else {
       echo "Error! $mysql->error <br>";
     }

foreach ($phones as $value) {
  $mysql->query("INSERT INTO `Others_phones`(`others_phone_number`, `others_id`)
  VALUES ('$value','$id')");

}


foreach ($contacts as $value) {
$result = $mysql->query("INSERT INTO `Others_contacts_of_relatives`(`others_relatives_phone_numbers`, `others_id`)
  VALUES ('$value','$id')");
//  if ($result) {
//     echo "Success!";//
//   }
 //else {
  //    echo "Error! $mysql->error <br>";
  //  }
}



foreach ($ratings as $value) {
//  echo "PEZDA";
//   $id_r = $mysql->query("SELECT id_previous_movie_rating FROM `Previous_movies_rating` WHERE rating = $value");
$value *= 10;
    $result = $mysql->query("INSERT INTO `Others_previous_movies_ratings`(`id_previous_movie_rating`, `others_id`)
  VALUES ('$value','$id')");
}





$mysql->close();

header('Location: successfullyAdded.php');

}

 ?>
