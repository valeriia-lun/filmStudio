<?php


if (isset($_POST['logIn'])){
  $mysql = new mysqli('localhost','root','root','filmStudio');

  $login = filter_var(trim($_POST['uname']),FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['psw']),FILTER_SANITIZE_STRING);


  $success = $mysql->query("SELECT `position` FROM `loginPassword` WHERE `login` = '$login' AND `password` = '$password'");
  if ($success) {
      echo "Success!";
    }
  else {
       echo "Error! $mysqli->error <br>";
     }

     $stroka = mysqli_fetch_array($success);
     echo $stroka[0];


     switch ($stroka[0]) {
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


}

 ?>
