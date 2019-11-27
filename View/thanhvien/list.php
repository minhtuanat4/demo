<div class="timkiem">
	<form action="" method="GET">
		<table>
			<tr>
				<input type="hidden" name="controller" value="thanh-vien">
				<td><input type="text" name="tukhoa" placeholder="Tu khoa"></td>
				<td><input type="submit" value="Tim kiem"></td>
			</tr>
		</table>
		<input type="hidden" name="action" value="tim-kiem">
	</form>
</div>

<div class="danhsach">
<h3>Danh sach thanh vien</h3>
	<table border="1px">
		<thead>
			<tr>
				<th>STT</th>
				<th>Ten thanh vien</th>
				<th>Nam sinh</th>
				<th>Que quan</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$stt = 1;
			foreach ($data as $value) {
			?>
				<tr>
					<td><?php echo $stt; ?></td>
					<td><?php echo $value['hoten']; ?></td>
					<td><?php echo $value['namsinh']; ?></td>
					<td><?php echo $value['quequan']; ?></td>
				</tr>
			<?php
				$stt++;
				}
			?>
		</tbody>
	</table>
</div>


