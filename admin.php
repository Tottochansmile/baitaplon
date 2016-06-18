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
							<a id="reg" class="btn btn-default btn-dark">Welcome <span style="color:red;font-weight:600;"><?php echo $_SESSION['admin']; ?></span>!<span>-o0o-</span>Logout</a>

							<div class="regwrap">
								<div class="row">
									<div class="col-md-12 regform">
										<div class="title-widget-bg">
											<div class="title-widget">Logout</div>

										</div>
										<p>
											Would you like to logout?
										</p>
										<form  role="form">
											<div class="form-group">
												<a href="logout.php">Log Out</a>
											</div>
										</form>
									</div>
									
								</div>
							</div>




							
							<div class="srchwrap">
								
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
								<li><a href="?dieuhuong=adminorder" class="active">Order</a><div class="curve"></div></li>
								
								<li><a href="?dieuhuong=adminproduct">Product</a></li>
								<li><a href="?dieuhuong=user">List Acount</a></li>
								<li><a href="?dieuhuong=producer">Producer</a></li>
								<li class="dropdown">
									<a class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="?dieuhuong=upload">Add Product</a></li>
										<li><a href="?dieuhuong=addproducer">Add Producer</a></li>
									</ul>
								</li>
								
							</ul>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div><!--end main-nav -->
	<div class="container">
		<ul class="small-menu"><!--small-nav -->
			<li><a  class="myacc">My Account</a></li>
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
				
				
				
				
			</div>
			<div class="spacer"></div>
		</div>
	</div><!--footer Widget-->
	




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