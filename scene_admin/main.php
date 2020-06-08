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
<input type="submit" value="Додати технічного працівника" name="add"><br>
</from>
</div>

<div>
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

</body>

</html>


<?php

if (isset($_POST['add'])){

        header("location: /filmStudio/scene_admin/addingStaffFilmCrew.php");

}


if (isset($_POST['find'])){
  $choice = $_POST['choice'];

  switch ($choice) {
    case 'director':
      header("location: /filmStudio/gen_producer/addingDirector.php");
      break;

    case 'screenwriter':
      header("location: /filmStudio/gen_producer/addingScreenwriter.php");
      break;

    case 'line_producer':
      header("location: /filmStudio/gen_producer/addingLineProducer.php");
      break;

  }
}


if (isset($_POST['fee'])){
  header("location: /filmStudio/gen_producer/fee.php");
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
        header("location: /filmStudio/findSTANDART/find_others.php");
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
                                        header("location: /filmStudio/scene_admin/find_cooker.php");
                                          break;

                                          case 'driver':
                                          header("location: /filmStudio/scene_admin/find_driver.php");
                                            break;

                                            case 'loader':
                                            header("location: /filmStudio/scene_admin/find_vantazhnyk.php");
                                              break;

                                              case 'cleaner':
                                              header("location: /filmStudio/scene_admin/find_cleaner.php");
                                                break;

                                                case 'security':
                                                header("location: /filmStudio/scene_admin/find_ohoronets.php");
                                                  break;

                                                  case 'editor':
                                                  header("location: /filmStudio/findSTANDART/find_editor.php");
                                                    break;

                                                    case 'movie':
                                                    header("location: /filmStudio/findSTANDART/find_movie.php");
                                                      break;

                                                      case 'filmCrew':
                                                      header("location: /filmStudio/scene_admin/find_filmCrew.php");
                                                        break;

                                                        case 'editCrew':
                                                        header("location: /filmStudio/findSTANDART/find_editCrew.php");
                                                          break;
  }
}



 ?>
