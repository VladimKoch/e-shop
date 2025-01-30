<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$page_title?>| E-Shopper</title>
    <link href="<?=ESHOP?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=ESHOP?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=ESHOP?>css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=ESHOP?>css/price-range.css" rel="stylesheet">
    <link href="<?=ESHOP?>css/animate.css" rel="stylesheet">
	<link href="<?=ESHOP?>css/main.css" rel="stylesheet">
	<link href="<?=ESHOP?>css/responsive.css" rel="stylesheet">
	<!-- <link href="<?=ESHOP?>css/solid.min.css" rel="stylesheet"> -->
	<!-- <link href="<?=ESHOP?>css/brands.min.css" rel="stylesheet"> -->
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       

	

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=ESHOP?>images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=ESHOP?>images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=ESHOP?>images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=ESHOP?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<?php if(isset($_SESSION['url_address'])):?>
									<li><a href="#"><i class="fa fa-envelope"></i> <?=$_SESSION['email'];?></a></li>
									<li><a href="#"><i class="fa fa-user"></i> <?=$_SESSION['name']?></a></li>
								<?php else: ?>
										<li><a href="#"><i class="fa fa-envelope"></i> info@gmail.com</a></li>
								<?php endif;?>
								<?php if(isset($_SESSION['rank']) && $_SESSION['rank']==="admin"):?>
									<li><a href="<?=PATH?>admin"><i class="fa fa-wrench"></i>  Admin Tools </a></li>
								<?php endif;?>
								</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="../app/views/home.view.php"><img src="<?=ESHOP?>images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if(isset($_SESSION['url_address'])):?>
								<li><a href="<?=PATH?>account"><i class="fa fa-user"></i> Account</a></li>
								<?php endif;?>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="<?=PATH?>checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?=PATH?>cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php if(isset($_SESSION['url_address'])):?>
									<li><a href="<?=PATH?>logout"><i class="fa fa-arrow-right"></i> Logout</a></li>
								<?php else:?>
									<li><a href="<?=PATH?>login"><i class="fa fa-lock"></i> Login</a></li>
								<?php endif;?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?=PATH?>home" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=PATH?>shop">Products</a></li>
										<li><a href="<?=PATH?>product_details">Product Details</a></li> 
										<li><a href="<?=PATH?>checkout">Checkout</a></li> 
										<li><a href="<?=PATH?>cart">Cart</a></li> 
										<li><a href="<?=PATH?>login">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog">Blog List</a></li>
										<li><a href="blog_single">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="<?=PATH?>404">404</a></li>
								<li><a href="<?=PATH?>contact_us">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->