<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Дублери</title>
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
<script>function yesnoCheck(that) {
    if (that.value == "entered_hair_length") {
        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}</script>
</head>
<style type="text/css">
@media print {
  .noprint { display: none; }
  @page { margin: 0; }
}
</style>
<body class="text-center body3">

<nav class="navbar navbar-expand-lg navbar-light bg-light style=width=100%;">
  <a class="navbar-brand" href="..\index.php">Вибір посади</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Головна<span class="sr-only">(current)</span></a>
      </li>     
    </ul>
   
    <form class=" my-2 my-lg-0">
      <label class=" mr-sm-2" >Адміністратор майданчика</label>
    </form>
  </div>
</nav>
<div>
<h1 align="center" class="colorForAllText">Дублери</h1></br>

</div>
<div class="noprint">
<form action="find_understudies_zapyty.php" method="post">
<div class="noprint">
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
<label class="colorText" >Рейтинг<input class="form-control" name="rating" ></input></label>
</div></div></br>




<div class="row">
<div class="col-md-3 container">
<label class="colorText" >Кількість фільмів у яких брали участь<input class="form-control" onkeyup="lal(this)" name="amountOfFilms" ></input></label>
</div>
<div class="col-md-3 container">
<label class="colorText" >Вік<input class="form-control" onkeyup="lal(this)" name="age" ></input></label>
</div>
<div class="col-md-3 container">
<label class="colorText" >Стать</label><select name="selectingSex"   class="select selectpicker  form-control">
<option ></option>
  <option >Чоловік</option>
  <option >Жінка</option>
</select>
</div>
<div class="col-md-3 container">
<label class="colorText" >Ріст<input class="form-control" onkeyup="lal(this)" name="height" ></input></label></div></div></br>

<div class="row">
<div class="col-md-3 container">
<label class="colorText" >Колір волосся:</label>
<select name="selectingColorOfHair"  class="select selectpicker  form-control">
<option ></option>
  <option>Рудий</option>
  <option>Блонд</option>
  <option>Брюнет</option>
  <option>Шатен</option>
</select>
</div>

</br>
<div class="col-md-3 container">
<label class="colorText" >Довжина волосся</label><input onkeyup="lal(this)" class="form-control" name="hairLength"></input>
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
<label class="colorText" >Розмір взуття</label><input onkeyup="lal(this)" class="form-control" name="shoeSize" ></input>
</div>
<div class="col-md-3 container">
<label class="colorText" >Розмір одягу</label><input onkeyup="lal(this)" class="form-control" name="clothingSize" ></input></div>
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
echo "<select name=\"selectingFilms\"  class=\"select selectpicker  form-control\"><option></option>";
while($stroka = mysqli_fetch_array($result_films)){
for ($i=0; $i<count($stroka); $i+=2){
  echo "<option>$stroka[$i]</option>"; 
}
}
echo "</select>";
?>
</div></div>

<div class="row">
<div class="col-md-3 container">
<label class="colorText" >Особливі навички:</label>
<select name="selectingSkills"  class="select selectpicker  form-control">
<option></option>
  <option>швидко бігає</option>
  <option>стрибає</option>
  <option>актробат</option>
  <option>плаває</option>
  <option>катається на ковзанах</option>
  <option>професійний плавець</option>
  <option>каскадер</option>
  <option>пригає на скакалці</option>
  <option>жонглює</option>
  <option>знає іспанську</option>
</select>
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
<td>Id</td>
<td>Ім'я</td>
<td>Прізвище</td>
<td>По-батькові</td>
<td>Стаж</td>
<td>Рейтинг</td>
<td>Зарплата</td>
<td>Працює з</td>
<td>Працює до</td>
<td>Кількість фільмів, у яких брав участь</td>
<td>Дата народження</td>
<td>Місце народження</td>
<td>Місце проживання</td>
<td>Професія</td>
<td>Вік</td>
<td>Стать</td>
<td>Ріст</td>
<td>Колір волосся</td>
<td>Довжина волосся</td>
<td>Колір очей</td>
<td>Статура</td>
<td>Розмір взуття</td>
<td>Розмір одягу</td>
<td>Національність</td>
<td>Інші елементи зовнішності</td>
<td>Ел.пошта</td>
<td>Id керуючого</td>

<td>Особливі навички</td>
<td>Фото</td>
<td>Телефон</td>
<td>Контакти близьких</td>
<td>Рейтинги фільмів, в яких брали участь </td>
</tr></thead>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");
$result_understudies = $mysqli->query("SELECT * FROM `understudies`");

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

//$mysqli->close();

while ($stroka = mysqli_fetch_array($result_understudies)){
    $temp = $stroka['understudy_id'];

    $result_skills = $mysqli->query("SELECT `skill` FROM `skills` WHERE `skills_id` IN (SELECT `skills_id` FROM  `understudies_skills` WHERE `understudy_id` = $temp)");

    $result_photos = $mysqli->query("SELECT `understudy_photo` FROM `understudies_photo` WHERE `understudy_id` IN (SELECT `understudy_id` FROM  `understudies` WHERE `understudy_id` = $temp)");

    $result_phones = $mysqli->query("SELECT `understudy_phone_number` FROM `understudy_phones` WHERE `understudy_id` IN (SELECT `understudy_id` FROM  `understudies` WHERE `understudy_id` = $temp)");

    $result_contacts_rel = $mysqli->query("SELECT `understudy_relatives_phone_numbers` FROM `understudies_contacts_of_relatives` WHERE `understudy_id` IN (SELECT `understudy_id` FROM  `understudies` WHERE `understudy_id` = $temp)");

    $result_ratings = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `understudy_previous_movies_ratings` WHERE `understudy_id` = $temp)");

   
    echo"<tr>";
    echo"<td>" . $stroka['understudy_id'] . "</td>";
    echo"<td>" . $stroka['understudy_name'] . "</td>";
    echo"<td>" . $stroka['understudy_surname'] . "</td>";
    echo"<td>" . $stroka['understudy_middle_name'] . "</td>";
    echo"<td>" . $stroka['understudy_experience'] . "</td>";
    echo"<td>" . $stroka['rating_of_employee'] . "</td>";
    echo"<td>" . $stroka['understudy_salary'] . "</td>";
    echo"<td>" . $stroka['understudy_works_since'] . "</td>";
    echo"<td>" . $stroka['understudy_works_until'] . "</td>";
    echo"<td>" . $stroka['amount_of_films_understudy_took_part_in'] . "</td>";
    echo"<td>" . $stroka['understudy_date_of_birth'] . "</td>";
    echo"<td>" . $stroka['understudy_place_of_birth'] . "</td>";
    echo"<td>" . $stroka['understudy_home_address'] . "</td>";
    echo"<td>" . $stroka['name_of_position'] . "</td>";
    echo"<td>" . $stroka['understudy_age'] . "</td>";
    echo"<td>" . $stroka['understudy_sex'] . "</td>";
    echo"<td>" . $stroka['understudy_height'] . "</td>";
    echo"<td>" . $stroka['understudy_color_of_hair'] . "</td>";
    echo"<td>" . $stroka['understudy_length_of_hair'] . "</td>";
    echo"<td>" . $stroka['understudy_color_of_eyes'] . "</td>";
    echo"<td>" . $stroka['understudy_stature'] . "</td>";
    echo"<td>" . $stroka['understudy_shoe_size'] . "</td>";
    echo"<td>" . $stroka['understudy_clothing_size'] . "</td>";
    echo"<td>" . $stroka['understudy_nationality'] . "</td>";
    echo"<td>" . $stroka['understudy_other_appearance'] . "</td>";
    echo"<td>" . $stroka['understudy_e-mail'] . "</td>";
    echo"<td>" . $stroka['understudy_head_id'] . "</td>";
    echo"<td>" .  res($result_skills) . "</td>";
    echo"<td>" .  res($result_photos) . "</td>";
    echo"<td>" .  res($result_phones) . "</td>";
    echo"<td>" .  res($result_contacts_rel) . "</td>";
    echo"<td>" .  res($result_ratings) . "</td>";
 
    echo"</tr>";
    
   }
  
?>

</table>
</div>
<div class="btn noprint">
<button class ="button btn btn-danger" onclick="window.print()">Друкувати</button></br></br></br>
</div>
</body>
</html>