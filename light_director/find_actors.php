<!DOCTYPE html>
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
<script>
function lal(el) {
  if (el.value.match( /[^0-9]/ ) ) {
        alert( "Неправильний формат числа! \nМожна використовувати тільки цифри" );
        el.value = el.value.replace( /[^0-9]/ , "" )
    }
}

function yesnoCheck(that) {
    if (that.value == "entered_shoe_size") {
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
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
                <label class=" mr-sm-2">Посада:&nbsp;&nbsp;Гафер</label>
            </form>
        </div>
    </div>
</nav>

<div>
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
  <option value="most_expensive_actor" >Найдорожчі актори</option>  <option value="variable" >Сумарні гонорари акторів</option>
  <option value="makeByHand">Фільтрувати самостійно</option>
</select>
</div></div></br>




<div id = "appearFilters" style="display: none;">
<div class="row">
<div class="col-md-3 container">
<label class="colorText" >Ім'я<input class="form-control" name ="name"></input></label>
</div>
<div class="col-md-3 container">
<label class="colorText" >Прізвище<input class="form-control" name="surname"></input></label>
</div>
<div class="col-md-3 container">
<label class="colorText" >По-батькові<input class="form-control" name="middleName" ></input></label>
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
        el.value = el.value.replace( /[^0-9]/ , "" )
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

<div class="btn noprint">
  <button class ="button btn btn-primary" name="done">Знайти</button>
</div>
</form>




</div>
<div  style="margin:10px;">
<table border="1" class=" table table-dark table-hover" >
<thead class="thead-dark " style="background-color: #252527;">

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
<td class = "noprint"><div class = "noprint">Зміна інформації про актора</div></td>
</tr></thead>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
 $result_actors = $mysqli->query("SELECT * FROM `actors`");

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

while ($stroka = mysqli_fetch_array($result_actors)){
  $temp = $stroka['actor_id'];



  $result_phones = $mysqli->query("SELECT `actor_phone_number` FROM `actors_phones` WHERE `actor_id` IN (SELECT `actor_id` FROM  `actors` WHERE `actor_id` = $temp)");
  $result_contacts_rel = $mysqli->query("SELECT `actor_relatives_phone_numbers` FROM `actor_contacts_of_relatives` WHERE `actor_id` IN (SELECT `actor_id` FROM  `actors` WHERE `actor_id` = $temp)");
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
    echo"<form action=\"editingActor.php\" method=\"post\">";

echo "<input type=\"hidden\" value = \"" .$stroka['actor_id'] . "\" name=\"actor_id\" >";
    echo "<td class = \" noprint\">"."<div class = \"btn noprint\">"."<button class =\" btn btn-danger\" name=\"editBtn\">Змінити</button>"."</div></td></form>";    echo"</tr>";
    echo"</tr>";

   }

?>

</table>
</div>


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
