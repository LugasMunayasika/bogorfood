<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title><?php echo $title?></title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?=base_url('assets');?>/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?=base_url('assets');?>/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets');?>/css/bootstrap.min.css">    
	<!-- Site CSS -->
    <link rel="stylesheet" href="<?=base_url('assets');?>/css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?=base_url('assets');?>/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=base_url('assets');?>/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="<?=base_url()?>home">
					<img src="<?=base_url('assets');?>/images/logobogorfood.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li <?= $this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : '' ?>>
							<a class="nav-link" href="<?=base_url()?>index.php/home">Home</a></li>
						<li class="nav-item dropdown <?= $this->uri->segment(1) == 'menu' || $this->uri->segment(1) == 'desira' || $this->uri->segment(1) == 'olaten' || $this->uri->segment(1) == 'rangginang' || $this->uri->segment(1) == 'tobo' ? 'menu-open' : ''?>">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">UMKM</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class = "dropdown-item"<?= $this->uri->segment(1) == 'menu' ? 
              							'dropdown-item style="background-color: #189034"'  : ''?> href="<?=base_url()?>menu">UMKM Dapur Bujalu</a>
								<a class = "dropdown-item"<?= $this->uri->segment(1) == 'desira' ? 
              							'dropdown-item style="background-color: #189034"'  : ''?> href="<?=base_url()?>desira">UMKM Desira</a>
								<a class = "dropdown-item"<?= $this->uri->segment(1) == 'olaten' ? 
              							'dropdown-item style="background-color: #189034"'  : ''?> href="<?=base_url()?>olaten">UMKM Olaten</a>
								<a class = "dropdown-item"<?= $this->uri->segment(1) == 'rangginang' ? 
              							'dropdown-item style="background-color: #189034"'  : ''?> href="<?=base_url()?>rangginang">UMKM Rangginang Ceu Tuti</a>
								<a class = "dropdown-item"<?= $this->uri->segment(1) == 'tobo' ? 
              							'dropdown-item style="background-color: #189034"'  : ''?> href="<?=base_url()?>tobo">UMKM Tobo Kito</a>
							</div>
						</li>
						<li <?= $this->uri->segment(1) == 'about' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : '' ?>><a class="nav-link" href="<?=base_url()?>about">About</a></li>
						<li <?= $this->uri->segment(1) == 'contact' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : '' ?>><a class="nav-link" href="<?=base_url()?>contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!-- End header -->