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
	?>
<div id="main">
		<br><br><br>
			<div class="container">
			<h3></t>Order Detail</h3>
			<br><hr>
			<table width="1000" border="0">
          <tbody>
            <tr>
              <td align="center" width="200">#</td>
              <td width="300">Name</td>
              <td width="400">Image</td>
				<td width="200">Amount</td>
				<td width="200">Price</td>
            </tr>
          </tbody>
        </table>
		<?php	
			include_once("../class/vegetable.php");
			include_once("../class/order.php");
			header('Content-Type: text/html; charset=UTF-8');
			$p = new vegetable();
			$i=0;
			$soluong=0;
			$thanhtien=0;
			$q = new order();
			$getorde = $q->getOrderDetail($_GET['ndetail']);
			if($getorde)
			{
				while($row = $getorde->fetch_assoc())
				{
					echo '<hr>
					<table width="1000" border="0">
					<tbody>
					<tr>
					<td align="center" width="200">'.(++$i).'</td>
					<td width="300">'.$row["VegetableName"].'</td>
					<td width="400">
					<div id="sanpham_hinh">
							<img src="../'.$row["Image"].'" width="160" height="160"/>
						</div>
					</td>
					<td width="200">'.$row['Quantity'].'</td>
					<td width="200">'.$row['Price'].'</td>
					</tr>
					</tbody>';
					$soluong = $soluong + $row['Quantity'];
					$thanhtien = $thanhtien + ($row['Quantity'] * $row['Price']);
				}
				echo '<tfoot>
						<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>Amount : '.$soluong.'</td>
						<td>Total : '.$thanhtien.'</td>
						</tr>
					</tfoot>
					</table>';
			}
			?>
	<br>
	<br>
		</div>
	</div>
	</div>
</body>
</html>