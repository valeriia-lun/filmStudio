<!DOCTYPE html>
<html>
<head>
<meta  charset=utf-8>
<title>Знайти інших співробітників</title>
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
                <label class=" mr-sm-2">Посада:&nbsp;&nbsp;Звукорежисер</label>
            </form>
        </div>
    </div>
</nav>

<div>
<h1 align="center" class="colorForAllText">Інші співробітники</h1></br>
</div>
<div class="noprint">




<form action="find_others_zapyty.php" method="post">


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

</div></br></br>
<div class="row">
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

</div></br>




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

</br>


</br>




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

<div class="row"><div class="col-md-3 container">
<label class="colorText" >Посада:</label>
<select   class="select selectpicker  form-control" name="selectingPosition">
<option></option>
<option >Сценарист</option>
<option >Режисер</option>
<option >Лінійний продюсер</option>
<option >Реквізитор</option>
<option >Гример</option>
<option >Оператор</option>
<option >Гафер</option>
<option >Звукорежисер</option>
<option >Художник по костюмах</option>
<option >Художник-постановщик</option>
<option >Агент по акторах</option>
<option >Помічник оператора</option>
<option >Помічник звукорежисера</option>
<option >Помічник гафера</option>
<option >Костюмер</option>
<option >Помічник художника по костюмах</option>
<option >Помічник художника-постановщика</option>
<option >Адміністратор майданчика</option>
<option >Кухар</option>
<option >Водій</option>
<option >Вантажник</option>
<option >Прибиральник</option>
<option >Охоронник</option>
</select></div></div>

<div class="btn noprint">
  <button class ="button btn btn-primary" name="done">Знайти</button>
</div>
</form>




</div>

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
<td>Місце проживання</td>
<td class = "noprint"><div class = "noprint">Працює з</div></td>
<td class = "noprint"><div class = "noprint">Працює до</div></td>
<td class = "noprint"><div class = "noprint">Кількість фільмів, у яких брав участь</div></td>
<td class = "noprint"><div class = "noprint">Дата народження</div></td>
<td class = "noprint"><div class = "noprint">Місце народження</div></td>
<td class = "noprint"><div class = "noprint">Професія</div></td>
<td >Ел.пошта</td>
<td>Телефон</td>
<td>Контакти близьких</td>
<td class = "noprint"><div class = "noprint">Рейтинги фільмів, в яких брали участь</div></td>
<td style="width:1px;white-space:nowrap;">Фільми, в яких брали участь</td>
</tr></thead>
<?php
$mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");


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
  $entering_values = $_POST['entering_values'];

if (isset($_POST['done'])){
  $mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");



          $name =  $_POST['name'];
          $surname =  $_POST['surname'];
          $middleName =  $_POST['middleName'];
          $rating =  $_POST['rating'];
          $amountOfMovies =  $_POST['amountOfFilms'];
          $position =  $_POST['selectingPosition'];


          $films = $_POST['field_name_Films'];
    //  $skills =  $_POST['selectingFilms'];

          $quer = "SELECT * FROM `others` WHERE ";
  //        echo $quer;
  //        $quer .= "fff";
  //        echo $quer;

          $isFirst = true;

          if($name != NULL){
            if(!$isFirst){
              $quer = $quer . " AND ";
            }
            $quer = $quer . "others_name = \"$name\"";
            $isFirst = false;
          }
          if($surname != NULL){
          //  $isLast = false;
            if(!$isFirst){
              $quer = $quer . " AND ";
            }
            $quer = $quer . "others_surname = \"$surname\"";
            $isFirst = false;
          }
          if($middleName != NULL){
            if(!$isFirst){
              $quer = $quer . " AND ";
            }
            $quer = $quer . "others_middle_name = \"$middleName\"";
            $isFirst = false;
          }
          if($position != NULL){
            if(!$isFirst){
              $quer = $quer . " AND ";
            }
            $quer = $quer . "name_of_position = \"$position\"";
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

            $quer = $quer . "amount_of_films_others_took_part_in $choice $amountOfMovies";
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
                $quer = $quer . "`others_id` IN (SELECT `others_id` FROM `others_filmCrew` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM `movie` WHERE `name_of_movie` = \"$value\"))";
                $isFirst = false;
                $i++;
            //    $notFirst = true;
              }

            }

          }


     //     echo $quer;
          $result_filter = $mysqli->query($quer);

          if ($result_filter) {
          //   echo "Success!";
           }
          else {
              echo "Error! $mysqli->error <br>";
            }

         // echo $quer;


        //  $result_filter = $mysqli->query($quer);

          while ($stroka4 = mysqli_fetch_array($result_filter)){
            $temp4 = $stroka4['others_id'];
            $result_phones_rel4 = $mysqli->query("SELECT `others_phone_number` FROM `others_phones` WHERE `others_id`  = $temp4");

            $result_contacts_rel4 = $mysqli->query("SELECT `others_relatives_phone_numbers` FROM `others_contacts_of_relatives` WHERE `others_id`  = $temp4");
            $result_ratings4 = $mysqli->query("SELECT `rating` FROM `previous_movies_rating` WHERE `id_previous_movie_rating` IN (SELECT `id_previous_movie_rating` FROM  `others_previous_movies_ratings` WHERE `others_id` = $temp4)");
            $result_films = $mysqli->query("SELECT `name_of_movie` FROM `movie` WHERE `number_of_film_crew` IN (SELECT `number_of_film_crew` FROM  `others_filmcrew` WHERE `others_id` = $temp4)");
              echo"<tr>";
              echo"<td>" . $stroka4['others_id'] . "</td>";
              echo"<td>" . $stroka4['others_name'] . "</td>";
              echo"<td>" . $stroka4['others_surname'] . "</td>";
              echo"<td>" . $stroka4['others_middle_name'] . "</td>";
              echo"<td>" . $stroka4['others_experience'] . "</td>";
              echo"<td>" . $stroka4['rating_of_employee'] . "</td>";
              echo"<td>" . $stroka4['others_salary'] . "</td>";
              echo"<td>" . $stroka4['others_home_address'] . "</td>";
              echo"<td>" . $stroka4['others_works_since'] . "</td>";
              echo"<td>" . $stroka4['others_works_until'] . "</td>";
              echo"<td>" . $stroka4['amount_of_films_others_took_part_in'] . "</td>";
              echo"<td>" . $stroka4['others_date_of_birth'] . "</td>";
              echo"<td>" . $stroka4['others_place_of_birth'] . "</td>";
              echo"<td>" . $stroka4['name_of_position'] . "</td>";
              echo"<td>" . $stroka4['others_e-mail'] . "</td>";
              echo"<td>" .  res($result_phones_rel4) . "</td>";


              echo"<td>" .  res($result_contacts_rel4) . "</td>";
              echo"<td>" .  res($result_ratings4) . "</td>";echo"<td style=\"width:1px;white-space:nowrap;\">" .  res($result_films) . "</td>";
    //          echo"<form action=\"editingOthers.php\" method=\"post\">";
    //
    // echo "<input type=\"hidden\" value = \"" .$stroka['actor_id'] . "\" name=\"actor_id\" >";
    //     echo "<td  class = \" noprint\">"."<div class = \"btn noprint\">"."<button class =\" btn btn-danger\" name=\"editBtn\">Змінити</button>"."</div></td></form>";    echo"</tr>";



}}

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
