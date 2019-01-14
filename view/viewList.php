<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/index.css">
</head>
<body>
	<h1>Danh sach can bo giang vien</h1>

	<form action="index.php?action=search" method="post">
		<input type="text" name="name">
		<input type="submit" name="submit" value="Search">
	</form>

	<a class = "add" href="view/AddForm.php">Them giang vien</a>
		
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
		foreach ($array as $value) 
		{
		?>
		<tr>
			<td><?php echo $value['ID']; ?></td>
			<td><a href="index.php?action=callUpdateFile&id=<?php echo $value['ID']; ?>"><?php echo $value['hoTen']; ?></a></td>
			<td><?php echo $value['namSinh']; ?></td>
			<td><?php echo $value['queQuan']; ?></td>
			<td><?php echo $value['luongCung']; ?></td>
			<td><?php echo $value['thuong']; ?></td>
			<td><?php echo $value['phat']; ?></td>
			<td><?php echo $value['luongThuc']; ?></td>
		</tr>

		<?php 
		} 
		?>

		
	</table>

</body>
</html>