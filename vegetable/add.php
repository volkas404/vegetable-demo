<?php
header('Content-Type: text/html; charset=UTF-8'); 
include_once('../class/vegetable.php');
include_once('../class/category.php');
include('../connection.php');
$p = new vegetable();
$q = new category();
if(!isset($_FILES['image']))
{
	echo "không có ảnh";
	die;
}
$path = "../images/";
$image_url = $path . basename($_FILES['image']['name']);
$allowUpload = true;
$imageType = pathinfo($image_url, PATHINFO_EXTENSION);
$allowType = array('jpg', 'png');
$maxsize = 2097152;
if($_FILES['image']['size'] > $maxsize) 
{
	echo "Kích thước ảnh phải nhỏ hơn 2mb !";
	$allowUpload = false;
}
if(!in_array($imageType,$allowType))
{
	echo "Chỉ được upload ảnh dạng PNG và JPG";
	$allowUpload = false;
}
if($allowUpload == true)
{
	move_uploaded_file($_FILES['image']['tmp_name'], $image_url);
	$vegetable["VegetableName"] = $_POST['vegename'];
	$vegetable["Unit"] = $_POST['unit'];
	$vegetable["Amount"] = $_POST['amountvege'];
	$vegetable['Price'] = $_POST['pricevege'];
	$vegetable['CategoryID'] = $_POST['cate'];
	$vegetable['Image'] = $image_url;
	$vegetabletableID = $p->getListByCateID($vegetable['CategoryID']);
	$row = $vegetabletableID->fetch_assoc();
	$sql = 'insert into `vegetable` (CategoryID,VegetableName,Unit,Amount,Image,Price) values ("'.$row["CategoryID"].'","'.$vegetable["VegetableName"].'","'.$vegetable["Unit"].'","'.$vegetable["Amount"].'","'.$vegetable['Image'].'","'.$vegetable["Price"].'")';
	$result = mysqli_query($connect,$sql);
	echo "<script>alert('thêm ảnh thành công)</script>";

}

?>
