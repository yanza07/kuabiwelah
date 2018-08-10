<?php
include "titlemeta.php";
$kata_kunci = $_POST['kataKunci'];
$sql = mysqli_query($connDB, "SELECT * FROM tabel_barang WHERE nama_barang LIkE '$kata_kunci%'");
$hitung = mysqli_num_rows($sql);
if($hitung > 0){
	while($data = mysqli_fetch_assoc($sql)){
		$foto = explode("|",$data['foto']);
		$id_barang = base64_encode($data['id_barang']);
		$kode_harga = $data['kode_barang'];
		$harga = mysqli_query($connKode, "SELECT * FROM `$kode_harga` WHERE jumlah = '1000' AND grade = 'standar' AND laminasi = 'NL'") or die(" error dibagian harga gblk");
		$harga_tampilan = $data['harga_display'];
	?>
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
<?php
	}
}else{
	?><p style="text-trasnform: uppercase; latter-spacing: 5px;">404 : <span style="color: #fb383b;"></span>Barang tidak ditemukan </p><?php
}
?>
