<!-- Start slides -->
<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="<?=base_url('assets');?>/images/home/gambar.jpeg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Bogorfood</strong></h1>
							<p class="m-b-40">Temukan jajanan favorit dari UMKM terbaik di Kota Bogor disini!</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?=base_url()?>contact">Contact</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="<?=base_url('assets');?>/images/home/gambar2.jpg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Bogorfood</strong></h1>
							<p class="m-b-40">Temukan jajanan favorit dari UMKM terbaik di Kota Bogor disini!</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?=base_url()?>contact">Contact</a></p>
						</div>
					</div>
				</div>
			</li>
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- End slides -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<img src="<?=base_url('assets');?>/images/logobogorfood1.png" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Bogorfood</span></h1>
						<p>Bogorfood merupakan website terbaik yang di dalamnya terdapat berbagai macam makanan dari UMKM terbaik di Kota Bogor </p>
						<p>Adapun beberapa UMKM-nya yakni UMKM dapur Bujalu, UMKM Tauty Cake, UMKM Rangginang Ceu Tuti </p>
						<a class="btn btn-lg btn-circle btn-outline-new-white" href="<?=base_url()?>contact">Contact</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
	<!-- Start QT -->
	<div class="qt-box qt-background">
		<div class="container">
			<div class="row">
				<div class="col-md-8 ml-auto mr-auto text-left">
					<p class="lead "><b>
					“ Apa yang anda butuhkan untuk memulai bisnis? Ada tiga hal sederhana: lebih mengenal produk anda sendiri daripada orang lain, mengenal pelanggan anda, dan memiliki hasrat yang membara untuk sukses. ”
					</b></p>
					<span class="lead">~ Dave Thomas ~</span>
				</div>
			</div>
		</div>
	</div>
	<!-- End QT -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>UMKM</h2>
						<h4>Berikut adalah menu yang tersedia dari beberapa UMKM</h4>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
						<button class="active" data-filter="*">All</button>
							<button data-filter=".dapur">Dapur Bujalu</button>
							<button data-filter=".tauty">Tauty Cake</button>
							<button data-filter=".rangginang">Rangginang Ceu Tuti</button>
							
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="row special-list">
				<?php foreach ($dapur as $a) : ?>
				<div class="col-lg-4 col-md-6 special-grid dapur">
					<div class="gallery-single fix">
						<img src="<?php echo base_url() . 'assets/images/dapur_bujalu/' . $a->foto_produk ?>" class="img-fluid" alt="Image">
						<div class="why-text">
							<h4><?php echo $a->nama_produk?></h4>
							<p><?php echo character_limiter($a->deskripsi_produk,20)?></p>
							<h5> Rp<?php echo number_format($a->harga_produk,0,',','.')?></h5>
							<a class="btn btn-light" href="<?php echo base_url('menu/detail/' .$a->id_produk)?>">Product Detail</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

				<?php foreach ($tauty as $b) : ?>
				<div class="col-lg-4 col-md-6 special-grid tauty">
					<div class="gallery-single fix">
						<img src="<?php echo base_url() . 'assets/images/tauty_cake/' . $b->foto_produk ?>" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4><?php echo $b->nama_produk?></h4>
							<p><?php echo character_limiter($b->deskripsi_produk,20)?></p>
							<h5> Rp<?php echo number_format($b->harga_produk,0,',','.')?></h5>
							<a class="btn btn-light" href="<?php echo base_url('tauty/detail/' .$b->id_produk)?>">Product Detail</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

				
				<?php foreach ($rangginang as $d) : ?>
				<div class="col-lg-4 col-md-6 special-grid rangginang">
					<div class="gallery-single fix">
						<img src="<?php echo base_url() . 'assets/images/rangginang_tuti/' . $d->foto_produk ?>" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4><?php echo $d->nama_produk?></h4>
							<p><?php echo character_limiter($d->deskripsi_produk,20)?></p>
							<h5> Rp<?php echo number_format($d->harga_produk,0,',','.')?></h5>
							<a class="btn btn-light" href="<?php echo base_url('rangginang/detail/' .$d->id_produk)?>">Product Detail</a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				
	
			</div>
		</div>
	</div>
</div>
	</div>
	</div>
	<!-- End Menu -->
	