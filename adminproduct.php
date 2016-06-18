
<?
	
	$proID= isset($_GET['proID']) ? $_GET['proID'] : '';
	if($proID){
		$sql="delete from product where proID='$proID'";
		mysql_query($sql) or die(mysql_error());
	}
?>
<div class="container">
		
		<div class="title-bg">
			<div class="title">Imformation Product</div>
		</div>
<?
	include"db.php";
	$admin=$_SESSION['admin']; 
	$sql= "SELECT * FROM product order by proID desc";
	$kq=mysql_query($sql);
	if(mysql_num_rows($kq)==0){
?>

	<p>Chưa có sản phẩm nào!</p>
	<p>Đến <a href="?dieuhuong=upload">Product</a> để them sản phẩm cho Shop!</p>
<?
	}else{
?>
		<div class="table-responsive">
			<table class="table table-bordered chart">
				<thead>
					<tr>
						<th>Remove</th>
						<th>Product</th>
						<th>Name</th>
						<th>Unit Price</th>
						<th>Quantity</th>
						<th>Loai</th>
						<th>Mota</th>
					</tr>
				</thead>
				<tbody>

<?
		$kq=mysql_query($sql) or die(mysql_error());
		while($rowsanpham=mysql_fetch_array($kq)){
?>
		<section>
	
					<tr>
						<td><a class="btn btn-default btn-red btn-sm" onClick="if(confirm('Bạn muốn xóa?')) location='?dieuhuong=adminproduct&proID=<?=$rowsanpham['proID']?>';" href="#">Delete</a></td>
						<td><img src="images/<?=$rowsanpham['proimages']?>" width="100" alt="" /></td>
						<td><?=$rowsanpham['proname']?></td>
						<td>$<?=$rowsanpham['giapro']?></td>
						<td><?=$rowsanpham['trangthaisanpham']?></td>
						<td><?=$rowsanpham['loai']?></td>
						<td><?=$rowsanpham['motapro']?></td>
						
					</tr>		
		</section>
<?
	}
}
?>

				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-3 col-md-offset-3">
			<div class="subtotal-wrap">
			
				<a href="?dieuhuong=upload" class="btn btn-default btn-yellow">Add Product</a>
				<div class="clearfix"></div>
				
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="spacer"></div>

		<!--Comment cho admin-->

	</div>
