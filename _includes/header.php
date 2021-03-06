<?php
@session_start();
if(isset($_SESSION['email'])){
 include('header-member.php');
}
else{


if(isset($_POST['email_login_header'])){
    include('core/core.php');
    $email = $_POST['email_login_header'];
    $pass = md5($_POST['password']);

    $user = User::where('email','=',$email)
        ->where('password','=',$pass)->count();

    if($user >0){
        $user = User::where('email','=',$email)
            ->where('password','=',$pass)->first();
        if($user->active == 0){
            echo '<script>alert("Your account not activated, please check email and active it using given link.")</script>';
        }else{

            $_SESSION['email'] = $email;
            $_SESSION['id_user'] = $user->id;
            $_SESSION['lastname'] = $user->lastname;
            header('location: index-member.php');
            echo '<script>window.location.href = "index-member.php";</script>';
            die();
        }

    }else{
        echo '<script>alert("Login/Password are not corresponding")</script>';
    }
}




?>
<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width; initial-scale=1.0; minimum-scale=1; maximum-scale=1.0; user-scalable=0;"/>
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="images/favicon.ico">



	
		<title>Garnier Malaysia </title>

    	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		<link href="css/yamm.css" rel="stylesheet">  
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/jPushMenu.css">
		<link rel="stylesheet" type="text/css" href="css/customResponsive.css">

		
	</head>
	
	<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left"> 
	    <br><br><br>
	    <div class="col-xs-12">
	    	<span class="serach-text">SEARCH</span><br>
	    	<form class="form-inline">
			  <div class="form-group">
			    <div class="input-group">
			      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Looking for a product ">
			      <div class="input-group-addon"><i class="fa fa-search"></i></div>
			    </div>
			  </div>
			</form>
		</div>
	    <a href="index.php"><i class="fa fa-home fa-2 home"></i> HOME </a>
	    <a href="skin-natural.php" class="main-mobile-menu-item"> GARNIER SKIN NATURALS </a>
	    <ul class="mobile-menu">
           <li>
               <div class="">
                  <ul class="">
	                  <li class=""><span class="dd"><span>By Brands</span></span><br><br></li>
	                   <li class="warna"><a href="light-complete.php">Light Complete</a></li>
	                   <li class="warna"><a href="sakura-white.php">Sakura White</a></li>
	                   <li class="warna"><a href="duo-clean.php">Duo Clean</a></li>
	                  <li class="warna"><a href="pure-active.php">Pure Active</a></li>
	                  <li class="warna"><a href="aqua-defense.php">Aqua Defense</a></li>
	              
				  </ul>
				  <ul class=""> 
					<li class="">
					<span class="dd"><span>By Skin Needs</span></span><br><br></li>
	                <li class="warna"><a href="skin-natural-skin-need-whitening.php">Whitening</a></li>
	                <li class="warna"><a href="skin-natural-skin-need-acne.php">Anti-Acne</a></li>
	                <li class="warna"><a href="skin-natural-skin-need-hydrating.php">Hydrating</a></li>
				  </ul>
				  <ul class=""> 
                 		<li class=""><span class="dd"><span>By Skin Type</span></span><br><br></li>
	                	<li class="warna"><a href="skin-natural-skin-normal.php">Normal</a></li>
	                 	<li class="warna"><a href="skin-natural-skin-dry.php">Dry</a></li>
	                 	<li class="warna"><a href="skin-natural-skin-sensitive.php">Sensitive</a></li>
	                 	<li class="warna"><a href="skin-natural-skin-combination.php">Combination</a></li>
				  </ul>
				  <ul class=""> 
                 		<li class=""><span class="dd"><span>Find Your Match</span></span><br><br></li>
						<li class=""><a href="fym-garnier-skin-natural-whitening.php"><img src="images/whitening-megamenu.png"></a></li>
				  </ul>
			   </div>
           </li>
         </ul>
	    <a href="fym-garnier-skin-natural-men.php" class="main-mobile-menu-item">GARNIER MEN</a>
	    <ul class="mobile-menu">
	       <li>
	           <div class="">
	              <ul class="">
	                  <li class=""><span class="dd"><span>By Brands</span></span><br><br></li>
	                  <li class="warna"><a href="oil-control-men.php">Turbo Light Oil Control</a></li>
	                  <li class="warna"><a href="acno-fight.php">Acno Fight</a></li>
	                  <li class="warna"><a href="icy-duo.php">Turbo Light Icy Duo</a></li>
	                  <li class="warna"><a href="turbo-light.php">Turbo Light</a></li> 
				  </ul>
				  <ul class=""> 
					<li class=""><span class="dd"><span>By Skin Needs</span></span><br><br></li>
	                <li class="warna"><a href="gmen-skin-need-whitening.php">Whitening</a></li>
	                <li class="warna"><a href="gmen-skin-need-acne.php">Acne</a></li>
	                
				  </ul>
				  <ul class=""> 
	             		<li class=""><span class="dd"><span>By Skin Type</span></span><br><br></li>
	                	<li class="warna"><a href="gmen-skin-need-normal.php">Normal</a></li>
	                 	<li class="warna"><a href="gmen-skin-need-dry.php">Dry</a></li>
	                 	<li class="warna"><a href="gmen-skin-need-sensitive.php">Oily</a></li>
	                 	<li class="warna"><a href="gmen-skin-need-sensitive.php">Combination</a></li>
				  </ul>
				   <ul class=""> 
	             		<li class=""><span class="dd"><span>Find Your Match</span></span><br><br></li>
						<li class=""><a href="fym-garnier-skin-natural-men.php"><img src="images/black-megamenu.png"></a></li>
				  </ul>
			   </div>
	       </li>
	     </ul>


	    <a href="fym-garnier-skin-natural-hair.php" class="main-mobile-menu-item">HAIR COLOR
	    </a>
	    <ul class="mobile-menu">
           <li>
               <div class="">
                  <ul class="">
	                  <li class=""><span class="dd"><span>By Brands</span></span><br><br></li>
	                  <li class="warna"><a href="colour-naturals.php">Color Naturals</a></li>
	                  <li class="warna"><a href="olia.php">Olia</a></li>
				  </ul>
				  <ul class=""> 
					<li class=""><span class="dd"><span>By Type</span></span><br><br></li>
	                <li class="warna"><a href="permanent.php">Permanent</a></li>
	                <li class="warna"><a href="amonia.php">Ammonia Free</a></li>
				  </ul>
				  <ul class=""> 
                 		<li class="">
                 		<span class="dd"><span>By Color</span></span><br><br></li>
	                	<li class="warna"><a href="black.php">Black</a></li>
	                 	<li class="warna"><a href="brown.php">Brown</a></li>
	                 	<li class="warna"><a href="blonde.php">Blonde</a></li>
	                 	<li class="warna"><a href="red.php">Red</a></li>
	                 	
				  </ul>
				    <ul class=""> 
                 		<li class=""><span class="dd"><span>Find Your Match</span></span><br><br></li>
						<li class=""><a href="fym-garnier-skin-natural-hair.php"><img src="images/hair-megamenu.png"></a></li>
				  </ul>
			   </div>
           </li>
        </ul>
	</nav>


<!-- body -->	
	<body>

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WC8798"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WC8798');</script>
	<!-- End Google Tag Manager -->

<!-- bg-atas -->
		<div class="bg-atas">
<!-- body-bg  -->
			<div class="body-bg">
<!-- container body  -->
				<div class="container-fluid">
<!-- header top -->
					<div class="header">
						<div class="container-fluid">

<!-- @mediaqueiry -->
<div class="row visible-xs ">
	<div class="col-xs-2 visible-xs push-btn">					
		 <div class="menu-ico">
				 <a href="#"><i class=" toggle-menu menu-left push-body jPushMenuBtn pull-left menu-ico-position"><img src="images/btn-menu.png"></i>
				 </a>
		</div>
	</div>



	
	<div class="col-xs-8  visible-xs">
		<div class="logo-kecik center">
			<a href="index.php"><img src="images/logo-garnier.png" ></a>
		</div>
	</div>
	<div class="col-xs-2">
		<div class="pic-res visible-xs">
			<img src="images/btn-mya.png">
		</div>
	</div>
</div>
<!-- end of @mediaqueiry -->
						<div class="row">

<!-- logo -->
							<div class="col-md-3 col-xs-3 ">
								<div class="logo hidden-xs ">
									<a href="index.php"><img src="images/logo-garnier.png" width="195px"></a>
								</div>
							</div>
<!-- End of logo -->

							
<!-- Sign in / Create account  -->
							<div class="col-md-3 col-xs-3">
								<div class="bar-signin hidden-xs ">
									<a data-toggle="modal" data-target="#SignIn">Sign in</a> / <a href="register.php">Create an account
									</a>
								</div>
									
							</div>

<!-- POPUP -->
							<div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								  <div class="modal-dialog">
									    <div class="modal-content">
										      <div class="modal-header">
										        <h1 class="popup-signin">Sign in</h1>
										      </div>
											      <div class="modal-body">
											         <form action="" method="POST">
											        <div class="col-md-6">
											        	<h4>I HAVE A GARNIER ACCOUNT</h4>


											        	<div class="form-group">
											        		<input type="email" class="form-control" name="email_login_header" placeholder="Your email">
											        	</div>
											        	<div class="form-group">
											        		<input type="password" class="form-control" name="password" placeholder="*******">
											        	</div>
											        	<div class="row">
											        		<div class="col-xs-6">
											        			<a href="forgot-password.php">Forgot password?</a>
											        		</div>
											        		<button type="submit" class="btn btn-primary btn-lg btn-confirm"> &#9656;  Login
															</button>
											        		<div class="col-xs-6">
											        			
											        		</div>
											        	</div>
											        </div>

                                                        </form>
											        <div class="col-md-6"><h4>I DON'T HAVE A GARNIER ACCOUNT</h4>
											        	Create an account and get access to exclusive and personalized privileges: E-coupons, new product pre-tests and services...
											        	<br><br><br>
											        	<a type="button" class="btn btn-primary btn-lg btn-confirm" href="index.php"> &#9656;  Register Now
														</a>
											        </div>
										      </div>
									      <div class="modal-footer">
									      </div>
									    </div>
								  </div>
							</div>



<!-- End of Sign in / Create account -->

<!-- Header Right -->
							<div class="col-md-6 col-xs-6 header-right">
									
<!-- FAQ 
								<div class="row">
									<div class="col-md-12 faq">

											<span class="multilanguage-btn">
												<a href="#"  target="_blank" >English</a> / <a href="#"  target="_blank" >Bahasa</a>
											</span>
										

											<span class="faq-btn">
											
											<a href="#"  target="_blank" >FAQ</a> / <a href="#"  target="_blank" >About Garnier</a>
											</span>
									
									</div>
								</div>
 Bahasa / About -->

<!-- Search -->
								<div class="row">

									<div class="col-md-12 search hidden-xs ">
										<form class="form-inline">  
											<label for="search">Search</label>
											<input type="text" class="form-control input-xs" id="search" placeholder="Look for a product">
											<button type="submit" class="btn btn-inverse btn-hijau btn-xs"><i class="fa fa-search"></i></button>
										</form>
									</div>
								</div>
<!-- End of Search -->
							</div>
<!-- End of Header Right -->
						</div>

					</div>
				</div>
<!-- End of header top -->
			





<!-- Header Bottom -->
			<div class="row">
<!-- Main Menu -->
				<div class="col-md-8 col-sm-8 bg-bawah hidden-xs ">
					<nav class="navbar yamm navbar-default hidden-xs " role="navigation">
				     <ul class="nav navbar-nav">
				     	
				     	<li ><a href="index.php"><i class="fa fa-home fa-2 home"></i></a></li>

<!-- Garnier Skin Natural -->
				       <li class="dropdown">
				         <a href="skin-natural.php" class="dropdown-toggle navb" >Garnier Skin Naturals</a>
					         <ul class="dropdown-menu">
					           <li>
					               <div class="yamm-content">
					                  <ul class="col-sm-3 list-unstyled dash-right">
						                  <li class="drop-header"><span class="dd"><span>By Brands</span></span><br><br></li>
						                   <li class="warna"><a href="light-complete.php">Light Complete</a></li>
						                   <li class="warna"><a href="sakura-white.php">Sakura White</a></li>
						                   <li class="warna"><a href="duo-clean.php">Duo Clean</a></li>
						                  <li class="warna"><a href="pure-active.php">Pure Active</a></li>
						                  <li class="warna"><a href="aqua-defense.php">Aqua Defense</a></li>
						              
									  </ul>
									  <ul class="col-sm-3 list-unstyled dash-right"> 
										<li class="drop-header">
										<span class="dd"><span>By Skin Needs</span></span><br><br></li>
						                <li class="warna"><a href="skin-natural-skin-need-whitening.php">Whitening</a></li>
						                <li class="warna"><a href="skin-natural-skin-need-acne.php">Anti-Acne</a></li>
						                <li class="warna"><a href="skin-natural-skin-need-hydrating.php">Hydrating</a></li>
									  </ul>
									  <ul class="col-sm-3 list-unstyled dash-right"> 
					                 		<li class="drop-header"><span class="dd"><span>By Skin Type</span></span><br><br></li>
						                	<li class="warna"><a href="skin-natural-skin-normal.php">Normal</a></li>
						                 	<li class="warna"><a href="skin-natural-skin-dry.php">Dry</a></li>
						                 	<li class="warna"><a href="skin-natural-skin-sensitive.php">Sensitive</a></li>
						                 	<li class="warna"><a href="skin-natural-skin-combination.php">Combination</a></li>
									  </ul>
									  <ul class="col-sm-3 list-unstyled menu-item-hide"> 
					                 		<li class="drop-header"><span class="dd"><span>Find Your Match</span></span><br><br></li>
											<li class=""><a href="fym-garnier-skin-natural-whitening.php"><img src="images/whitening-megamenu.png"></a></li>
									  </ul>
								   </div>
					           </li>
					         </ul>
				       </li>
<!-- Garnier Men -->
				       <li class="dropdown">
				         <a href="fym-garnier-skin-natural-men.php" class="dropdown-toggle" >Garnier Men</a>
					         <ul class="dropdown-menu">
					           <li>
					               <div class="yamm-content">
					                  <ul class="col-sm-3 list-unstyled dash-right">
						                  <li class="drop-header"><span class="dd"><span>By Brands</span></span><br><br></li>
						                  <li class="warna"><a href="oil-control-men.php">Turbo Light Oil Control</a></li>
						                  <li class="warna"><a href="acno-fight.php">Acno Fight</a></li>
						                  <li class="warna"><a href="icy-duo.php">Turbo Light Icy Duo</a></li>
						                  <li class="warna"><a href="turbo-light.php">Turbo Light</a></li> 
									  </ul>
									  <ul class="col-sm-3 list-unstyled dash-right"> 
										<li class="drop-header"><span class="dd"><span>By Skin Needs</span></span><br><br></li>
						                <li class="warna"><a href="gmen-skin-need-whitening.php">Whitening</a></li>
						                <li class="warna"><a href="gmen-skin-need-acne.php">Acne</a></li>
						                
									  </ul>
									  <ul class="col-sm-3 list-unstyled dash-right"> 
					                 		<li class="drop-header"><span class="dd"><span>By Skin Type</span></span><br><br></li>
						                	<li class="warna"><a href="gmen-skin-need-normal.php">Normal</a></li>
						                 	<li class="warna"><a href="gmen-skin-need-dry.php">Dry</a></li>
						                 	<li class="warna"><a href="gmen-skin-need-sensitive.php">Oily</a></li>
						                 	<li class="warna"><a href="gmen-skin-need-sensitive.php">Combination</a></li>
									  </ul>
									   <ul class="col-sm-3 list-unstyled menu-item-hide"> 
					                 		<li class="drop-header"><span class="dd"><span>Find Your Match</span></span><br><br></li>
											<li class=""><a href="fym-garnier-skin-natural-men.php"><img src="images/black-megamenu.png"></a></li>
									  </ul>
								   </div>
					           </li>
					         </ul>
				       </li>
<!-- Hair Colour -->
				       <li class="dropdown">
				         <a href="fym-garnier-skin-natural-hair.php" class="dropdown-toggle" >Hair Color</a>
					         <ul class="dropdown-menu">
					           <li>
					               <div class="yamm-content">
					                  <ul class="col-sm-3 list-unstyled dash-right dash-right">
						                  <li class="drop-header"><span class="dd"><span>By Brands</span></span><br><br></li>
						                  <li class="warna"><a href="colour-naturals.php">Color Naturals</a></li>
						                  <li class="warna"><a href="olia.php">Olia</a></li>
									  </ul>
									  <ul class="col-sm-3 list-unstyled dash-right"> 
										<li class="drop-header"><span class="dd"><span>By Type</span></span><br><br></li>
						                <li class="warna"><a href="permanent.php">Permanent</a></li>
						                <li class="warna"><a href="amonia.php">Ammonia Free</a></li>
									  </ul>
									  <ul class="col-sm-3 list-unstyled dash-right"> 
					                 		<li class="drop-header">
					                 		<span class="dd"><span>By Color</span></span><br><br></li>
						                	<li class="warna"><a href="black.php">Black</a></li>
						                 	<li class="warna"><a href="brown.php">Brown</a></li>
						                 	<li class="warna"><a href="blonde.php">Blonde</a></li>
						                 	<li class="warna"><a href="red.php">Red</a></li>
						                 	
									  </ul>
									    <ul class="col-sm-3 list-unstyled menu-item-hide"> 
					                 		<li class="drop-header"><span class="dd"><span>Find Your Match</span></span><br><br></li>
											<li class=""><a href="fym-garnier-skin-natural-hair.php"><img src="images/hair-megamenu.png"></a></li>
									  </ul>
								   </div>
					           </li>
					         </ul>
				       </li>
				     </ul>
				</nav>

				</div>
<!-- End of Main Menu -->

<!-- Sign Up Newsletter -->
					<div class="col-md-4 col-sm-4 newsletter hidden-xs">Sign up to receive updates from Garnier<br>
						<form class="form-inline">  
							<input type="text" class="form-control input-xs" id="search" placeholder="Your email address">
							<a href="newsletter.php" class="btn btn-inverse btn-grey btn-xs"> > SIGN UP NOW
							</a>
						</form>
					</div>
<!-- End of Sign Up Newsletter -->
			</div>
		</div>
<!-- End of container body -->
	</div>

<!-- END OF HEADER################ -->

<?php } ?>
