<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>

    $(document).ready(function(){
      var dateOfBirthh = document.getElementById('date_of_birth');
      var dateOfWorkSince = document.getElementById('work_since');
      var dateOfWorkUntil = document.getElementById('work_until');


      dateOfBirthh.addEventListener('change', function() {
        if(dateOfBirthh >= Date()){
                alert("Дата народження повинна бути меншою за сьогодні!!!");
                document.getElementById('date_of_birth').value = "";
              }
      });

      dateOfWorkSince.addEventListener('change', function() {
        if(dateOfWorkSince.value > dateOfWorkUntil.value){
                alert("Дата початку роботи повинна бути меншою або рівною за дату закінчення роботи!!!");
                document.getElementById('work_since').value = "";
              }
      });

      dateOfWorkUntil.addEventListener('change', function() {
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
}
</script>
</head>
<body class="text-center body3">
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="..\loginFirm.php">Вихід</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item nav-link active"><a href="main.php" style="color:red;">На головну<span
                            class="sr-only">(current)</span></a></li>
            </ul>
            <form class=" my-2 my-lg-0">
                <label class=" mr-sm-2">Посада:&nbsp;&nbsp;Лінійний продюсер</label>
            </form>
        </div>
    </div>
</nav>

<br><br><h1 class="colorForAllText">Змінити монтажера</h1>
<small>Поля, позначені </small><small style="color:red;">*</small><small> - обов'язкові.</small></br></br>

<form action="" method="post">

<div class="row text-center" style="margin:10px;">
    <div class=" container col-3" >
    <label class="colorText">Ім'я: </label><label style="color:red;">*</label>
   <?php
   if (isset($_POST['editBtn'])){
     $id = filter_var(trim($_POST['editor_id']),FILTER_SANITIZE_STRING);

   }

$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_name` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type=\"hidden\" value = \"" .$id . "\" name=\"editor_id_\" >";

echo "<input type= \"text\" onkeyup=\"lal2(this)\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"first_name\" value=\"$res[0]\" required>";
    ?><br>
  </div>
  <div class="container col-3">
  <label class="colorText">Прізвище:</label><label style="color:red;">*</label>
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_surname` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" onkeyup=\"lal2(this)\" class=\"form-control\" tabindex=\"2\" name=\"last_name\" value=\"$res[0]\" required>";
    ?>
<br>
</div>
  <div class="container col-3">
  <label class="colorText">По-батькові: </label><label style="color:red;">*</label>
      <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `editor_middle_name` FROM `editor` WHERE `editor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<input type= \"text\" maxlength=\"50\" onkeyup=\"lal2(this)\" class=\"form-control\" tabindex=\"2\"  name=\"middle_name\" value=\"$res[0]\" required>";
       ?>  </div>  </div></br>

       <div class="row">
       <div class=" container col-3">
       <label class="colorText">Телефон:</label><label style="color:red;">*</label>
      <div class="field_wrapper_Phones">
    <?php
 $mysql = new mysqli("localhost","root","root","filmstudio");
 $mysql->query("SET NAMES 'utf8'");
 $result = $mysql->query("SELECT `editor_phone_number` FROM `editor_phones` WHERE `editor_id` = $id");

$rows = mysqli_num_rows($result); // количество полученных строк
for ($i = 0 ; $i < $rows ; ++$i)
{
    $row = mysqli_fetch_row($result);
        for ($j = 0 ; $j < 1 ; ++$j){
          echo "<div><input type= \"text\" onkeyup=\"lal(this)\" maxlength=\"50\" class=\"form-control\" name=\"field_name_Phones[]\" tabindex=\"2\" value=\"$row[$j]\" required>";
          if($i == 0){
              echo "<a href=\"javascript:void(0);\" class=\"add_button_Phones\" title=\"Add field\"><img src=\"../img/add_icon.png\"  height='35' width='35'/></a></div>";
          } else{
                echo "<a href=\"javascript:void(0);\" class=\"remove_button_Phones\"><img src=\"../img/delete_icon.png\" height='20' width='20'/></a></div>";
          }
        }
}
 ?></div><br>
  </div>
     <div class=" container col-3">
     <label class="colorText">Контакти близьких:</label><label style="color:red;">*</label>
   <div class="field_wrapper_Contacts">
    <?php
  $mysql = new mysqli("localhost","root","root","filmstudio");
  $mysql->query("SET NAMES 'utf8'");
  $resultt = $mysql->query("SELECT `editor_relatives_phone_numbers`  FROM `editor_contacts_of_relatives` WHERE `editor_id` = $id");


 $rows = mysqli_num_rows($resultt); // количество полученных строк
 for ($i = 0 ; $i < $rows ; ++$i)
 {
     $row = mysqli_fetch_row($resultt);
         for ($j = 0 ; $j < 1 ; ++$j){
           echo "<div><input type= \"text\" onkeyup=\"lal(this)\" maxlength=\"50\" class=\"form-control\" name=\"field_name_Contacts[]\" tabindex=\"2\" value=\"$row[$j]\" required>";
           if($i == 0){
               echo "<a href=\"javascript:void(0);\" class=\"add_button_Contacts\" title=\"Add field\"><img src=\"../img/add_icon.png\"  height='35' width='35'/></a></div>";
           } else{
                 echo "<a href=\"javascript:void(0);\" class=\"remove_button_Contacts\"><img src=\"../img/delete_icon.png\" height='20' width='20'/></a></div>";
           }
         }


 }
  ?></div><br></div>
   <div class=" container col-3">
  <label class="colorText">Заробітня плата:</label><label style="color:red;">*</label>
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_salary` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "  <div class=\" container col-5\"><input type= \"text\" onkeyup=\"lal(this)\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"salary\" value=\"$res[0]\" required></div>";
    ?><br>
   </div>
  
</div> </br>

<div class="row">
<div class=" container col-2">
<label class="colorText">   Працює до:</label>
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_works_until` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" id=\"work_until\" name=\"work_until\" value=\"$res[0]\">";
    ?><br></div>
  <div class=" container col-2">
  <label class="colorText">Дата народження: </label><label style="color:red;">*</label>
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_date_of_birth` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" id=\"date_of_birth\" name=\"date_of_birth\" value=\"$res[0]\" required>";
    ?><br>
  </div>



<div class=" container col-3">
<label class="colorText">Стаж: </label><label style="color:red;">*</label>
    <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `editor_experience` FROM `editor` WHERE `editor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<div class=\" container col-5\"><input type= \"text\" onkeyup=\"lal(this)\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"years\" value=\"$res[0]\" required></div>";
       ?><br>
  </div>
  <div class=" container col-2">
  <label class="colorText"> Працює з: </label><label style="color:red;">*</label>
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_works_since` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\"  id=\"work_since\" name=\"work_since\" value=\"$res[0]\" required>";
    ?><br>  </div>  </div>



<div class="row">




 
</br>
 <div class=" container col-5">
  <label class="colorText">E-mail: </label>  <label style="color:red;">*</label> <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `editor_e-mail` FROM `editor` WHERE `editor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<input type= \"text\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"email\" value=\"$res[0]\" required>";
       ?><br>
</div>

 <div class=" container col-5">
<label class="colorText">Домашня адреса: </label><label style="color:red;">*</label>
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_home_address` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"address\" value=\"$res[0]\" required>";
    ?><br>

 </div> </div>

  </br>  </br>
  <div class="row " style="margin:10px;">
<div class=" container col-12">
<label class="colorText" >Фільми, в яких брали участь:</label>
<?php 
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");

$result_films = $mysqli->query("SELECT `name_of_movie` FROM `movie` WHERE `number_of_edit_crew` IN (SELECT `number_of_edit_crew` FROM  `editor_crewedit` WHERE `editor_id` = $id)");
while($stroka = mysqli_fetch_array($result_films)){
echo " &nbsp; &nbsp;&nbsp;\"$stroka[0]\"";
}
?>
</div></div></br>
  <div class="btn">
<input type="submit" class ="button btn btn-primary" value="Змінити" name="edit">
</div><br><br><br>

</form>



</body>

</html>


<?php
if (isset($_POST['edit'])){

$mysql = new mysqli('localhost','root','root','filmStudio');


// echo "iddd";
// echo $id;

$id = filter_var(trim($_POST['editor_id_']),FILTER_SANITIZE_STRING);

$name = filter_var(trim($_POST['first_name']),FILTER_SANITIZE_STRING);
$years = filter_var(trim($_POST['years']),FILTER_SANITIZE_STRING);
$last_name = filter_var(trim($_POST['last_name']),FILTER_SANITIZE_STRING);
$middle_name = filter_var(trim($_POST['middle_name']),FILTER_SANITIZE_STRING);
$address = filter_var(trim($_POST['address']),FILTER_SANITIZE_STRING);
$work_since = filter_var(trim($_POST['work_since']),FILTER_SANITIZE_STRING);
$work_until = filter_var(trim($_POST['work_until']),FILTER_SANITIZE_STRING);
echo "string";
echo $work_until;

$birthDate= filter_var(trim($_POST['date_of_birth']),FILTER_SANITIZE_STRING);
$salary = filter_var(trim($_POST['salary']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);


$phones = $_POST['field_name_Phones'];
$contacts = $_POST['field_name_Contacts'];


$ans = $mysql->query("UPDATE `editor` SET `editor_salary` = '$salary', `editor_name` = '$name', `editor_surname`= '$last_name', `editor_middle_name` = '$middle_name',
  `editor_home_address` = '$address', `editor_works_since` = '$work_since', `editor_experience` = '$years',
  `editor_date_of_birth` = '$birthDate', `editor_e-mail` = '$email' WHERE `editor_id` = '$id' ");
if ($ans) {
   echo "Success!";
 }
else {
    echo "Error! $mysql->error <br>";
  }

if($work_until != NULL){
  $anss = $mysql->query("UPDATE `editor` SET `editor_works_until` = '$work_until' WHERE `editor_id` = '$id'");if ($ans) {
    if ($anss) {
       echo "Success!";
     }
    else {
        echo "Error! $mysql->error <br>";
      }
}
}

$mysql->query("DELETE FROM `editor_phones` WHERE `editor_id` = '$id'");
$mysql->query("DELETE FROM `editor_contacts_of_relatives` WHERE `editor_id` = '$id'");

foreach ($phones as $value) {
  $mysql->query("INSERT INTO `editor_phones`(`editor_phone_number`, `editor_id`)
  VALUES ('$value','$id')");

}


foreach ($contacts as $value) {
$result = $mysql->query("INSERT INTO `editor_contacts_of_relatives`(`editor_relatives_phone_numbers`, `editor_id`)
  VALUES ('$value','$id')");
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
