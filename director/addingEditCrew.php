<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Кіностудія "Victoria Studio"</title>
    <script>
          $(function() {
          $().datepicker();
          });
    </script>
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
        <a class="nav-link" href="main.php">Головна<span class="sr-only"></span></a>
      </li>     
    </ul>
   
    <form class=" my-2 my-lg-0">
      <label class=" mr-sm-2" >Режисер</label>
    </form>
  </div>
</nav>

<br><br><h1 class="colorForAllText">Додати групу монтажерів</h1><br>


  <form action="" method="post">
  <div class="row text-center" style="margin:10px;">
    <div class=" container col-4" >
    <label class="colorText">Дата початку роботи: </label><input type="date" class="form-control" name="date_start" maxlength="50" tabindex="2" required><br>
  </div>
  <div class=" container col-4" >
  <label class="colorText">Дата закінчення роботи:</label> <input type="date" class="form-control" name="date_end" maxlength="50" tabindex="2" required><br>
  </div></div><br>

<div class="btn">
<input type="submit" class ="button btn btn-primary" value="Додати" name="add">
</div><br><br><br>

</form>

</body>

</html>


<?php
if (isset($_POST['add'])){

  $mysql = new mysqli('localhost','root','root','filmStudio');

  $max_id = $mysql->query("SELECT MAX(`number_of_edit_crew`) FROM `edit_crew`");
  $stroka = mysqli_fetch_array($max_id);
  $num = $stroka[0] + 1;

  $dateStart = filter_var(trim($_POST['date_start']),FILTER_SANITIZE_STRING);
  $dateEnd = filter_var(trim($_POST['date_end']),FILTER_SANITIZE_STRING);


  $success = $mysql->query("INSERT INTO `edit_crew` (`number_of_edit_crew`, `date_start_edit_crew`, `date_finish_edit_crew`)
  VALUES ('$num', '$dateStart', '$dateEnd')");

  $mysql->close();
  header('Location: successfullyAddedEditCrew.php');



}

 ?>
