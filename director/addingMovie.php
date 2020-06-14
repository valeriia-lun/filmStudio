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
    var fieldHTMLGenre = '<div><select class="form-control" name="field_name_Genre[]"><option selected>Бойовик</option><option value="1">Драма</option><option value="2">Триллер</option><option value="3">Жахи</option><option value="4">Детектив</option><option value="5">Комедія</option><option value="6">Вестерн</option><option value="7">Трагедія</option><option value="7">Документальний</option><option value="8">Історичний</option></select><a href="javascript:void(0);" class="remove_button_Genre"><img src="../img/delete_icon.png" width=\'20\' height=\'20\'/></a></div>'; //New input field html
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

<br><br><h1 class="colorForAllText">Додати фільм</h1><br>

<div>
  <form action="" method="post">
  <div class="row text-center" style="margin:10px;">
    <div class=" container col-3" >
    <label class="colorText">Назва:  </label><input type="text" class="form-control"  name="movie_name" maxlength="50" tabindex="2" required><br>
    </div>
    <div class=" container col-3" >
    <label class="colorText">Жанр:</label>
        <div class="field_wrapper_Genre">
               <div>
                   <select class="form-control"  name="field_name_Genre[]">
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
                   <a href="javascript:void(0);" class="add_button_Genre" class="form-control"  title="Add field"><img src="../img/add_icon.png" height="35" width='35'/></a>
               </div>
           </div>
           </div>
           <div class=" container col-3" >
           <label class="colorText"> Бюджет:</label> <input type="text" onkeyup="lal(this)" class="form-control"  name="budget" maxlength="50" tabindex="2" required><br>
           </div>  </div>
</div><br><br>

<br><br><h1 class="colorForAllText">Знімальна група</h1><br>
  <div class="row text-center" style="margin:10px;">
    <div class=" container col-4" >
    <label class="colorText">Дата початку роботи: </label><input type="date" class="form-control" name="date_start_filmCrew" maxlength="50" tabindex="2" required><br>
  </div>
  <div class=" container col-4" >
  <label class="colorText">Дата закінчення роботи:</label> <input type="date" class="form-control" name="date_end_filmCrew" maxlength="50" tabindex="2" required><br>
  </div></div><br>


  <br><br><h1 class="colorForAllText">Група монтажерів</h1><br>
  <div class="row text-center" style="margin:10px;">
    <div class=" container col-4" >
    <label class="colorText">Дата початку роботи: </label><input type="date" class="form-control" name="date_start_editCrew" maxlength="50" tabindex="2" required><br>
  </div>
  <div class=" container col-4" >
  <label class="colorText">Дата закінчення роботи:</label> <input type="date" class="form-control" name="date_end_editCrew" maxlength="50" tabindex="2" required><br>
  </div></div><br>


<div class="btn">
<input type="submit" class ="button btn btn-primary" value="Додати" name="add">
</div><br><br><br>

</form>

</body>

</html>

<?php
if (isset($_POST['add'])){

$mysql = new mysqli('localhost','root','root','filmStudio');






$max_id_edit = $mysql->query("SELECT MAX(`number_of_edit_crew`) FROM `edit_crew`");
$stroka_edit = mysqli_fetch_array($max_id_edit);
$numEditCrew = $stroka_edit[0] + 1;

$dateStartEditCrew = filter_var(trim($_POST['date_start_editCrew']),FILTER_SANITIZE_STRING);
$dateEndEditCrew = filter_var(trim($_POST['date_end_editCrew']),FILTER_SANITIZE_STRING);


$success = $mysql->query("INSERT INTO `edit_crew` (`number_of_edit_crew`, `date_start_edit_crew`, `date_finish_edit_crew`)
VALUES ('$numEditCrew', '$dateStartEditCrew', '$dateEndEditCrew')");



$max_id_film = $mysql->query("SELECT MAX(`number_of_film_crew`) FROM `film_crew`");
$stroka_film = mysqli_fetch_array($max_id_film);
$numFilmCrew = $stroka_film[0] + 1;

$dateStartFilmCrew = filter_var(trim($_POST['date_start_filmCrew']),FILTER_SANITIZE_STRING);
$dateEndFilmCrew = filter_var(trim($_POST['date_end_filmCrew']),FILTER_SANITIZE_STRING);


$result = $mysql->query("INSERT INTO `film_crew` (`number_of_film_crew`, `date_start_crew`, `date_finish_film_crew`)
VALUES ('$numFilmCrew', '$dateStartFilmCrew', '$dateEndFilmCrew')");






$genres = $_POST['field_name_Genre'];

$name = $_POST['movie_name'];
$budget = $_POST['budget'];


$mysql->query("SET NAMES 'utf8'");

$result = $mysql->query("INSERT INTO `movie` (`name_of_movie`, `budget_of_movie`, `number_of_film_crew`, `number_of_edit_crew`)
VALUES ('$name', '$budget', '$numFilmCrew', '$numEditCrew')");
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

header('Location: successfullyAddedMovie.php');

}

 ?>
