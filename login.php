
<?php
 require('db.php');
 session_start();
 // If form submitted, insert values into the database.
 if (isset($_POST['username'])){
 $username = $_POST['username'];
 $password = $_POST['password'];
 $username = stripslashes($username);
 $username = mysql_real_escape_string($username);
 $password = stripslashes($password);
 $password = mysql_real_escape_string($password);
 //Checking is user existing in the database or not
 $sql="SELECT * FROM User WHERE username='$username' and password='".md5($password)."'";
 $result=mysql_query($sql);
 $rows=mysql_num_rows($result);
// nếu tài khoản trùng khớp thì sẽ trả về giá trị 1 cho biến $count

 if($rows==1){
 $_SESSION['username'] = $username;
 	echo"<script>alert('Bạn đã đăng nhập thành công!'); location='welcome.php?dieuhuong=home';</script>";
 	// Redirect user to index.php
 }else{
 	echo"<script>alert('Ten hoac mat khau sai. Vui long dang nhap lai!'); location='checkin.html';</script>";
 	
 }
 }else{
 	echo"<script>alert('Ten hoac mat khau sai. Vui long dang nhap lai!'); location='checkin.html';</script>";
 }
?>



