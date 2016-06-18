
<?
	$orderID= isset($_GET['orderID']) ? $_GET['orderID'] : '';
	if($orderID){

		$dagiao=$_GET['dagiao'];
		$sql="update Orders set dagiao='$dagiao' where orderID='$orderID'";
		mysql_query($sql) or die(mysql_error());
	}
?>
	<div class="container">
		
		<div class="row">
			<div class="col-md-12"><!--Main content-->
				<div class="title-bg">
					<div class="title">Order cuar khach hang chua hoan thanh!</div>
					
				</div>
				<ul class="gridlist">

<?	
	$sql_03= "SELECT * 
				FROM
				   	Orders 
				    INNER JOIN product ON Orders.proID = product.proID
				Where dagiao = 0 and userid=0";
	$kq_03=mysql_query($sql_03);
	$rowsan=mysql_fetch_array($kq_03);
	if (mysql_num_rows($kq_03)!=0 ){
	
		$kq_03=mysql_query($sql_03) or die(mysql_error());
		while($rowsan=mysql_fetch_array($kq_03)){
?>
	<section>
					<li class="gridlist-inner">
						<div class="white">
						<div class="row clearfix">
							<div class="col-md-4">
								<div class="pr-img">
									<div class="hot"></div>
									<a ><img src="images/<?=$rowsan['proimages']?>" alt="" class="img-responsive"/></a>
								</div>
							</div> 
						<div class="form-group dob">
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Name: </label>
									<div class="col-sm-2">
										<span style="color: #f42c2c;">  <b><?=$rowsan['username'] ?></b></span>						
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Phone: </label>
									<div class="col-sm-2">
										<span style="color: #f42c2c;">  <b><?=$rowsan['sdt'] ?></b></span>		
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Addr: </label>
									<div class="col-sm-3">
										<span style="color: #81ed15;">  <b><?=$rowsan['address'] ?></b></span>							
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">ProID: </label>
									<div class="col-sm-2">
										<span style="color: #4949fc;">  <b><?=$rowsan['proID'] ?></b></span>		
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>		
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Quati: </label>
									<div class="col-sm-2">
										<span style="color: #4949fc;">  <b><?=$rowsan['numberse'] ?></b></span>
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>		
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Date: </label>
									<div class="col-sm-2">
										<span style="color: #f42c2c;">  <b><?=$rowsan['yeucaudate'] ?></b></span>	
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
							</div>
						</div>
							<div class="col-md-6">
								<a href="?dieuhuong=adminorder&orderID=<?=$rowsan['orderID'] ?>&dagiao=1"> <span class="btn btn-default btn-red btn-sm" >Da giao</span></a>
							</div>
						</div>
						</div>
						<div class="gridlist-act">
							<div class="clearfix"></div>
						</div>
					</li>
			</section>				
	<?
		}
	}
	else{
	}
?>		
	
<?
	$sql= "SELECT * 
				FROM
				   	Orders 
				    INNER JOIN product ON Orders.proID = product.proID
				    INNER JOIN dcship ON Orders.userid = dcship.userid
				Where dagiao = 0 ";
	$kq=mysql_query($sql);
	$rowsanpham=mysql_fetch_array($kq);
		if(mysql_num_rows($kq)!=0){
		$kq=mysql_query($sql) or die(mysql_error());
		while($rowsanpham=mysql_fetch_array($kq)){
?>

	<section>
					<li class="gridlist-inner">
						<div class="white">
						<div class="row clearfix">
							<div class="col-md-4">
								<div class="pr-img">
									<div class="hot"></div>
									<a ><img src="images/<?=$rowsanpham['proimages']?>" alt="" class="img-responsive"/></a>
								</div>
							</div> 
						<div class="form-group dob">
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Name: </label>
									<div class="col-sm-2">
										<span style="color: #f42c2c;">  <b><?=$rowsanpham['username'] ?></b></span>						
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Phone: </label>
									<div class="col-sm-2">
										<span style="color: #f42c2c;">  <b><?=$rowsanpham['modi'] ?></b></span>		
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Addr: </label>
									<div class="col-sm-3">
										<span style="color: #81ed15;">  <b><?=$rowsanpham['addr'] ?></b></span>							
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">ProID: </label>
									<div class="col-sm-2">
										<span style="color: #4949fc;">  <b><?=$rowsanpham['proID'] ?></b></span>
								
										
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>	
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Quati: </label>
									<div class="col-sm-2">
										<span style="color: #4949fc;">  <b><?=$rowsanpham['numberse'] ?></b></span>
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Date: </label>
									<div class="col-sm-2">
										<span style="color: #f42c2c;">  <b><?=$rowsanpham['yeucau'] ?></b></span>	
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								
							</div>
						</div>

							<div class="col-md-6">

								<a href="?dieuhuong=adminorder&orderID=<?=$rowsanpham['orderID'] ?>&dagiao=1"> <span class="btn btn-default btn-red btn-sm" >Da giao</span></a>
							</div>
						</div>
						</div>
						<div class="gridlist-act">
							<div class="clearfix"></div>
						</div>
					</li>

			</section>
					
<?
}
	}
?>							
				</ul>
	
			</div>

		</div>
		<div class="spacer"></div>
	</div>