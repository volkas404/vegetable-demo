<?php
session_start();
include("login.php");
if (!isset($_POST["nut3"]))
    {
    	$_POST["nut3"] = "undefine";
    }
    switch($_POST["nut3"])
    {
        case 'Login':
            {	
				include("../class/customer.php");
    			header('Content-Type: text/html; charset=UTF-8'); 
    			$p = new customer();
				$cusid = $_POST["id"];
				$getcus = $p->getByID($cusid);
				$rs = $getcus->fetch_assoc();
				if(!$getcus)
				{
					echo "<script>alert('Không tìm thấy tài khoản')</script>";
				}
				else
				{
					if ($_POST["pass"] != $rs['Password'])
					{
						echo "<script>alert('Nhập sai password')</script>";
					}
					else 
					{
						$_SESSION["Fullname"] = $rs['Fullname'];
						$_SESSION["CustomerID"] = $rs['CustomerID'];
						header('location:../vegetable/index.php');
					}
				}
			}
	}
	if (!isset($_POST["nut4"]))
    {
    	$_POST["nut4"] = "undefine";
    }
    switch($_POST["nut4"])
    {
		case 'Register':
			{
				header('location:../customer/register.php');
			}
    }
?>