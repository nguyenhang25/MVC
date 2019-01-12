<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		foreach ($list as $value) {
	?>
	<p>ID: <?php echo $value->ID ?> </p>
	<p>Ho ten: <?php echo $value->hoTen ?> </p>
	<p>Nam sinh: <?php echo $value->namSinh ?> </p>
	<p>Que quan: <?php echo $value->queQuan ?> </p>
	<p>Luong cung: <?php echo $value->luongCung ?> </p>
	<p>Thuong: <?php echo $value->thuong ?> </p>
	<p>Phat: <?php echo $value->phat ?> </p>
	<p>Luong thuc: <?php echo $value->luongThuc ?> </p>
	<?php
	echo '<br> <br>';
	}
	?>
</body>
</html>