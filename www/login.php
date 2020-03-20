<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>GCloud Based Registration</title>
  <link rel="shortcut icon" href="favicon.svg" type="image/vnd.microsoft.icon">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script type="text/javascript">
   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-XXXXXXXX-Y']);
   _gaq.push(['_trackPageview']);
   (function()
   {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
   })();
  </script>
  </head>
  <body class="bg-light">
    <form action="" class="container-sm p-4 mt-5 bg-dark text-white" method="post">
      <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" placeholder="Enter ID" name="id" required>
      </div>
      
      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" placeholder="Enter Password" name="pwd" required>
      </div>
      
      <button type="submit" class="btn btn-primary">Login</button>
    </form> 
  </body>
</html>