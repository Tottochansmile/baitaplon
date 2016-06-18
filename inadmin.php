
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <title>Shopping Theme</title>
	
	<link rel="shortcut icon" href="images/fav.png">
	
    <!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='font-awesome.css' rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
    <link href="bootstrap.min.css" rel="stylesheet">
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css" />
	<!-- fancy Style -->
	<link rel="stylesheet" type="text/css" href="jquery.fancybox.css?v=2.1.5" media="screen" />
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
						
					</div>
				
				</div>
			</div>
		</div>
	</div><!--end main-nav -->




<div class="container">
<br><br><br><br>


		
			
			<div class=".col-xs-12 .col-md-8 al-cus">



								<div class="row" style="background:url(images/A0101.jpg.jpg);">
									<div class="col-md-6 regform" >
								
										<div class="title-widget-bg">
											<div class="title-widget">Login for Admin</div>
											
											
										</div>
										<form action="" method="post" role="form">
										   <p>
											 Login? If you already have an account or register!
											</p>
					                      <div class="form-group">

					                        <input autofocus required type="text" name="admin" class="form-control" id="admin" placeholder="Username">
					                      </div>
					                      <div class="form-group">
					                        <input required type="password" class="form-control" id="psw" name="pass" placeholder="Password">
					                      </div>
					                      <div class="checkbox">
					                        <label><input type="checkbox" value="" checked>Remember me</label>
					                      </div>
					                      <div class="form-group">
					                        <button type="submit" name="ad" class="btn btn-default btn-red btn-sm">Sign In</button>
					                        
					                      </div>
					                    </form>


<?php
 require('db.php');
 session_start();
 // If form submitted, insert values into the database.
 if (isset($_POST['admin'])){
 $admin = $_POST['admin'];
 $pass = $_POST['pass'];
 $admin = stripslashes($admin);
 $admin = mysql_real_escape_string($admin);
 $pass = stripslashes($pass);
 $pass = mysql_real_escape_string($pass);
 //Checking is user existing in the database or not
 $sql="SELECT * FROM admin WHERE admin='$admin' and pass='$pass'";
 $result=mysql_query($sql);
 $rows=mysql_num_rows($result);
// nếu tài khoản trùng khớp thì sẽ trả về giá trị 1 cho biến $count

 if($rows==1){
 $_SESSION['admin'] = $admin;
 	echo"<script>alert('Bạn đã đăng nhập thành công!'); location='admin.php?dieuhuong=adminorder';</script>";
 	// Redirect user to index.php
 }else{
 	echo"<script>alert('Ten hoac mat khau sai. Vui long dang nhap lai!');</script>";
 	
 }
 }
?>







					            
									</div>
									
								</div>
			</div>
		


		
		<div class="spacer"></div>
	</div>



	<br><br><br><br><br><br>

	
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
    <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
	
	<!-- custom js -->
    <script src="js/shop.js"></script>
	</div>
  </body>
</html>
