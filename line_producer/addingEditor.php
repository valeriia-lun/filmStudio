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


    });

    $(function() {
    $().datepicker();
    });


    </script>
</head>
<body>
<h1>Додати монтажера</h1>

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
   Дата народження: <input type="date" name="date_of_birth" maxlength="50" tabindex="2" required><br>
   Заробітня плата:<input type="text" name="salary" maxlength="50" tabindex="2" required><br>
   E-mail: <input type="text" maxlength="50" name="email" tabindex="2" required><br>
</div>

<input type="submit" value="Додати" name="add"><br>
</form>


</body>

</html>


<?php
if (isset($_POST['add'])){

$mysql = new mysqli('localhost','root','root','filmStudio');

$phones = $_POST['field_name_Phones'];


$contacts = $_POST['field_name_Contacts'];


$name = filter_var(trim($_POST['first_name']),FILTER_SANITIZE_STRING);
$years = filter_var(trim($_POST['years']),FILTER_SANITIZE_STRING);
$last_name = filter_var(trim($_POST['last_name']),FILTER_SANITIZE_STRING);
$middle_name = filter_var(trim($_POST['middle_name']),FILTER_SANITIZE_STRING);
$address = filter_var(trim($_POST['address']),FILTER_SANITIZE_STRING);
$work_since = filter_var(trim($_POST['work_since']),FILTER_SANITIZE_STRING);
$birthDate= filter_var(trim($_POST['date_of_birth']),FILTER_SANITIZE_STRING);
$salary = filter_var(trim($_POST['salary']),FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);


$max_id = $mysql->query("SELECT MAX(`editor_id`) FROM `editor`");
$stroka = mysqli_fetch_array($max_id);
$id = $stroka[0] + 1;


$mysql->query("SET NAMES 'utf8'");

$result = $mysql->query("INSERT INTO `editor` (`editor_id`, `editor_salary`, `editor_name`, `editor_surname`,
   `editor_middle_name`, `editor_home_address`, `editor_works_since` ,`editor_experience`,  `editor_date_of_birth`, `editor_e-mail`)
VALUES ('$id', '$salary', '$name', '$last_name', '$middle_name', '$address', '$work_since', '$years', '$birthDate', '$email')");
if ($result) {
   echo "Success!";
 }
else {
    echo "Error! $mysql->error <br>";
  }

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
