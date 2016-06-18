<div class="title-bg">
					<div class="title">Categories</div>
				</div>
				
				<div class="categorybox">
					<ul>
						<li><a href="?dieuhuong=sale">Sale Products"</li>
						<li><a href="?dieuhuong=new02"><input  type="hidden" value="new" name="loai">New Products</a></li>
						<li><a style="color: blue;">Producer</a>
							<ul>
<section id="hang">
<?
	$sql="select*from hang ";
	$kq=mysql_query($sql);
	while($rowhang=mysql_fetch_array($kq)){
?>
	<section ><li><a style="display:block;" href="?dieuhuong=nsx&hangID=<?=$rowhang['hangID']?>"><?=$rowhang['tenhang']?></a></li></section>
<?
	}
?>
</section>
								
							</ul>
						</li>
						
						<li><a href=""></a></li>
						<li class="lastone"><a href="?dieuhuong=product">All Products</a></li>
					</ul>
				</div>
				
				<div class="ads">
					<a href="product.php"><img src="images/ads.png" class="img-responsive" alt="" /></a>
</div>