<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href = "../css/bootstrap.css" rel = "stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
<div id="main">
		<br><br><br>
  <form action="add.php" enctype="multipart/form-data" method="POST">
			
			<div class="container">
			<h3></t>Add Vegetable</h3>
	<table width="900" border="0">
          <tbody>
            <tr>
           	  <td width="600" height="50" colspan="2">Vegetable Name:</td>
				<td width="226">Category Name:</td>
            </tr>
			<tr>
				  <td width="500" height="50" colspan="2"><input name="vegename" type="text" size="75" height="50"></td>
				<td width="325">
					<select name="cate" style="width: 260px;">
				 	<option value="">Chọn danh mục</option>
					<option value="1">Fruit</option>
					<option value="2">Green Vegetables</option>
					 <option value="3">Spices</option>
				 	</select></td>
					
			</tr>
			<tr>
				  <td width="300" height="50">Unit</td>
				  <td width="300">Amount:</td>
				<td width="235">Price</td>
			</tr>
			 <tr>
				 <td width="200" height="50">
					 <select name="unit" size="1" style="width: 250px;">
				 	<option value="">Chọn đơn vị</option>
					<option value="kg">kg</option>
					<option value="bag">bag</option>
					 <option value="perfruit">perfruit</option>
					 <option value="bunch">bunch</option>
				 	</select>
				 </td>
			   <td width="300" height="50"><input name="amountvege" type="text" size="32" width="300" height="50"></td>
				 <td width="325"><input width="300" height="50" type="text" size="32" name="amountvege"></td>
			</tr>
			  <tr>
				  <td width="325" height="50" colspan="2">Image</td>
			  </tr>
			  <tr>
				  <td height="50" colspan="2">
					  <input type="file" name="image"><br>
				  </td>
			  </tr>
          </tbody>
        </table>
	  <br>
		<input type="submit" class="btn btn-primary" id="nut1" name="nut1" value="Add"></input>
  </form>
	<br>
	<br>
		</div>
	</div>
	</div>
</body>
</html>