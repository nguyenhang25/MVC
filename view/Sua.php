<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="index.php?action=update">

		<p>ID</p>
		<input type="text" name="id" value = "<?php echo $array[0]['ID']; ?>" readonly>
		<p>Ho ten</p>
		<input type="text" name="hoTen" value = "<?php echo $array[0]['hoTen']; ?>">
		<p>Nam sinh</p>
		<input type="text" name="namSinh" value = "<?php echo $array[0]['namSinh']; ?>">
		<p>Que quan</p>
		<input type="text" name="queQuan" value = "<?php echo $array[0]['queQuan']; ?>">
		<p>Luong cung</p>
		<input type="text" name="luongCung" value = "<?php echo $array[0]['luongCung']; ?>">
		<p>Thuong</p>
		<input type="text" name="thuong" value = "<?php echo $array[0]['thuong']; ?>">
		<p>Phat</p>
		<input type="text" name="phat" value = "<?php echo $array[0]['phat']; ?>">

		<p></p>
		<input type="submit" name="submit" value="Sua">
		<input type="submit" name="submitDelete" value="Xoa">
	</form>

</body>
</html>