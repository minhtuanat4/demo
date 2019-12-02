
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Sua Thanh Vien</title>
	<link rel="stylesheet" href=".../style.css">
</head>
<body>
<div class="danhsach">
	<h3>Cap nhat Thanh Vien</h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Ten thanh vien: </td>
				<td><input type="text" name="hoten" value="<?php echo $dataID['hoten']; ?>" placeholder="Ten thanh vien"></td>
			</tr>
			<tr>
				<td>Nam sinh: </td>
				<td><input type="text" name="namsinh" value="<?php echo $dataID['namsinh']; ?>" placeholder="Nam sinh"></td>
			</tr>
			<tr>
				<td>Que quan: </td>
				<td><input type="text" name="quequan" value="<?php echo $dataID['quequan']; ?>" placeholder="Que quan"></td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="update_user" value="Update"></td>
			</tr>
		</table>
	</form>
	</div>
</body>
</html>