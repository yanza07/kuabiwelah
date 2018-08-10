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
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
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
<div class="banner_top innerpage" style="box-shadow: 0 3px 6px -4px rgba(0,0,0,.16), 0 3px 6px rgba(0,0,0,.23);" id="home">
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
			<div class="clearfix"></div>
			<div class="services-breadcrumb_w3ls_agileinfo">
				<div class="inner_breadcrumb_agileits_w3">
					<ul class="short">
						<li style="margin-top: 1px;font-size: 1em; color: #fff; ">
                            <a style="color: #fff;" href="#" data-toggle="modal" data-target="#filterModal">
                                <i class="fa fa-bars"></i> 
                                Filter
                            </a>
                            <i>|</i>
                        </li>
                        <li style="margin-top: 1px;font-size: 1em; color: #fff; ">

                            <a style="color: #fff;" href="#" data-toggle="modal" data-target="#shortModal">
                                <i class="fa fa-sort-amount-asc"></i> 
                                Urut berdasarkan
                            </a>
                            <i>|</i>
                        </li>
					</ul>
					<div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModal" aria-hidden="true">
						<div class="modal-dialog modal-filter modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Filter Barang</h5>
								</div>
								<div class="modal-body">
									<div class="side-bar col-md-12">
										<div class="search-hotel">
											<h3 class="agileits-sear-head">Kategori ..</h3>
											<div style="margin: 0px; width: 100%;" class="drop">
											  <div class="option active placeholder" data-value="placeholder">
												Pilih Kategori Undangan
											  </div>
											  <div class="option" data-value="Blanko">
												Blanko
											  </div>
											  <div class="option" data-value="Soft Cover">
												Soft Cover
											  </div>
											  <div class="option" data-value="Hard Cover">
												Hard Cover
											  </div>
											  <div class="option" data-value="Full Color">
												Full Color
											  </div>
											  <div class="option" data-value="One Color"> 
												One Color
											  </div>
												<input type="hidden" class="kategori"/>
											</div>
										</div>
										<div class="range search-hotel">
											<h3 class="agileits-sear-head">Harga</h3>
											<ul class="dropdown-menu6">
												<li><input style="width:100%;" type="number" class="min" placeholder="Harga Minimal"/></li>
												<li style="width: 100%; text-align: center;"> - </li>
												<li><input style="width:100%;" type="number" class="max" placeholder="Harga Maximal"/></li>
											</ul>
										</div>
									</div>
							  </div>
							  <div class="modal-footer">
								  <button data-dismiss="modal" style="color:#fff; background-color:#fc636b;border-color:#fc636b; border-radius:0px;" type="button button-close" class="btn btn-primary selesai-filter"><a style="color:#fff; background-color:#fc636b;border-color:#fc636b; border-raidus:0px;" href="#">Selesai</a></button>
							  </div>
							</div>
						</div>
					</div>
					<div class="modal fade"	id="shortModal" tabindex="-1" role="dialog" aria-labelledby="shortModal" aria-hidden="true">
						<div class="modal-dialog modal-filter modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Urutkan Barang Berdasarkan</h5>
								</div>
								<div class="modal-body">
									 <form class="form">
										<div data-value="id_barang" class="inputGroup gsID gs">
											<input checked id="radio1" name="radio" type="radio"/>
											<label for="radio1"><span style="margin-left: -20px;margin-right: 2%;" class="fa fa-sort-numeric-asc"></span>ID Barang</label>
									  	</div>
										<div data-value="harga" class="inputGroup gsHarga gs">
											<input id="radio2" name="radio" type="radio"/>
											<label  for="radio2"><span style="margin-left: -20px;margin-right: 2%;" class="fa fa-sort-amount-asc"> </span> Harga <span style="font-size: 10pt;text-transform: uppercase; font-weight: 600;">( Kecil - besar )</span></label>
									  	</div>
									  	<div data-value="revHarga" class="inputGroup gsHargaR gs">
											<input id="radio3" name="radio" type="radio"/>
											<label for="radio3"><span style="margin-left: -20px;margin-right: 2%;" class="fa fa-sort-amount-desc"> </span> Harga <span style="font-size: 10pt;text-transform: uppercase; font-weight: 600;">( besar - kecil )</span></label>
									  	</div>
										<div data-value="alfabet" class="inputGroup gsAlfabet gs">
											<input id="radio4" name="radio" type="radio"/>
											<label for="radio4"><span style="margin-left: -20px;margin-right: 2%;" class="fa fa-sort-alpha-asc"> </span> Alfabetical <span style="font-size: 10pt;text-transform: uppercase; font-weight: 600;">( A - Z )</span></label>
									  	</div>
										<div data-value="revAlfabet" class="inputGroup gsAlfabetR gs">
											<input id="radio5" name="radio" type="radio"/>
											<label for="radio5"><span style="margin-left: -20px;margin-right: 2%;" class="fa fa-sort-alpha-desc"> </span> Alfabetical <span style="font-size: 10pt;text-transform: uppercase; font-weight: 600;">( Z - A )</span></label>
									  	</div>
										<input type="hidden" class="shortBy"/>
									</form>
							  	</div>
							  <div class="modal-footer">
								  <button data-dismiss="modal" style="color:#fff; background-color:#fc636b;border-color:#fc636b; border-radius:0px;" type="button button-close" class="btn btn-primary selesai-filter"><a style="color:#fff; background-color:#fc636b;border-color:#fc636b; border-raidus:0px;" href="#">Selesai</a></button>
							  </div>
							</div>
						</div>
					</div>
				</div>
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
				<form action="shop.php" method="get">
					<input style="background-color: rgb(0,0,0);" name="kataKunci" id="kataKunci" type="search" placeholder="Masukan nama barang...">
				</form>
			</div>
		</div>
		<!-- //search -->
		<div class="clearfix"></div>
		<!-- /banner_inner -->
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<!-- tittle heading -->

			<!-- //tittle heading -->
			<!-- product left -->
			
			<!-- //product left -->
			<!-- product right -->
			<div class="left-ads-display col-md-12">
				<div class="wrapper_top_shop">
					<!-- product-sec1 -->
                    <?php
                    $sql = mysqli_query($connDB, "SELECT * FROM tabel_barang");
					$num = mysqli_num_rows($sql);
					if($num > 0){
						while($data = mysqli_fetch_assoc($sql)){
							$foto = explode("|",$data['foto']);
							$id_barang = base64_encode($data['id_barang']);
							$kode_harga = $data['kode_barang'];
							$harga_tampilan = $data['harga_display'];
							?>
							<div class="product-sec1">
						<!--/mens-->
						<div class="col-md-4 product-men">
							<div class="product-shoe-info shoe">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="<?php echo $foto[0] ?>" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="single.php?id=<?php echo $id_barang; ?>" class="link-product-add-cart">Lihat Barang</a>
											</div>
										</div>
									</div>
									<div class="item-info-product">
										<h4>
											<a href="single.php?id=<?php echo $id_barang; ?>"><?php echo $data['nama_barang'] ?> </a>
										</h4>
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<div class="grid-price ">
														<span class="money ">Rp. <?php echo $harga_tampilan; ?></span>
													</div>
												</div>
											</div>
											<div class="shoe single-item hvr-outline-out">
							

											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>

					</div>
					<?php
						}
					}else{
						?>
					<p style="text-transform: uppercase; letter-spacing: 2pt; color: #fb383b; font-size: 15pt; text-align: center;">Tidak ada barang tersedia</p>
					<?php
					}
                    ?>
					
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
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
	<!-- //footer -->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/filter.js"></script>
	<script src="js/modernizr-2.6.2.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/demo1.js"></script>
    <?php
    if(isset($_GET['kataKunci'])){
    ?>
    <script>
		$.urlParam = function(name){
			var results = new RegExp('[\\?&]' + name + '=([^&#]*)').exec(window.location.href);
			return results[1] || 0;
		}
		if ($.urlParam('kataKunci') != '') {  // variable_name would be the name of your variable within your url following the ? symbol
			console.log('kataKunci');
			$(window).ready(function(){
				$('#kataKunci').val($.urlParam('kataKunci'));
				$.ajax({
					url: 'cari.php',
					data: 'kataKunci=' + $.urlParam('kataKunci'),
					cache: false,
					method: 'post'
				}).done(function(msg){
					$('.product-sec1').html(msg);
					$('body').css('background-color','#fff');
				})
			})
		} else {
			console.log('kataKunci');
		}
	</script>
    <?php
    }
    ?>
	
	<script src="js/search.js"></script>
	<!--//search-bar-->
	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		$(document).ready(function ($) {
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