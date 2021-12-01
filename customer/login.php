<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href = "../css/bootstrap.css" rel = "stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
<?php echo ""; ?>
<div id="container">
	<h3>Login</h3>
	<form action="checklogin.php" method="post">
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Your's ID:</label>
    <input type="id" class="form-control" id="id" name="id">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">Password:</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
  <input type="submit" name="nut3" id="nut3" value="Login" class="btn btn-primary"></input>
  <input type="submit" name="nut4" id="nut4" value="Register" class="btn btn-primary"></input>
	</form>
</div>
</body>
</html>
