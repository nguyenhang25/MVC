<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="../controller/update.php">

		<p>ID</p>
		<input type="text" name="id" value = "<?php echo $list[0]->getID(); ?>" readonly>
		<p>Ho ten</p>
		<input type="text" name="hoTen" value = "<?php echo $list[0]->getHoTen(); ?>">
		<p>Nam sinh</p>
		<input type="text" name="namSinh" value = "<?php echo $list[0]->getNamSinh(); ?>">
		<p>Que quan</p>
		<input type="text" name="queQuan" value = "<?php echo $list[0]->getQueQuan(); ?>">
		<p>Luong cung</p>
		<input type="text" name="luongCung" value = "<?php echo $list[0]->getLuongCung(); ?>">
		<p>Thuong</p>
		<input type="text" name="thuong" value = "<?php echo $list[0]->getThuong(); ?>">
		<p>Phat</p>
		<input type="text" name="phat" value = "<?php echo $list[0]->getPhat(); ?>">

		<p></p>
		<input type="submit" name="submit" value="Sua">
		<input type="submit" name="submitDelete" value="Xoa">
	</form>

</body>
</html>