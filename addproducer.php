

<?

 require('db.php');
 // If form submitted, insert values into the database.
 if (isset($_POST['tenhang'])){
 $tenhang = $_POST['tenhang'];
 $address = $_POST['address'];
 $phone = $_POST['phone'];
 $thongtin = $_POST['thongtin'];

 $tenhang = stripslashes($tenhang);
 $tenhang = mysql_real_escape_string($tenhang);
 $address = stripslashes($address);
 $address = mysql_real_escape_string($address);
 $phone = stripslashes($phone);
 $phone = mysql_real_escape_string($phone);
 $thongtin = stripslashes($thongtin);
 $thongtin = mysql_real_escape_string($thongtin);
 
 
 $query = "INSERT INTO hang(tenhang, address, phone, thongtin) VALUES ('$tenhang', '$address', '$phone', '$thongtin')";
 $result = mysql_query($query);
 if($result){
 	echo"<script>alert('Bạn đã upload thành công!'); location='admin.php?dieuhuong=producer';</script>";
 }
 else{
 	echo"<script>alert('Bạn đã upload that bai. Vui long upload lai!'); </script>";
	}
 }
?>

<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						
							<div class="bread"><a href="#">Home</a> &rsaquo; Add Producer</div>
										
					</div>
					</div>
				</div>
			</div>
		</div>
		<form class="form-horizontal checkout" action="" method="post" role="form">
			<div class="row">
				<div class="col-md-6 bill">
					<div class="title-bg">
						<div class="title">Imformation about Producer</div>
					</div>
						<div class="form-group dob">
							<div class="col-sm-6">
								<label for="tenhang" ><span class="glyphicon glyphicon-user"></span> Nhap ten hang:</label>
								<input type="text" class="form-control" name="tenhang" id="tenhang" placeholder="Ten hang">
							</div>
							<div class="col-sm-6">
								
								<label for="phone" ><span class="glyphicon glyphicon-user"></span> So dien thoai :</label>
								<input type="text" class="form-control" name="phone" id="phone" placeholder="So dien thoai">
							</div>
						</div>
						
							
						<div class="form-group">
							<div class="col-sm-12">
								<label for="address" ><span class="glyphicon glyphicon-user"></span> Dia chi hang san xuat :</label>
								<input type="text" class="form-control" name="address" id="address" placeholder="Nhap dia chi">
							</div>
						</div>
							
						
							
						
				</div>
				<div class="col-md-6 ship">
					
						
						
						
						
						
				</div>
			</div>
			<div class="title-bg">
				<div class="title"> Thong tin ve hang san xuat</div>
			</div>

			<div class="form-group ">
				<div class="col-sm-12">
					
					<textarea type="text" class="form-control" name="thongtin" placeholder="Nhap thong tin"></textarea>
				</div>
			</div>
			
			
				
			
		
			<div class="row">
				<div class="col-md-3 col-md-offset-9">
				<div class="subtotal-wrap">
					
					<button type="submit" class="btn btn-default btn-red btn-sm" value="updb" name="upload">Upload Now</button>

				</div>
				<div class="clearfix"></div>
				</div>
			</div>
		</form>



		<div class="spacer"></div>
	</div>