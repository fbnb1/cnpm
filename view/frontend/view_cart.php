<div style="padding: 10px;">
	<form method="post" action="index.php?controller=cart&act=update">
	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%">
		<tr>
			<th style="width: 100px;">Ảnh</th><th>Tên sản phẩm</th><th style="width: 80px">Số lượng</th><th style="width: 100px;">Giá</th><th style="width: 70px;">Hành Động</th>
		</tr>
		<?php foreach ($_SESSION["cart"] as $product): ?>
		<tr>
			<td><img style="width: 100px;" src="public/upload/product/<?php echo $product["c_img"]; ?>"></td>
			<td><?php echo $product["c_name"]; ?></td>
			<td style="text-align: center;">
				<input type="number" name="<?php echo $product['pk_product_id']; ?>" style="width: 30px;text-align: center;" min = "0" value="<?php echo number_format($product['number']); ?>">
			</td>
			<td style="text-align: center;"><?php echo number_format($product["c_price"]); ?>VNĐ</td>
			<td style="text-align: center;"><a href="index.php?controller=cart&act=delete&id=<?php echo $product['pk_product_id']; ?>">Delete</a></td>
		</tr>
	<?php endforeach; ?>
	</table>
	<ul style="padding-top: 10px;">
		<li>Số lượng sản phẩm: <?php echo $this->cart_number(); ?></li>
		<li>Tổng giá sản phẩm:<?php echo number_format($this->cart_total()); ?>VNĐ</li>
	</ul>
	<div style="margin-top: 15px;">
		<input type="button" value="Tiếp tục mua hàng" onclick="location.href='index.php';" name="">&nbsp;
		<?php if($this->cart_number() > 0 ): ?>
		<input type="button" name="" value="Xóa giỏ hàng">&nbsp;
		<input type="submit" name="" value="Cập nhật giỏ hàng" onclick="location.href='index.php?controller=cart&act=destroy'; ">&nbsp;
		<input type="button" name="" value="Thanh toán" onclick="location.href='index.php?controller=checkout'; ">
	<?php endif; ?>
	</div>
	</form>
</div>