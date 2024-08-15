<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>D2</title>
	<style>
		table{
			border-collapse: collapse;
			width: 100%;
		}
		th, td{
			border: 1px solid #dddddd;
			text-align: center;
			padding: 8px;
		}
		h2{
			text-align: center;
		}
		/*a{
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			padding: 10px 20px;
			font-size: 16px;
			background-color: #4CAF50;
			color: white;
			border: none;
			cursor: pointer;
		}*/
	</style>
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h2>Danh sách sản phẩm</h2>
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>STT</th>
							<th>Tên sản phẩm</th>
							<th>Nhà sản xuất</th>
							<th>Ngày sản xuất (D/M/Y)</th>
							<th>Cấu hình</th>
							<th>Sửa</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$i=1;
						while ($row = mysqli_fetch_assoc($query)){
							$create_date = date('d/m/Y', strtotime($row['create_date']));?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $row['product_name']; ?></td>
							<td><?php echo $row['brand_name']; ?></td>
							<td><?php echo $create_date; ?></td>
							<td><?php echo $row['config']; ?></td>
							<td>
							<a href="index.php?page_layout=sua&id=<?php echo $row['product_id']; ?>">Sửa</a>
							</td>
							<td>
							<a href="index.php?page_layout=xoa&id=<?php echo $row['product_id']; ?>">Xóa</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				<a href="index.php?page_layout=them">Thêm mới</a>
			</div>
		</div>
	</div>
</body>
</html>