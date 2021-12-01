<?php
    include("../class/customer.php");
    header('Content-Type: text/html; charset=UTF-8'); 
    $p = new customer();
	$cus["Password"] = $_POST["pass"];
	$cus["Fullname"] = $_POST["fullname"];
	$cus["Address"] = $_POST["address"];
	$cus["City"] = $_POST["city"];
	if( $cus["Password"] != ' ' || $cus["Fullname"] != ' ' || $cus["Address"] != ' ' || $cus["City"] != ' ' )
		$addcus = $p->add($cus);
	if ($addcus)
	{
		echo "Your's ID : $addcus<br>Password : ".$cus["Password"]."";
	}
	else
	{
		echo "Tạo thất bại";
	}
?>