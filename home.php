	<div class="container">
		
		<div class="clearfix"></div>
		<div class="lines"></div>
		<div class="main-slide">
			<div id="sync1" class="owl-carousel">

<?
	$sql="select * from product where loai='sale' order by  proID desc";
	$kq=mysql_query($sql);
	if(mysql_num_rows($kq)==0){
?>





	<p>Sản phẩm đã bán hết! Shop đang cập nhập. Qúy khách vui lòng quay lại sau!</p>
<?
	}else{
		$kq=mysql_query($sql) or die(mysql_error());
		while($rowsanpham=mysql_fetch_array($kq)){
?>
		<section id="saleproduct">
				<div class="item">
					<div class="slide-desc">
						<div class="inner">
							<h1><a href="?dieuhuong=sanpham&proID=<?=$rowsanpham['proID']?>"><?=$rowsanpham['proname']?></a></h1>
							<p>
								<?=$rowsanpham['motapro']?>
							</p>
							<a href="?dieuhuong=sanpham&proID=<?=$rowsanpham['proID']?>"><span class="btn btn-default btn-red btn-lg" >Imformation</span></a>
							
						</div>
						<div class="inner">
							<div class="pro-pricetag big-deal" style="background-color: #696969;">
								<div class="inner" style="background-color:  #778899; ">
										<span class="oldprice">$<?=$rowsanpham['giacu']?></span>
										<span><?=$rowsanpham['giapro']?></span>
										<span class="ondeal">Best Deal</span>
								</div>
							</div>
						</div>
					</div>
					<div class="slide-type-1">
						<img src="images/<?=$rowsanpham['saleimages']?>" alt="" class="img-responsive"/>
					</div>
				</div>     
            
        </section>
<?
		}
	}
?>


			</div>
		</div>
		<div class="bar"></div>
		<div id="sync2" class="owl-carousel">


<?
	$sql="select * from product a join hang b on a.hangID=b.hangID where a.loai='sale' order by proID desc ";
	$kq=mysql_query($sql) or die(mysql_error());
	while($rowsanpham=mysql_fetch_array($kq)){
?>

		<section id="saleproduct">
			
			<div class="item">
				<div class="slide-type-1-sync">
					<h3><a href="?dieuhuong=sanpham&proID=<?=$rowsanpham['proID']?>"><?=$rowsanpham['proname']?></a></h3>
					<p><?=$rowsanpham['tenhang']?></p>
				</div>
			</div>

        </section>

<?
		}
	
?>

	</div>
	</div>	


	<div class="f-widget featpro">
		<div class="container">
			<div class="title-widget-bg">
				<div class="title-widget">New Products</div>
				<div class="carousel-nav">
					<a class="prev"></a>
					<a class="next"></a>
				</div>
			</div>
			<div id="product-carousel" class="owl-carousel owl-theme">


<?
	$sql="select * from product a join hang b on a.hangID=b.hangID  where loai='new' order by  proID desc";
	$kq=mysql_query($sql) or die(mysql_error());
	while($rowsanpham=mysql_fetch_array($kq)){
?>

		<section id="saleproduct">
			

			<div class="item">
					<div class="productwrap">
						<div class="pr-img">
							<div class="new"></div>
							<a href="?dieuhuong=sanpham&proID=<?=$rowsanpham['proID']?>"><img src="images/<?=$rowsanpham['proimages']?>" alt="" class="img-responsive"/></a>
							<div class="pricetag on-sale"><div class="inner on-sale"><span class="onsale">$<?=$rowsanpham['giapro']?></span></div></div>
						</div>
							<span class="smalltitle"><a href="?dieuhuong=sanpham&proID=<?=$rowsanpham['proID']?>"><?=$rowsanpham['proname']?></a></span>
							<span class="smalldesc"><?=$rowsanpham['tenhang']?></span>
					</div>
				</div>


        </section>

<?
		}
	
?>



			</div>
		</div>
	</div>





	
	
	
	