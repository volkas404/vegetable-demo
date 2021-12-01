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
		<form action="detail.php" method="get">
			<div class="container">
			<h3></t>History</h3>
			<br><hr>
			<table width="800" border="0">
          <tbody>
            <tr>
              <td align="center" width="200">#</td>
              <td width="600">Date</td>
              <td width="400">Total</td>
				<td width="200">Detail</td>
            </tr>
          </tbody>
        </table>
				<?php
					include('../class/order.php');
					header('Content-Type: text/html; charset=UTF-8');
					$i=0;
					$id = $_SESSION['CustomerID'];
					$p = new order();
					$getor = $p->getAllOrder($id);
					if ($getor)
					{
						while($row = $getor->fetch_assoc())
						{
							echo '<hr>
							<table width="800" border="0">
							<tbody>
							<tr>
							<td align="center" width="200">'.(++$i).'</td>
							<td width="600">'.$row["Date"].'</td>
							<td width="400">'.$row['Total'].'</td>
							<td width="200"><button type"submit" name="ndetail" class="btn btn-primary" value="'.$row['OrderID'].'">Detail</button></td>
							</tr>
							</tbody>';
						}
					}
					else echo "Không có gì để xem đâu, hãy mua hàng";
				?>
			</form>
	<br>
	<br>
</div>
	</div>
	</div>
</body>
</html>