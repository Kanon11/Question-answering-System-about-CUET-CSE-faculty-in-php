<?php include"conn.php"; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Automatic Q/A system based on CUET CSE </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
</head>
<body>
	<div class="login">
		<h1 style='color:green'><i><a href="">Automatic Q/A system based on CUET CSE  </a></i></h1>
		<div class="login-bottom">
			<h2>Login to the Q/A system</h2>
			<form action="index.php" METHOD="POST">
			<div class="col-md-6">
				<div class="login-mail">
					<input name="user" type="text" placeholder="user id" required="">
					<i class="fa fa-envelope"></i>
				</div>
				<div class="login-mail">
					<input name="pass" type="password" placeholder="Password" required="">
					<i class="fa fa-lock"></i>
				</div>
				  

			
			</div>
			<div class="login-mail">
				<label class="hvr-shutter-in-horizontal login-sub"><br>
					<input type="submit" name="submit" value="">
Acess to the system Now			
			</label>
					
			</div>
			
			<div class="clearfix"> </div>
			</form>
			
			
			
		</div>
	</div>
	
	<?php

if (isset($_POST['submit']))
{
$email=$_POST['user'];
$pass=$_POST['pass'];


try{

$sql="SELECT * FROM user WHERE user_id='$email' AND password='$pass'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
if($count>0){

$_SESSION['user_id']=$email;


$url="account.php";
echo '<script>window.location = "'.$url.'";</script>';
}
else
{ echo"<center>Wrong Login information Or Account Not Activated yet !</center></br>";

}
}



if (isset($_POST['reg']))
{
$email=$_POST['user'];
$pass=$_POST['pass'];




$sql="INSERT INTO `user`(`user_id`, `password`) VALUES ('$email','$pass')";
$result=mysql_query($sql);


 echo"<center>Registration Successful</center></br>";


}


?>
		<!---->
<?php include"footer.php"; ?>
<!---->
<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
</body>
</html>

