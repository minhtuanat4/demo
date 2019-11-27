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
			foreach ($data_search as $value) {
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