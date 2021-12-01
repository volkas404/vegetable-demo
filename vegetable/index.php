<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href = "../css/bootstrap.css" rel = "stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
	<?php
	include('../menu.php');
	include('../class/vegetable.php');
	include('../class/category.php');
	if(!isset($_SESSION['cart']))
	{
		$_SESSION['cart'] = [];
	}
	?>
	<div id="container1">
	<div id="main">
		<div id="main_left">
		<br><br><br>
		<label>Catogory name:</label>
			<form action="", method="get">
				<?php
					$p = new category();
					$cateall = $p->getAll();
					if ($cateall)
					{
						while ($row = $cateall->fetch_assoc())
						{
							echo '<div class="form-check">';
							echo '<label class="form-check-label">';
							echo '<input type ="checkbox" class="form-check-input" name="cateids[]" value="' . $row['CategoryID'] . '">';
							echo $row['Name'];
							echo '</div>';
						}
					}
				?>
				<br>
				<button type="submit" id="fil" name="fil" class="btn btn-primary">Filter</button>
			</form>
		</div>
        <div id="main_right">
     <h3>Vegetable</h3>				
			<form action="", method="get">
				<?php
				$q = new vegetable();
				$vegeall = $q->getAll();	
				if (isset($_GET['fil']) && isset($_GET['cateids']))
				{	
					$getByIDS = $q->getListByCateIDs($_GET['cateids']);
					if ($getByIDS)
					{
						while ($row = $getByIDS->fetch_assoc())
						{
							echo ' <div id="sanpham">
								<div id="sanpham_hinh">
								<img src="../'.$row["Image"].'" width="160" height="160" />
								</div>
								<div id="sanpham_tieude">'.$row["VegetableName"].'</div>
								<div id="sanpham_gia">'.$row["Price"].'</div>     
								<a href="?vegetableID=' . $row['VegetableID'] . '" class="btn btn-danger">Buy</a>
								</div>';
						}
					}						
				}
				else if(isset($_GET['fil']) && !isset($_GET['cateids']))
				{
					while ($row = $vegeall->fetch_assoc())
					{
						echo ' <div id="sanpham">
							<div id="sanpham_hinh">
							<img src="../'.$row["Image"].'" width="160" height="160" />
							</div>
							<div id="sanpham_tieude">'.$row["VegetableName"].'</div>
							<div id="sanpham_gia">'.$row["Price"].'</div>     
							<a href="?vegetableID=' . $row['VegetableID'] . '" class="btn btn-danger">Buy</a>
							  </div>';
					}
				}
				else if($vegeall)
				{
					while ($row = $vegeall->fetch_assoc())
					{
						echo ' <div id="sanpham">
								<div id="sanpham_hinh">
								<img src="../'.$row["Image"].'" width="160" height="160" />
								</div>
								<div id="sanpham_tieude">'.$row["VegetableName"].'</div>
								<div id="sanpham_gia">'.$row["Price"].'</div>     
								<a href="?vegetableID=' . $row['VegetableID'] . '" class="btn btn-danger">Buy</a>
							   </div>';
						
					}
				}
				if(isset($_GET['vegetableID']))
						{
							$vegetableID = $_GET['vegetableID'];
							$vegetablebyID = $q->getByID($vegetableID);
							$rs = $vegetablebyID->fetch_assoc();
							$amount = $rs['Amount'];
							if (isset($_SESSION['cart'][$vegetableID]))
							{
								if($amount > $_SESSION['cart'][$vegetableID]['quanity'])
								{
									$_SESSION['cart'][$vegetableID]['quanity']++;
								}
								else 
								{
									echo '<script>alert("Số lượng sản phẩm loại này đã hết")</script>';
								}
							}
							else
							{
								if($amount > 0)
								{
									$array = 
									[
										'vegetableID' => $vegetableID,
										'price' => $rs['Price'],
										'quanity' => 1
									];
									$_SESSION['cart'][$vegetableID] = $array;
								}
								else
										echo '<script>alert("Số lượng sản phẩm loại này đã hết")</script>';
							}
				}
				?>
			</form>
		</div>
		</div>
	</div>
</body>
</html>