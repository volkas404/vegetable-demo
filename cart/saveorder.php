<?php
session_start();
include('../class/order.php');
include('../class/vegetable.php');
$p = new order();
$order["CustomerID"] = $_SESSION['CustomerID'];
$order["Total"] = $_SESSION['thanhtien'];
$order["Note"] = '';
$q = new vegetable();
$orderID = $p->addOrder($order);
if($orderID)
{	foreach($_SESSION['cart'] as $key => $value)
	{
		$addorde = $p->addOrderDetail($orderID, $value['vegetableID'], $value['quanity'], $value['quanity']*$value['price']);
		$vegeamt = $q->getByID($key);
		$rs = $vegeamt->fetch_assoc();
		$amtcu = $rs['Amount'];
		$amtmoi = $amtcu - $value['quanity'];
		$changeamt = $q->amount($key, $amtmoi);
	}	
}
header("location:history.php");
?>