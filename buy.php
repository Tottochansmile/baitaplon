
<?
 require('db.php');
 session_start();
 $username= isset($_SESSION['username']) ? $_SESSION['username'] : '';
if($username){
		$sql01="select * from User where username = '$username'";
		$kq01= mysql_query($sql01);
		$row01=mysql_fetch_array($kq01);
		$userid = $row01['userid'];
if (isset($_POST['ship'])){
 		$modi = $_POST['modi'];
		 $addr= $_POST['addr'];
		 $yeucau= $_POST['yeucau'];
		 $modi = stripslashes($modi);
		 $modi = mysql_real_escape_string($modi);
		 $addr = stripslashes($addr);
		 $addr = mysql_real_escape_string($addr);
		 $yeucau = stripslashes($yeucau);
		 $yeucau = mysql_real_escape_string($yeucau);
 
 $query = "INSERT INTO dcship(userID, addr, modi, yeucau) VALUES ('$userid', '$addr', '$modi', '$yeucau')";
 $result = mysql_query($query);
 if($result){
 	echo"<script> location='welcome.php?dieuhuong=checkout';</script>";
 }
 else{
 	echo"<script>alert('Bạn đã upload that bai. Vui long upload lai!'); </script>";
	}
 }
}
else{
 	echo"<script>alert('Bạn đã upload that bai. Vui long upload lai!'); </script>";
	}
 ?>

