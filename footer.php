<?php

?>
<div class="footer_agileinfo_w3">
		<div class="footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="index.php"><span>Jar</span> Grafika</a></h2>
				<p><?php echo "deskripsi data perushaan" #$data['deskripsi_perushaan']?></p>
				<ul class="social-nav model-3d-0 footer-social social two">
					<li>
						<a href="#" class="facebook">
							<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
							<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
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
			<div class="col-md-9 footer-right">
				<div class="sign-grds">
					<div class="col-md-4 sign-gd">
						<h4>Our <span>Information</span> </h4>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>

					<div class="col-md-5 sign-gd-two">
						<h4>Store <span>Information</span></h4>
						<div class="address">
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-phone" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Phone Number</h6>
									<p><?php echo "nomer telpon perusahaan" #$data['nomer_telpon'] ?></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Email Address</h6>
									<p>Email :<a href="mailto:<?php #echo $data['email_perusahaan'] ?>"> <?php echo "Jar.Grafika@gmail.com" ?></a></p>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="address-grid">
								<div class="address-left">
									<i class="fa fa-map-marker" aria-hidden="true"></i>
								</div>
								<div class="address-right">
									<h6>Location</h6>
									<p><?php echo "alamat peruhsaan" #$data['alamat_perusahaan']?>

									</p>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="col-md-3 sign-gd flickr-post">
						<h4>Our <span>Team</span></h4>
						<ul>
							<li><a href="single.php"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
							<li><a href="single.php"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
            <input type="hidden" value="kategori:'all'&sortBy:'id_barang'&hargaMin:'0'&hargaMax:'99999'" class="hasilFilter"/>
            <div class="clearfix"></div>
            <p class="copy-right-w3ls-agileits">&copy <?php echo date("Y"); ?> Jar Grafika. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModal" aria-hidden="true">
  <div class="modal-dialog modal-cart modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Keranjang Belanja</h5>
      </div>
      <div class="modal-body cart-body">
        ....
      </div>
      <div class="modal-footer">
        <button style="color:#fff; background-color:#fc636b;border-color:#fc636b; border-radius:0px;" type="button" class="btn btn-primary"><a style="color:#fff; background-color:#fc636b;border-color:#fc636b; border-raidus:0px;" href="checkout.php">Lanjut Proses</a></button>
      </div>
    </div>
  </div>
</div>