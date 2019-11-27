
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Them Thanh Vien</title>
</head>
<body>
<div class="dangkythanhvien">
	<a href="index.php?controller=thanh-vien&action=list">Danh sach</a>
	<h3>Them Moi Thanh Vien</h3>
	<form action="" method="POST">
		<table>
			<tr>
				<td>Ten thanh vien: </td>
				<td><input type="text" name="hoten" placeholder="Ten thanh vien"></td>
			</tr>
			<tr>
				<td>Nam sinh: </td>
				<td><input type="text" name="namsinh" placeholder="Nam sinh"></td>
			</tr>
			<tr>
				<td>Que quan: </td>
				<td><input type="text" name="quequan" placeholder="Que quan"></td>
			</tr>

			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="add_user" value="Them moi"></td>
			</tr>
		</table>
	</form>
	<?php
		if(isset($thanhcong) && in_array('add_success', $thanhcong)){
			echo "Them moi thanh cong";
		}
	?>
	</div>
</body>
</html>