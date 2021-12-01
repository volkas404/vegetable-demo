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
	include('../class/category.php');
	?>
	<div id="container1">
	<div id="main">
	  <div id="main_left">
		<br><br><br>
		<form action ="add.php" method="get">
  <div class="form-group">
    <label for="exampleInputEmail1">Name:</label>
    <input type="text" class="form-control" id="namecate" name="namecate">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description:</label>
    <input type="test" class="form-control" id="description" name="description">
  </div>
  <input type="submit" class="btn btn-primary" id="nut3" name="nut3" value="Add"></input>
</form>
		</div>
        <div id="main_right">
     <h3>Category</h3>
			<br><hr>
			<table width="800" border="0">
          <tbody>
            <tr>
              <td align="center" width="50">#</td>
              <td width="200">Name</td>
              <td width="450">Description</td>
            </tr>
          </tbody>
        </table>
		<?php
			$p = new category();
			$cateall = $p->getAll();
			if($cateall)
			{
				while ($row = $cateall->fetch_assoc())
				{
					echo '<hr>
					<table width="800" border="0">
				  <tbody>
					<tr>
					  <td align="center" width="50">'.$row["CategoryID"].'</td>
					  <td width="200">'.$row["Name"].'</td>
					  <td width="450">'.$row["Description"].'</td>
					</tr>
				  </tbody>
				</table>';
				}
			}
			?>
	  </div>
	  </div>
		<div id="footer"></div>
	</div>
</body>
</html>