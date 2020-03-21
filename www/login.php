<?php
require '../vendor/autoload.php';
use Google\Cloud\Datastore\DatastoreClient;
$datastore = new DatastoreClient();

$err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $pwd = intval($_POST['pwd']);
    $key = $datastore->key('user', $id);
    $query = $datastore->query()
        ->kind('user')
        ->filter('__key__', '=', $key)
        ->limit(1);
    $res = $datastore->runQuery($query);
    foreach ($res as $user) {
        if ($user['password'] == $pwd) {
            header("Location: ./main.php");
        }
    }
    $err = '<small id="iderr" class="form-text text-muted">User id or password is invalid</small>';
}
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
    <form action="./login.php" class="container-sm p-4 mt-5 bg-dark text-white" method="post">
      <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" placeholder="Enter ID with 's'" name="id" required>
        <?php echo $err ?>
      </div>
      
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" placeholder="Enter Password" name="pwd" required>
        <?php echo $err ?>
      </div>
      
      <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
    </form> 
  </body>
</html>