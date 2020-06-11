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
      <label class=" mr-sm-2" >Режисер</label>
    </form>
  </div>
</nav>
<div>
<h1 align="center" class="colorForAllText">Дублери</h1></br>
</div>
<div class="noprint">

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

if (isset($_POST['done'])){
  $mysqli = new mysqli("localhost","root","root","filmstudio");
$mysqli->query("SET NAMES 'utf8'");

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
        //$films =  $_POST['selectingFilms'];
        //$skills =  $_POST['selectingSkills'];
      
        $quer = "SELECT * FROM `understudies` WHERE ";
        //        echo $quer;
        //        $quer .= "fff";
        //        echo $quer;
        
                $isFirst = true;
        
                if($name != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_name = \"$name\"";
                  $isFirst = false;
                }
                if($surname != NULL){
                //  $isLast = false;
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_surname = \"$surname\"";
                  $isFirst = false;
                }
                if($middleName != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_middle_name = \"$middleName\"";
                  $isFirst = false;
                }
                if($rating != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "rating_of_employee = $rating";
                  $isFirst = false;
                }
                if($amountOfMovies != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "amount_of_films_understudy_took_part_in = $amountOfMovies";
                  $isFirst = false;
                }
                if($age != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_age = $age";
                  $isFirst = false;
                }
                if($sex != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_sex = \"$sex\"";
                  $isFirst = false;
                }
                if($height != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_height = $height";
                  $isFirst = false;
                }
                if($hairColor != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_color_of_hair = \"$hairColor\"";
                  $isFirst = false;
                }
                if($hairLen != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_length_of_hair = $hairLen";
                  $isFirst = false;
                }
                if($eyes != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_color_of_eyes = \"$eyes\"";
                  $isFirst = false;
                }
                if($stature != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_stature = \"$stature\"";
                  $isFirst = false;
                }
                if($shoeSize != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_shoe_size = $shoeSize";
                  $isFirst = false;
                }
                if($size != NULL) {
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                    $quer = $quer . "understudy_clothing_size = $size";
                    $isFirst = false;
                }
                if($nationality != NULL){
                  if(!$isFirst){
                    $quer = $quer . " AND ";
                  }
                  $quer = $quer . "understudy_nationality = \"$nationality\"";
                  $isFirst = false;
                }
        
              //  echo $quer;
        
                $result_filter = $mysqli->query($quer);
                if ($result_filter) {
                //   echo "Success!";
                 }
                else {
                    echo "Error! $mysqli->error <br>";
                  }
        
              //  echo $quer;
        
                $result_filter = $mysqli->query($quer);
    

while ($stroka = mysqli_fetch_array($result_filter)){
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
    echo"<form action=\"editingUnderstudy.php\" method=\"post\">";

  echo "<input type=\"hidden\" value = \"" .$stroka['understudy_id'] . "\" name=\"understudy_id\" >";
 
        echo"</tr>";

}}
?>

</table>
</div>
<div class="btn noprint">
<button class ="button btn btn-danger" onclick="window.print()">Друкувати</button></br></br></br>
</div>
</body>
</html>