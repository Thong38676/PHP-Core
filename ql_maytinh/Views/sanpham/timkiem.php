<?php
		?>
			<br>
					<table class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên Sản Phẩm</th>
								<th>Id Loại Sản Phẩm</th>
								<th>Mô tả</th>
								<th>Gía Sản phẩm</th>
								<th>Hình Ảnh</th>
								<th>Xuất xứ</th>
								<th>CPU</th>
								<th>RAM</th>
								<th>Bảo hành</th>
								<th>Hành động</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($data as $sanpham) {
								?>
								<tr>
									<td><?php echo $sanpham['id_sanpham'];  ?></td>
									<td style="width: 110px"><?php echo $sanpham['ten_sanpham'];  ?></td>
									<td style="width: 90px"><?php echo $sanpham['id_chuyenmuc'];  ?></td>
									<td style="width: 150px" ><?php echo $sanpham['mota_sanpham']; ?></td>
									<td><?php echo $sanpham['gia_sanpham'];  ?></td>
									<td><img src="public/images/<?php echo $sanpham['image']; ?>" width ="80px"></td>
									<td style="width: 150px" ><?php echo $sanpham['xuatxu_sanpham'];  ?></td>
									<td><?php echo $sanpham['cpu'];  ?></td>
									<td><?php echo $sanpham['ram'];  ?></td>
									<td style="width: 100px"><?php echo $sanpham['bao_hanh'];  ?></td>
									<td><a href="?chitiet_sanpham=<?php echo $sanpham['id_sanpham'] ?>"><button type="button" class="btn btn-primary">Sửa</button></a><a href="?xoa_sanpham=<?php echo $sanpham['id_sanpham'] ?>"><button type="button" class="btn btn-danger">Xóa</button></a></td>
								</tr>
								<?php		
							}
							?>
						</tbody>
					</table>
		<?php
	
?>