
<div class="container">

					<div class="tab-review">
					<ul id="myTab" class="nav nav-tabs shop-tab">
						<li class=""><a href="#rev" data-toggle="tab">Comment</a></li>
					</ul>
					<div id="myTabContent" class="tab-content shop-tab-ct">
						
						<div class="tab-pane fade active in" id="rev">

<?	//Neu khach hang chua dang nhap

	if(!isset($_SESSION['admin'])){
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


						 // If form submitted, insert values into the database.
								if (isset($_POST['pro03'])){
								 $comment = $_POST['comment'];
								
								 $comment = stripslashes($comment);
								 $comment = mysql_real_escape_string($comment);
								
								 $query = "INSERT into Comment( userid, comment) VALUES ( '0','$comment')";
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
    $admin=$_SESSION['admin'];
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
    		<div  style=" height:150px; width:900px; overflow:scroll; overflow-x: hidden;">
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

		
		<div class="title-bg">
			<div class="title">Imformation Product</div>
		</div>
<?
	include"db.php";

	$admin=$_SESSION['admin']; 
	$sql= "SELECT * FROM User";
	$kq=mysql_query($sql);
	if(mysql_num_rows($kq)==0){
?>

	<p>Chưa có tai khoan nào!</p>
<?
	}else{
?>

		<div class="table-responsive">
			<table class="table table-bordered chart">
				<thead>
					<tr>
						<th>User ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Ngay dang nhap</th>
						

					</tr>
				</thead>
				<tbody>

<?
		$kq=mysql_query($sql) or die(mysql_error());
		while($rowsanpham=mysql_fetch_array($kq)){
?>
		<section>
	
					<tr>
						
						<td><?=$rowsanpham['userid']?></td>
						<td><?=$rowsanpham['username']?></td>
						<td><?=$rowsanpham['email']?></td>
						<td><?=$rowsanpham['timstamp']?></td>
						
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
			
				
				<div class="clearfix"></div>
				
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="spacer"></div>

		<!--Comment cho admin-->








	</div>
