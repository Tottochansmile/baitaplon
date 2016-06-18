 <style>
.thanhcuon{
height:150px;
width:670px;
overflow:scroll;
overflow-x: hidden;
}
</style>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread">Home &rsaquo;Product &rsaquo; Sanpham </div>
							<div class="bigtitle">Product & Order</div>
						</div>
						<div class="col-md-3 col-md-offset-5">
							
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>

<?
	$proID=$_GET['proID'];
	$sql="select * from hang a join product b on a.hangID=b.hangID where proID= '$proID'";
	$kq=mysql_query($sql);
	$rowsanpham=mysql_fetch_array($kq);
?>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title-widget-cursive" style="color: #ff5656;">  <?=$rowsanpham['proname']?></div>
				</div>

				
				<div class="row">
					<div class="col-md-6">
						<div class="dt-img">
							
							<div class="detpricetag" style="background-color: #7CFC00; "><div class="inner" style="background-color: #7CFC00; ">$<?=$rowsanpham['giapro']?></div></div>
							<a class="fancybox" href="images/<?=$rowsanpham['proimages']?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images/<?=$rowsanpham['proimages']?>" alt="" class="img-responsive" /></a>
						</div>
						<div class="thumb-img">
							<a class="fancybox" href="images/<?=$rowsanpham['proimages']?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images/<?=$rowsanpham['proimages']?>" alt="" class="img-responsive" /></a>
						</div>
						<div class="thumb-img">
							<a class="fancybox" href="images/<?=$rowsanpham['proimages']?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images/<?=$rowsanpham['proimages']?>" alt="" class="img-responsive" /></a>
						</div>
						<div class="thumb-img">
							<a class="fancybox" href="images/<?=$rowsanpham['proimages']?>" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="images/<?=$rowsanpham['proimages']?>" alt="" class="img-responsive" /></a>
						</div>
					</div>
					<div class="col-md-6 det-desc">
						
<?
	$loaisp=$rowsanpham['loai'];
	if($loaisp=='sale'){
?>
							<div class="infospan">Ma san pham <span><?=$rowsanpham['proID']?></span></div>
							<div class="infospan">Hang san xuat <span><?=$rowsanpham['tenhang']?></span></div>
							<div class="infospan">Tinh trang <span><?=$rowsanpham['loai']?></span></div>
							<div class="infospan">Gia chua sale <span><?=$rowsanpham['giacu']?></span></div>
							<div class="infospan">Gia san pham <span><?=$rowsanpham['giapro']?></span></div>
							<div class="infospan">So luong <span><?=$rowsanpham['trangthaisanpham']?></span></div>
<?

	}else if ($loaisp=='new') {

		# code...
?>

							<div class="infospan">Ma san pham <span><?=$rowsanpham['proID']?></span></div>
							<div class="infospan">Hang san xuat <span><?=$rowsanpham['tenhang']?></span></div>
							<div class="infospan">Tinh trang <span><?=$rowsanpham['loai']?></span></div>
							<div class="infospan">Gia san pham <span><?=$rowsanpham['giapro']?></span></div>
							<div class="infospan">So luong <span><?=$rowsanpham['trangthaisanpham']?></span></div>
<?
	}else{
?>
							<div class="infospan">Ma san pham <span><?=$rowsanpham['proID']?></span></div>
							<div class="infospan">Hang san xuat <span><?=$rowsanpham['tenhang']?></span></div>
							<div class="infospan">Tinh trang <span>Dang ban</span></div>
							<div class="infospan">Gia san pham <span><?=$rowsanpham['giapro']?></span></div>
							<div class="infospan">So luong <span><?=$rowsanpham['trangthaisanpham']?></span></div>


<?
}
?>
							<div class="average">
							<form role="form">
							<div class="form-group" >
								<div class="rate"><span class="lbl"></span>
								</div>
								<div class="starwrap">
									
								</div>
								<div class="clearfix"></div>
								
							</div>
							</form>
							</div>
<script>
function show(val) {
    document.getElementById("sum").innerHTML = val*<?=$rowsanpham['giapro']?>;
    document.getElementById("Total").value = val*<?=$rowsanpham['giapro']?>;
    }
</script>

<?	//Neu khach hang chua dang nhap
	$hangID=$rowsanpham['hangID'];
	if(!isset($_SESSION['username'])){
?>
						<b style="color: #00ff00;"> Hãy đăng nhập để dử dụng nhiều dịch vụ hơn!</b>
							<form class="form-horizontal ava" action="" method="post" role="form">
								<div class="form-group">
									<label for="username" class="col-sm-2 control-label">Name: </label>
									<div class="col-sm-10">
										<input autofocus required type="text" name="username" class="form-control" id="username" placeholder="Enter name">
										
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								
								<div class="form-group">
									<label for="sdt" class="col-sm-2 control-label">Number Phone</label>
									<div class="col-sm-10">
										<input autofocus required type="text" name="sdt" class="form-control" id="sdt" placeholder="Enter number phone">
										
									</div>

									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								<div class="form-group">
									<label for="address" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-10">
										<input autofocus required type="text" name="address" class="form-control" id="address" placeholder="Enter address">
										
									</div>
									
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>

								<div class="form-group">
									<label for="yeucaudate" class="col-sm-2 control-label">Date Request</label>
									<div class="col-sm-10">
										<input autofocus required type="text" name="yeucaudate" class="form-control" id="yeucaudate" placeholder="Date" >
										
									</div>
									
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>



								<div class="form-group">
									<label for="numberse" class="col-sm-2 control-label">Sluong</label>
									<div class="col-sm-4">
										<input autofocus required type="text" name="numberse" value="" class="form-control" id="numberse" onkeyup="show(this.value)" >
										<input type="hidden" id="Total" name="Total">
										
									</div>

									<label for="Total" class="col-sm-2 control-label">Total:</label>
									<div class="col-sm-4">

										<span class="form-control" name="" id="sum"></span>
										
									</div>

									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								<div class="form-group">
									<div class="col-xs-6 col-sm-3"></div>
								
									<div class=".col-xs-6 .col-sm-3">
										<button type="submit" value="pro01" name="pro01" class="btn btn-default btn-red btn-sm"><span class="addchart">Buy Now *O*</span></button>
										
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>

							</form>
<?

 		
		require('db.php');
 // If form submitted, insert values into the database.
		if (isset($_POST['pro01'])){
		 $yeucaudate = $_POST['yeucaudate'];
		 $numberse = $_POST['numberse'];
		 $username = $_POST['username'];
		 $sdt = $_POST['sdt'];
		 $address = $_POST['address'];
		 $Total = $_POST['Total'];

		 $yeucaudate = stripslashes($yeucaudate);
		 $yeucaudate = mysql_real_escape_string($yeucaudate);
		 $numberse = stripslashes($numberse);
		 $numberse = mysql_real_escape_string($numberse);
		 $username = stripslashes($username);
		 $username = mysql_real_escape_string($username);
		 $sdt = stripslashes($sdt);
		 $sdt = mysql_real_escape_string($sdt);
		 $address = stripslashes($address);
		 $address = mysql_real_escape_string($address);
		 $Total = stripslashes($Total);
		 $Total = mysql_real_escape_string($Total);
		 
		 
		 $query = "INSERT into Orders(proID, userid , yeucaudate, numberse, Total, username, sdt, address) VALUES ('$proID' ,'' ,'$yeucaudate', '$numberse','$Total' ,'$username', '$sdt' , '$address')";
		 $result = mysql_query($query);
		 if($result){
		 	echo "<script>alert('Ban da dat hang thanh cong!'); </script>";
		 }
		 else{
		 	echo "<script>alert('Ban da dat hang that bai!'); </script>";
		 }
		}
	//da dang nhap
}else{
?>
							<form class="form-horizontal ava" action="" method="post" role="form">
								<div class="form-group">
									<label for="numberse" class="col-sm-2 control-label">Sluong</label>
									<div class="col-sm-4">
										<input autofocus required type="text" name="numberse" value="" class="form-control" id="numberse" onkeyup="show(this.value)" >
										<input type="hidden" id="Total" name="Total">	
									</div>
									<label for="Total" class="col-sm-2 control-label">Total:</label>
									<div class="col-sm-4">
										<span class="form-control" name="" id="sum"></span>	
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
								<div class="form-group">
									<div class="col-xs-6 col-sm-3"></div>
									<div class=".col-xs-6 .col-sm-3">
										<button type="submit" value="pro02" name="pro02" class="btn btn-default btn-red btn-sm"><span class="addchart">Cart *O*</span></button>	
									</div>
									<div class="clearfix"></div>
									<div class="dash"></div>
								</div>
							</form>
<?
		$username= $_SESSION['username'];
		$sql01="select * from User where username = '$username'";
		$kq01= mysql_query($sql01);
		$row=mysql_fetch_array($kq01);
		$userid = $row['userid'];
		if (isset($_POST['pro02'])){
		 $numberse = $_POST['numberse'];
		 $Total= $_POST['Total'];
		 $numberse = stripslashes($numberse);
		 $numberse = mysql_real_escape_string($numberse);
		 $username = stripslashes($username);
		 $username = mysql_real_escape_string($username);
		 $Total = stripslashes($Total);
		 $Total = mysql_real_escape_string($Total);
		 
		 
		 $query = "INSERT into Orders(proID, userid, numberse,Total,  username) VALUES ('$proID', '$userid', '$numberse','$Total' ,'$username')";
		 $result = mysql_query($query);
		 if($result){
		 	echo "<script>alert('Chuyển vào giỏ hàng thành công!Nếu bạn đã đặt hàng xong hãy đến -Cart- để nhập địa chỉ!!'); location='welcome.php?dieuhuong=product';</script>";
		 }
		 else{
		 	echo "<script>alert('Chuyển vào giỏ hàng thất bại. Vui lòng nhập lại!'); </script>";
		 }
		}
}
?>

							<div class="sharing">
								<div class="share-bt">
									<div class="addthis_toolbox addthis_default_style ">
										<a class="addthis_counter addthis_pill_style"></a>
									</div>
									<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f0d0827271d1c3b"></script>
									<div class="clearfix"></div>
								</div>
								
							</div>
							
						
					</div>
				</div>

				<div class="tab-review">
					<ul id="myTab" class="nav nav-tabs shop-tab">
						<li class="active"><a href="#desc" data-toggle="tab">Description</a></li>
						<li class=""><a href="#rev" data-toggle="tab">Comment</a></li>
					</ul>
					<div id="myTabContent" class="tab-content shop-tab-ct">
						<div class="tab-pane fade active in" id="desc">
							<span>
							<?=$rowsanpham['motapro']?>
							</span>
						</div>
						<div class="tab-pane fade" id="rev">

<?	//Neu khach hang chua dang nhap
	$hangID=$rowsanpham['hangID'];
	if(!isset($_SESSION['username'])){
?>	
			<p class="dash">
				<span>Bạn cần <span style="color: red;">Đăng Nhập/Đăng Ký</span> để được comment tại đây!</span> 		
			</p>
		
<?
//Neu khach hang dang dang nhap
}else{
    
    ?>
						<form action="" method="post"  role="form">
							<div class="form-group">
								<textarea class="form-control" name="comment" id="text" style="width:650px; height:35px;" ></textarea>
							</div>
							<button type="submit"  value="pro03" name="pro03" class="btn btn-default btn-red btn-sm">Submit</button>
						</form>
						<?

								$username= $_SESSION['username'];
								$sql01="select * from User where username = '$username'";
								$kq01= mysql_query($sql01);
								$row=mysql_fetch_array($kq01);
								$userid = $row['userid'];

						 // If form submitted, insert values into the database.
								if (isset($_POST['pro03'])){
								 $comment = $_POST['comment'];
								
								 $comment = stripslashes($comment);
								 $comment = mysql_real_escape_string($comment);
								
								 $query = "INSERT into Comment( userid, comment) VALUES ( '$userid','$comment')";
								 $result = mysql_query($query);
								 if($result){
								 	echo "<script>alert('Ban da comment thanh cong!');</script>";
								 }
								 else{
								 	echo "<script>alert('Ban da comment that bai!Vui long comment lai!'); </script>";
								 }
								}
							

						?>

    <?
    $username=$_SESSION['username'];
    $sql_com="SELECT * FROM Comment a JOIN User b ON a.userid=b.userid order by  commentID desc";
    $kq_com=mysql_query($sql_com);
    if (mysql_num_rows($kq_com)==0) {
	?>		
			<p class="dash">
				<span>Chưa có comment nào!</span> 		
			</p>	
	<?   		
    }else{
    	?>
    		<div class="thanhcuon">
    	<?
    	$kq_com=mysql_query($sql_com) or die(mysql_error());
		while($row_com=mysql_fetch_array($kq_com)){
	?>	

		<section>
			<p class="dash">
				<span style="color: #ff007f;"><?=$row_com['username']?></span> (<?=$row_com['time']?>)<br>
				<?=$row_com['comment']?>
			</p>
		</section>

	<?
	}
		?>
    		</div>
    	<?		
}		
}
?>		
						</div>
					</div>

				</div>
				<div class="title-bg" >
					<div class="title"> Thong tin nha san xuat</div>
				</div>
				<div class="page-title-wrap">
					<div class="page-title-inner">
						<div class="row">

							<div class="col-md-12">
								<span>* Nhà sản xuất: <span style="color: #0000FF;"><?=$rowsanpham['tenhang'] ?> </span></span><br>
								<span><?=$rowsanpham['thongtin'] ?></span>
							</div>
							
						</div>
					</div>
				</div>
				
				<div class="col-md-12 det-desc" id="title-bg">
					<div class="title">Sản phẩm cùng nhà sản xuất</div>
				</div>
				<div class="row prdct"><!--Products-->
<?
	$hangID=$rowsanpham['hangID'];

	$sql_hang="select * from hang a join product b on a.hangID=b.hangID where b.hangID= '$hangID'";
	$kq_hang=mysql_query($sql_hang);
	while($rows=mysql_fetch_array($kq_hang)){
	
?>

				<section id="product">
					<div class="col-md-4">
						<div class="productwrap">
							<div class="pr-img">
								<div class="hot"></div>
								<a href="?dieuhuong=sanpham&proID=<?=$rows['proID']?>"><img src="images/<?=$rows['proimages']?>" alt="" class="img-responsive"/></a>
								<div class="pricetag blue"><div class="inner "><span class="onsale">$<?=$rows['giapro']?></span></div></div>
							</div>
							<span class="smalltitle"><a href="?dieuhuong=sanpham&proID=<?=$rows['proID']?>"><?=$rows['proname']?></a></span>
							<span class="smalldesc"><?=$rows['tenhang']?></span>
						</div>
					</div>
				</section>
<?
}
?>
	
				</div><!--Products-->
				<div class="spacer"></div>
			</div><!--Main content-->
			<div class="col-md-3"><!--sidebar-->
				<aside><? include"right.php";?></aside>
				
				
				
			</div><!--sidebar-->
		</div>
	</div>
	

