﻿<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Фільми</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <!-- Latest compiled and minified JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="..\style.css">
<script type="text/javascript">
$(document).ready(function(){
    var maxFieldGenres = 10; //Input fields increment limitation
    var addButtonGenres = $('.add_button_Genres'); //Add button selector
    var wrapperGenres = $('.field_wrapper_Genres'); //Input field wrapper
    /*var fieldHTMLFilms = ('.field_wrapper_Films select')[0].outerHTML;
    alert(fieldHTMLFilms);// '<div><input type="text" class="form-control" name="field_name_Films[]" value=""/><a href="javascript:void(0);" class="remove_button_Films"><img src="../img/delete_icon.png" width=\'20\' height=\'20\'/></a></div>'; //New input field html
    */var xGenres = 1; //Initial field counter is 1
    var fieldHTMLGenres = "<div>" + $('.field_wrapper_Genres select')[0].outerHTML + "<a href=\"javascript:void(0);\" class=\"remove_button_Genres\"><img src=\"../img/delete_icon.png\" width=\'20\' height=\'20\'/></a></div>";

    //Once add button is clicked
    $(addButtonGenres).click(function(){
        //Check maximum number of input fields
        if(xGenres < maxFieldGenres){
          xGenres++; //Increment field counter
            $(wrapperGenres).append(fieldHTMLGenres); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapperGenres).on('click', '.remove_button_Genres', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        xGenres--; //Decrement field counter
    });
});

</script>
</head>
<style type="text/css">
@media screen
{
    #printOnly{display:none;}
}

@media print {

  .noprint { display: none; }

#printOnly{}
@page { margin: 0; }

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
}


function yesnoCheck(that) {
    if(that.value == "makeByHand"){
      document.getElementById("appearFilters").style.display = "block";
    }else{
      document.getElementById("appearFilters").style.display = "none";
    }
}
</script>
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
                <label class=" mr-sm-2">Посада:&nbsp;&nbsp;Агент по акторах</label>
            </form>
        </div>
    </div>
</nav>


<div>
<h1 align="center" class="colorForAllText">Фільми</h1></br>

</div>
<div class="noprint">

<form action="find_movie_zapyty.php" method="post">
<div class="row">
<div class="col-md-4 container">
<select  onchange="yesnoCheck(this);" class="select selectpicker  form-control" name="selecting">
  <option value="max_rating">Фільми з найбільшим рейтингом</option>
  <option value="max_gonorars">Фільми, які витратили найбільше грошей на гонорари акторам</option>
  <option value="detectives">Фільми-детективи</option>
  <option value="all_understudies">Фільми, в яких брали участь всі дублери кіностудії</option>
  <option value="rating_4">Фільми з рейтингом 4</option>
  <option value="makeByHand">Фільтрувати самостійно</option>

</select>
</div></div>


<div id = "appearFilters" style="display: none;">
<div class="row">
<div class="col-md-3 container">
<label class="colorText" >Назва:</label><input name = "name" class="form-control" ></input></br>
</div>
<div class="col-md-3 container">
<label class="colorText" >Дата виходу:</label>
<input class="form-control" name="date_release" value="" type="date"></input>
</div>
<div class="col-md-3 container">
<label class="colorText" >Бюджет:</label>
<input type="radio" id="choice>"
     name="choice1" value=">">
    <label >></label>

    <input type="radio" id="choice<"
     name="choice1" value="<">
    <label ><</label>

    <input type="radio" id="choice="
     name="choice1" value="=">
    <label >=</label>
<input class="form-control" onkeyup="lal(this)" name="budget"></input>
</div></div>


<div class="row">
<div class="col-md-3 container">
<label class="colorText" >Рейтинг:</label>
<input type="radio" id="choice>"
     name="choice2" value=">">
    <label >></label>

    <input type="radio" id="choice<"
     name="choice2" value="<">
    <label ><</label>

    <input type="radio" id="choice="
     name="choice2" value="=">
    <label >=</label>
<input class="form-control" onkeyup="lal(this)" name="rating"></input></br>
</div>

<div class="col-md-3 container">
<label class="colorText" >Жанри:</label>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result_films = $mysqli->query("SELECT `genre` FROM `genres`");
echo "<div class=\"field_wrapper_Genres\"><div>";
echo "<select name=\"field_name_Genres[]\" class=\"select selectpicker form-control\"><option></option>";
while($stroka = mysqli_fetch_array($result_films)){
for ($i=0; $i<count($stroka); $i+=2){
  echo "<option >$stroka[$i]</option>";
}
}
echo "</select>";
echo "<a href=\"javascript:void(0);\" class=\"add_button_Genres\" title=\"Add field\"><img src=\"../img/add_icon.png\" height='35' width='35'/></a>";
echo "</div></div>";
?>
</div>

<!-- <div class="col-md-3 container">
<label class="colorText" >Жанри:</label>
<select   class="select selectpicker  form-control" name="selectingGenre">
<option></option>
  <option >Драма</option>
  <option >Бойовик</option>
  <option >Триллер</option>
  <option >Жахи</option>
  <option >Детектив</option>
  <option >Комедія</option>
  <option >Вестерн</option>
  <option >Трагедія</option>
  <option >Документальний</option>
  <option >Історичний</option>
</select></div> -->


<div class="col-md-3 container">
<label class="colorText" >Номер знімальної групи:</label>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result_headId = $mysqli->query("SELECT `number_of_film_crew` FROM `film_crew`");
echo "<select name=\"selectingNFCrew\"  class=\"select selectpicker  form-control\"><option></option>";
while($stroka = mysqli_fetch_array($result_headId)){
for ($i=0; $i<count($stroka); $i+=2){
  echo "<option>$stroka[$i]</option>";
}
}
echo "</select>";
?>


</div>
<div class="col-md-3 container">
<label class="colorText" >Номер групи монтажерів:</label>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result_headId = $mysqli->query("SELECT `number_of_edit_crew` FROM `edit_crew`");
echo "<select name=\"selectingNECrew\"  class=\"select selectpicker  form-control\"><option></option>";
while($stroka = mysqli_fetch_array($result_headId)){
for ($i=0; $i<count($stroka); $i+=2){
  echo "<option>$stroka[$i]</option>";
}
}
echo "</select>";
?>


</div>

</div>
</div>
<div class="btn">
  <button class ="button btn btn-primary" name="done">Знайти</button>
</div>

</form>
</div>

<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<td>Назва фільму</td>
<td>Дата виходу фільму в прокат</td>
<td>Бюджет фільму</td>
<td>Рейтинг фільму</td>
<td>Номер знімальної групи</td>
<td>Номер групи монтажерів</td>
<td>Жанр</td>
<td>Тривалість</td>

</tr></thead>

<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result_movies = $mysqli->query("SELECT * FROM `movie`");
//$mysqli->close();
function res($result){
  $print = "";
    if($result)
    {
        $rows = mysqli_num_rows($result); // количество полученных строк
        for ($i = 0 ; $i < $rows ; ++$i)
        {
            $row = mysqli_fetch_row($result);
                for ($j = 0 ; $j < 1 ; ++$j)   $print .= "$row[$j]"."<br/>";
        }
    }
    return $print;
  };



while ($stroka = mysqli_fetch_array($result_movies)){
  $temp = $stroka['name_of_movie'];

  $result_movies_genres = $mysqli->query("SELECT `genre` FROM `genres` WHERE `id_movie_genre` IN (SELECT `id_movie_genre` FROM  `movie_genres` WHERE `name_of_movie` = \"$temp\")");

  $result_movies_duration = $mysqli->query("SELECT `duration_of_movie` FROM `movie_duration` WHERE `name_of_movie` IN (SELECT `name_of_movie` FROM  `movie` WHERE `name_of_movie` = \"$temp\")");

    echo"<tr>";
    echo"<td>" . $stroka['name_of_movie'] . "</td>";
    echo"<td>" . $stroka['date_of_release'] . "</td>";
    echo"<td>" . $stroka['budget_of_movie'] . "</td>";
    echo"<td>" . $stroka['rating_of_movie'] . "</td>";
    echo"<td>" . $stroka['number_of_film_crew'] . "</td>";
    echo"<td>" . $stroka['number_of_edit_crew'] . "</td>";
    echo"<td>" .  res($result_movies_genres) . "</td>";
    echo"<td>" .  res($result_movies_duration) . "</td>";
    echo"</tr>";
   }

?>


</table>
</div><div id="printOnly"><p>&nbsp;&nbsp;&nbsp;Дата друку:
  <?php
    $currentDateTime = date('Y-m-d');
    echo $currentDateTime;
  ?></p></div>

  <div id="printOnly" class="row ">
<div class="col-12 container fixed-bottom">
  <div id="content">
  <div id="pageFooter"></div></div></div></div>
<div class="btn noprint">
<button class ="button btn btn-danger" onclick="window.print()">Друкувати</button></br></br></br>
</div>
</body>
</html>
