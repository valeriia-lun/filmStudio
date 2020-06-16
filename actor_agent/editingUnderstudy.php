<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
      var dateOfBirthh = document.getElementById('date_of_birth');
      var dateOfWorkSince = document.getElementById('work_since');
      var dateOfWorkUntil = document.getElementById('work_until');


      dateOfBirthh.addEventListener("submit", function() {
        if(dateOfBirthh >= Date()){
                alert("Дата народження повинна бути меншою за сьогодні!!!");
                document.getElementById('date_of_birth').value = "";
              }
      });

      dateOfWorkSince.addEventListener("submit", function() {
        if(dateOfWorkSince.value > dateOfWorkUntil.value){
                alert("Дата початку роботи повинна бути меншою або рівною за дату закінчення роботи!!!");
                document.getElementById('work_since').value = "";
              }
      });

      dateOfWorkUntil.addEventListener("submit", function() {
        if(dateOfWorkSince.value > dateOfWorkUntil.value){
                alert("Дата початку роботи повинна бути меншою або рівною за дату закінчення роботи!!!");
                document.getElementById('work_until').value = "";
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
        var fieldHTMLRatings = '<div><div class=" container col-5"><input type="text" class="form-control" name="field_name_Ratings[]" value=""/><a href="javascript:void(0);" class="remove_button_Ratings"><img src="../img/delete_icon.png" width=\'20\' height=\'20\'/></a></div></div>'; //New input field html
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
        var fieldHTMLSkills = '<div><select class="form-control" name="field_name_Skills[]"><option value="1" selected>швидко бігає</option><option value="2">стрибає</option><option value="3">акробат</option><option value="4">плаває</option><option value="5">катається на ковзанах</option><option value="6">професійний плавець</option><option value="7">каскадер</option><option value="8">пригає на скакалці</option><option value="9">жонглює</option><option value="10">знає іспанську</option></select><a href="javascript:void(0);" class="remove_button_Skills"><img src="../img/delete_icon.png" width=\'20\' height=\'20\'/></a></div>'; //New input field html
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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="..\style.css">
<style type="text/css">
@media screen
{
    #printOnly{display:none;}
}

@media print {

  .noprint { display: none; }
table{zoom: 40%;}
#printOnly{}
@page { margin: 0; size: landscape; }

  }
  #content {
    display: table;
}

#pageFooter {
    display: table-footer-group;
}

#pageFooter:after {
    counter-increment: page;
    content: counter(page) ;

    font-size: 20pt;
}


   figure {
    width: 75%; /* Ширина */
    float: left; /* Выстраиваем элементы по горизонтали */
    margin: 0 0 0 13%; /* Отступ слева */
    padding: 2%; /* Поля */
   }
   figure:first-child {
    margin-left: 0; /* Убираем отступ для первого элемента */
   }
  </style>
<script>
function lal(el) {
  if (el.value.match( /[^0-9]/ ) ) {
        alert( "Неправильний формат числа! \nМожна використовувати тільки цифри" );
        el.value = el.value= "" ;
    }
}
function lal2(el) {
if (el.value.match( /[^a-zA-Zа-щА-ЩЬьЮюЯяЇїІіЄєҐґ]/u )){
        alert( "Неправильний формат запису! \nМожна використовувати тільки літери!" );
        el.value = el.value= "" ;
    }
}</script>
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

<br><br><h1 class="colorForAllText">Змінити інформацію про дублера</h1>
<h1 id="printOnly" class=" colorForAllText">Дублер</h1>
<div class="noprint"><small >Поля, позначені </small><small style="color:red;">*</small><small> - обов'язкові.</small></br></br></div>


<form action="" method="post">
<div class="row text-center" style="margin:10px;">

<div class=" container col-4" >
<label class="colorText">Фото: </label><label  class="noprint" class="noprint" style="color:red;">*</label>
</div></div>
<div class="row text-center" style="margin:10px;">
<div class=" container col-6" >
<?php

$id = filter_var(trim($_POST['understudy_id']),FILTER_SANITIZE_STRING);
//echo $id;
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");

$result = $mysql->query("SELECT `understudy_photo` FROM `understudies_photo` WHERE `understudy_id` = $id");

while($stroka = mysqli_fetch_array($result)){

$link = $stroka[0];

echo "<p></p><figure><img src='$link' width=\"100%\"  alt=\"фото\" /></figure>";

}

?>


</div></div>
<div class="row text-center" style="margin:10px;">
    <div class=" container col-3" >
    <label class="colorText">Ім'я: </label><label class="noprint" style="color:red;">*</label>
    <?php
    if (isset($_POST['editBtn'])){
      $id = filter_var(trim($_POST['understudy_id']),FILTER_SANITIZE_STRING);

    }

  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_name` FROM `Understudies` WHERE `understudy_id` = $id");

  $res = mysqli_fetch_array($result);
  echo "<input type=\"hidden\" value = \"" .$id . "\" name=\"understudy_id_\" >";

  echo "<input type= \"text\"  onkeyup=\"lal2(this)\"  maxlength=\"50\"  class=\"form-control\" tabindex=\"2\" name=\"first_name\" value=\"$res[0]\" required>";
     ?><br>
   </div>
  <div class="container col-3">
  <label class="colorText">Прізвище:</label><label class="noprint" style="color:red;">*</label>
    <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_surname` FROM `Understudies` WHERE `understudy_id` = $id");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"text\"  onkeyup=\"lal2(this)\"  maxlength=\"50\"  class=\"form-control\" tabindex=\"2\" name=\"last_name\" value=\"$res[0]\" required>";
     ?><br>
     </div>
  <div class="container col-3">
  <label class="colorText">По-батькові: </label><label class="noprint" style="color:red;">*</label> <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_middle_name` FROM `Understudies` WHERE `understudy_id` = $id");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"text\"  onkeyup=\"lal2(this)\"  maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"middle_name\" value=\"$res[0]\" required>";
     ?><br>
    </div>
</div></br>



<div class="row text-center" style="margin:10px;">
  <div class=" container col-3">
  <label class="colorText">Телефон:</label> <label class="noprint" style="color:red;">*</label><div class="field_wrapper_Phones">
  <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_phone_number` FROM `Understudy_phones` WHERE `understudy_id` = $id");

  $rows = mysqli_num_rows($result); // количество полученных строк
  for ($i = 0 ; $i < $rows ; ++$i)
  {
  $row = mysqli_fetch_row($result);
      for ($j = 0 ; $j < 1 ; ++$j){
        echo "<div><input type= \"text\" maxlength=\"50\" onkeyup=\"lal(this)\" class=\"form-control\" name=\"field_name_Phones[]\" tabindex=\"2\" value=\"$row[$j]\" required>";
        if($i == 0){
            echo "<a href=\"javascript:void(0);\" class=\"noprint  add_button_Phones\" title=\"Add field\"><img src=\"../img/add_icon.png\" height='35' width='35'/></a></div>";
        } else{
              echo "<a href=\"javascript:void(0);\" class=\" noprint remove_button_Phones\"><img src=\"../img/delete_icon.png\" height='20' width='20'/></a></div>";
        }
      }
  }
  ?></div><br></div>
<div class=" container col-3">
<label class="colorText">Контакти близьких:</label> <label class="noprint" style="color:red;">*</label><div class="field_wrapper_Contacts">
         <?php
       $mysql = new mysqli("localhost","root","root","filmstudio");
       $mysql->query("SET NAMES 'utf8'");
       $resultt = $mysql->query("SELECT `understudy_relatives_phone_numbers`  FROM `Understudies_contacts_of_relatives` WHERE `understudy_id` = $id");


      $rows = mysqli_num_rows($resultt); // количество полученных строк
      for ($i = 0 ; $i < $rows ; ++$i)
      {
          $row = mysqli_fetch_row($resultt);
              for ($j = 0 ; $j < 1 ; ++$j){
                echo "<div><input type= \"text\" onkeyup=\"lal(this)\" maxlength=\"50\" class=\"form-control\" name=\"field_name_Contacts[]\" tabindex=\"2\" value=\"$row[$j]\" required>";
                if($i == 0){
                    echo "<a href=\"javascript:void(0);\" class=\" noprint add_button_Contacts\" title=\"Add field\"><img src=\"../img/add_icon.png\" height='35' width='35'/></a></div>";
                } else{
                      echo "<a href=\"javascript:void(0);\" class=\"noprint remove_button_Contacts\"><img src=\"../img/delete_icon.png\" height='20' width='20'/></a></div>";
                }
              }
      }
       ?></div><br>
     </div>

<div class=" container col-3">
<label class="colorText">Рейтинги фільмів, у яких брал(а) участь: </label><div class="field_wrapper_Ratings">
   <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $resultt = $mysql->query("SELECT `rating` FROM `Previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating`  FROM `Understudy_previous_movies_ratings` WHERE `understudy_id` = $id)");
  // if ($resultt) {
  // }
  // else {
  //    echo "Error! $mysql->error <br>";
  //  }

  $rows = mysqli_num_rows($resultt); // количество полученных строк
  for ($i = 0 ; $i < $rows ; ++$i)
  {
    $row = mysqli_fetch_row($resultt);
        for ($j = 0 ; $j < 1 ; ++$j){
          echo "<div><div class=\" container col-5\"><input type= \"text\" maxlength=\"50\" class=\"form-control\" name=\"field_name_Ratings[]\" tabindex=\"2\" value=\"$row[$j]\" required></div>";
          if($i == 0){
              echo "<a href=\"javascript:void(0);\" class=\"noprint add_button_Ratings\" title=\"Add field\"><img src=\"../img/add_icon.png\" height='35' width='35'/></a></div>";
          } else{
                echo "<a href=\"javascript:void(0);\" class=\" noprint remove_button_Ratings\"><img src=\"../img/delete_icon.png\" height='20' width='20'/></a></div>";
          }
        }
  }
  ?></div>
  </div></div></br>






<div class="row text-center" style="margin:10px;">

<div class=" container col-2">
    <label class="colorText">Дата народження: </label> <label class="noprint" style="color:red;">*</label><?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_date_of_birth` FROM `Understudies` WHERE `understudy_id` = $id");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"date\" maxlength=\"50\"  class=\"form-control\" tabindex=\"2\" id=\"date_of_birth\" name=\"date_of_birth\" value=\"$res[0]\" required>";
    ?><br>
    </div>

    <div class=" container col-3">
    <label class="colorText">Заробітня плата:</label><label class="noprint" style="color:red;">*</label><?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_salary` FROM `Understudies` WHERE `understudy_id` = $id");

  $res = mysqli_fetch_array($result);

  echo "<div class=\" container col-5\"><input type= \"text\" maxlength=\"50\"  onkeyup=\"lal(this)\" class=\"form-control\" tabindex=\"2\" name=\"salary\" value=\"$res[0]\" required></div>";
   ?></div>


 <div class=" container col-3">
<label class="colorText">Стаж: </label><label class="noprint" style="color:red;">*</label>
  <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_experience` FROM `Understudies` WHERE `understudy_id` = $id");

  $res = mysqli_fetch_array($result);

  echo "<div class=\" container col-5\"><input type= \"text\" maxlength=\"50\" onkeyup=\"lal(this)\" class=\"form-control\" tabindex=\"2\" name=\"years\" value=\"$res[0]\" required></div>";
   ?><br>
  </div>
<div class=" container col-2">
<label class="colorText">Працює з: </label><label class="noprint" style="color:red;">*</label><?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_works_since` FROM `Understudies` WHERE `understudy_id` = $id");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"date\" maxlength=\"50\"  class=\"form-control\" tabindex=\"2\" id=\"work_since\" name=\"work_since\" value=\"$res[0]\" required>";
    ?></div>
    </div></br>





 <div class="row text-center" style="margin:10px;">
 <div class=" container col-5">
  <label class="colorText">Місце народження:</label> <label class="noprint" style="color:red;">*</label> <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_place_of_birth` FROM `Understudies` WHERE `understudy_id` = $id");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"text\" maxlength=\"50\"  class=\"form-control\" tabindex=\"2\" name=\"place_of_birth\" value=\"$res[0]\" required>";
   ?><br></div>

    <div class=" container col-5">
  <label class="colorText"> Домашня адреса:</label><label class="noprint" style="color:red;">*</label>
     <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_home_address` FROM `Understudies` WHERE `understudy_id` = $id");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"text\" maxlength=\"50\"  class=\"form-control\" tabindex=\"2\" name=\"address\" value=\"$res[0]\" required>";
     ?><br>

</div>

  </div></br>





<div class="row " style="margin:10px;">

<div class=" container col-4">
  <label class="colorText"> Працює до:</label>
  <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_works_until` FROM `Understudies` WHERE `understudy_id` = $id");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"date\" maxlength=\"50\"  class=\"form-control\" tabindex=\"2\" id=\"work_until\" name=\"work_until\" value=\"$res[0]\">";
    ?><br>
    </div>

   <div class=" container col-4">
   <label class="colorText">E-mail: </label> <label class="noprint" style="color:red;">*</label><?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $result = $mysql->query("SELECT `understudy_e-mail` FROM `Understudies` WHERE `understudy_id` = $id");

  $res = mysqli_fetch_array($result);

  echo "<input type= \"text\" maxlength=\"50\"  class=\"form-control\" tabindex=\"2\" name=\"email\" value=\"$res[0]\" required>";
   ?><br>
   </div></div></br>

   <div class="row " style="margin:10px;">
<div class=" container col-12">
<label class="colorText" >Фільми, в яких брали участь:</label>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");

$result_films = $mysqli->query("SELECT `name_of_movie` FROM `movie` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM  `understudies_filmcrew` WHERE `understudy_id` = $id)");
while($stroka = mysqli_fetch_array($result_films)){
  echo " &nbsp; &nbsp;&nbsp;\"$stroka[0]\"";
}
?>
</div></div></br>






   </br>  </br>
<hr  size="50"  color="black;" /></br></br>
<h1 class="colorForAllText text-center" >Зовнішність</h1>
<div class="row">
  <div class=" container col-3">
<label class="colorText">Стать: </label><label style="color:red;">*</label>
     <select class="form-control" name="sex">
     <?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT `understudy_sex` FROM `Understudies` WHERE `understudy_id` = $id");

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

      </div>
   <div class=" container col-3">
   <label class="colorText">Зріст: </label> <label class="noprint" style="color:red;">*</label> <?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT `understudy_height` FROM `Understudies` WHERE `understudy_id` = $id");

     $res = mysqli_fetch_array($result);

     echo "<div class=\" container col-5\"><input type= \"text\" maxlength=\"50\" onkeyup=\"lal(this)\" class=\"form-control\" tabindex=\"2\" name=\"height\" value=\"$res[0]\" required></div>";
      ?><br>
  </div>
    <div class=" container col-3">
    <label class="colorText">  Колір волосся: </label><label class="noprint" style="color:red;">*</label>
     <select class="form-control" name="hairColor">
       <?php
        $mysql = new mysqli("localhost","root","root","filmstudio");
        $mysql->query("SET NAMES 'utf8'");
        $result = $mysql->query("SELECT `understudy_color_of_hair` FROM `Understudies` WHERE `understudy_id` = $id");

        $res = mysqli_fetch_array($result);

        echo "<option selected>$res[0]</option> ";

        if($res[0] == 'Рудий'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }

        if($res[0] == 'Блонд'){
          echo "<option>Рудий</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }

        if($res[0] == 'Брюнет'){
          echo "<option>Блонд</option>";
          echo "<option>Рудий</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }

        if($res[0] == 'Шатен'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Рудий</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }

        if($res[0] == 'Русявий'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Рудий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }


        if($res[0] == 'Рожевий'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рудий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }


        if($res[0] == 'Синий'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Рудий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }


        if($res[0] == 'Сивий'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Рудий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }


        if($res[0] == 'Червоний'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Рудий</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }


        if($res[0] == 'Помаранчевий'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Рудий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }


        if($res[0] == 'Жовтий'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Рудий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }


        if($res[0] == 'Зелений'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Рудий</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Фіолетовий</option>";
        }



        if($res[0] == 'Блакитний'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Рудий</option>";
          echo "<option>Фіолетовий</option>";
        }

        if($res[0] == 'Фіолетовий'){
          echo "<option>Блонд</option>";
          echo "<option>Брюнет</option>";
          echo "<option>Шатен</option>";
          echo "<option>Русявий</option>";
          echo "<option>Рожевий</option>";
          echo "<option>Синий</option>";
          echo "<option>Сивий</option>";
          echo "<option>Червоний</option>";
          echo "<option>Помаранчевий</option>";
          echo "<option>Жовтий</option>";
          echo "<option>Зелений</option>";
          echo "<option>Блакитний</option>";
          echo "<option>Рудий</option>";
        }

         ?><br>

     </select><br>


     </div></div>


<div class="row">
<div class=" container col-3">
<label class="colorText">   Довжина волосся: </label><label class="noprint" style="color:red;">*</label><?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT `understudy_length_of_hair` FROM `Understudies` WHERE `understudy_id` = $id");

     $res = mysqli_fetch_array($result);

     echo "<div class=\" container col-5\"><input type= \"text\" maxlength=\"50\" onkeyup=\"lal(this)\" class=\"form-control\" tabindex=\"2\" name=\"hairLen\" value=\"$res[0]\" required></div>";
      ?><br>
</div>

<div class=" container col-3">
<label class="colorText">  Розмір взуття: </label><label class="noprint" style="color:red;">*</label><?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT `understudy_shoe_size` FROM `Understudies` WHERE `understudy_id` = $id");

     $res = mysqli_fetch_array($result);

     echo "<div class=\" container col-5\"><input type= \"text\" maxlength=\"50\" onkeyup=\"lal(this)\" class=\"form-control\" tabindex=\"2\" name=\"shoe\" value=\"$res[0]\" required></div>";
      ?><br>
</div>
   <div class=" container col-3">
   <label class="colorText">   Розмір одягу:</label><label class="noprint" style="color:red;">*</label> <?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT `understudy_clothing_size` FROM `Understudies` WHERE `understudy_id` = $id");

     $res = mysqli_fetch_array($result);

     echo "<div class=\" container col-5\"><input type= \"text\" maxlength=\"50\" onkeyup=\"lal(this)\" class=\"form-control\" tabindex=\"2\" name=\"size\" value=\"$res[0]\" required></div>";
      ?><br>
 </div>
  </div>





<div class="row">
<div class=" container col-3">
   <label class="colorText">Колір очей: </label><label class="noprint" style="color:red;">*</label>
     <select class="form-control" name="eyes">
       <?php
        $mysql = new mysqli("localhost","root","root","filmstudio");
        $mysql->query("SET NAMES 'utf8'");
        $result = $mysql->query("SELECT `understudy_color_of_eyes` FROM `Understudies` WHERE `understudy_id` = $id");

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

     </div>
   <div class=" container col-3">
   <label class="colorText">  Статура: </label><label class="noprint" style="color:red;">*</label>
     <select class="form-control" name="stature">
     <?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT `understudy_stature` FROM `Understudies` WHERE `understudy_id` = $id");

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

   <div class=" container col-3">
   <label class="colorText">   Національність: </label><label class="noprint" style="color:red;">*</label> <?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT `understudy_nationality` FROM `Understudies` WHERE `understudy_id` = $id");

     $res = mysqli_fetch_array($result);

     echo "<input type= \"text\"  onkeyup=\"lal2(this)\"  maxlength=\"50\"  class=\"form-control\" tabindex=\"2\" name=\"nationality\" value=\"$res[0]\" required>";
      ?><br>
    </div>    </div>

<div class="row">
<div class=" container col-4">
<label class="colorText">     Інше:</label> <?php
     $mysql = new mysqli("localhost","root","root","filmstudio");
     $mysql->query("SET NAMES 'utf8'");
     $result = $mysql->query("SELECT `understudy_other_appearance` FROM `Understudies` WHERE `understudy_id` = $id");

     $res = mysqli_fetch_array($result);

     echo "<input type= \"text\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"otherApp\" value=\"$res[0]\">";
      ?><br>
  </div>
  <div class=" container col-4">
  <label class="colorText">  Особливі навички:   </label><div class="field_wrapper_Skills">
    <select class="form-control">
    <?php
    $mysql = new mysqli("localhost","root","root","filmstudio");
    $mysql->query("SET NAMES 'utf8'");
    $result = $mysql->query("SELECT `skill` FROM `Skills` WHERE `skills_id` IN (SELECT `skills_id` FROM `Understudies_skills` WHERE `understudy_id` = $id)");
    $resulttt = $mysql->query("SELECT `skills_id` FROM `Understudies_skills` WHERE `understudy_id` = $id");

    $rows = mysqli_num_rows($result); // количество полученных строк
    for ($i = 0 ; $i < $rows ; ++$i)
    {
    $row = mysqli_fetch_row($result);
    $roww = mysqli_fetch_row($resulttt);
      for ($j = 0 ; $j < 1 ; ++$j){
        echo "<div><option value=\"$roww[$j]\" selected>$row[$j]</option>";
        if($row[$j] == 'швидко бігає'){
          echo "<option value=\"1\">стрибає</option>";
          echo "<option value=\"2\">акробат</option>";
          echo "<option value=\"3\">плаває</option>";
          echo "<option value=\"4\">катається на ковзанах</option>";
          echo "<option value=\"5\">професійний плавець</option>";
          echo "<option value=\"6\">каскадер</option>";
          echo "<option value=\"7\">пригає на скакалці</option>";
          echo "<option value=\"8\">жонглює</option>";
          echo "<option value=\"9\">знає іспанську</option>";
        }
        if($row[$j] == 'акробат'){
          echo "<option value=\"2\">стрибає</option>";
          echo "<option value=\"1\">швидко бігає</option>";
          echo "<option value=\"4\">плаває</option>";
          echo "<option value=\"5\">катається на ковзанах</option>";
          echo "<option value=\"6\">професійний плавець</option>";
          echo "<option value=\"7\">каскадер</option>";
          echo "<option value=\"8\">пригає на скакалці</option>";
          echo "<option value=\"9\">жонглює</option>";
          echo "<option value=\"10\">знає іспанську</option>";
        }
        if($row[$j] == 'плаває'){
          echo "<option value=\"2\">стрибає</option>";
          echo "<option value=\"3\">акробат</option>";
          echo "<option value=\"1\">швидко бігає</option>";
          echo "<option value=\"5\">катається на ковзанах</option>";
          echo "<option value=\"6\">професійний плавець</option>";
          echo "<option value=\"7\">каскадер</option>";
          echo "<option value=\"8\">пригає на скакалці</option>";
          echo "<option value=\"9\">жонглює</option>";
          echo "<option value=\"10\">знає іспанську</option>";
        }
        if($row[$j] == 'катається на ковзанах'){
          echo "<option value=\"2\">стрибає</option>";
          echo "<option value=\"3\">акробат</option>";
          echo "<option value=\"4\">плаває</option>";
          echo "<option value=\"1\">швидко бігає</option>";
          echo "<option value=\"6\">професійний плавець</option>";
          echo "<option value=\"7\">каскадер</option>";
          echo "<option value=\"8\">пригає на скакалці</option>";
          echo "<option value=\"9\">жонглює</option>";
          echo "<option value=\"10\">знає іспанську</option>";
        }
        if($row[$j] == 'професійний плавець'){
          echo "<option value=\"2\">стрибає</option>";
          echo "<option value=\"3\">акробат</option>";
          echo "<option value=\"4\">плаває</option>";
          echo "<option value=\"5\">катається на ковзанах</option>";
          echo "<option value=\"1\">швидко бігає</option>";
          echo "<option value=\"7\">каскадер</option>";
          echo "<option value=\"8\">пригає на скакалці</option>";
          echo "<option value=\"9\">жонглює</option>";
          echo "<option value=\"10\">знає іспанську</option>";
        }
        if($row[$j] == 'каскадер'){
          echo "<option value=\"2\">стрибає</option>";
          echo "<option value=\"3\">акробат</option>";
          echo "<option value=\"4\">плаває</option>";
          echo "<option value=\"5\">катається на ковзанах</option>";
          echo "<option value=\"6\">професійний плавець</option>";
          echo "<option value=\"1\">швидко бігає</option>";
          echo "<option value=\"8\">пригає на скакалці</option>";
          echo "<option value=\"9\">жонглює</option>";
          echo "<option value=\"10\">знає іспанську</option>";
        }
        if($row[$j] == 'пригає на скакалці'){
          echo "<option value=\"2\">стрибає</option>";
          echo "<option value=\"3\">акробат</option>";
          echo "<option value=\"4\">плаває</option>";
          echo "<option value=\"5\">катається на ковзанах</option>";
          echo "<option value=\"6\">професійний плавець</option>";
          echo "<option value=\"7\">каскадер</option>";
          echo "<option value=\"1\">швидко бігає</option>";
          echo "<option value=\"9\">жонглює</option>";
          echo "<option value=\"10\">знає іспанську</option>";
        }
        if($row[$j] == 'жонглює'){
          echo "<option value=\"2\">стрибає</option>";
          echo "<option value=\"3\">акробат</option>";
          echo "<option value=\"4\">плаває</option>";
          echo "<option value=\"5\">катається на ковзанах</option>";
          echo "<option value=\"6\">професійний плавець</option>";
          echo "<option value=\"7\">каскадер</option>";
          echo "<option value=\"8\">пригає на скакалці</option>";
          echo "<option value=\"1\">швидко бігає</option>";
          echo "<option value=\"10\">знає іспанську</option>";
        }
        if($row[$j] == 'знає іспанську'){
          echo "<option value=\"2\">стрибає</option>";
          echo "<option value=\"3\">акробат</option>";
          echo "<option value=\"4\">плаває</option>";
          echo "<option value=\"5\">катається на ковзанах</option>";
          echo "<option value=\"6\">професійний плавець</option>";
          echo "<option value=\"7\">каскадер</option>";
          echo "<option value=\"8\">пригає на скакалці</option>";
          echo "<option value=\"9\">жонглює</option>";
          echo "<option value=\"1\">швидко бігає</option>";
        }
        if($row[$j] == 'стрибає'){
          echo "<option value=\"1\">швидко бігає</option>";
          echo "<option value=\"3\">акробат</option>";
          echo "<option value=\"4\">плаває</option>";
          echo "<option value=\"5\">катається на ковзанах</option>";
          echo "<option value=\"6\">професійний плавець</option>";
          echo "<option value=\"7\">каскадер</option>";
          echo "<option value=\"8\">пригає на скакалці</option>";
          echo "<option value=\"9\">жонглює</option>";
          echo "<option value=\"10\">знає іспанську</option>";
        }
        if($i == 0){
            echo "<a href=\"javascript:void(0);\"  class=\"noprint add_button_Skills\" title=\"A                              dd field\"><img src=\"../img/add_icon.png\" height='35' width='35'/></a></div>";
        } else{
              echo "<a href=\"javascript:void(0);\"  class=\"noprint remove_button_Skills\"><img src=\"../img/delete_icon.png\" height='20' width='20'/></a></div>";
        }
      }
    }
    ?>
  </select>
  </div>
  </div>
</div>


<div class="btn noprint">
<input type="submit" class ="button btn btn-primary" value="Змінити" name="edit">
</div><br><br><br>

</form>
<div id="printOnly"><p>&nbsp;&nbsp;&nbsp;Дата друку:
  <?php
    $currentDateTime = date('Y-m-d');
    echo $currentDateTime;
  ?></p></div>

  <div id="printOnly" class="row ">
<div class="col-12 container fixed-bottom">
  <div id="content">
  <div id="pageFooter"></div></div></div></div>



<div class="btn noprint">
<button  class ="button btn btn-danger" onclick="window.print()">Друкувати</button></br></br></br>
</div>

</body>

</html>


<?php
if (isset($_POST['edit'])){

$mysql = new mysqli('localhost','root','root','filmStudio');




$phones = $_POST['field_name_Phones'];


$contacts = $_POST['field_name_Contacts'];

$ratings = $_POST['field_name_Ratings'];
$skills = $_POST['field_name_Skills'];


$id = filter_var(trim($_POST['understudy_id_']),FILTER_SANITIZE_STRING);

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

$ans = $mysql->query("UPDATE `Understudies` SET `understudy_salary` = '$salary', `understudy_name` = '$name', `understudy_surname`= '$last_name', `understudy_middle_name` = '$middle_name',
  `understudy_home_address` = '$address', `understudy_works_since` = '$work_since', `understudy_experience` = '$years',
  `understudy_date_of_birth` = '$birthDate', `understudy_e-mail` = '$email', `amount_of_films_understudy_took_part_in` = '$amount_of_films', `rating_of_employee` = '$rating',
  `understudy_place_of_birth` = '$place_of_birth', `understudy_age` = '$age', `understudy_sex` = '$sex',  `understudy_height` = '$height', `understudy_color_of_eyes` = '$eyes',
  `understudy_color_of_hair` = '$hairColor', `understudy_length_of_hair` = '$hairLen', `understudy_stature` = '$stature', `understudy_shoe_size` = '$shoe',
  `understudy_clothing_size` = '$size', `understudy_nationality` = '$nationality' WHERE `understudy_id` = '$id' ");
if ($ans) {
   echo "Success!";
 }
else {
    echo "Error! $mysql->error <br>";
  }

if($work_until != NULL){
  $anss = $mysql->query("UPDATE `Understudies` SET `understudy_works_until` = '$work_until' WHERE `understudy_id` = '$id'");
    if ($anss) {
       echo "Success!";
     }
    else {
        echo "Error! $mysql->error <br>";
      }
}


if($otherApp != NULL){
  $anss = $mysql->query("UPDATE `Understudies` SET  `understudy_other_appearance` = '$otherApp' WHERE `understudy_id` = '$id'");
    if ($anss) {
       echo "Success!";
     }
    else {
        echo "Error! $mysql->error <br>";
      }

}


$mysql->query("DELETE FROM `Understudy_phones` WHERE `understudy_id` = '$id'");
$mysql->query("DELETE FROM `Understudies_contacts_of_relatives` WHERE `understudy_id` = '$id'");
$mysql->query("DELETE FROM `Understudy_previous_movies_ratings` WHERE `understudy_id` = '$id'");



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

//   $id_r = $mysql->query("SELECT id_previous_movie_rating FROM `Previous_movies_rating` WHERE rating = $value");
$value *= 10;
    $result = $mysql->query("INSERT INTO `Understudy_previous_movies_ratings`(`id_previous_movie_rating`, `understudy_id`)
  VALUES ('$value','$id')");
}

if($skills != NULL){
  $mysql->query("DELETE FROM `Understudies_skills` WHERE `understudy_id` = '$id'");

  foreach ($skills as $value) {

  //   $id_r = $mysql->query("SELECT id_previous_movie_rating FROM `Previous_movies_rating` WHERE rating = $value");
      $result = $mysql->query("INSERT INTO `Understudies_skills`(`skills_id`, `understudy_id`)
    VALUES ('$value','$id')");
  }

  if ($result) {
     echo "Success!";
   }
 else {
      echo "Error! $mysql->error <br>";
    }
}


$mysql->close();

header('Location: successfullyEdited.php');

}




 ?>
