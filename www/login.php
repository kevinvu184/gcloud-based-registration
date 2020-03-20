<?php
require_once __DIR__ . '/../vendor/autoload.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GCloud Based Registration</title>
  <link rel="shortcut icon" href="favicon.svg">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148874673-5"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-148874673-5');
  </script>
  </head>
  <body class="bg-light">
    <form action="./main" class="container-sm p-4 mt-5 bg-dark text-white" method="post">
      <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" placeholder="Enter ID" name="id" required>
      </div>
      
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" placeholder="Enter Password" name="pwd" required>
      </div>
      
      <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
    </form> 
  </body>
</html>