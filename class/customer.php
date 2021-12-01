<?php
class customer{
	function getByID($cusid){
		include("../connection.php");
		mysqli_set_charset($connect, 'UTF8');
		$sql = "select * from customers where CustomerID = $cusid";
		$rs = mysqli_query($connect,$sql);
		return $rs;
	}
	function getAll(){
		include("../connection.php");
		mysqli_set_charset($connect, 'UTF8');
		$sql = "select * from customers";
		$rs = mysqli_query($connect,$sql);
		return $rs;
	}
	function add($cus){
		include("../connection.php");
		mysqli_set_charset($connect, 'UTF8');
		$sql = 'insert into customers (Password,Fullname,Address,City) values ("'.$cus["Password"].'","'.$cus["Fullname"].'","'.$cus["Address"].'","'.$cus["City"].'")';
		$rs = mysqli_query($connect,$sql);
		return mysqli_insert_id($connect);
	}
}
?>

