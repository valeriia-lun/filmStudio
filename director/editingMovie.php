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
        var fieldHTMLDur = '<div><input type="text" name="field_name_Dur[]" value=""/><a href="javascript:void(0);" class="remove_button_Dur"><img src="../img/delete-icon.png" /></a></div>'; //New input field html
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
          var fieldHTMLGenre = '<div><select name="field_name_Genre[]"><option value="1" selected>Бойовик</option><option value="2">Драма</option><option value="3">Триллер</option><option value="4">Жахи</option><option value="5">Детектив</option><option value="6">Комедія</option><option value="7">Вестерн</option><option value="8">Трагедія</option><option value="9">Документальний</option><option value="10">Історичний</option></select><a href="javascript:void(0);" class="remove_button_Genre"><img src="../img/delete-icon.png" /></a></div>'; //New input field html
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
</head>
<body>
<h1>Змінити фільм</h1>


<div>
  <form action="" method="post">
  Назва:
  <?php
  if (isset($_POST['editBtn'])){
    $name = filter_var(trim($_POST['name_of_movie']),FILTER_SANITIZE_STRING);
echo $name;
  }

echo "<input type= \"text\" maxlength=\"50\" name=\"name_of_movie\" tabindex=\"2\" value=\"$name\" required>";

?><br>
  Жанр: <div class="field_wrapper_Genre">
    <select>
    <?php
    $mysql = new mysqli("localhost","root","root","filmstudio");
    $mysql->query("SET NAMES 'utf8'");
    $result = $mysql->query("SELECT `genre` FROM `genres` WHERE `id_movie_genre` IN (SELECT `id_movie_genre` FROM `Movie_genres` WHERE `name_of_movie` = $name)");
    $resulttt = $mysql->query("SELECT `id_movie_genre` FROM `Movie_genres` WHERE `name_of_movie` = $name");

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
            echo "<a href=\"javascript:void(0);\" class=\"add_button_Genre\" title=\"Add field\"><img src=\"../img/add-icon.png\" width='10'/></a></div>";
        } else{
              echo "<a href=\"javascript:void(0);\" class=\"remove_button_Genre\"><img src=\"../img/delete-icon.png\" /></a></div>";
        }
      }
    }
    ?>
  </select>

</div> <br />

  Бюджет: <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `budget_of_movie` FROM `movie` WHERE `name_of_movie` = $name");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"budget\" value=\"$res[0]\" required>";
   ?><br>
  Дата випуску: <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `date_of_release` FROM `movie` WHERE `name_of_movie` = $name");

$res = mysqli_fetch_array($result);

echo "<input type= \"date\" maxlength=\"50\" tabindex=\"2\" name=\"date_of_release\" value=\"$res[0]\" required>";
   ?><br>


  Тривалість:
  <div class="field_wrapper_Dur">
<?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `duration_of_movie` FROM `Movie_duration` WHERE `name_of_movie` = $name");

$rows = mysqli_num_rows($result); // количество полученных строк
for ($i = 0 ; $i < $rows ; ++$i)
{
$row = mysqli_fetch_row($result);
    for ($j = 0 ; $j < 1 ; ++$j){
      echo "<div><input type= \"text\" maxlength=\"50\" name=\"field_name_Dur[]\" tabindex=\"2\" value=\"$row[$j]\" required>";
      if($i == 0){
          echo "<a href=\"javascript:void(0);\" class=\"add_button_Dur\" title=\"Add field\"><img src=\"../img/add-icon.png\" width='10'/></a></div>";
      } else{
            echo "<a href=\"javascript:void(0);\" class=\"remove_button_Dur\"><img src=\"../img/delete-icon.png\" /></a></div>";
      }
    }
}
?></div><br>


  Рейтинг: <?php
$mysql = new mysqli("localhost","root","root","filmstudio");
$mysql->query("SET NAMES 'utf8'");
$result = $mysql->query("SELECT `rating_of_movie` FROM `movie` WHERE `name_of_movie` = $name");

$res = mysqli_fetch_array($result);

echo "<input type= \"text\" maxlength=\"50\" tabindex=\"2\" name=\"rating\" value=\"$res[0]\" required>";
   ?><br>

</div>

<input type="submit" value="Змінити" name="edit"><br>

</form>
</body>

</html>


<?php
if (isset($_POST['edit'])){

$mysql = new mysqli('localhost','root','root','filmStudio');

$durations = $_POST['field_name_Dur'];
$genres = $_POST['field_name_Genre'];

$movieName = filter_var(trim($_POST['name_of_movie']),FILTER_SANITIZE_STRING);
$dateRelease = filter_var(trim($_POST['date_of_release']),FILTER_SANITIZE_STRING);
$rating = filter_var(trim($_POST['rating']),FILTER_SANITIZE_STRING);
$budget = filter_var(trim($_POST['budget']),FILTER_SANITIZE_STRING);

$ans = $mysql->query("UPDATE `movie` SET `name_of_movie` = '$movieName', `budget_of_movie` = '$budget' WHERE `name_of_movie` = '$name' ");
if ($ans) {
   echo "Success!";
 }
else {
    echo "Error! $mysql->error <br>";
  }

  if($dateRelease != NULL){
    $anss = $mysql->query("UPDATE `movie` SET `date_of_release` = '$dateRelease' WHERE `name_of_movie` = '$name'");
      if ($anss) {
         echo "Success!";
       }
      else {
          echo "Error! $mysql->error <br>";
        }
  }

  if($rating != NULL){
    $anss = $mysql->query("UPDATE `movie` SET `rating_of_movie` = '$rating' WHERE `name_of_movie` = '$name'");
      if ($anss) {
         echo "Success!";
       }
      else {
          echo "Error! $mysql->error <br>";
        }
  }



  $mysql->query("DELETE FROM `Movie_genres` WHERE `name_of_movie` = '$name'");
  $mysql->query("DELETE FROM `Movie_duration` WHERE `name_of_movie` = '$name'");


  foreach ($genres as $value) {
  $result = $mysql->query("INSERT INTO `Movie_genres`(`id_movie_genre`, `name_of_movie`)
    VALUES ('$value','$movieName')");
    if ($result) {
       echo "Success!";
     }
   else {
        echo "Error! $mysql->error <br>";
      }
  }


  foreach ($durations as $value) {
  $result = $mysql->query("INSERT INTO `Movie_duration`(`duration_of_movie`, `name_of_movie`)
    VALUES ('$value','$movieName')");
    if ($result) {
       echo "Success!";
     }
   else {
        echo "Error! $mysql->error <br>";
      }
  }

$mysql->close();

header('Location: /filmStudio/director/main.php');

}

 ?>
