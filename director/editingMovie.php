<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
    $(document).ready(function(){
        var maxFieldDur = 10; //Input fields increment limitation
        var addButtonDur = $('.add_button_Dur'); //Add button selector
        var wrapperDur = $('.field_wrapper_Dur'); //Input field wrapper
        var fieldHTMLDur = '<div><input type="text" name="field_name_Dur[]" class= "form-control" value=""/><a href="javascript:void(0);" class="remove_button_Dur"><img src="../img/delete_icon.png" width=\'20\' height=\'20\'/></a></div>'; //New input field html
        var xDur = 1; //Initial field counter is 1

        //Once add button is clicked
        $(addButtonDur).click(function(){
            //Check maximum number of input fields
            if(xDur < maxFieldDur){
                xDur++; //Increment field counter
                $(wrapperDur).append(fieldHTMLDur); //Add field html
            }
        });

        //Once remove button is clicked
        $(wrapperDur).on('click', '.remove_button_Dur', function(e){
            e.preventDefault();
            $(this).parent('div').remove(); //Remove field html
            xDur--; //Decrement field counter
        });
          });


          var maxFieldGenre = 10; //Input fields increment limitation
          var addButtonGenre = $('.add_button_Skills'); //Add button selector
          var wrapperGenre = $('.field_wrapper_Skills'); //Input field wrapper
          var fieldHTMLGenre = '<div><select  class= "form-control" name="field_name_Genre[]"><option value="1" selected>Бойовик</option><option value="2">Драма</option><option value="3">Триллер</option><option value="4">Жахи</option><option value="5">Детектив</option><option value="6">Комедія</option><option value="7">Вестерн</option><option value="8">Трагедія</option><option value="9">Документальний</option><option value="10">Історичний</option></select><a href="javascript:void(0);" class="remove_button_Genre"><img src="../img/delete_icon.png" width=\'20\' height=\'20\'/></a></div>'; //New input field html
          var xGenre = 1; //Initial field counter is 1

          //Once add button is clicked
          $(addButtonGenre).click(function(){
              //Check maximum number of input fields
              if(xGenre < maxFieldGenre){
                  xGenre++; //Increment field counter
                  $(wrapperGenre).append(fieldHTMLGenre); //Add field html
              }
          });

          //Once remove button is clicked
          $(wrapperGenre).on('click', '.remove_button_Genre', function(e){
              e.preventDefault();
              $(this).parent('div').remove(); //Remove field html
              xGenre--; //Decrement field counter
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
      <label class=" mr-sm-2" >Режисер</label>
    </form>
  </div>
</nav>

<br><br><h1 class="colorForAllText">Змінити фільм</h1>
<small>Поля, позначені </small><small style="color:red;">*</small><small> - обов'язкові.</small></br></br>



  <form action="" method="post">
  <div class="row text-center" style="margin:10px;">
    <div class=" container col-3" >  <label class="colorText">Назва:  </label><label style="color:red;">*</label>
  <?php
  //if (isset($_POST['editBtn'])){
    $name = filter_var(trim($_POST['name_of_movie']),FILTER_SANITIZE_STRING);
   // echo $name;
    //echo "string";
  //  $name = "anuka";
  //}
  //print_r( $name);
  echo "<input type=\"hidden\" value = \"" .$name . "\" name=\"name_of_movie\" >";

echo "<input type= \"text\" maxlength=\"50\" class=\"form-control\" name=\"name_of_movie_new\" tabindex=\"2\" value=\"$name\" required>";

?><br>
  </div>
    <div class=" container col-3" >
    <label class="colorText">Жанр:</label><label style="color:red;">*</label><div class="field_wrapper_Genre">
    <select class="form-control">
    <?php

    $mysql = new mysqli("localhost","root","root","filmstudio");
    $mysql->query("SET NAMES 'utf8'");
    $result = $mysql->query("SELECT `genre` FROM `genres` WHERE `id_movie_genre` IN (SELECT `id_movie_genre` FROM `Movie_genres` WHERE `name_of_movie` = \"$name\")");
    $resulttt = $mysql->query("SELECT `id_movie_genre` FROM `Movie_genres` WHERE `name_of_movie` = \"$name\"");

    $rows = mysqli_num_rows($result); // количество полученных строк
    for ($i = 0 ; $i < $rows ; ++$i)
    {
    $row = mysqli_fetch_row($result);
    $roww = mysqli_fetch_row($resulttt);
      for ($j = 0 ; $j < 1 ; ++$j){
        echo "<div><option value=\"$roww[$j]\" selected>$row[$j]</option>";
        if($row[$j] == 'Бойовик'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Драма'){
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Триллер'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Жахи'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Детектив'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Комедія'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Вестерн'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Трагедія'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Документальний'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"1\">Бойовик</option>";
          echo "<option value=\"10\">Історичний</option>";
        }
        if($row[$j] == 'Історичний'){
          echo "<option value=\"2\">Драма</option>";
          echo "<option value=\"3\">Триллер</option>";
          echo "<option value=\"4\">Жахи</option>";
          echo "<option value=\"5\">Детектив</option>";
          echo "<option value=\"6\">Комедія</option>";
          echo "<option value=\"7\">Вестерн</option>";
          echo "<option value=\"8\">Трагедія</option>";
          echo "<option value=\"9\">Документальний</option>";
          echo "<option value=\"1\">Бойовик</option>";
        }
        if($i == 0){
            echo "<a href=\"javascript:void(0);\" class=\"add_button_Genre\" title=\"Add field\"><img src=\"../img/add_icon.png\" height='35' width='35'/></a></div>";
        } else{
              echo "<a href=\"javascript:void(0);\" class=\"remove_button_Genre\"><img src=\"../img/delete_icon.png\" width=\'20\' height=\'20\'/></a></div>";
        }
      }
    }
    ?>
  </select>

  </div>
  </div>

           <div class=" container col-3" >
           <label class="colorText"> Бюджет:</label> <label style="color:red;">*</label><?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `budget_of_movie` FROM `movie` WHERE `name_of_movie` = \"$name\"");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" onkeyup=\"lal(this)\" class=\"form-control\" tabindex=\"2\" name=\"budget\" value=\"$res[0]\" required>";
   ?><br>
 </div> </div>



<div class="row text-center" style="margin:10px;">
    <div class=" container col-3" >  <label class="colorText">  Дата випуску:   </label>
<?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `date_of_release` FROM `movie` WHERE `name_of_movie` = \"$name\"");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"date_of_release\" value=\"$res[0]\" >";
   ?><br>
  </div>
    <div class=" container col-3" >
    <label class="colorText">Тривалість:</label>
  <div class="field_wrapper_Dur">
<?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `duration_of_movie` FROM `Movie_duration` WHERE `name_of_movie` = \"$name\"");

$rows = mysqli_num_rows($result); // количество полученных строк
for ($i = 0 ; $i < $rows ; ++$i)
{
$row = mysqli_fetch_row($result);
    for ($j = 0 ; $j < 1 ; ++$j){
      echo "<div><input type= \"text\" maxlength=\"50\" class=\"form-control\" name=\"field_name_Dur[]\" tabindex=\"2\" value=\"$row[$j]\" >";
      if($i == 0){
          echo "<a href=\"javascript:void(0);\" class=\"add_button_Dur\" title=\"Add field\"><img src=\"../img/add_icon.png\" height='35' width='35'/></a></div>";
      } else{
            echo "<a href=\"javascript:void(0);\" class=\"remove_button_Dur\"><img src=\"../img/delete_icon.png\" width=\'20\' height=\'20\'/></a></div>";
      }
    }
}
?></div><br>

</div>
    <div class=" container col-3" >
    <label class="colorText">Рейтинг:</label><?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `rating_of_movie` FROM `movie` WHERE `name_of_movie` = \"$name\"");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" class=\"form-control\" tabindex=\"2\" name=\"rating\" value=\"$res[0]\" >";
   ?>   </div>  </div>
   </div><br><br>
   <div class="btn">
   <input type="submit" class ="button btn btn-primary" value="Змінити" name="edit">
   </div><br><br><br>



</form>
</body>

</html>


<?php
if (isset($_POST['edit'])){

$mysql = new mysqli('localhost','root','root','filmStudio');

$durations = $_POST['field_name_Dur'];
$genres = $_POST['field_name_Genre'];

$movieName = filter_var(trim($_POST['name_of_movie']),FILTER_SANITIZE_STRING);
$newName = filter_var(trim($_POST['name_of_movie_new']),FILTER_SANITIZE_STRING);

$dateRelease = filter_var(trim($_POST['date_of_release']),FILTER_SANITIZE_STRING);
$rating = filter_var(trim($_POST['rating']),FILTER_SANITIZE_STRING);
$budget = filter_var(trim($_POST['budget']),FILTER_SANITIZE_STRING);

$ans = $mysql->query("UPDATE `movie` SET `name_of_movie` = '$newName', `budget_of_movie` = '$budget' WHERE `name_of_movie` = '$movieName' ");
if ($ans) {
   echo "Success!";
 }
else {
    echo "Error! $mysql->error <br>";
  }

  if($dateRelease != NULL){
    $anss = $mysql->query("UPDATE `movie` SET `date_of_release` = '$dateRelease' WHERE `name_of_movie` = '$newName'");
      if ($anss) {
         echo "Success!";
       }
      else {
          echo "Error! $mysql->error <br>";
        }
  }

  if($rating != NULL){
    $anss = $mysql->query("UPDATE `movie` SET `rating_of_movie` = '$rating' WHERE `name_of_movie` = '$newName'");
      if ($anss) {
         echo "Success!";
       }
      else {
          echo "Error! $mysql->error <br>";
        }
  }



  $mysql->query("DELETE FROM `Movie_genres` WHERE `name_of_movie` = '$movieName'");
  $mysql->query("DELETE FROM `Movie_duration` WHERE `name_of_movie` = '$movieName'");


  foreach ($genres as $value) {
  $result = $mysql->query("INSERT INTO `Movie_genres`(`id_movie_genre`, `name_of_movie`)
    VALUES ('$value','$newName')");
    if ($result) {
       echo "Success!";
     }
   else {
        echo "Error! $mysql->error <br>";
      }
  }


  foreach ($durations as $value) {
  $result = $mysql->query("INSERT INTO `Movie_duration`(`duration_of_movie`, `name_of_movie`)
    VALUES ('$value','$newName')");
    if ($result) {
       echo "Success!";
     }
   else {
        echo "Error! $mysql->error <br>";
      }
  }

$mysql->close();

header('Location: successfullyEditedMovie.php');

}

 ?>
