<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">

    $(document).ready(function(){
    var maxFieldGenre = 10; //Input fields increment limitation
    var addButtonGenre = $('.add_button_Genre'); //Add button selector
    var wrapperGenre = $('.field_wrapper_Genre'); //Input field wrapper
    var fieldHTMLGenre = '<div><select name="field_name_Genre[]"><option selected>Бойовик</option><option value="1">Драма</option><option value="2">Триллер</option><option value="3">Жахи</option><option value="4">Детектив</option><option value="5">Комедія</option><option value="6">Вестерн</option><option value="7">Трагедія</option><option value="7">Документальний</option><option value="8">Історичний</option></select><a href="javascript:void(0);" class="remove_button_Genre"><img src="../img/delete-icon.png" /></a></div>'; //New input field html
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



});
    $(function() {
    $().datepicker();
    });


  </script>
</head>
<body>
<h1>Додати фільм</h1>




<div>
  <form action="" method="post">
  Назва: <input type="text" name="movie_name" maxlength="50" tabindex="2" required><br>
  Жанр:
        <div class="field_wrapper_Genre">
               <div>
                   <select name="field_name_Genre[]">
                     <option value="1" selected>Бойовик</option>
                     <option value="2">Драма</option>
                     <option value="3">Триллер</option>
                     <option value="4">Жахи</option>
                     <option value="5">Детектив</option>
                     <option value="6">Комедія</option>
                     <option value="7">Вестерн</option>
                     <option value="8">Трагедія</option>
                     <option value="9">Документальний</option>
                     <option value="10">Історичний</option>
                    </select>
                   <a href="javascript:void(0);" class="add_button_Genre" title="Add field"><img src="../img/add-icon.png" width='10'/></a>
               </div>
           </div>

  Бюджет: <input type="text" name="budget" maxlength="50" tabindex="2" required><br>
</div>

<input type="submit" value="Додати" name="add"><br>
</form>

</body>

</html>

<?php
if (isset($_POST['add'])){

$mysql = new mysqli('localhost','root','root','filmStudio');

$genres = $_POST['field_name_Genre'];



$name = $_POST['movie_name'];
$budget = $_POST['budget'];


$mysql->query("SET NAMES 'utf8'");

$result = $mysql->query("INSERT INTO `movie` (`name_of_movie`, `budget_of_movie`)
VALUES ('$name', '$budget')");
   if ($result) {
      echo "Success!";
    }
   else {
       echo "Error! $mysql->error <br>";
     }




foreach ($genres as $value) {
$result = $mysql->query("INSERT INTO `Movie_genres`(`id_movie_genre`, `name_of_movie`)
  VALUES ('$value','$name')");
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
