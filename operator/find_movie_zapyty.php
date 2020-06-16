<!DOCTYPE html>
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
                <label class=" mr-sm-2">Посада:&nbsp;&nbsp;Оператор</label>
            </form>
        </div>
    </div>
</nav>

<div>

<h1 align="center" class="colorForAllText">Фільми</h1></br>
</div>
<div class="noprint">

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
  case 'max_rating':
    $result_movies = $mysqli->query("SELECT * FROM `movie` WHERE `rating_of_movie` = (SELECT MAX(`rating_of_movie`) FROM  `movie`)");//5
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
    break;

    case 'max_gonorars':
      $zapyt7_1 =  $mysqli->query("CREATE VIEW Help AS SELECT Actor_filmCrew.number_of_film_crew, SUM(Actor_filmCrew.actor_fee) AS SUM_FEE FROM Actor_filmCrew
GROUP BY Actor_filmCrew.number_of_film_crew");

    //Запит:
$result_movies = $mysqli->query("SELECT * FROM Movie WHERE Movie.Number_of_film_crew IN(
SELECT Help.number_of_film_crew
FROM Help
WHERE Help.SUM_FEE = (
SELECT MAX(SUM_FEE)
FROM Help))");
      
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
      break;


      case 'detectives':
        $result_movies = $mysqli->query("SELECT * FROM `movie` WHERE `name_of_movie` IN (
          SELECT  `name_of_movie` FROM `movie_genres` WHERE `id_movie_genre` IN(
            SELECT `id_movie_genre` FROM `genres` WHERE `genre` = 'детектив'))");
        
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
        break;

        case 'all_understudies':
          $result_movies =  $mysqli->query("SELECT *
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
          break;

          case 'rating_4':
            $result_movies =  $mysqli->query("SELECT * FROM `movie` WHERE `rating_of_movie` = '4'");
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
            break;

            case 'actors_rating_9_more':
              $result_movies =  $mysqli->query("SELECT  *
              FROM movie AS M1
              WHERE NOT EXISTS(
              SELECT *
              FROM actors
              WHERE rating_of_employee > 9 AND actor_id NOT IN (
              SELECT actor_id
              FROM actor_filmcrew
              WHERE number_of_film_crew = M1.number_of_film_crew))");
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
                break;
                case 'makeByHand':
                  $name =  $_POST['name'];
                  $date_release =  $_POST['date_release'];
                  $budget =  $_POST['budget'];
                  $rating =  $_POST['rating'];
                  $selectingGenre =  $_POST['selectingGenre'];
                  $selectingNFCrew =  $_POST['selectingNFCrew'];
                  $selectingNECrew =  $_POST['selectingNECrew'];
                  $genres =  $_POST['field_name_Genres'];
                  $quer = "SELECT * FROM `movie` WHERE ";
                  //        echo $quer;
                  //        $quer .= "fff";
                  //        echo $quer;
                  
                    $isFirst = true;
                  
                    if($name != NULL){
                      if(!$isFirst){
                        $quer = $quer . " AND ";
                      }
                      $quer = $quer . "name_of_movie = \"$name\"";
                      $isFirst = false;
                    }
                    if($date_release != NULL){
                    //  $isLast = false;
                      if(!$isFirst){
                        $quer = $quer . " AND ";
                      }
                      $quer = $quer . "date_of_release = '$date_release'";
                      $isFirst = false;
                    }
                    if($budget != NULL){
                      if(!$isFirst){
                        $quer = $quer . " AND ";
                      }
                      $quer = $quer . "budget_of_movie = $budget";
                      $isFirst = false;
                    }
                    if($rating != NULL){
                      if(!$isFirst){
                        $quer = $quer . " AND ";
                      }
                      $quer = $quer . "rating_of_movie = $rating";
                      $isFirst = false;
                    }
                   
                    if($selectingNFCrew != NULL){
                      if(!$isFirst){
                        $quer = $quer . " AND ";
                      }
                      $quer = $quer . "number_of_film_crew =  \"$selectingNFCrew\"";
                      $isFirst = false;
                    }
                    if($selectingNECrew != NULL){
                      if(!$isFirst){
                        $quer = $quer . " AND ";
                      }
                      $quer = $quer . "number_of_edit_crew = \"$selectingNECrew\"";
                      $isFirst = false;
                    }
                    /*if($selectingGenre != NULL){
                      if(!$isFirst){
                        $quer = $quer . " AND ";
                      }
                      $quer = $quer . "number_of_film_crew = \"$selectingGenre\"";
                      $isFirst = false;
                    }*/
                    $b = mysqli_fetch_array($genres);

                    if($genres != NULL ){
                    $i = 0;
                    foreach ($genres as $value) {
                      if($value != ""){
                        if($i != 0 || $notFirst == true || !$isFirst){
                          $quer = $quer . " AND ";
                        }
                        $quer = $quer . "`name_of_movie` IN(SELECT `name_of_movie` FROM `movie_genres` WHERE `id_movie_genre` IN(SELECT `id_movie_genre` FROM `genres` WHERE `genre` = \"$value\"))";
                        $i++;
                        $notFirst = false;
                        $isFirst = false;
                      }
                    }
                   // echo $quer;
    
                  }
                    $result_filter = $mysqli->query($quer);
                  
                    if ($result_filter) {
                    //   echo "Success!";
                     }
                    else {
                        echo "Error! $mysqli->error <br>";
                      }

                      
 

  while ($stroka = mysqli_fetch_array($result_filter)){
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
break; 
  }
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
<button class ="button btn btn-danger" onclick="window.print()">Друкувати</button></br></br></br>
</div>
</body>
</html>