<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<?php
	if(isset($_GET['id'])){
		
	
	?>
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
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
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
	<div class="penutup hide" style="width: 100%; height: 100%;background-color: rgb(0,0,0,0.54); z-index:99; position: fixed;">
		
	</div>
	<!-- banner -->
	<div class="banner_top innerpage" id="home">
		<div class="wrapper_top_w3layouts">
			<div class="header_agileits">
				<div class="logo inner_page_log">
					<h1><a class="navbar-brand" href="index.php"><span>Jar</span> <i>Garfika</i></a></h1>
				</div>
				<div class="overlay overlay-contentpush">
					<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>

					<?php include "nav.php" ?>
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
					<li>Single</li>
				</ul>
			</div>
		</div>
		<!-- //banner_inner -->
	</div>

	<!-- //banner -->
	<!-- top Products -->
	<div class="ads-grid_shop">
		<div class="shop_inner_inf">
			<div class="col-md-4 single-right-left ">
				<div class="grid images_3_of_2">
					<div class="flexslider">

						<ul class="slides">
							<li data-thumb="images/d2.jpg">
								<div class="thumb-image"> <img src="images/d2.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="images/d1.jpg">
								<div class="thumb-image"> <img src="images/d1.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
							<li data-thumb="images/d3.jpg">
								<div class="thumb-image"> <img src="images/d3.jpg" data-imagezoom="true" class="img-responsive"> </div>
							</li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="col-md-8 single-right-left simpleCart_shelfItem">
				<h3>Shoe Rock Vision(SRV) Sneakers (Blue)</h3>
				<p><span class="item_price">$650</span>
					<del>$1,199</del>
				</p>
				<div class="color-quality">
					<div class="color-quality-right">
						<h5>Quantity :</h5>
						<select id="country1" class="frm-field qty required sect">
								<option value="100">100</option>								
								<option value="200">200</option>								
								<option value="300">300</option>								
								<option value="400">400</option>								
								<option value="500">500</option>								
								<option value="600">600</option>								
								<option value="700">700</option>								
								<option value="800">800</option>								
								<option value="900">900</option>								
								<option value="1000">1000</option>								
								<option value="1100">1100</option>								
								<option value="1200">1200</option>								
								<option value="1300">1300</option>								
								<option value="1400">1400</option>								
								<option value="1500">1500</option>								
								<option value="1600">1600</option>								
								<option value="1700">1700</option>								
								<option value="1800">1800</option>								
								<option value="1900">1900</option>								
								<option value="2000">2000</option>								
								<option value="lebih">2000</option>								
							</select>
                        <div class="description hide">
                            <form action="#">
                                <input style="width: 100%;" type="number" value="0" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0';}"
						    required=""/>
                            </form>
                        </div>
                        <input type="hidden" class="jumlahPesanan"/>
					</div>
				</div>
				<div class="occasional">
					<h5>Grade :</h5>
                    <div class="">
                        <fieldset>
                            <div class="toggle">
                                <input type="radio" name="sizeBy" value="weight" class="laminasi" id="sizeWeight" />
                                <label for="sizeWeight">Laminasi</label>
                                <input checked type="radio" name="sizeBy" class="nonLaminasi" value="dimensions" id="sizeDimensions" />
                                <label for="sizeDimensions">Non - laminasi</label>
                                <input type="hidden" class="pakaiLaminasi" value="0"/>
                            </div>
                        </fieldset>
                        <form class="form">
                          <div class="inputGroup groupStandar">
                            <input checked id="radio1" name="radio" type="radio"/>
                            <label for="radio1">Standar</label>
                          </div>
                            <div class="inputGroup groupPremium">
                            <input id="radio2" name="radio" type="radio"/>
                            <label for="radio2">Premium</label>
                          </div>
                          <div class="inputGroup groupDiamond">
                            <input id="radio3" name="radio" type="radio"/>
                            <label for="radio3">Diamond</label>
                          </div>
                            <input type="hidden" class="tipePesanan"/>
                        </form>

<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
                    </div>
					<div class="clearfix"> </div>
				</div>
				<!-- Button trigger modal -->
				<div style="padding:5%; " class="addTo-cart">
					<button style="font-size:17px; background-color: #fc636b; border-color: #fc636b; border-radius: 0px;" type="button" class="btn btn-primary addTo-cart" data-toggle="modal" data-target="#cartModal">
					  Tambah ke keranjang belanja
					</button>
				</div>


<!-- Modal -->

				<!--<div class="occasion-cart">
					<div class="shoe single-item single_page_b">
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="add" value="100">
							<input type="hidden" name="shoe_item" value="Chikku Loafers">
							<input type="hidden" name="amount" value="405.00">
							<input type="submit" name="submit" value="Add to cart" class="button add">

							<a href="#" data-toggle="modal" data-target="#myModal1">view</a>
						</form>

					</div>

				</div>-->
				<ul class="social-nav model-3d-0 footer-social social single_page">
					<li class="share">Bagikan : </li>
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="twitter">
							<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						</a>
					</li>
					<li>
						<a href="#" class="instagram">
							<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						</a>
					</li>
				</ul>

			</div>
			<div class="clearfix"> </div>
			<!--/tabs-->
			<div class="responsive_tabs">
				<div id="horizontalTab">
					<ul class="resp-tabs-list">
						<li>Deskripsi Type</li>
						<li>Bonus</li>
						<li>Apa itu Laminasi ?</li>
						<li>Apa itu Foil ?</li>
					</ul>
					<div class="resp-tabs-container">
						<!--/tab_one-->
						<div class="tab1">

							<div class="single_page">
								<h6>Deskripsi type pesanan anda</h6>
								<div class="boxes">
                                  <input disabled checked type="checkbox" id="box-1" class="standarCb">
                                  <label disable for="box-1">Standar <p>Tanpa foil <span class="tlam"></span></p></label>
                                    
                                  <input disabled type="checkbox" id="box-2" class="premiumCb">
                                  <label for="box-2">Premium <p>Foil di satu lokasi di bagian luar <span class="tlam"></span></p></label>
                                    
                                  <input disabled type="checkbox" id="box-3" class="diamondCb">
                                  <label for="box-3">Diamond <p>Foil di dua lokasi di bagian luar dan dalam <span class="tlam"></span></p></label>d   
                                </div>
							</div>
						</div>
						<!--//tab_one-->
						<div class="tab2">

							<div class="single_page">
								<h6>Bonus apa yang saya dapatkan ?</h6>
                                <div class="boxes">
                                  <input checked disabled type="checkbox" id="box-1">
                                  <label disable for="box-1">Kartu Ucapan <span class="jumlahKartu">( 100 buah )</span></label>

                                  <input disabled type="checkbox" id="box-2" class="bukuTamu">
                                  <label for="box-2">Buku Tamu <span class="jumlahBuku">( 0 buah )</span></label>

                                  <input checked disabled type="checkbox" id="box-3">
                                  <label for="box-3">Label <span class="jumlahLabel">( 1 pack )</span></label>
                                    
                                    <input checked disabled type="checkbox" id="box-4">
                                  <label for="box-4">Pamflet Elektronik<span class="">( 1 buah )</span></label>
                                    
                                    <input checked disabled type="checkbox" id="box-5">
                                  <label for="box-5">Plastik <span class="jumlahKartu">( 100 buah )</span></label>
                                </div>
							</div>
						</div>
						<div class="tab3">

							<div class="single_page">
								<h6>Laminasi</h6>
								<p>Laminasi adalah proses pelapisan undangan dengan plastik laminasu glosy atau doft sehingga undangan tampak lebih tebal juga menjadikan warna lebih tajam dan undangan menjadi terlihat lebih mewah dan exlusive</p>
							</div>
						</div>
                        <div class="tab4">

							<div class="single_page">
								<h6>Foil</h6>
								<p>Hot Print / Foil adalah proses pelapisan di nama mempelai dengan pita/tinta gold atau silver. Dengan hot print undangan terlihat lebih elegant dan terkesan mewah</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--//tabs-->
			<!-- /new_arrivals -->
			<!--//new_arrivals-->


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
	<!-- single -->
	<script src="js/imagezoom.js"></script>
	<!-- single -->
	<!-- script for responsive tabs -->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- FlexSlider -->
	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(document).ready(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!--search-bar-->
	<script src="js/search.js"></script>
	<!--//search-bar-->
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
    <script>
        $(document).ready(function(){
            $('.laminasi').click(function(){
                $('.pakaiLaminasi').val('1');
                $('.tlam').html("+ Laminasi");
            });
            $('.nonLaminasi').click(function(){
                $('.pakaiLaminasi').val('0');
                $('.tlam').html(" ");
            });
            $('.groupStandar').click(function(){
                $('.tipePesanan').val("standar");
                $('.standarCb').prop('checked', true);
                $('.premiumCb').prop('checked', false);
                $('.diamondCb').prop('checked', false);
            })
            $('.groupPremium').click(function(){
                $('.tipePesanan').val("premium");
                $('.standarCb').prop('checked', false);
                $('.premiumCb').prop('checked', true);
                $('.diamondCb').prop('checked', false);
            })
            $('.groupDiamond').click(function(){
                $('.tipePesanan').val("diamond");
                $('.standarCb').prop('checked', false);
                $('.premiumCb').prop('checked', false);
                $('.diamondCb').prop('checked', true);
            })
            $('.qty').change(function(){
                var quan = $('.qty').val()
                var n = quan/500;
                var a = n.toString().split('.');
                $('.jumlahBuku').html('( '+a[0]+' buah )');
                if(a[0] >= 1){
                    $('.bukuTamu').prop('checked', true);
                }else{
                    $('.bukuTamu').prop('checked', false);
                }
				$('.jumlahKartu').html('( '+quan+' buah )');
				var lbl = quan/100;
				$('.jumlahLabel').html('( '+lbl+' pack )');
            })
			$('.add').click(function(){
				$('.penutup').removeClass('hide');
			})
			$('.penutup').click(function(){
				$('.penutup').addClass('hide');
			})
			$('.sbmincart-closer').click(function(){
				$('.penutup').addClass('hide');
			})
			var idBarang = <?php echo "2" ?>;
			$('.addTo-cart').click(function(){
				$.ajax({
					url: 'tambahKeranjangBelanja.php',
					data: 'numberIdBarang='+idBarang,
					type: 'POST',
					cache: false,
				}).done(function(msg){
					$('.modal-cart').modal('show');
					$('.cart-body').html(msg);
				})
			})
        })
    </script>
	<!-- //end-smoth-scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<script src="js/dropdown.js"></script>
</body>
<?php
	}else{
		header('location: shop.php');
	}
	?>
</html>