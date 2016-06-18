<div class="container">
		
		


<?
	
	$hangID= isset($_GET['hangID']) ? $_GET['hangID'] : '';
	if($hangID){
		$sql="delete from hang where hangID='$hangID'";
		mysql_query($sql) or die(mysql_error());
	}
?>
		<div class="title-bg">
			<div class="title">Imformation Product</div>
		</div>
		

		<div class="table-responsive">
			<table class="table table-bordered chart">
				<thead>
					<tr>
						
						<th>Hang ID</th>
						<th>Name</th>
						<th>Dia chi</th>
						<th>Phone</th>
						<th>Remove</th>
						

					</tr>
				</thead>
				<tbody>



    <section>
    	<?
        	$sql="select * from hang order by hangID desc";
			$kq=mysql_query($sql);
			while($rowhang=mysql_fetch_array($kq)){
			?>




			<section>
            	<tr>

						
						
						<section><td><?=$rowhang['hangID']?></td></section>
						<section><td><?=$rowhang['tenhang']?></td></section>
						<section><td><?=$rowhang['address']?></td></section>
						<section><td><?=$rowhang['phone']?></td></section>


                <section>
                <td>
                	<?
                    	$sql="select*from product where hangID=".$rowhang['hangID'];
						$kqsanpham=mysql_query($sql) or die(mysql_error());
						if(mysql_num_rows($kqsanpham)==0){
					?>
                <a class="btn btn-default btn-red btn-sm" onClick="if(confirm('Bạn muốn xóa hãng này?')) location='?dieuhuong=producer&hangID=<?=$rowhang['hangID']?>';" href="#">Delete</a>
                	<? }?>
                </td>
                </section>
                </tr>
            </section>
			<?
			}
		?>
    </section>


				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="col-md-6">
				
			</div>
			<div class="col-md-3 col-md-offset-3">
			<div class="subtotal-wrap">
<section><input onClick="location='?dieuhuong=addproducer';" type="button" value="Add Producer" class="btn btn-default btn-yellow"></section>
			<div class="clearfix"></div>
				
			</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<div class="spacer"></div>
</div>

		<!--Comment cho admin-->
		