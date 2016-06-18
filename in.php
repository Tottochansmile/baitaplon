<?php 
	session_start();
	include"db.php";
?>

<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Theme</title>

    <!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='font-awesome.css' rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css" />
	
	<!-- owl Style -->
	<link rel="stylesheet" href="owl.carousel.css" />
	<link rel="stylesheet" href="owl.transitions.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	
	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>

  <div id="wrapper">
	
	<div class="header"><!--Header -->
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-md-4 main-logo">
					<a href="index.html"><img src="images/logo.png" alt="logo" class="logo img-responsive" /></a>
				</div>
				<div class="col-md-8">
					<div class="pushright">
						<div class="top">
							<a id="reg" class="btn btn-default btn-dark">Login<span>-- Or --</span>Register</a>
							<div class="regwrap">
								<div class="row">
									<div class="col-md-6 regform">
										<div class="title-widget-bg">
											<div class="title-widget">Login</div>
										</div>
										<form action="login.php" method="post" role="form">
					                      <div class="form-group">
					                        <input autofocus required type="text" name="username" class="form-control" id="username" placeholder="Username">
					                      </div>
					                      <div class="form-group">
					                        <input required type="password" class="form-control" id="psw" name="password" placeholder="Password">
					                      </div>
					                      <div class="checkbox">
					                        <label><input type="checkbox" value="" checked>Remember me</label>
					                      </div>
					                      <div class="form-group">
					                        <button type="submit" name="login" class="btn btn-default btn-red btn-sm">Log In</button>
					                 
					                      </div>
					                    </form>
									</div>
									<div class="col-md-6">
										<div class="title-widget-bg">
											<div class="title-widget">Register</div>
										</div>
										<p>
											New User? By creating an account you be able to shop faster, be up to date on an order's status...
										</p>
										<button type ="button" class="btn btn-default btn-yellow" id= "myBtn">Register Now</button>

										<div class="modal fade" id="myModal" role="dialog">
    										<div class="modal-dialog">
    
     										 <!-- Modal content-->
     											 <div class="modal-content">
        											<div class="modal-header" style="padding:35px 50px;">
          											<button type="button" class="close" data-dismiss="modal">&times;</button>
          											<h4><span class="glyphicon glyphicon-lock"></span> Sign up</h4>
        											</div>
        											<div class="modal-body" style="padding:40px 50px;">
        											  <form  action="signup.php" method="post" role="form">

            											                        <div class="form-group">
																	              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
																	              <input autofocus required type="text" name="username" class="form-control" id="username" placeholder="Enter name">
																	            </div>
																	            <div class="form-group">
																	              <label for="email"><span class="glyphicon glyphicon-mail"></span> Email</label>
																	              <input autofocus required type="text" name="email" class="form-control" id="email" placeholder="Enter email">
																	            </div>
																	            <div class="form-group">
																	              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
																	              <input required type="password" class="form-control" id="psw" name="password" placeholder="Enter password">
																	            </div>
																	            <div class="checkbox">
																	              <label><input type="checkbox" value="" checked>Remember me</label>
																	            </div>
																	              <button type="submit" class="btn btn-success btn-block" value="Login" name="login"><span class="glyphicon glyphicon-off"></span> Sign up</button>
        											  </form>
        											</div>
        											<div class="modal-footer">
          												<button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          
        											</div>
      											</div>
      
    										</div>
  										</div> 








									</div>
								</div>
							</div>




							<div class="srch-wrap">
								<a id="srch" class="btn btn-default btn-search"><i class="fa fa-search"></i></a>
							</div>
							<div class="srchwrap">
								<div class="row">
									<div class="col-md-12">
									

										<form class="form-horizontal" action="?dieuhuong=search" method="post" role="form">
											<div class="form-group">
												<input for="search" type="submit" name="search" value="Search" >
												<div class="col-sm-10">
													<input type="text" class="form-control" id="search" list="productlist" name="tk">
														<datalist id="productlist">
												        	<?
												            	$sql_sp="select * from product a join hang b on a.hangID= b.hangID where a.trangthaisanpham=1";
																$kq_sp=mysql_query($sql_sp);
																while($rowsanpham=mysql_fetch_array($kq_sp)){
																?>
																	<option><?=$rowsanpham['proname']?></option>
																<?
																}
															?>
												        </datalist>
												</div>
											</div>
										</form>


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="dashed"></div>
	</div><!--Header -->





	<div class="main-nav"><!--end main-nav -->
		<div class="navbar navbar-default navbar-static-top">
			<div class="container">
				<div class="row">
					<div class="col-md-10">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li><a href="?dieuhuong=home" class="active">Home</a><div class="curve"></div></li>
								
								<li><a href="?dieuhuong=product">Product</a></li>
								<li><a href="?dieuhuong=new">News</a></li>

								<li><a href="?dieuhuong=about">About</a></li>
								
								<li><a href="?dieuhuong=contact">Contact</a></li>
							</ul>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div><!--end main-nav -->
	<div class="container">
		<ul class="small-menu"><!--small-nav -->
			
		</ul><!--small-nav -->
		<div class="clearfix"></div>
		<div class="lines"></div>
	</div>
	

<article>
	<?php include"navigate.php";?>
</article>
			






<br><br><br>
	<div class="f-widget"><!--khong lien quan gi nua footer Widget-->
		<div class="container">
			<div class="row">
				<div class="col-md-4"><!--footer twitter widget-->
					<div class="title-widget-bg">
						<div class="title-widget">Twitter Updates</div>
					</div>
					<ul class="tweets">
						<li>Check out this great #themeforest item for you
						'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
						<span>2 hours ago</span></li>
						<li class="lastone">Check out this great #themeforest item for you
						'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
						<span>2 hours ago</span></li>
					</ul>
					<div class="clearfix"></div>
					
				</div><!--footer twitter widget-->
				<div class="col-md-4"><!--footer newsletter widget-->
					<div class="title-widget-bg">
						<div class="title-widget">Newsletter Signup</div>
					</div>
					<div class="newsletter">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
						<form role="form">
							<div class="form-group">
								<a href="#" class="btn btn-default btn-follow"><i class="fa fa-twitter fa-2x"></i><div>Follow us on twitter</div></a>
							</div>
						</form>
					</div>
				</div><!--footer newsletter widget-->
				<div class="col-md-4"><!--footer contact widget-->
					<div class="title-widget-bg">
						<div class="title-widget-cursive">Shopping</div>
					</div>
					<ul class="contact-widget">
						<li class="fphone">+387 123 456, +387 123 456 <br /> +387 123 456</li>
						<li class="fmobile">+387-123-456-1<br />+387-123-456-2</li>
						<li class="fmail lastone">your@email.com<br />customer.care@mail.com</li>
					</ul>
				</div><!--footer contact widget-->
			</div>
			<div class="spacer"></div>
		</div>
	</div><!--footer Widget-->
	<div class="footer"><!--footer-->
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<ul class="footermenu"><!--footer nav-->
						
					</ul><!--footer nav-->
					<div class="f-credit">&copy;All rights reserved by <a href="#">yoursite.com</a></div>
					<a href=""><div class="payment visa"></div></a>
					<a href=""><div class="payment paypal"></div></a>
					<a href=""><div class="payment mc"></div></a>
					<a href=""><div class="payment nh"></div></a>
				</div>
				<div class="col-md-3"><!--footer Share-->
					<div class="followon">Follow us on</div>
					<div class="fsoc">
						<a href="http://twitter.com/minimalthemes" class="ftwitter">twitter</a>
						<a href="http://www.facebook.com/pages/Minimal-Themes/264056723661265" class="ffacebook">facebook</a>
						<a href="#" class="fflickr">flickr</a>
						<a href="#" class="ffeed">feed</a>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div><!--footer Share-->
			</div>
		</div>
	</div><!--footer-->



	<script>
	$(document).ready(function(){
    	$("#myBtn").click(function(){
        	$("#myModal").modal();
    	});
	});
	</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- map -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	<script type="text/javascript" src="js/jquery.ui.map.js"></script>
	<script type="text/javascript" src="js/demo.js"></script>
	
	<!-- owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
	
	<!-- rating -->
	<script src="js/jquery.raty.js"></script>
	<script src="js/labs.js" type="text/javascript"></script>
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
	
	<!-- fancybox -->
    <script type="text/javascript" src="js/jquery.fancybox.js"></script>
	
	<!-- custom js -->
    <script src="js/shop.js"></script>
	</div>
  </body>
</html>