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
		if(!isset($_SESSION['cart']))
			$_SESSION['cart'] = [];
	?>
<div id="main">
		<br><br><br>
		<form method="get">
			<div class="container">
			<h3></t>Cart</h3>
			<br><hr>
			<table width="800" border="0">
          <tbody>
            <tr>
              <td align="center" width="39">#</td>
              <td width="150">Name</td>
              <td width="207">Picture</td>
				<td width="188">Amount</td>
				<td width="194">Price</td>
            </tr>
          </tbody>
        </table>
					<?php include('../class/vegetable.php'); ?>
			<?php		
			$i = 1;
			$amt = 0;
			$thanhtien = 0;
			foreach($_SESSION['cart'] as $key => $value)
			{
				$p = new vegetable();
				$vegeid = $p->getByID($key);
				if ($vegeid)
				{
					$row = $vegeid->fetch_assoc();
					echo '<hr>
					<table width="800" border="0">
					<tbody>
					<tr>
					<td align="center" width="50">'.$i.'</td>
					<td width="200">'.$row["VegetableName"].'</td>
					<td width="10">
						<div id="sanpham_hinh">
							<img src="../'.$row["Image"].'" width="160" height="160" />
						</div>
					</td>
					<td width="250">'.$value['quanity'].'</td>
					<td width="250">'.$row['Price'] * $value['quanity'].'</td>
					</tr>
					</tbody>';
					$i++;
					$amt = $amt + $value['quanity'];
					$thanhtien = $thanhtien + ($value['quanity'] * $row['Price']);
					$_SESSION['thanhtien'] = $thanhtien;
				}
			}
					echo '<tfoot>
						<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Amount : '.$amt.'</td>
						<td>Total : '.$thanhtien.'</td>
						</tr>
					</tfoot>
					</table>';
		  ?>
			<input type="submit" class="btn btn-primary" id="nut5" name="nut5" value="Order"></input>
				<?php
				if(isset($_GET['nut5']))
				{
					if(!isset($_SESSION['CustomerID']))
					{
						header('location:../customer/login.php');
					}
					else
					{
						header('location:saveorder.php');	
					}
				}
				?>
			</form>
	<br>
	<br>
		</div>
	</div>
	</div>
</body>
</html>