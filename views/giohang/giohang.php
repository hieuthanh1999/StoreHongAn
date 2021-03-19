<style>
	.x:hover {
		background-color: #E03550;
		color: white;
	}

	.buttonx {
		background-color: transparent;
		border: 1px solid #eee;
		color: #959595;
		font-size: 12px;
		font-weight: 500;
		line-height: 34px;
		padding: 10px 15px;
		text-transform: uppercase;
		font-family: "Montserrat", sans-serif;
		transition: all 0.3s ease 0s;
	}
</style>


<!-- cart item area start -->
<div class="shopping-cart">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="location">
					<ul>
						<li><a href="index.html" title="go to homepage">Home<span>/</span></a> </li>
						<li><strong> Shopping cart</strong></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<form action="?action=thanhtoan&a=<?php foreach ($_SESSION['sanpham'] as $value) {
															echo $value['Dongia'] . '&b=';
														} ?>" method="POST">
						<table class="table-bordered ">
							<thead>
								<tr>
									<th class="cart-item-img">Sản Phẩm</th>
									<th class="cart-product-name">Thông tin sản phẩm</th>
									<th class="edit">Đơn giá</th>
									<th class="edit">Số lượng mua</th>
									<th class="move-wishlist">Số lượng kho</th>
									<th class="unit-price">Thành tiền</th>
									<th class="remove-icon">Delete</th>
								</tr>
							</thead>
							<tbody class="text-center">

								<?php if (isset($_SESSION['sanpham'])) {
									$_SESSION['tongtien'] = 0;
									foreach ($_SESSION['sanpham'] as $value) {

								?>
										<!-- $key là id sp -->
										<tr>
											<td class="cart-item-img">
												<a href="single-product.html">
													<img height='90' width="100" src="admin/public_admin/image/sanpham/<?= $value['anh1'] ?>">
												</a>
											</td>										
											<td class="cart-product-name">
												<a href="#"><?= $value['tenSP'] ?></a>
											</td>

											<td class="move-wishlist">
												<a href="#"><?= number_format($value['Dongia']) ?> VND</a>
											</td>
											<td class="unit-price">
												<span>
													<div class="cart_quantity_button">
														<?php
														if ($value['soluong_kho'] > 0) { ?>
															<a class="cart_quantity_up" href="?action=giohang&act=update_giohang&id=<?= $value['idSP'] ?>"> + </a>
														<?php } else { ?>
															<a class="cart_quantity_up" href="" onclick="TB_hethang()"> + </a>
														<?php } ?>
														<input class="cart_quantity_input" style="text-align:center" size="2" type="text" name="soluong" value="<?php echo $value['soluong']; ?>">
														<a class="cart_quantity_down" href="?action=giohang&act=update_giohang_tru&id=<?= $value['idSP'] ?>"> - </a>

													</div>
												</span>
											</td>
											<td class="quantity">
												<span>
													<?php
													if ($value['soluong_kho'] < 0) {
														echo "Lỗi";
													} else {
														echo $value['soluong_kho'];
													}
													?></span>
											</td>
											<td class="subtotal">
												<span><?php $_SESSION['tongtien'] += $value['thanhtien'];
														echo number_format($value['thanhtien']); ?> VND</span>
											</td>
											<td class="remove-icon">
												<a href="?action=giohang&act=xoagiohang&id=<?= $value['idSP'] ?>">
													<img src="public/img/cart/btn_remove.png" alt="xoa">
												</a>
											</td>
										</tr>

								<?php
									}
								} ?>

							</tbody>
						</table>

						<div class="shopping-button">
							<div class="continue-shopping x">
								<a class="buttonx" href="?action=trangchu">Tiếp tục mua
								</a>

							</div>
							<div class="shopping-cart-left x">
								<a class="buttonx" href="?action=giohang&act=xoagiohang_all">
									Hủy giỏ hàng
								</a>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- <div class="col-sm-4">
  				<div class="discount-code">
  					<h3>Discount Codes</h3>
  					<p>Enter your coupon code if you have one.</p>
  					<input type="text">
  					<div class="shopping-button">
  						<button type="submit">apply coupon</button>
  					</div>
  				</div>
  			</div>
  			<div class="col-sm-4">
  				<div class="estimate-shipping">
  					<h3>Estimate Shipping and Tax</h3>
  					<p>Enter your destination to get a shipping estimate.</p>
  					<form action="#">
  						<div class="form-box">
  							<div class="form-name">
  								<label> country <em>*</em> </label>
  								<select>
  									<option value="1">Afghanistan</option>
  									<option value="1">Algeria</option>
  									<option value="1">American Samoa</option>
  									<option value="1">Australia</option>
  									<option value="1">Bangladesh</option>
  									<option value="1">Belgium</option>
  									<option value="1">Bosnia and Herzegovina</option>
  									<option value="1">Chile</option>
  									<option value="1">China</option>
  									<option value="1">Egypt</option>
  									<option value="1">Finland</option>
  									<option value="1">France</option>
  									<option value="1">United State</option>
  								</select>
  							</div>
  						</div>
  						<div class="form-box">
  							<div class="form-name">
  								<label> State/Province </label>
  								<select>
  									<option value="1">Please select region, state or province</option>
  									<option value="1">Arizona</option>
  									<option value="1">Armed Forces Africa</option>
  									<option value="1">California</option>
  									<option value="1">Florida</option>
  									<option value="1">Indiana</option>
  									<option value="1">Marshall Islands</option>
  									<option value="1">Minnesota</option>
  									<option value="1">New Mexico</option>
  									<option value="1">Utah</option>
  									<option value="1">Virgin Islands</option>
  									<option value="1">West Virginia</option>
  									<option value="1">Wyoming</option>
  								</select>
  							</div>
  						</div>
  						<div class="form-box">
  							<div class="form-name">
  								<label> Zip/Postal Code </label>
  								<input type="text">
  							</div>
  						</div>
  						<div class="shopping-button">
  							<button type="submit">get a quote</button>
  						</div>
  					</form>
  				</div>
  			</div> -->
			<div class="col-sm-4">

			</div>
			<div class="col-sm-4">

			</div>
			<div class="col-sm-4">
				<div class="totals">
					<!-- <p>subtotal <span>$1,540.00</span> </p> -->
					<div style="display:flex; justify-content:flex-end">
						<h3>Tổng Tiền <span>
								<?= isset($_SESSION['tongtien']) ? number_format($_SESSION['tongtien']) . ' VND' : "0"; ?>
							</span></h3>
					</div>

					<div class="shopping-button" style="margin-bottom: 5px;">
						<button type="submit">Xác nhận thanh toán</button>
					</div>
				</div>
			</div>

		</div>
		</form>
	</div>
</div>

<!-- cart item area end -->
<script>
	function TB_hethang() {
		alert("Sản phẩm trong kho đã hết!");
	}
</script>