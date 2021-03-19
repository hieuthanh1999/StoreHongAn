 <header>
     <div class="top-link">
         <div class="container">
             <div class="row">
                 <div class="col-md-7 col-md-offset-3 col-sm-9 hidden-xs">
                     <div class="site-option">

                         <!-- <ul>
                                <li class="currency"><a href="#">USD <i class="fa fa-angle-down"></i> </a>
                                    <ul class="sub-site-option">
                                        <li><a href="#">Eur</a></li>
                                        <li><a href="#">Usd</a></li>
                                    </ul>
                                </li>
                                <li class="language"><a href="#">English <i class="fa fa-angle-down"></i> </a>
                                    <ul class="sub-site-option">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">English2</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                     </div>
                     <div class="call-support" style="display:flex; justify-content: space-around;">
                         <p>Call support Admin: <span> 03 55668062</span></p>
                         <p>
                            <?php if(isset($_SESSION['tendangnhap'])){?>
                            Xin Chào:<span><?= $_SESSION['tendangnhap']?> </span>
                            <?php }else{ echo " ";}?>
                         </p>
                     </div>
                 </div>
                 <div class="col-md-2 col-sm-3">
                     <div class="dashboard">
                         <div class="account-menu">
                             <ul>
                                 <li class="search">
                                     <a href="#">
                                         <i class="fa fa-search"></i>
                                     </a>
                                     <ul class="search">
                                         <li>
                                             <form action="#">
                                                 <input type="text">
                                                 <button type="submit"> <i class="fa fa-search"></i> </button>
                                             </form>
                                         </li>
                                     </ul>
                                 </li>
                                 <li>
                                     <a href="#">
                                         <i class="fa fa-bars"></i>
                                     </a>
                                     <ul>
                                         <?php if (isset($_SESSION['tendangnhap'])) { ?>
                                             <li>
                                                 <a href="?action=taikhoan&ten=<?php echo $_SESSION['tendangnhap']; ?>">Hồ sơ</a>
                                             </li>
                                             <li>
                                                 <a href="?action=dangxuat" onclick="TBdangxuat()">Thoát</a>
                                             </li>

                                             <?php if ($_SESSION['admin'] == true || $_SESSION['banhang'] == true) { ?>
                                                 <li>
                                                     <a href="admin/index.php?action=trangchu">Trang quản lý</a>
                                                 </li>
                                             <?php }
                                            } else { ?>
                                             <li>
                                                 <a href="?action=dangnhap"> Đăng nhập</a>
                                             </li>
                                             <li>
                                                 <a href="?action=dangky">Đăng ký </a>
                                             </li>

                                         <?php } ?>

                                     </ul>
                                 </li>
                             </ul>
                         </div>
                         <div class="cart-menu">
                             <ul>
                                 <li><a href="?action=giohang&?act=list_giohang"> <img src="public/img/icon-cart.png" alt="">  </a>
                                     <!-- <div class="cart-info">
                                         <ul>
                                             <li>
                                                 <div class="cart-img">
                                                     <img src="public/img/cart/1.png" alt="">
                                                 </div>
                                                 <div class="cart-details">
                                                     <a href="#">Fusce aliquam</a>
                                                     <p>1 x $174.00</p>
                                                 </div>
                                                 <div class="btn-edit"></div>
                                                 <div class="btn-remove"></div>
                                             </li>
                                             <li>
                                                 <div class="cart-img">
                                                     <img src="public/img/cart/2.png" alt="">
                                                 </div>
                                                 <div class="cart-details">
                                                     <a href="#">Fusce aliquam</a>
                                                     <p>1 x $777.00</p>
                                                 </div>
                                                 <div class="btn-edit"></div>
                                                 <div class="btn-remove"></div>
                                             </li>
                                         </ul>
                                         <h3>Subtotal: <span> $951.00</span></h3>
                                         <a href="#" class="checkout">checkout</a>
                                     </div> -->
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="mainmenu-area home2 bg-color-tr product-items">
         <div class="container">
             <div class="row">
                 <div class="col-md-3">
                     <div class="logo">
                         <a href="?page=home">
                             <img src="public/img/an.png" />
                         </a>
                     </div>
                 </div>
                 <div class="col-md-9">
                     <div class="mainmenu">
                         <nav>
                             <ul>
                                 <li><a href="?page=home">Home</a>
                                 </li>
                                 <?php foreach ($data_loaisanpham as $value) {  ?>
                                     <li><a href="?action=cuahang&id=<?php echo $value['idLoaiSP'] ?>">
                                             <?= $value['tenLSP']; ?>
                                         </a>
                                     </li>
                                 <?php } ?>

                             </ul>
                         </nav>
                     </div>
                 </div>
                 <!-- <div class="col-sm-12">
                     <div class="mobile-menu">
                         <nav>
                             <ul>
                                 <li><a href="?page=home">Home</a> </li>
                                 <li><a href="?page=home">Homexxxxxx</a> </li>
                                 <li><a href="?page=home">Home</a> </li>
                               
                             </ul>

                             <li><a href="#">Foorwear</a>
                                 <ul>
                                     <li><a href="#">footwear men</a>
                                         <ul>
                                             <li><a href="#">gifts</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="#">footwear women</a>
                                         <ul>
                                             <li><a href="#">boots</a></li>
                                         </ul>
                                     </li>
                                 </ul>
                             </li>
                             <li><a href="#">Jewellery</a>
                                 <ul>
                                     <li><a href="#">Rings</a></li>
                                 </ul>
                             </li>
                             <li><a href="#">Accessories</a></li>
                             <li><a href="#">Pages</a>
                                 <ul>
                                     <li><a href="#">About us</a></li>
                                     <li><a href="#">Blog</a></li>
                                     <li><a href="#">Blog Details</a></li>
                                     <li><a href="#">Cart</a></li>
                                     <li><a href="#">Checkout</a></li>
                                     <li><a href="#">Contact</a></li>
                                     <li><a href="#">My account</a></li>
                                     <li><a href="#">Shop</a></li>
                                     <li><a href="#">Shop list</a></li>
                                     <li><a href="#">Single Shop</a></li>
                                     <li><a href="#">Wishlist</a></li>
                                     <li><a href="#">login page</a></li>
                                     <li><a href="#">register page</a></li>
                                 </ul>
                             </li>
                             </ul>
                         </nav>
                     </div>
                 </div> -->
             </div>

         </div>
     </div>
 </header>
 <!-- header area end -->