
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
<div class=panel panel-default">
<div class="panel-heading">
<h2> Login </h2>
</div>
<div class="panel-body"
<p class="text-primary">Login to make a purchase</p>
<form method="POST" action="login_script.php">
<div class="form-group">
<input type="text" class="form-control" name="Email" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
</div>
<div class="form-group">
<input type="password" class="form-control" name="Password" placeholder="Password">
</div>
<div class="form-group">
<input type="submit" value="Submit" class="btn btn-primary" >
</div>

</div>
</form>
<div class="panel-footer">
<p> Don't have account? <a href="signup.php">Register</a></p>
</div>
</div>
</div>

</div>
</div>

</body>
</html>