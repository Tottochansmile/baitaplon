
<?php
 require('db.php');
 // If form submitted, insert values into the database.
 if (isset($_POST['username'])){
 $username = $_POST['username'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $username = stripslashes($username);
 $username = mysql_real_escape_string($username);
 $email = stripslashes($email);
 $email = mysql_real_escape_string($email);
 $password = stripslashes($password);
 $password = mysql_real_escape_string($password);
 
 $query = "INSERT into User(username, password, email) VALUES ('$username', '".md5($password)."', '$email')";
 $result = mysql_query($query);
 if($result){
 	header("Location: checkin.html");
 }
 }else{
 	header("Location: checkin.html");

 }
?>
