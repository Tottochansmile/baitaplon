<div class="container">
		
		<div class="title-bg">
			<div class="title">Các sản phẩm đã mua!</div>
		</div>
<?
	include"db.php";

	$username=$_SESSION['username']; 
	$sql= "SELECT * 
				FROM
				   	Orders 
				    INNER JOIN User ON Orders.userid = User.userid
				    INNER JOIN dcship ON Orders.userid = dcship.userid
				    INNER JOIN product ON Orders.proID = product.proID
				WHERE User.username = '$username'";
	$kq=mysql_query($sql);
	if(mysql_num_rows($kq)==0){
?>
	<p>Bạn chưa đặt mua sản phẩm nào!</p>
	<p>Đến <a href="?dieuhuong=product">Product</a> để đặt mua sản phẩm của Shop!</p>
<?
	}else{
?>
		<div class="table-responsive">
			<table class="table table-bordered chart">
				<thead>
					<tr>
						
						<th>Product</th>
						<th>Unit Price</th>
						<th>Quantity</th>
						<th>Total</th>
						<th>Phone</th>
						<th>Date Request</th>
						<th>Date Order</th>

					</tr>
				</thead>
				<tbody>

<?
		$kq=mysql_query($sql) or die(mysql_error());
		while($rowsanpham=mysql_fetch_array($kq)){
?>
		<section>
	
					<tr>
						<td><img src="images/<?=$rowsanpham['proimages']?>" width="100" alt="" /></td>
						<td>$<?=$rowsanpham['giapro']?></td>
						<td><?=$rowsanpham['numberse']?></td>
						<td>$<?=$rowsanpham['Total']?></td>
						<td><?=$rowsanpham['modi']?></td>
						<td><?=$rowsanpham['yeucau']?></td>
						<td><?=$rowsanpham['orderdate']?></td>
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
			<div class="total">Totals : <span class="bigprice">$
<? 

	$username=$_SESSION['username']; 
	$sql= "SELECT * 
				FROM
				   	Orders 
				    INNER JOIN User ON Orders.userid = User.userid
				    INNER JOIN product ON Orders.proID = product.proID
				WHERE User.username = '$username'";
$kq=mysql_query($sql);
$rowsanpham=mysql_fetch_array($kq);
$userid=$rowsanpham['userid'];
$sql_total = "select sum(Total) as totals from Orders where userid = '$userid' ";
$result_total = mysql_query($sql_total);
$rows=mysql_fetch_array($result_total);
echo $rows['totals'];
?> 
				</span></div>
				
				<div class="clearfix"></div>
				<a href="?dieuhuong=product" class="btn btn-default btn-yellow">Continue Shopping</a>
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="spacer"></div>
	</div>
