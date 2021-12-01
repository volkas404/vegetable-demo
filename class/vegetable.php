<?php
class vegetable{
	function getAll(){
		include('../connection.php');
		mysqli_set_charset($connect, 'UTF8');
		$sql = "select * from vegetable";
		$rs = mysqli_query($connect,$sql);
		return $rs;
	}
	
	function getListByCateID($cateid){
		include('../connection.php');
		mysqli_set_charset($connect, 'UTF8');
		$sql = "select * from vegetable where CategoryID=$cateid";
		$rs = mysqli_query($connect,$sql);
		return $rs;
	}
	
	function getListByCateIDs($cateids){
		include('../connection.php');
		for($i=0; $i<count($cateids);$i++)
		{
			$cateids[$i] = "'". $cateids[$i]. "'";
		}
		$str = implode(', ',$cateids);
		$sql = "select * from vegetable where CategoryID in ($str)";
		$rs = mysqli_query($connect, $sql);
		return $rs;
	}
	function getByID($vegetableID) {
		include('../connection.php');
		mysqli_set_charset($connect, 'UTF8');
		$sql = "select * from vegetable where VegetableID=$vegetableID";
		$rs = mysqli_query($connect,$sql);
		return $rs;
	}
	function amount($vegetableID, $amount)
	{
		include('../connection.php');
		mysqli_set_charset($connect, 'UTF8');
		$sql = "update vegetable set Amount=$amount where VegetableID=$vegetableID";
		$rs = mysqli_query($connect,$sql);
		return $rs;
	}
}
?>