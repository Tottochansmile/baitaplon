	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="#">Home</a> &rsaquo; Product</div>
							<div class="bigtitle">Product</div>
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
					<div class="title">Category - All products</div>
					<div class="title-nav">
						<a href="?dieuhuong=grid"><i class="fa fa-th-large"></i>Grid</a>
						<a href="?dieuhuong=list"><i class="fa fa-bars"></i>List</a>
					</div>
				</div>
				<ul class="gridlist">

<?
	$sql="select * from product a join hang b on a.hangID= b.hangID where a.trangthaisanpham=1";
	$kq=mysql_query($sql);
	if(mysql_num_rows($kq)==0){
?>


	<p>Sản phẩm đã bán hết! Shop đang cập nhập. Qúy khách vui lòng quay lại sau!</p>
<?
	}else{
		$page = isset($_GET['page']) ? $_GET['page'] : "";
	
		$productperpage=4;
		$sumproduct=mysql_num_rows($kq);
		$sumpage=ceil($sumproduct/$productperpage);
		if(!$page){
			$page=1;
		}
		$from=($page-1)*$productperpage;
		$sql.=" limit $from,$productperpage";
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
									<a href="?dieuhuong=sanpham&proID=<?=$rowsanpham['proID']?>"><img src="images/<?=$rowsanpham['proimages']?>" alt="" class="img-responsive"/></a>
								</div>
							</div> 
							<div class="col-md-6">
								<div class="gridlisttitle"><?=$rowsanpham['proname'] ?> <span> Qlty: <?=$rowsanpham['trangthaisanpham']?></span></div>
								<p class="gridlist-desc">
									<?=$rowsanpham['motapro']?>
								</p>
							</div>
							<div class="col-md-2">
								<div class="gridlist-pricetag on-sale"><div class="inner"><span ><span class="oldprice"></span>$<?=$rowsanpham['giapro']?></span></div></div>
							</div>
							<div class="col-md-6">
								<a href="?dieuhuong=sanpham&proID=<?=$rowsanpham['proID']?>"> <span class="btn btn-default btn-red btn-sm" >Information</span></a>
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

<section style="float:left; width:100%;text-align:right;padding:3%;">
	<ul class="pagination shop-pag"><!--pagination-->

	<?
    	for($i=1; $i<=$sumpage; $i++){
		?>
		<li><a href="?dieuhuong=list&page=<?=$i?>"><?=$i?></a></li>
		
	<?
		}
	?>
	</ul><!--pagination-->

</section>
				
			</div>

			<div class="col-md-3"><!--sidebar-->
				<aside><? include"right.php";?></aside>
				
			</div><!--sidebar-->
		</div>
		<div class="spacer"></div>
	</div>