<!-- Start slides -->
<div id="slides" class="cover-slides">
		<ul class="slides-container">
			<li class="text-center">
				<img src="<?=base_url('assets');?>/images/home/gambar1.jpeg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Bogorfood</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
							<p><a class="btn btn-lg btn-circle btn-outline-new-white" href="<?=base_url()?>contact">Contact</a></p>
						</div>
					</div>
				</div>
			</li>
			<li class="text-center">
				<img src="<?=base_url('assets');?>/images/home/gambar2.jpeg" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20"><strong>Welcome To <br> Bogorfood</strong></h1>
							<p class="m-b-40">See how your users experience your website in realtime or view  <br> 
							trends to see any changes in performance over time.</p>
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
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor suscipit feugiat. Ut at pellentesque ante, sed convallis arcu. Nullam facilisis, eros in eleifend luctus, odio ante sodales augue, eget lacinia lectus erat et sem. </p>
						<p>Sed semper orci sit amet porta placerat. Etiam quis finibus eros. Sed aliquam metus lorem, a pellentesque tellus pretium a. Nulla placerat elit in justo vestibulum, et maximus sem pulvinar.</p>
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
					<p class="lead ">
						" If you're not the one cooking, stay out of the way and compliment the chef. "
					</p>
					<span class="lead">Michael Strahan</span>
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
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
						<button data-filter=".*">All</button>
							<button data-filter=".dapur">Dapur Bujalu</button>
							<button data-filter=".desira">Desira</button>
							<button data-filter=".olaten">Olaten</button>
							<button data-filter=".rangginang">Rangginang Ceu Tuti</button>
							<button data-filter=".tobo">Tobo Kito</button>
							
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
							<p><?php echo character_limiter($a->deskripsi_produk)?></p>
							<h5> Rp<?php echo number_format($a->harga_produk,0,',','.')?></h5>
						</div>
					</div>
				</div>
				<?php endforeach; ?>

				<?php foreach ($desira as $b) : ?>
				<div class="col-lg-4 col-md-6 special-grid desira">
					<div class="gallery-single fix">
						<img src="<?php echo base_url() . 'assets/images/desira/' . $b->foto_produk ?>" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4><?php echo $b->nama_produk?></h4>
							<p><?php echo character_limiter($b->deskripsi_produk)?></p>
							<h5> Rp<?php echo number_format($b->harga_produk,0,',','.')?></h5>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				
				<?php foreach ($olaten as $c) : ?>
				<div class="col-lg-4 col-md-6 special-grid olaten">
					<div class="gallery-single fix">
						<img src="<?php echo base_url() . 'assets/images/olaten/' . $c->foto_produk ?>" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4><?php echo $c->nama_produk?></h4>
							<p><?php echo character_limiter($c->deskripsi_produk)?></p>
							<h5> Rp<?php echo number_format($c->harga_produk,0,',','.')?></h5>
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
							<p><?php echo character_limiter($d->deskripsi_produk)?></p>
							<h5> Rp<?php echo number_format($d->harga_produk,0,',','.')?></h5>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				
				<?php foreach ($tobo as $e) : ?>
				<div class="col-lg-4 col-md-6 special-grid tobo">
					<div class="gallery-single fix">
						<img src="<?php echo base_url() . 'assets/images/tobokito/' . $e->foto_produk ?>" class="img-fluid" alt="Image">
						<div class="why-text">
						<h4><?php echo $e->nama_produk?></h4>
							<p><?php echo character_limiter($e->deskripsi_produk)?></p>
							<h5> Rp<?php echo number_format($e->harga_produk,0,',','.')?></h5>
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
	