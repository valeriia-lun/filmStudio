<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
</head>
<body>
<h1>База даних кіностудії</h1>
<h1> "Victoria Studio"</h1>


<div style="float: left;">
  <form action="" method="post">
  <select name="choice">
    <option value="movie">Фільм</option>
    <option value="film_crew">Знімальну групу</option>
    <option value="edit_crew">Групу монтажерів</option>
</select><br>
<input type="submit" value="Додати" name="add"><br>
</form>
</div>

<div style="float: left;">
  <form action="" method="post">
<select name="choice">
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
<input type="submit" value="Знайти" name="find"><br>
</form>
</div>


</body>

</html>

<?php
if (isset($_POST['add'])){
  $choice = $_POST['choice'];

  switch ($choice) {
    case 'movie':
      header("location: /filmStudio/director/addingMovie.php");
      break;

    case 'film_crew':
      header("location: /filmStudio/director/addingFilmCrew.php");
      break;

    case 'edit_crew':
      header("location: /filmStudio/director/addingEditCrew.php");
      break;

  }
}

if (isset($_POST['find'])){
  $choice = $_POST['choice'];

  switch ($choice) {
    case 'actor':
    header("location: /filmStudio/findSTANDART/find_actors.php");
      break;

    case 'understudy':
    header("location: /filmStudio/findSTANDART/find_understudies.php");
      break;

    case 'screenwriter':
    header("location: /filmStudio/findSTANDART/find_others.php");
      break;

      case 'director':
      header("location: /filmStudio/findSTANDART/find_others.php");
        break;

        case 'line_producer':
        header("location: /filmStudio/findSTANDART/lin_producer_find.php");
          break;

          case 'requisite':
          header("location: /filmStudio/findSTANDART/find_others.php");
            break;

            case 'make-up_artist':
            header("location: /filmStudio/findSTANDART/find_others.php");
              break;

              case 'operator':
              header("location: /filmStudio/findSTANDART/find_others.php");
                break;

                case 'light_director':
                header("location: /filmStudio/findSTANDART/find_others.php");
                  break;

                  case 'sound_director':
                  header("location: /filmStudio/findSTANDART/find_others.php");
                    break;

                    case 'costume_designer':
                    header("location: /filmStudio/findSTANDART/find_others.php");
                      break;

                      case 'production_designer':
                      header("location: /filmStudio/findSTANDART/find_others.php");
                        break;

                        case 'actor_agent':
                        header("location: /filmStudio/findSTANDART/find_others.php");
                          break;

                          case 'helper_operator':
                          header("location: /filmStudio/findSTANDART/find_others.php");
                            break;

                            case 'helper_sound_director':
                            header("location: /filmStudio/findSTANDART/find_others.php");
                              break;

                              case 'helper_light_director':
                              header("location: /filmStudio/findSTANDART/find_others.php");
                                break;

                                case 'dresser':
                                header("location: /filmStudio/findSTANDART/find_others.php");
                                  break;

                                  case 'helper_custume_designer':
                                  header("location: /filmStudio/findSTANDART/find_others.php");
                                    break;

                                    case 'helper_production_designer':
                                    header("location: /filmStudio/findSTANDART/find_others.php");
                                      break;

                                      case 'scene_admin':
                                      header("location: /filmStudio/findSTANDART/find_others.php");
                                        break;

                                        case 'cook':
                                        header("location: /filmStudio/findSTANDART/find_others.php");
                                          break;

                                          case 'driver':
                                          header("location: /filmStudio/findSTANDART/find_others.php");
                                            break;

                                            case 'loader':
                                            header("location: /filmStudio/findSTANDART/find_others.php");
                                              break;

                                              case 'cleaner':
                                              header("location: /filmStudio/findSTANDART/find_others.php");
                                                break;

                                                case 'security':
                                                header("location: /filmStudio/findSTANDART/find_others.php");
                                                  break;

                                                  case 'editor':
                                                    header("location: /filmStudio/findSTANDART/find_editor.php");
                                                    break;

                                                    case 'movie':
                                                    header("location: /filmStudio/director/find_movie.php");
                                                      break;

                                                      case 'filmCrew':
                                                      header("location: /filmStudio/director/find_filmCrew.php");
                                                        break;

                                                        case 'editCrew':
                                                          header("location: /filmStudio/director/find_editCrew.php");
                                                          break;
  }
}



 ?>
