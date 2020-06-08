<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
</head>
<body>
<h1>База даних кіностудії</h1>
<h1> "Victoria Studio"</h1>


<h2>Оберіть свою посаду</h2>
<div >
  <form action="" method="post">
    <select name="position">

    <option value="gen_producer" selected>Генеральний продюсер</option>
    <option value="director">Режисер</option>
    <option value="line_producer">Лінійний продюсер</option>
    <option value="scene_admin">Адміністратор майданчика</option>
    <option value="actor_agent">Агент по акторах</option>
    <option value="chief_editor">Головний монтажер</option>
    <option value="operator">Оператор</option>
    <option value="sound_director">Звукорежисер</option>
    <option value="light_director">Гафер</option>
    <option value="costume_designer">Художник по костюмах</option>
    <option value="production_designer">Художник-постановщик</option>

</select><br>

 <input type="submit" value="Увійти"><br>
</form>
</div>

</body>

</html>

<?php

$position = $_POST['position'];


switch ($position) {
  case 'gen_producer':
      header('Location: /filmStudio/gen_producer/main.php');
    break;

  case 'director':
      header('Location: /filmStudio/director/main.php');
    break;

  case 'line_producer':
      header('Location: /filmStudio/line_producer/main.php');
    break;

  case 'scene_admin':
      header('Location: /filmStudio/scene_admin/main.php');
    break;

  case 'actor_agent':
      header('Location: /filmStudio/actor_agent/main.php');
    break;

  case 'chief_editor':
      header('Location: /filmStudio/chief_editor/main.php');
    break;

  case 'operator':
     header('Location: /filmStudio/operator/main.php');
    break;

  case 'sound_director':
     header('Location: /filmStudio/sound_director/main.php');
    break;

  case 'light_director':
     header('Location: /filmStudio/light_director/main.php');
    break;

  case 'costume_designer':
     header('Location: /filmStudio/costume_designer/main.php');
    break;

  case 'production_designer':
     header('Location: /filmStudio/production_designer/main.php');
    break;

}


 ?>
