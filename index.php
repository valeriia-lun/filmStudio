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
<link rel="stylesheet" href="style.css">
   
</head>
<style>


</style>
<body class="text-center body1" >
<img src="kino1.jpg" style="width:300px;height:100%;float: left;" alt="Kino1">
<img src="kino2.jpg" style="width:300px;height:650px;float: right;" alt="Kino2">
</br></br><h1 class="colorForAllText">База даних кіностудії</h1>
<h1 class="colorForAllText"> "Victoria Studio"</h1></br></br></br></br>


<h2 class="colorText">Оберіть свою посаду</h2></br>

  <form action="" method="post">
    <div class="row ">
  <div class="container col-4 text-center">

    <select  class="select selectpicker  form-control"   name="position">

    <option  value="gen_producer" selected>Генеральний продюсер</option>
    <option  value="director">Режисер</option>
    <option  value="line_producer">Лінійний продюсер</option>
    <option  value="scene_admin">Адміністратор майданчика</option>
    <option  value="actor_agent">Агент по акторах</option>
    <option  value="chief_editor">Головний монтажер</option>
    <option  value="operator">Оператор</option>
    <option  value="sound_director">Звукорежисер</option>
    <option  value="light_director">Гафер</option>
    <option  value="costume_designer">Художник по костюмах</option>
    <option value="production_designer">Художник-постановщик</option>

</select><br></br>

  <div class="btn ">
  
 <input type="submit"  class ="button btn btn-danger " value="Увійти"><br> 
 </div>
 </div>
 </div>
</div>

</form>

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