<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
       
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
<body class="text-center body3">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="..\index.php">Вибір посади</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Головна<span class="sr-only">(current)</span></a>
      </li>     
    </ul>
   
    <form class=" my-2 my-lg-0">
      <label class=" mr-sm-2" >Художник по костюмах</label>
    </form>
  </div>
</nav>

</br><h4 class="colorForAllText">База даних кіностудії</h4>
<h4  class="colorForAllText"> "Victoria Studio"</h4></br></br></br></br>

<div class="row body2">
<div class=" container col-md-4">
<h3 class="colorText">Пошук </h3></br>
  <form action="" method="post">
  <select name="choice" class="select selectpicker  form-control">
  <option value="actor" selected>Актори</option>
  <option value="understudy">Дублери</option>
  <option value="screenwriter">Сценаристи</option>
  <option value="director">Режисери</option>
  <option value="line_producer">Лінійні продюсери</option>
  <option value="requisite">Реквізитори</option>
  <option value="make-up_artist">Гримери</option>
  <option value="operator">Оператори</option>
  <option value="light_director">Гафери</option>
  <option value="sound_director">Звукорежисери</option>
  <option value="costume_designer">Художник по костюмах</option>
  <option value="production_designer">Художник-постановщик</option>
  <option value="actor_agent">Агенти по акторах</option>
  <option value="helper_operator">Помічники оператора</option>
  <option value="helper_sound_director">Помічники звукорежисера</option>
  <option value="helper_light_director">Помічники гафера</option>
  <option value="dresser">Костюмери</option>
  <option value="helper_custume_designer">Помічники художника по костюмах</option>
  <option value="helper_production_designer">Помічники художника-постановщика</option>
  <option value="scene_admin">Адміністратори майданчика</option>
  <option value="cook">Кухарі</option>
  <option value="driver">Водії</option>
  <option value="loader">Вантажники</option>
  <option value="cleaner">Прибиральники</option>
  <option value="security">Охоронники</option>
  <option value="editor">Монтажери</option>
  <option value="movie">Фільми</option>
  <option value="filmCrew">Знімальні групи</option>
  <option value="editCrew">Монтажні групи</option>
  </select><br>
  <div class="btn">
<input type="submit" class ="button btn btn-primary" value="Знайти" name="find">
</div>
</form>
</div></div>
</body>

</html>


<?php


if (isset($_POST['find'])){
  $choice = $_POST['choice'];

  switch ($choice) {
    case 'actor':
      header("location: /filmStudio/costume_designer/find_actors.php");
      break;

    case 'understudy':
      header("location: /filmStudio/costume_designer/find_understudies.php");
      break;

    case 'screenwriter':
    header("location: /filmStudio/costume_designer/find_others.php");
      break;

      case 'director':
      header("location: /filmStudio/costume_designer/find_others.php");
        break;

        case 'line_producer':
        header("location: /filmStudio/costume_designer/find_others.php");
          break;

          case 'requisite':
          header("location: /filmStudio/costume_designer/find_others.php");
            break;

            case 'make-up_artist':
            header("location: /filmStudio/costume_designer/find_others.php");
              break;

              case 'operator':
              header("location: /filmStudio/costume_designer/find_others.php");
                break;

                case 'light_director':
                header("location: /filmStudio/costume_designer/find_others.php");
                  break;

                  case 'sound_director':
                  header("location: /filmStudio/costume_designer/find_others.php");
                    break;

                    case 'costume_designer':
                    header("location: /filmStudio/costume_designer/find_others.php");
                      break;

                      case 'production_designer':
                      header("location: /filmStudio/costume_designer/find_others.php");
                        break;

                        case 'actor_agent':
                        header("location: /filmStudio/costume_designer/find_others.php");
                          break;

                          case 'helper_operator':
                          header("location: /filmStudio/costume_designer/find_others.php");
                            break;

                            case 'helper_sound_director':
                            header("location: /filmStudio/costume_designer/find_others.php");
                              break;

                              case 'helper_light_director':
                              header("location: /filmStudio/costume_designer/find_others.php");
                                break;

                                case 'dresser':
                                header("location: /filmStudio/costume_designer/find_others.php");
                                  break;

                                  case 'helper_custume_designer':
                                  header("location: /filmStudio/costume_designer/find_others.php");
                                    break;

                                    case 'helper_production_designer':
                                    header("location: /filmStudio/costume_designer/find_others.php");
                                      break;

                                      case 'scene_admin':
                                      header("location: /filmStudio/costume_designer/find_others.php");
                                        break;

                                        case 'cook':
                                        header("location: /filmStudio/costume_designer/find_others.php");
                                          break;

                                          case 'driver':
                                          header("location: /filmStudio/costume_designer/find_others.php");
                                            break;

                                            case 'loader':
                                            header("location: /filmStudio/costume_designer/find_others.php");
                                              break;

                                              case 'cleaner':
                                              header("location: /filmStudio/costume_designer/find_others.php");
                                                break;

                                                case 'security':
                                                header("location: /filmStudio/costume_designer/find_others.php");
                                                  break;

                                                  case 'editor':
                                                  header("location: /filmStudio/costume_designer/find_editor.php");
                                                    break;

                                                    case 'movie':
                                                    header("location: /filmStudio/costume_designer/find_movie.php");
                                                      break;

                                                      case 'filmCrew':
                                                      header("location: /filmStudio/costume_designer/find_filmCrew.php");
                                                        break;

                                                        case 'editCrew':
                                                        header("location: /filmStudio/costume_designer/find_editCrew.php");
                                                          break;
}

}

 ?>
