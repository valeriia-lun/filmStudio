<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<link rel="stylesheet" href="style.css">

</head>

<body class="text-center body1">
<img src="kino1.jpg" style="width:300px;height:100%;float: left;" alt="Kino1">
<img src="kino2.jpg" style="width:300px;height:650px;float: right;" alt="Kino2">
</br><h1 align="center" class="colorForAllText">Вхід</h1></br></br>

<div>

  <form class="" action="" method="post">
    <div class="row">
    <div class="container  col-5">
      <label style="font-size: 17pt;" class="colorText">Логін:</label>
      <input class="form-control" type="text" placeholder="Введіть логін" name="uname" required>
    </div>   </div></br></br>
    <div class="row">
    <div class="container  col-5">
      <label style="font-size: 17pt;"  class="colorText" >Пароль:</label>
      <input  class="form-control" type="password" placeholder="Введіть пароль" name="psw" required>
    </div>   </div></br></br>
    <div class="row">
    <div class="container col-5">
      <div class="btn">
  <input type="submit" class ="button btn btn-danger" value="Увійти" name="logIn"><br>
  </div>
    </div> </div>
  </form>

</div>

</body>
</html>


<?php

if (isset($_POST['logIn'])){
  $mysql = new mysqli('localhost','root','root','filmStudio');

  $login = filter_var(trim($_POST['uname']),FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST['psw']),FILTER_SANITIZE_STRING);

  $success = $mysql->query("SELECT `position` FROM `loginPassword` WHERE `login` = '$login' AND `password` = '$password'");

  if(!$success){
    echo "<script language='javascript'>";
    echo 'alert("Неправильний логін/пароль!");';
    echo "</script>";
  }
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

 ?>
