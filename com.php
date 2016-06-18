<?
		
		
		$username= $_SESSION['username'];
		$sql01="select * from User where username = '$username'";
		$kq01= mysql_query($sql01);
		$row=mysql_fetch_array($kq01);
		$userid = $row['userid'];

 // If form submitted, insert values into the database.
		if (isset($_POST['pro03'])){
		 $comment = $_POST['comment'];
		
		 $comment = stripslashes($comment);
		 $comment = mysql_real_escape_string($comment);
		
		 $query = "INSERT into Comment( userid, comment) VALUES ( '$userid','$comment')";
		 $result = mysql_query($query);
		 if($result){
		 	echo "<script>alert('Ban da comment thanh cong!'); location='welcome.php?dieuhuong=sanpham&proID=<?=$proID?>';</script>";
		 }
		 else{
		 	echo "<script>alert('Ban da comment that bai!Vui long comment lai!'); location='welcome.php?dieuhuong=sanpham&proID=<?=$proID?>';</script>";
		 }
		}
	

?>