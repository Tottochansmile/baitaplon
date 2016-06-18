<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						
							<div class="bread"><a href="#">Home</a> &rsaquo; Upload</div>
										
					</div>
					</div>
				</div>
			</div>
		</div>
		<form class="form-horizontal checkout" action="" method="post" role="form">
			<div class="row">
				<div class="col-md-6 bill">
					<div class="title-bg">
						<div class="title">Imformation!</div>
					</div>
						<div class="form-group dob">
							<div class="col-sm-6">
								<label for="proname" ><span class="glyphicon glyphicon-user"></span> Nhap ten san pham:</label>
								<input type="text" class="form-control" name="proname" id="proname" placeholder="Ten san pham">
							</div>
							<div class="col-sm-6">
								
								<label for="trangthaisanpham" ><span class="glyphicon glyphicon-user"></span> So luong san pham :</label>
								<input type="text" class="form-control" name="trangthaisanpham" id="trangthaisanpham" placeholder="So luong">
							</div>
						</div>
						<div class="form-group">
							
							<div class="col-sm-6">
								<label for="giapro" ><span class="glyphicon glyphicon-user"></span> Nhap gia san pham(gia da sale):</label>
								<input type="text" class="form-control" name="giapro" id="giapro" placeholder="Gia cua san pham">
							</div>
							<div class="col-sm-6">
								<label for="giacu" ><span class="glyphicon glyphicon-user"></span> Nhap gia chua sale(neu co) :</label>
								<input type="text" class="form-control" name="giacu" id="giacu" placeholder="Gia cu">
							</div>
							
						</div>
						<div class="form-group">
							<div class="col-sm-4">
								<label for="loai" ><span class="glyphicon glyphicon-user"></span> Loai :</label>
								<select name="loai" >
									<option value="">None----</option>
									<option value="new" >San pham moi</option>
									<option value="sale">San pham sale</option>
								</select>
							</div>
							
						</div>		
						
				</div>
				<div class="col-md-6 ship">
					<div class="title-bg">
						
					</div>
					<div class="form-group dob">
							<div class="col-sm-6">
								<label for="proimages" ><span class="glyphicon glyphicon-user"></span> Nhap ten file anh :</label>
								<input type="text" class="form-control" name="proimages" id="proimages" placeholder="Anh cua san pham ">
							</div>
							<div class="col-sm-6">
								<label for="salemages" ><span class="glyphicon glyphicon-user"></span> Nhap ten anh sale(neu co) :</label>
								<input type="text" class="form-control" name="saleimages" id="saleimages" placeholder="Anh sale ">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<label for="hangID" ><span class="glyphicon glyphicon-user"></span> Nhap ma hang san xuat :</label>
								<input type="text" class="form-control" name="hangID" id="hangID" placeholder="Nha san xuat">
							</div>
						</div>
						
						
						
						
				</div>
			</div>
			<div class="title-bg">
				<div class="title">Description</div>
			</div>

			<div class="form-group ">
				<div class="col-sm-12">
					
					<textarea type="text" class="form-control" name="motapro" placeholder="Nhap mot ta"></textarea>
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
<?

 require('db.php');
 // If form submitted, insert values into the database.
 if (isset($_POST['proname'])){
 $proname = $_POST['proname'];
 $hangID = $_POST['hangID'];
 $loai = $_POST['loai'];
 $proimages = $_POST['proimages'];
 $saleimages = $_POST['saleimages'];
 $giacu = $_POST['giacu'];
 $giapro = $_POST['giapro'];
 $motapro = $_POST['motapro'];

 $trangthaisanpham = $_POST['trangthaisanpham'];

 $proname = stripslashes($proname);
 $proname = mysql_real_escape_string($proname);
 $hangID = stripslashes($hangID);
 $hangID = mysql_real_escape_string($hangID);
 $loai = stripslashes($loai);
 $loai = mysql_real_escape_string($loai);
 $proimages = stripslashes($proimages);
 $proimages = mysql_real_escape_string($proimages);
 $saleimages = stripslashes($saleimages);
 $saleimages = mysql_real_escape_string($saleimages);
 $giacu = stripslashes($giacu);
 $giacu = mysql_real_escape_string($giacu);
 $giapro = stripslashes($giapro);
 $giapro = mysql_real_escape_string($giapro);
 $motapro = stripslashes($motapro);
 $motapro = mysql_real_escape_string($motapro);
 $trangthaisanpham = stripslashes($trangthaisanpham);
 $trangthaisanpham = mysql_real_escape_string($trangthaisanpham);
 
 $query = "INSERT INTO product(proname, hangID, loai, proimages, saleimages, giacu, giapro, motapro, trangthaisanpham) VALUES ('$proname', '$hangID', '$loai', '$proimages', '$saleimages', '$giacu', '$giapro', '$motapro', '$trangthaisanpham')";
 $result = mysql_query($query);
 if($result){
 	echo"<script>alert('Bạn đã upload thành công!'); location='admin.php?dieuhuong=adminproduct';</script>";
 }
 else{
 	echo"<script>alert('Bạn đã upload that bai. Vui long upload lai!'); </script>";
	}
 }
?>


		<div class="spacer"></div>
	</div>