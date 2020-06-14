<?php


if (isset($_POST['logIn'])){
  $mysql = new mysqli('localhost','root','root','filmStudio');

  $login = filter_var(trim($_POST['uname']),FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['psw']),FILTER_SANITIZE_STRING);


  $logins = $mysql->query("SELECT `login` FROM `loginPassword`");
  $logins_use = mysqli_fetch_array($logins);
  $passwords = $mysql->query("SELECT `password` FROM `loginPassword`");
  $passwords_use = mysqli_fetch_array($passwords);

for($i=0; $i<count($logins_use); $i++){
if($login != $logins_use[$i] && $password != $passwords_use[$i]){
  echo "<script language='javascript'>";
  echo 'alert("Неправильний логін/пароль!");';
  echo "</script>";
  header('Location: /filmStudio/loginFirm.php');

}
  $success = $mysql->query("SELECT `position` FROM `loginPassword` WHERE `login` = '$login' AND `password` = '$password'");
     $stroka = mysqli_fetch_array($success);
     echo $stroka[0];


     switch ($stroka[0]) {
       case 'Генеральний продюсер':
           header('Location: /filmStudio/gen_producer/main.php');
         break;

       case 'Режисер':
           header('Location: /filmStudio/director/main.php');
         break;

       case 'Лінійний продюсер':
           header('Location: /filmStudio/line_producer/main.php');
         break;

       case 'Адміністратор майданчика':
           header('Location: /filmStudio/scene_admin/main.php');
         break;

       case 'Агент по акторах':
           header('Location: /filmStudio/actor_agent/main.php');
         break;

       case 'Головний монтажер':
           header('Location: /filmStudio/chief_editor/main.php');
         break;

       case 'Оператор':
          header('Location: /filmStudio/operator/main.php');
         break;

       case 'Звукорежисер':
          header('Location: /filmStudio/sound_director/main.php');
         break;

       case 'Гафер':
          header('Location: /filmStudio/light_director/main.php');
         break;

       case 'Художник по костюмах':
          header('Location: /filmStudio/costume_designer/main.php');
         break;

       case 'Художник-постановщик':
          header('Location: /filmStudio/production_designer/main.php');
         break;
     }

    }
  
}

 ?>
