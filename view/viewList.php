<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			width: 80%;
			margin: 0 auto;
		}
		.add {
			text-decoration: none;
		    display: inline-block;
		    padding: 5px 10px;
		    border: 1px solid #ccc;
		}
		.add:hover{
			background-color: #000;
			color: #fff;
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
		.table td : lastchild{
			border-right: none;
		}
		.table td a{
			text-decoration: none;
			color: #000;
		}
		.table td a:hover{
			text-decoration: underline;
			color: #2f86c3;
		}

	</style>
</head>
<body>
	<h1>Danh sach can bo giang vien</h1>

	<form action="controller/search.php" method="post">
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
		foreach ($list as $value) 
		{
		?>
		<tr>
			<td><?php echo $value->getID(); ?></td>
			<td><a href="controller/CallUpdateFile.php?id=<?php echo $value->ID; ?>"><?php echo $value->getHoTen(); ?></a></td>
			<td><?php echo $value->getNamSinh(); ?></td>
			<td><?php echo $value->getQueQuan(); ?></td>
			<td><?php echo $value->getLuongCung(); ?></td>
			<td><?php echo $value->getThuong(); ?></td>
			<td><?php echo $value->getPhat(); ?></td>
			<td><?php echo $value->getLuongThuc(); ?></td>
		</tr>

		<?php 
		} 
		?>

		
	</table>

</body>
</html>