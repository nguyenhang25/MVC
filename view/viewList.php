<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			width: 80%;
			margin: 0 auto;
		}

		h1 {
			font-weight: bold;
			font-size: 40px;
			text-align: center;
		}
		form{
			float: right;
		}
		.table{
			width: 100%;
			border: 1px solid #ccc;
			border-bottom: none;
			margin-top: 100px;

		}
		.table td{
			text-align: center;
			border-right: 1px solid #ccc;
			border-bottom: 1px solid #ccc;

		}
	</style>
</head>
<body>
	<h1>Danh sach can bo giao vien</h1>

	<form action="controller/search.php" method="post">
		<input type="text" name="name">
		<input type="submit" name="submit" value="Search">
	</form>
		
	<table class="table">
		<tr>
			<td>ID</td>
			<td>Ho ten</td>
			<td>Nam sinh</td>
			<td>Que quan</td>
			<td>Luong Cung</td>
			<td>Thuong</td>
			<td>Phat</td>
			<td>Luong Thuc</td>
		</tr>
		<?php
		foreach ($list as $value) {
		?>
		<tr>
			<td><?php echo $value->ID; ?></td>
			<td><?php echo $value->hoTen; ?></td>
			<td><?php echo $value->namSinh; ?></td>
			<td><?php echo $value->queQuan; ?></td>
			<td><?php echo $value->luongCung; ?></td>
			<td><?php echo $value->thuong; ?></td>
			<td><?php echo $value->phat; ?></td>
			<td><?php echo $value->luongThuc; ?></td>
		</tr>

		<?php 
		} 
		?>

		
	</table>

</body>
</html>