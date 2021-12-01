<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
	<?php
	session_start();
	if(!isset($_SESSION['Fullname']))
	echo '<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="#">Market online</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../vegetable/index.php">Vegetable</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../cart/index.php">Cart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../customer/login.php">Login</a>
	  </nav>';
	else
		echo '<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="#">Market online</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="../vegetable/index.php">Vegetable</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../cart/index.php">Cart</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../cart/history.php">History</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="../customer/logout.php">Logout</a>
	  </li>
        <button type="button" class="btn btn-primary text-dark"disabled>'.$_SESSION["Fullname"].'</button>
     </ul>
	 </nav>';
	?>
</nav>
</body>
</html>