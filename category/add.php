<?php
	header('Content-Type: text/html; charset=UTF-8'); 
	include('../class/category.php');
	$p = new category();
	$cate["Name"] = $_GET['namecate'];
	$cate["Description"] = $_GET['description'];
	$addcate = $p->add($cate);
	header('location:index.php');
?>