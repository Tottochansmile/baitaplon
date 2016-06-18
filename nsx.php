	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread">Home &rsaquo;Product &rsaquo; Producer </div>
							<div class="bigtitle">Product&Producer</div>
						</div>
						<div class="col-md-3 col-md-offset-5">
							
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title">Category - Products</div>
					
				</div>
				<div class="row prdct"><!--Products-->


<?
	$sql="select * from product a join hang b on a.hangID= b.hangID where a.trangthaisanpham=1 and ";
	$hangID=$_GET['hangID'];
	//$mucthap=$_GET['mucthap'];
	//$muccao=$_GET['muccao'];
	if($hangID)
		$sql.="a.hangID='$hangID'";
	//elseif($loai)
	//	$sql.="loai like '%$loai%'";
		//$sql.="proname like '%$tk%'";
	//elseif($mucthap || $muccao){
		//if($muccao!=0)
		//	$sql.="giasanpham>='$mucthap' and giasanpham<='$muccao'";
		//else
			//$sql.="giasanpham>='$mucthap'";
	//}
	$kq=mysql_query($sql);
	if(!mysql_num_rows($kq)){
?>
	<p style="text-align:center;color:red;">Không tìm thấy sản phẩm!</p>
<?
	}else{
		while($rowsanpham=mysql_fetch_array($kq)){
?>
		<section id="product">

			<div class="col-md-4">
						<div class="productwrap">
						<div class="pr-img">
							<div class="new"></div>
							<a href="?dieuhuong=sanpham&proID=<?=$rowsanpham['proID']?>"><img src="images/<?=$rowsanpham['proimages']?>" alt="" class="img-responsive"/></a>
							<div class="pricetag blue"><div class="inner">$<?=$rowsanpham['giapro']?></div></div>
						</div>
							<span class="smalltitle"><a href="?dieuhuong=sanpham&proID=<?=$rowsanpham['proID']?>"><?=$rowsanpham['proname']?></a></span>
							<span class="smalldesc"><?=$rowsanpham['tenhang']?></span>
						</div>
					</div>
		</section>
<?
		}
	}
?>
				</div><!--Products-->
			</div>
			<div class="col-md-3"><!--sidebar-->
				<aside><? include"right.php";?></aside>
				
			</div><!--sidebar-->
		</div>
		<div class="spacer"></div>
	</div>