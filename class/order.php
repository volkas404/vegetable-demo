<?php
class order
{
	function getAllOrder($cusID)
	{
		include('../connection.php');
		mysqli_set_charset($connect, 'UTF8');
		$sql = "select * from `order` where CustomerID = $cusID";
		$rs = mysqli_query($connect,$sql);
		return $rs;
	}
	function getOrderDetail($orderid)
	{
		include('../connection.php');
		mysqli_set_charset($connect, 'UTF8');
		$sql = "select * from orderdetail, vegetable where orderdetail.OrderID = '$orderid' and orderdetail.VegetableID = vegetable.VegetableID";
		$rs = mysqli_query($connect,$sql);
		return $rs;
	}
	function addOrder($order)
	{
		include('../connection.php');
		mysqli_set_charset($connect, 'UTF8');
		$sql = "insert into `order`(CustomerID,Date,Total,Note) values('".$order['CustomerID']."',now(), '".$order['Total']."', '".$order['Note']."')";
		$rs = mysqli_query($connect,$sql);
		if($rs)
		{
			return mysqli_insert_id($connect);
		}
		else return mysqli_error($connect);
	}
	function addOrderDetail($orderid, $vegetableId, $quanity, $price)
	{
		include('../connection.php');
		mysqli_set_charset($connect, 'UTF8');
		$sql = "insert into `orderdetail`(OrderID,VegetableID,Quantity,Price) values ('$orderid','$vegetableId','$quanity','$price')";
		$rs = mysqli_query($connect,$sql);
		return $rs;
	}
}

?>