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
	<h3>Register</h3>
	<form action="saveRegister.php" method="post">
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Your's Fullname:</label>
    <input type="text" class="form-control" id="fullname" name="fullname">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Password:</label>
    <input type="password" class="form-control" id="pass" name="pass">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormEmail2">Address:</label>
    <input type="text" class="form-control" id="address" name="address">
  </div>
  <div class="form-group">
    <label for="exampleDropdownFormPassword2">City:</label>
    <input type="text" class="form-control" id="city" name="city">
  </div>
  <input type="submit" name="nut2" id="nut2" value="Register" class="btn btn-primary"></input>
	</form>
</div>
</body>
</html>
