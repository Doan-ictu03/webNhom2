<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>D20</title>
</head>
<body>
	<div class="container" style="margin:auto; border: 1px solid #333; width: 500px;">
		<div class="card">
			<div class="card-header">
				<h2 style="text-align: center;">Sửa sản phẩm</h2>
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data" >
					<div class="form-group" style="display:flex; margin-bottom: 20px;">
						<label style="margin-right: 30px; min-width:92px;">Tên sản phẩm</label>
						<input type="text" name="product_name" class="form-controll">
					</div>

					<div class="form-group" style="display:flex; margin-bottom: 20px;">
						<label style="margin-right: 30px; min-width:92px;">Nhà sản xuất</label>
						<select class="form-controll" name="brand_id">
							<?php while ($row = mysqli_fetch_assoc($listBrand)){ ?>
							<option value="<?php echo $row['brand_id']; ?>"><?php echo $row['brand_name']; ?></option>
							<?php } ?>
						</select>
					</div>

					<div class="form-group" style="display:flex; margin-bottom: 20px;">
						<label style="margin-right: 30px; min-width:92px;">Ngày sản xuất</label>
						<?php
        					// Lấy ngày hiện tại
					        $currentDate = date("Y-m-d");
					        // Chuyển đổi định dạng ngày
					        $formattedDate = date("d/m/Y", strtotime($currentDate));
					    ?>
						<input type="date" name="create_date" class="form-controll" value="<?php echo $formattedDate; ?>">
					</div>

					<div class="form-group" style="display:flex; margin-bottom: 20px;">
						<label style="margin-right: 30px; min-width:92px;">Cấu hình</label>
						<input type="text" name="config" class="form-controll">
					</div>

					<button name="sua" type="submit">Sửa</button>
					<a href="index.php?pagelayout=quaylai">Quay lại</a>

				</form>
			</div>
		</div>
	</div>
</body>
</html>