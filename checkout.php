<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<?php include "titlemeta.php"; ?>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/shop.css" type="text/css" media="screen" property="" />
	<link href="css/style7.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	<link rel="stylesheet" type="text/css" href="css/checkout.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="index.php"><span>Jar</span> <i>Garfika</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<?php include "nav.php"; ?>
				</div>
				<div class="mobile-nav-button">
					<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
				</div>
				<!-- cart details -->
			</div>
		</div>
		<!-- //cart details -->
		<!-- search -->
		<div class="search_w3ls_agileinfo">
			<div class="cd-main-header">
				<ul class="cd-header-buttons">
					<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
				</ul>
			</div>
			<div id="cd-search" class="cd-search">
				<form action="#" method="post">
					<input name="Search" type="search" placeholder="Click enter after typing...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<div class="services-breadcrumb_w3ls_agileinfo">
			<div class="inner_breadcrumb_agileits_w3">

				<ul class="short">
					<li><a href="index.php">Home</a><i>|</i></li>
					<li>Check Out</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div style="padding: 3em 0 0 0px;" class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="privacy about">
				<h3>Chec<span>kout</span></h3>

				<div class="checkout-right">
					<h4>Informasi barang pesanan anda</h4>
					<div class="col-md-4 checkout-left-basket">
						<ul>
							<li></li>
							<li>Nama barang <i>-</i> <span class="red">Nama baranf</span></li>
							<li>Kode Harga <i>-</i> <span class="red">SC.16-FC</span></li>
							<li>Grade Pesanan <i>-</i> <span class="red">Premium</span></li>
							<li>Harga per pcs <i>-</i> <span class="red">Rp. 1500.00</span></li>
							<li>Laminasi <i>-</i> <span class="red">Ya</span></li>
							<li>Foil <i>-</i> <span class="red">1 Lokasi</span></li>
							<li>Buku Tamu <i>-</i> <span class="red">2 buah</span></li>
							<li>Kartu ucapan <i>-</i> <span class="red">1000 buah</span></li>
							<li>Label <i>-</i> <span class="red">1000 buah</span></li>
							<li>Plastik <i>-</i> <span class="red">1000 buah</span></li>
							<li>Pamflet elektronik <i>-</i> <span class="red">Ya</span></li>
							<li>Jumlah barang <i>-</i> <span class="red">1000 pcs</span></li>
							
						</ul>
					</div>
				</div>
				<div class="checkout-left">
					<div class="col-md-4 checkout-left-basket">
						<h4 style="background-color:#333;">Total harga</h4>
						<ul>
							<li>tidak termasuk ongkos kirim</li>
							<li></li>
							<li></li>
							<li>Total <i>-</i> <span>$1405.00</span></li>
							<li>Uang muka (DP) <i>-</i> <span>$14.00</span></li>
						</ul>
					</div>
					<div class="col-md-8 address_form">
						<h4>Tambahkan informasi Pengiriman</h4>
						<form action="payment.php" method="post" class="creditly-card-form agileinfo_form">
							<section class="creditly-wrapper wrapper">
								<div class="information-wrapper">
									<div class="first-row form-group">
										<div class="controls">
											<label class="control-label">Nama Lengkap: </label>
											<input required class="billing-address-name form-control" type="text" name="name" placeholder="Nama Lengkap">
										</div>
										<div class="card_number_grids">
											<div class="card_number_grid_left">
												<div class="controls">
													<label class="control-label">Nomer telpon:</label>
													<input required class="form-control" type="number" placeholder="Nomer telpon">
												</div>
											</div>
											<div class="clear"> </div>
										</div>
										<div class="controls">
											<label class="control-label">Alamat lengkap: </label>
											<textarea required class="form-control" placeholder="Alamat lengkap"></textarea>
										</div>
										<div class="controls">
											<label class="control-label">Kota: </label>
											<input required class="form-control" type="text" placeholder="Kota">
										</div>
										<div class="controls">
											<label class="control-label">Provinsi: </label>
											<input required class="form-control" type="text" placeholder="Provinsi">
										</div>
										<div class="controls">
											<label class="control-label">Kode pos: </label>
											<input required class="form-control" type="number" placeholder="Kode pos">
										</div>
										<div class="controls">
											<label class="control-label">Keterangan: </label>
											<textarea class="form-control" placeholder="Opsional"></textarea>
										</div>
										
										<div class="controls">
											<label class="control-label">Tipe alamat: </label>
											<select style="padding: 0.1px;" class="form-control option-w3ls">
												<option>Rumah</option>
												<option>Kantor</option>																			<option>Toko</option>
											</select>
										</div>
									</div>
								</div>
							</section>
							<div class="checkout-right-basket">
							
							<a style="background: #fff; border: 1px solid #fb383b; color: #fb383b;" href="shop.php">Batalkan pesanan</a>
								<input type="submit" style="padding: 10px 20px;color: #fff;font-size: 1em;text-decoration: none; background: #2f9044; border: 1px solid #2f9044;" value="Lanjutkan pemesanan">
						</div>
						</form>
						
					</div>

					<div class="clearfix"> </div>


					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- //top products -->
		<!-- /newsletter-->
		<div class="newsletter_w3layouts_agile">
			<div class="col-sm-6 newsleft">
				<h3>Sign up for Newsletter !</h3>
			</div>
			<div class="col-sm-6 newsright">
				<form action="#" method="post">
					<input type="email" placeholder="Enter your email..." name="email" required="">
					<input type="submit" value="Submit">
				</form>
			</div>

			<div class="clearfix"></div>
		</div>
		<!-- //newsletter-->
		<!-- footer -->
		<?php include "footer.php"; ?>
	</div>
	<!-- //footer -->
    <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		shoe.render();

		shoe.cart.on('shoe_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- /nav -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/demo1.js"></script>
	<!-- //nav -->
	<!--search-bar-->
	<script src="js/search.js"></script>
	<!--//search-bar-->
	<!--quantity-->
	<script>
		$('.value-plus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) + 1;
			divUpd.text(newVal);
		});

		$('.value-minus').on('click', function () {
			var divUpd = $(this).parent().find('.value'),
				newVal = parseInt(divUpd.text(), 10) - 1;
			if (newVal >= 1) divUpd.text(newVal);
		});
	</script>
	<!--quantity-->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<script src="js/dropdown.js"></script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>

</html>