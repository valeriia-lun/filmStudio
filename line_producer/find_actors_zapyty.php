﻿<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Актори</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  var maxFieldFilms = 10; //Input fields increment limitation
  var addButtonFilms = $('.add_button_Films'); //Add button selector
  var wrapperFilms = $('.field_wrapper_Films'); //Input field wrapper
  /*var fieldHTMLFilms = ('.field_wrapper_Films select')[0].outerHTML;
  alert(fieldHTMLFilms);// '<div><input type="text" class="form-control" name="field_name_Films[]" value=""/><a href="javascript:void(0);" class="remove_button_Films"><img src="../img/delete_icon.png" width=\'20\' height=\'20\'/></a></div>'; //New input field html
  */var xFilms = 1; //Initial field counter is 1
  var fieldHTMLFilms = "<div><select name=\"field_name_Films[]\"  class=\"select selectpicker  form-control\">" + $('.field_wrapper_Films select')[0].innerHTML + "</select><a href=\"javascript:void(0);\" class=\"remove_button_Films\"><img src=\"../img/delete_icon.png\" width=\'20\' height=\'20\'/></a></div>";

  //Once add button is clicked
  $(addButtonFilms).click(function(){
      //Check maximum number of input fields
      if(xFilms < maxFieldFilms){
          xFilms++; //Increment field counter
          $(wrapperFilms).append(fieldHTMLFilms); //Add field html
      }
  });

  //Once remove button is clicked
  $(wrapperFilms).on('click', '.remove_button_Films', function(e){
      e.preventDefault();
      $(this).parent('div').remove(); //Remove field html
      xFilms--; //Decrement field counter

    });
});

</script>

<link rel="stylesheet" href="..\style.css">
</head>
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
</style>
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



<div>
</br></br>
<h1 align="center" class="colorForAllText">Актори</h1></br>
</div>
<div class="noprint">


<div class="row">
  <div class="col-md-4 container">
<form action="find_actors_zapyty.php" method="post">
<select name="selecting"  class="select selectpicker  form-control" onchange="yesnoCheck(this);">

  <option value="max_experience" >Актори з найбільшим стажем</option>
  <option value="female">Актори жіночого роду</option>
  <option value="salary_20000_more">Актори із зарплатнею < 20 000 грн</option>
  <option value="blond">Актори блондини</option>
  <option value="movie_zoloto">Актори, що знялися в фільмі 'Золото'</option>
  <option value="most_expensive_actor" >Найдорожчі актори</option>
  <option value="makeByHand">Фільтрувати самостійно</option>
</select>
</div></div></br>




<div id = "appearFilters" style="display: none;">
<div class="row">
<div class="col-md-3 container">
<label class="colorText" >Ім'я<input onkeyup="lal2(this)" class="form-control" name ="name"></input></label>
</div>
<div class="col-md-3 container">
<label class="colorText" >Прізвище<input onkeyup="lal2(this)" class="form-control" name="surname"></input></label>
</div>
<div class="col-md-3 container">
<label class="colorText" >По-батькові<input onkeyup="lal2(this)" class="form-control" name="middleName" ></input></label>
</div>
<div class="col-md-3 container">
<label class="colorText" >Рейтинг&nbsp;&nbsp;</label>
<input type="radio" id="choice>"
     name="choice1" value=">">
    <label >></label>

    <input type="radio" id="choice<"
     name="choice1" value="<">
    <label ><</label>

    <input type="radio" id="choice="
     name="choice1" value="=">
    <label >=</label><input class="form-control" name="rating" ></input>

</div></div></br>



<div class="row">
<div class="col-md-3 container">
<label class="colorText" >Кількість фільмів у яких брали участь&nbsp;&nbsp;</label>
<input type="radio" id="choice>"
     name="choice2" value=">">
    <label >></label>

    <input type="radio" id="choice<"
     name="choice2" value="<">
    <label ><</label>

    <input type="radio" id="choice="
     name="choice2" value="=">
    <label >=</label><input class="form-control" onkeyup="lal(this)" name="amountOfFilms" ></input>
</div>
<div class="col-md-3 container">
<label class="colorText" >Вік&nbsp;&nbsp;</label>
<input type="radio" id="choice>"
     name="choice3" value=">">
    <label >></label>

    <input type="radio" id="choice<"
     name="choice3" value="<">
    <label ><</label>

    <input type="radio" id="choice="
     name="choice3" value="=">
    <label >=</label><input class="form-control" onkeyup="lal(this)" name="age" ></input>
</div>
<div class="col-md-3 container">
<label class="colorText" >Стать</label><select name="selectingSex"   class="select selectpicker  form-control">
<option ></option>
  <option >Чоловік</option>
  <option >Жінка</option>
</select>
</div>
<div class="col-md-3 container">
<label class="colorText" >Ріст&nbsp;&nbsp;</label>
<input type="radio" id="choise>"
     name="choice4" value=">">
    <label >></label>

    <input type="radio" id="choise<"
     name="choice4" value="<">
    <label ><</label>

    <input type="radio" id="choise="
     name="choice4" value="=">
    <label >=</label><input class="form-control" onkeyup="lal(this)" name="height" ></input></div></div></br>

<div class="row">
<div class="col-md-3 container">
<label class="colorText" >Колір волосся:</label>
<select name="selectingColorOfHair"  class="select selectpicker  form-control">
<option ></option>
  <option>Рудий</option>
  <option>Блонд</option>
  <option>Брюнет</option>
  <option>Шатен</option>
  <option>Русявий</option>
  <option>Рожевий</option>
  <option>Синий</option>
  <option>Сивий</option>
  <option>Червоний</option>
  <option>Помаранчевий</option>
  <option>Жовтий</option>
  <option>Зелений</option>
  <option>Блакитний</option>
  <option>Фіолетовий</option>
</select>
</div>

</br>
<div class="col-md-3 container">
<label class="colorText" >Довжина волосся&nbsp;&nbsp;</label>
<input type="radio" id="choise>"
     name="choice5" value=">">
    <label >></label>

    <input type="radio" id="choise<"
     name="choice5" value="<">
    <label ><</label>

    <input type="radio" id="choise="
     name="choice5" value="=">
    <label >=</label><input onkeyup="lal(this)" class="form-control" name="hairLength"></input>
</div>
<div class="col-md-3 container">
<label class="colorText" >Колір очей:</label>
<select name="selectingColorOfEyes"  class="select selectpicker  form-control">
<option ></option>
  <option>Блакитний</option>
  <option >Зелений</option>
  <option >Карий</option>
  <option >Сірий</option>

</select></div><div class="col-md-3 container">
<label class="colorText" >Статура:</label>
<select name="selectingStature"  class="select selectpicker  form-control">
<option ></option>
  <option >Спортивний</option>
  <option >Худий</option>
  <option >Повний</option>
  <option >Стрункий</option>
</select></div>
</div>
</br>
<div class="row">
<div class="col-md-3 container">
<label class="colorText" >Розмір взуття&nbsp;&nbsp;</label>
<input type="radio" id="choise>"
     name="choice6" value=">">
    <label >></label>

    <input type="radio" id="choise<"
     name="choice6" value="<">
    <label ><</label>

    <input type="radio" id="choise="
     name="choice6" value="=">
    <label >=</label><input onkeyup="lal(this)" class="form-control" name="shoeSize" ></input>
</div>
<div class="col-md-3 container">
<label class="colorText" >Розмір одягу&nbsp;&nbsp;</label><input type="radio" id="choise>"
     name="choice7" value=">">
    <label >></label>

    <input type="radio" id="choise<"
     name="choice7" value="<">
    <label ><</label>

    <input type="radio" id="choise="
     name="choice7" value="=">
    <label >=</label><input onkeyup="lal(this)" class="form-control" name="clothingSize" ></input></div>

<div class="col-md-3 container">
<label class="colorText" >Національність:</label>
<select name="selectingNationality"  class="select selectpicker  form-control">
<option></option>
  <option>Українська</option>
  <option>Армянська</option>
  <option>Російська</option>
  <option>Грузинська</option>
  <option>Італійська</option>
  <option>Китайська</option>
  <option>Арабська</option>
  <option>Скандинавська</option>

</select></div>
<div class="col-md-3 container">
<label class="colorText" >Фільми, в яких брали участь:</label>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");

$result_films = $mysqli->query("SELECT `name_of_movie` FROM `movie`");
echo "<div class=\"field_wrapper_Films\"><div>";
echo "<select name=\"field_name_Films[]\"  class=\"select selectpicker  form-control\"><option></option>";
while($stroka = mysqli_fetch_array($result_films)){
for ($i=0; $i<count($stroka); $i+=2){
  echo "<option>$stroka[$i]</option>";
}
}
echo "</select>";
echo "<a href=\"javascript:void(0);\" class=\"add_button_Films\" title=\"Add field\"><img src=\"../img/add_icon.png\" height='35' width='35'/></a>";
echo "</div></div>";
?>
</div></div>
</div>
</div>
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



</br>


  <div class="btn noprint">
    <button class ="button btn btn-primary" name="done">Знайти</button>
  </div>
  </form>
</div>
<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" id="tableee">
<thead class="thead-dark " style="background-color: #252527;">
<tr>
<tr>
<td >Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Стаж</td>
<td>Рейтинг</td>
<td class = "noprint"><div class = "noprint">Зарплата</div></td>
<td class = "noprint"><div class = "noprint">Працює з</div></td>
<td class = "noprint"><div class = "noprint">Працює до</div></td>
<td class = "noprint"><div class = "noprint">Кількість фільмів, у яких брав участь</div></td>
<td class = "noprint"><div class = "noprint">Дата народження</div></td>
<td class = "noprint"><div class = "noprint">Місце народження</div></td>
<td>Місце проживання</td>
<td class = "noprint"><div class = "noprint">Професія</div></td>
<td>Вік</td>
<td>Стать</td>
<td >Ріст</td>
<td class = "noprint"><div class = "noprint">Колір волосся</div></td>
<td class = "noprint"><div class = "noprint">Довжина волосся</div></td>
<td class = "noprint"><div class = "noprint">Колір очей</div></td>
<td class = "noprint"><div class = "noprint">Статура</div></td>
<td>Розмір взуття</td>
<td>Розмір одягу</td>
<td class = "noprint"><div class = "noprint">Національність</div></td>
<td class = "noprint"><div class = "noprint">Інші елементи зовнішності</div></td>
<td >Ел.пошта</td>
<td>Телефон</td>
<td>Контакти близьких</td>
<td class = "noprint"><div class = "noprint">Рейтинги фільмів, в яких брали участь</div></td>
<td style="width:1px;white-space:nowrap;">Фільми, в яких брали участь</td>

<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");

//прості
$zapyt1 =  $mysqli->query("SELECT * FROM `actors` WHERE `actor_experience` = (SELECT MAX(`actor_experience`) FROM  `actors`)"); // 1
$zapyt2 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_sex` = 'Ж' AND `actor_age` > 25");//2
$zapyt3 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_salary` < 20000");//3
$zapyt4 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_color_of_hair` = 'Блонд'");//4
$zapyt5 = $mysqli->query("SELECT * FROM `movie` WHERE `rating_of_movie` = (SELECT MAX(`rating_of_movie`) FROM  `movie`)");//5


//складні
$zapyt6 = $mysqli->query("SELECT * FROM `actors` WHERE actor_id IN (SELECT actor_id FROM `actor_filmcrew` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = 'Золото'))");

    //Допоміжний запит Help:
$zapyt7_1 =  $mysqli->query("CREATE VIEW Help AS SELECT Actor_filmCrew.number_of_film_crew, SUM(Actor_filmCrew.actor_fee) AS SUM_FEE FROM Actor_filmCrew
GROUP BY Actor_filmCrew.number_of_film_crew");

    //Запит:
$zapyt7_2 = $mysqli->query("SELECT * FROM Movie WHERE Movie.Number_of_film_crew IN(
SELECT Help.number_of_film_crew
FROM Help
WHERE Help.SUM_FEE = (
SELECT MAX(SUM_FEE)
FROM Help))");


$zapyt8 =  $mysqli->query("SELECT  *
FROM movie AS M1
WHERE NOT EXISTS(
SELECT *
FROM actors
WHERE rating_of_employee > 9 AND actor_id NOT IN (
SELECT actor_id
FROM actor_filmcrew
WHERE number_of_film_crew = M1.number_of_film_crew));");


//параметричні
$zapyt9 =   $mysqli->query("SELECT * FROM `actors` WHERE `actor_shoe_size` = [Введіть розмір взуття:]");


//------------------------------------------LERA------------------------------------------------------------

//прості
$zapyt11 =  $mysqli->query("SELECT * FROM `movie_duration` WHERE `name_of_movie` = 'Буря'");
$zapyt22 = $mysqli->query("SELECT * FROM `editor` WHERE `editor_surname` = 'Ханенко'");
$zapyt33 = $mysqli->query("SELECT * FROM `others` WHERE `name_of_position` = 'адміністратор майданчика'");
$zapyt44 = $mysqli->query("SELECT *  FROM `others` WHERE `amount_of_films_others_took_part_in` > '10'");
$zapyt55 = $mysqli->query("SELECT * FROM `others` WHERE `others_e-mail` = 'o.glushenko@gmail.com'");


//складні
$zapyt66 = $mysqli->query("SELECT * FROM `movie` WHERE `name_of_movie` IN (
  SELECT  `name_of_movie` FROM `movie_genres` WHERE `id_movie_genre` IN(
    SELECT `id_movie_genre` FROM `genres` WHERE `genre` = 'детектив'))");


$zapyt77_1 = $mysqli->query("CREATE VIEW Help1 AS SELECT DISTINCT actor_filmcrew.actor_id, actor_filmcrew.number_of_film_crew
FROM actor_filmcrew
WHERE actor_filmCrew.number_of_film_crew IN(
SELECT movie.Number_of_film_crew
FROM movie
WHERE movie.budget_of_movie >700000)");

$zapyt77_2 =  $mysqli->query("SELECT Help1.actor_id, actors.actor_name, actors.actor_surname, actors.actor_middle_name, actors.actor_home_address,
actors.actor_works_since,	actors.actor_works_until, actors.actor_experience, actors.rating_of_employee, actors.amount_of_films_actor_took_part_in,
 actors.actor_date_of_birth, actors.actor_place_of_birth, actors.name_of_position,actors.actor_age, actors.actor_sex,actors.actor_height,
 actors.actor_color_of_hair, 	actors.actor_length_of_hair,actors.actor_color_of_eyes,  actors.actor_stature,actors.actor_shoe_size,
 actors.actor_clothing_size, actors.actor_nationality,actors.actor_other_appearance,actors.actor_e-mail,actors.actors_head_id,actors.actor_salary,
   COUNT(number_of_film_crew) AS amount_of_movies
FROM Help1 INNER JOIN actors ON Help1.actor_id = actors.actor_id
GROUP BY Help1.actor_id, actors.actor_name, actors.actor_surname");


$zapyt88 =  $mysqli->query("SELECT *
FROM movie
WHERE  movie.number_of_film_crew IN(
SELECT film_crew.number_of_film_crew
FROM film_crew
WHERE NOT EXISTS (
SELECT *
FROM understudies
WHERE NOT EXISTS (
SELECT *
FROM understudies_filmcrew
WHERE understudies_filmcrew.number_of_film_crew = film_crew.number_of_film_crew AND understudies_filmcrew.understudy_id = understudies.understudy_id  )))");


//параметричні
$zapyt99 =   $mysqli->query("SELECT * FROM `understudies` WHERE `understudy_color_of_hair` = [Введіть колір волосся:]");
//echo res($zapyt99);


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
  }
  $selecting =  $_POST['selecting'];

if (isset($_POST['done'])){
  $mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


switch($selecting){
  case 'max_experience':


$result_actors =  $mysqli->query("SELECT * FROM `actors` WHERE `actor_experience` = (SELECT MAX(`actor_experience`) FROM  `actors`)"); // 1
while ($stroka = mysqli_fetch_array($result_actors)){
  $temp = $stroka['actor_id'];
  $result_photos = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp");
  $result_phones = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp");
  $result_contacts_rel = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp");
  $result_ratings = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp)");
$result_films = $mysqli->query("SELECT `name_of_movie` FROM `movie` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM  `actor_filmcrew` WHERE `actor_id` = $temp)");
    echo "<table border=\"1\" class=\" table table-dark table-hover\"><thead class=\"thead-dark \" style=\"background-color: #252527;\">";




        echo"<tr >";
    echo"<td>" . $stroka['actor_id'] . "</td>";
    echo"<td>" . $stroka['actor_name'] . "</td>";
    echo"<td>" . $stroka['actor_surname'] . "</td>";
    echo"<td>" . $stroka['actor_middle_name'] . "</td>";
    echo"<td>" . $stroka['actor_experience'] . "</td>";
    echo"<td>" . $stroka['rating_of_employee'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_salary'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_works_since'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_works_until'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['amount_of_films_actor_took_part_in'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_date_of_birth'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_place_of_birth'] . "</td>";
    echo"<td >" . $stroka['actor_home_address'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['name_of_position'] . "</td>";
    echo"<td>" . $stroka['actor_age'] . "</td>";
    echo"<td>" . $stroka['actor_sex'] . "</td>";
    echo"<td >" . $stroka['actor_height'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_color_of_hair'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_length_of_hair'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_color_of_eyes'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_stature'] . "</td>";
    echo"<td>" . $stroka['actor_shoe_size'] . "</td>";
    echo"<td>" . $stroka['actor_clothing_size'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_nationality'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_other_appearance'] . "</td>";
    echo"<td>" . $stroka['actor_e-mail'] . "</td>";
    echo"<td>" .  res($result_phones) . "</td>";
    echo"<td>" .  res($result_contacts_rel) . "</td>";
    echo"<td class = \" noprint\">" .  res($result_ratings) . "</td>";
	   echo"<td style=\"width:1px;white-space:nowrap;\">" .  res($result_films) . "</td>";
          echo"</tr>";
   }
  break;



  case 'female':
    $result_actors2 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_sex` = 'Жіноча'");//2

    while ($stroka = mysqli_fetch_array($result_actors2)){
      $temp = $stroka['actor_id'];
      $result_photos = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp");
      $result_phones = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp");
      $result_contacts_rel = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp");
      $result_ratings = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp)");
$result_films = $mysqli->query("SELECT `name_of_movie` FROM `movie` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM  `actor_filmcrew` WHERE `actor_id` = $temp)");
         echo"<tr >";
    echo"<td>" . $stroka['actor_id'] . "</td>";
    echo"<td>" . $stroka['actor_name'] . "</td>";
    echo"<td>" . $stroka['actor_surname'] . "</td>";
    echo"<td>" . $stroka['actor_middle_name'] . "</td>";
    echo"<td>" . $stroka['actor_experience'] . "</td>";
    echo"<td>" . $stroka['rating_of_employee'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_salary'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_works_since'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_works_until'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['amount_of_films_actor_took_part_in'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_date_of_birth'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_place_of_birth'] . "</td>";
    echo"<td >" . $stroka['actor_home_address'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['name_of_position'] . "</td>";
    echo"<td>" . $stroka['actor_age'] . "</td>";
    echo"<td>" . $stroka['actor_sex'] . "</td>";
    echo"<td >" . $stroka['actor_height'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_color_of_hair'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_length_of_hair'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_color_of_eyes'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_stature'] . "</td>";
    echo"<td>" . $stroka['actor_shoe_size'] . "</td>";
    echo"<td>" . $stroka['actor_clothing_size'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_nationality'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_other_appearance'] . "</td>";
    echo"<td>" . $stroka['actor_e-mail'] . "</td>";
    echo"<td>" .  res($result_phones) . "</td>";
    echo"<td>" .  res($result_contacts_rel) . "</td>";
    echo"<td class = \" noprint\">" .  res($result_ratings) . "</td>";
	  	   echo"<td style=\"width:1px;white-space:nowrap;\">" .  res($result_films) . "</td>";
       
           echo"</tr>";
       }
      break;



  case  'salary_20000_more':
    $result_actors3 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_salary` < 20000");//3
    while ($stroka3 = mysqli_fetch_array($result_actors3)){
      $temp3 = $stroka3['actor_id'];
      $result_photos3 = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp3");
      $result_phones3 = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp3");
      $result_contacts_rel3 = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp3");
      $result_ratings3 = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp3)");
$result_films = $mysqli->query("SELECT `name_of_movie` FROM `movie` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM  `actor_filmcrew` WHERE `actor_id` = $temp3)");
        echo"<tr >";
    echo"<td>" . $stroka3['actor_id'] . "</td>";
    echo"<td>" . $stroka3['actor_name'] . "</td>";
    echo"<td>" . $stroka3['actor_surname'] . "</td>";
    echo"<td>" . $stroka3['actor_middle_name'] . "</td>";
    echo"<td>" . $stroka3['actor_experience'] . "</td>";
    echo"<td>" . $stroka3['rating_of_employee'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_salary'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_works_since'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_works_until'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['amount_of_films_actor_took_part_in'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_date_of_birth'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_place_of_birth'] . "</td>";
    echo"<td >" . $stroka3['actor_home_address'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['name_of_position'] . "</td>";
    echo"<td>" . $stroka3['actor_age'] . "</td>";
    echo"<td>" . $stroka3['actor_sex'] . "</td>";
    echo"<td >" . $stroka3['actor_height'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_color_of_hair'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_length_of_hair'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_color_of_eyes'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_stature'] . "</td>";
    echo"<td>" . $stroka3['actor_shoe_size'] . "</td>";
    echo"<td>" . $stroka3['actor_clothing_size'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_nationality'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_other_appearance'] . "</td>";
    echo"<td>" . $stroka3['actor_e-mail'] . "</td>";
    echo"<td>" .  res($result_phones3) . "</td>";
    echo"<td>" .  res($result_contacts_rel3) . "</td>";
    echo"<td class = \" noprint\">" .  res($result_ratings3) . "</td>";
		   echo"<td style=\"width:1px;white-space:nowrap;\">" .  res($result_films) . "</td>";
          echo"</tr>";
       }
      break;


      case  'blond':
        $result_actors3 = $mysqli->query("SELECT * FROM `actors` WHERE `actor_color_of_hair` = 'Блонд'");//4
        while ($stroka3 = mysqli_fetch_array($result_actors3)){
          $temp3 = $stroka3['actor_id'];
          $result_photos3 = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp3");
          $result_phones3 = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp3");
          $result_contacts_rel3 = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp3");
          $result_ratings3 = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp3)");
$result_films = $mysqli->query("SELECT `name_of_movie` FROM `movie` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM  `actor_filmcrew` WHERE `actor_id` = $temp3)");
            echo"<tr >";
    echo"<td>" . $stroka3['actor_id'] . "</td>";
    echo"<td>" . $stroka3['actor_name'] . "</td>";
    echo"<td>" . $stroka3['actor_surname'] . "</td>";
    echo"<td>" . $stroka3['actor_middle_name'] . "</td>";
    echo"<td>" . $stroka3['actor_experience'] . "</td>";
    echo"<td>" . $stroka3['rating_of_employee'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_salary'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_works_since'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_works_until'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['amount_of_films_actor_took_part_in'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_date_of_birth'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_place_of_birth'] . "</td>";
    echo"<td >" . $stroka3['actor_home_address'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['name_of_position'] . "</td>";
    echo"<td>" . $stroka3['actor_age'] . "</td>";
    echo"<td>" . $stroka3['actor_sex'] . "</td>";
    echo"<td >" . $stroka3['actor_height'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_color_of_hair'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_length_of_hair'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_color_of_eyes'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_stature'] . "</td>";
    echo"<td>" . $stroka3['actor_shoe_size'] . "</td>";
    echo"<td>" . $stroka3['actor_clothing_size'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_nationality'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_other_appearance'] . "</td>";
    echo"<td>" . $stroka3['actor_e-mail'] . "</td>";
    echo"<td>" .  res($result_phones3) . "</td>";
    echo"<td>" .  res($result_contacts_rel3) . "</td>";
    echo"<td class = \" noprint\">" .  res($result_ratings3) . "</td>";
	  	   echo"<td style=\"width:1px;white-space:nowrap;\">" .  res($result_films) . "</td>";
              echo"</tr>";
           }
          break;

          case  'movie_zoloto':
            $result_actors3 = $mysqli->query("SELECT * FROM `actors` WHERE actor_id IN (SELECT actor_id FROM `actor_filmcrew` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = 'Золото'))");
            while ($stroka3 = mysqli_fetch_array($result_actors3)){
              $temp3 = $stroka3['actor_id'];
              $result_photos3 = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp3");
              $result_phones3 = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp3");
              $result_contacts_rel3 = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp3");
              $result_ratings3 = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp3)");
$result_films = $mysqli->query("SELECT `name_of_movie` FROM `movie` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM  `actor_filmcrew` WHERE `actor_id` = $temp3)");
                echo"<tr >";
    echo"<td>" . $stroka3['actor_id'] . "</td>";
    echo"<td>" . $stroka3['actor_name'] . "</td>";
    echo"<td>" . $stroka3['actor_surname'] . "</td>";
    echo"<td>" . $stroka3['actor_middle_name'] . "</td>";
    echo"<td>" . $stroka3['actor_experience'] . "</td>";
    echo"<td>" . $stroka3['rating_of_employee'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_salary'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_works_since'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_works_until'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['amount_of_films_actor_took_part_in'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_date_of_birth'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_place_of_birth'] . "</td>";
    echo"<td >" . $stroka3['actor_home_address'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['name_of_position'] . "</td>";
    echo"<td>" . $stroka3['actor_age'] . "</td>";
    echo"<td>" . $stroka3['actor_sex'] . "</td>";
    echo"<td >" . $stroka3['actor_height'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_color_of_hair'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_length_of_hair'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_color_of_eyes'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka3['actor_stature'] . "</td>";
    echo"<td>" . $stroka3['actor_shoe_size'] . "</td>";
    echo"<td>" . $stroka3['actor_clothing_size'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_nationality'] . "</td>";
    echo"<td class = \" noprint\">" . $stroka['actor_other_appearance'] . "</td>";
    echo"<td>" . $stroka3['actor_e-mail'] . "</td>";
    echo"<td>" .  res($result_phones3) . "</td>";
    echo"<td>" .  res($result_contacts_rel3) . "</td>";
    echo"<td class = \" noprint\">" .  res($result_ratings3) . "</td>";
		   echo"<td style=\"width:1px;white-space:nowrap;\">" .  res($result_films) . "</td>";
     echo"</tr>";
               }
              break;


//?????????????????????????????

case 'variable':
$result_actors0 =   $mysqli->query("SELECT `actor_id`, SUM(actor_fee) AS total_fee FROM `actor_filmcrew` GROUP BY `actor_id`");
echo "<script>document.getElementById(\"tableee\").remove();</script>";

echo "<table border=\"1\" class=\" table table-dark table-hover\" >
<thead class=\"thead-dark \" style=\"background-color: #252527;\">
<tr>
<tr>
<td >Табельний номер</td>
<td >Прізвище</td>
<td >Ім'я</td>
<td >По-батькові</td>
<td>Сумарний гонорар</td>
</tr></thead>";

while ($stroka0 = mysqli_fetch_array($result_actors0)){
  $temp0 = $stroka0['actor_id'];
  $sum = $stroka0['total_fee'];

  $result_actors_name =   $mysqli->query("SELECT `actor_name` FROM `actors` WHERE `actor_id` = '$temp0'");
  $result_actors_surname =   $mysqli->query("SELECT `actor_surname` FROM `actors` WHERE `actor_id` = '$temp0'");
  $result_actors_mid_name =   $mysqli->query("SELECT `actor_middle_name` FROM `actors` WHERE `actor_id` = '$temp0'");
$stroka01 = mysqli_fetch_array($result_actors_name);
$stroka02 = mysqli_fetch_array($result_actors_surname);
$stroka03 = mysqli_fetch_array($result_actors_mid_name);


  echo"<tr >";
  echo"<td>" . $temp0 . "</td>";
  echo"<td>" . $stroka02[0] . "</td>";
  echo"<td>" . $stroka01[0] . "</td>";
  echo"<td>" . $stroka03[0] . "</td>";
  echo"<td>" . $sum . "</td>";
     }
    break;
//?????????????????????????????

    case 'makeByHand':
        $name =  $_POST['name'];
        $surname =  $_POST['surname'];
        $middleName =  $_POST['middleName'];
        $rating =  $_POST['rating'];
        $amountOfMovies =  $_POST['amountOfFilms'];
        $age =  $_POST['age'];
        $sex =  $_POST['selectingSex'];
        $height =  $_POST['height'];
        $hairColor =  $_POST['selectingColorOfHair'];
        $hairLen=  $_POST['hairLength'];
        $eyes =  $_POST['selectingColorOfEyes'];
        $stature =  $_POST['selectingStature'];
        $shoeSize =  $_POST['shoeSize'];
        $size =  $_POST['clothingSize'];
        $nationality =  $_POST['selectingNationality'];
        $films = $_POST['field_name_Films'];
  //  $skills =  $_POST['selectingFilms'];

        $quer = "SELECT * FROM `actors` WHERE ";
//        echo $quer;
//        $quer .= "fff";
//        echo $quer;

        $isFirst = true;

        if($name != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $quer = $quer . "actor_name LIKE  '%$name%'";
          $isFirst = false;
        }
        if($surname != NULL){
        //  $isLast = false;
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $quer = $quer . "actor_surname LIKE  '%$surname%'";
          $isFirst = false;
        }
        if($middleName != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $quer = $quer . "actor_middle_name LIKE  '%$middleName%'";
          $isFirst = false;
        }
        if($rating != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $choice = $_POST['choice1'];

          $quer = $quer . "rating_of_employee $choice $rating";
          $isFirst = false;
        }
        if($amountOfMovies != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $choice = $_POST['choice2'];

          $quer = $quer . "amount_of_films_actor_took_part_in $choice $amountOfMovies";
          $isFirst = false;
        }
        if($age != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $choice = $_POST['choice3'];

          $quer = $quer . "actor_age $choice $age";
          $isFirst = false;
        }
        if($sex != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $quer = $quer . "actor_sex = \"$sex\"";
          $isFirst = false;
        }
        if($height != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $choice = $_POST['choice4'];

          $quer = $quer . "actor_height $choice $height";
          $isFirst = false;
        }
        if($hairColor != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $quer = $quer . "actor_color_of_hair = \"$hairColor\"";
          $isFirst = false;
        }
        if($hairLen != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $choice = $_POST['choice5'];

          $quer = $quer . "actor_length_of_hair $choice $hairLen";
          $isFirst = false;
        }
        if($eyes != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $quer = $quer . "actor_color_of_eyes = \"$eyes\"";
          $isFirst = false;
        }
        if($stature != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $quer = $quer . "actor_stature = \"$stature\"";
          $isFirst = false;
        }
        if($shoeSize != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $choice = $_POST['choice6'];

          $quer = $quer . "actor_shoe_size $choice $shoeSize";
          $isFirst = false;
        }
        if($size != NULL) {
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $choice = $_POST['choice7'];

            $quer = $quer . "actor_clothing_size $choice $size";
            $isFirst = false;
        }
        if($nationality != NULL){
          if(!$isFirst){
            $quer = $quer . " AND ";
          }
          $quer = $quer . "actor_nationality = \"$nationality\"";
          $isFirst = false;
        }





      //  $a = mysqli_fetch_array($films);

        //$notFirst = false;
        if($films != NULL){
          // if(!$isFirst){
          //   $quer = $quer . " AND ";
          // }
          $i = 0;
          foreach ($films as $value) {
            if($value != ""){
              if($i != 0 || !$isFirst){
                $quer = $quer . " AND ";
              }
              echo $value;
              $quer = $quer . "`actor_id` IN (SELECT `actor_id` FROM `actor_filmCrew` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = \"$value\"))";
              $isFirst = false;
              $i++;
          //    $notFirst = true;
            }

          }

        }


      //  echo $quer;
        $result_filter = $mysqli->query($quer);

        if ($result_filter) {
        //   echo "Success!";
         }
        else {
            echo "Error! $mysqli->error <br>";
          }

        //echo $quer;


      //  $result_filter = $mysqli->query($quer);

        while ($stroka4 = mysqli_fetch_array($result_filter)){
          $temp4 = $stroka4['actor_id'];
          $result_photos4 = $mysqli->query("SELECT `actor_photo` FROM `actors_photo` WHERE `actor_id`  = $temp4");
          $result_phones4 = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id`  = $temp4");
          $result_contacts_rel4 = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id`  = $temp4");
          $result_ratings4 = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `actors_previous_movies_rating` WHERE `actor_id` = $temp4)");
          $result_films = $mysqli->query("SELECT `name_of_movie` FROM `movie` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM  `actor_filmcrew` WHERE `actor_id` = $temp4)");
            echo"<tr>";
            echo"<td>" . $stroka4['actor_id'] . "</td>";
            echo"<td>" . $stroka4['actor_name'] . "</td>";
            echo"<td>" . $stroka4['actor_surname'] . "</td>";
            echo"<td>" . $stroka4['actor_middle_name'] . "</td>";
            echo"<td>" . $stroka4['actor_experience'] . "</td>";
            echo"<td>" . $stroka4['rating_of_employee'] . "</td>";
            echo"<td>" . $stroka4['actor_salary'] . "</td>";
            echo"<td>" . $stroka4['actor_works_since'] . "</td>";
            echo"<td>" . $stroka4['actor_works_until'] . "</td>";
            echo"<td>" . $stroka4['amount_of_films_actor_took_part_in'] . "</td>";
            echo"<td>" . $stroka4['actor_date_of_birth'] . "</td>";
            echo"<td>" . $stroka4['actor_place_of_birth'] . "</td>";
            echo"<td>" . $stroka4['actor_home_address'] . "</td>";
            echo"<td>" . $stroka4['name_of_position'] . "</td>";
            echo"<td>" . $stroka4['actor_age'] . "</td>";
            echo"<td>" . $stroka4['actor_sex'] . "</td>";
            echo"<td>" . $stroka4['actor_height'] . "</td>";
            echo"<td>" . $stroka4['actor_color_of_hair'] . "</td>";
            echo"<td>" . $stroka4['actor_length_of_hair'] . "</td>";
            echo"<td>" . $stroka4['actor_color_of_eyes'] . "</td>";
            echo"<td>" . $stroka4['actor_stature'] . "</td>";
            echo"<td>" . $stroka4['actor_shoe_size'] . "</td>";
            echo"<td>" . $stroka4['actor_clothing_size'] . "</td>";
            echo"<td>" . $stroka4['actor_nationality'] . "</td>";
            echo"<td>" . $stroka4['actor_other_appearance'] . "</td>";
            echo"<td>" . $stroka4['actor_e-mail'] . "</td>";


            echo"<td>" .  res($result_phones4) . "</td>";
            echo"<td>" .  res($result_contacts_rel4) . "</td>";
            echo"<td>" .  res($result_ratings4) . "</td>";
			  	   echo"<td style=\"width:1px;white-space:nowrap;\">" .  res($result_films) . "</td>";
           echo"</tr>";
     }

      break;

}
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
