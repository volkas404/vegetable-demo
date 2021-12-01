<?php
class category{
	function getAll(){
		include('../connection.php');
		mysqli_set_charset($connect, 'UTF8');
		$sql = "select * from category";
		$rs = mysqli_query($connect,$sql);
		return $rs;
	}
	
	function add($cate){
		include('../connection.php');
		mysqli_set_charset($connect, 'UTF8');
		$sql = 'insert into category (Name,Description) values ("'.$cate["Name"].'","'.$cate["Description"].'")';
		$rs = mysqli_query($connect,$sql);
	}
}