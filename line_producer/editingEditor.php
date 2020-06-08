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


    });

          $(function() {
          $().datepicker();
          });
    </script>
</head>
<body>
<h1>Змінити монтажера</h1>

<form action="" method="post">

<div>
   Ім'я:
   <?php
   if (isset($_POST['editBtn'])){
     $id = filter_var(trim($_POST['editor_id']),FILTER_SANITIZE_STRING);

   }

$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_name` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"first_name\" value=\"$res[0]\" required>";
    ?><br>
   Прізвище:
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_surname` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"last_name\" value=\"$res[0]\" required>";
    ?>
<br>
   По-батькові:
      <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `editor_middle_name` FROM `editor` WHERE `editor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\"  name=\"middle_name\" value=\"$res[0]\" required>";
       ?><br>


   Телефон:
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
$result = $mysql->query("SELECT `editor_home_address` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"address\" value=\"$res[0]\" required>";
    ?><br>
   Контакти близьких:
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
           echo "<div><input type= \"text\" maxlength=\"50\" name=\"field_name_Contacts[]\" tabindex=\"2\" value=\"$row[$j]\" required>";
           if($i == 0){
               echo "<a href=\"javascript:void(0);\" class=\"add_button_Contacts\" title=\"Add field\"><img src=\"../img/add-icon.png\" width='10'/></a></div>";
           } else{
                 echo "<a href=\"javascript:void(0);\" class=\"remove_button_Contacts\"><img src=\"../img/delete-icon.png\" /></a></div>";
           }
         }


 }
  ?></div><br>
   Стаж:
    <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `editor_experience` FROM `editor` WHERE `editor_id` = $id");

   $res = mysqli_fetch_array($result);

   echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"years\" value=\"$res[0]\" required>";
       ?><br>
   Працюе з:
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_works_since` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\"  name=\"work_since\" value=\"$res[0]\" required>";
    ?><br>
   Працюе до:
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_works_until` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\" name=\"work_until\" value=\"$res[0]\">";
    ?><br>
   Дата народження:
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_date_of_birth` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\" name=\"date_of_birth\" value=\"$res[0]\" required>";
    ?><br>
   Заробітня плата:
   <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `editor_salary` FROM `editor` WHERE `editor_id` = $id");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"salary\" value=\"$res[0]\" required>";
    ?><br>
   E-mail:    <?php
   $mysql = new mysqli("localhost","root","root","filmstudio");
   $mysql->query("SET NAMES 'utf8'");
   $result = $mysql->query("SELECT `editor_e-mail` FROM `editor` WHERE `editor_id` = $id");

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

header('Location: /filmStudio/line_producer/main.php');

}

 ?>
