<html>
<head>
	<title>index</title>
	
</head>

<body>

	<style>
		
    body{
	background-image: url(janakpur.jpg);
	height: 650px;
	background-size: cover;
	background-position: center;
}
.loginbox{
	width: 320px;
	height: 440px;
	background: rgba(0,0,0,0.5);
	color: #fff;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 70px 30px;
}
.avatar1{
	width: 100px;
	height: 100px;
	border-radius: 50%;
	position: absolute;
	top: -50px;
	left: calc(50% - 50px);
}
h1{
	margin: 0;
	padding: 0 0 20px;
	text-align: center;
	font-size: 22px;

}
.loginbox p{
 margin: 0;
 padding: 0;
 font-weight: bold;

}
.loginbox input{
	width: 100%;
	margin-bottom: 20px;
}
.loginbox input[type="text"], input[type="password"]
{
	border: none;
	border-bottom: 1px solid #fff;
	background: transparent;
	outline: none;
	height: 40px;
	color: #fff;
	font-size: 16px;
}
.loginbox input[type="submit"]
{
	border: none;
	outline: none;
	background: #1c8adb;
	height: 40px;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
	cursor:pointer;
	background: #39dc79;
	color:#000;
}



.loginbox input[type="button"]
{
	border: none;
	outline: none;
	background: #1c8adb;
	height: 40px;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
}
.loginbox input[type="button"]:hover
{
	cursor:pointer;
	background: #39dc79;
	color:#000;
}



.loginbox a{
	text-decoration: none;
	font-size: 14px;
	color:#fff;
}
.loginbox a:hover
{
	color: #39dc79;
}

	</style>





			<div class="loginbox">
				<img src="avatar1.png" class="avatar1">
				<h1>Login Here</h1>

				<form     method="POST" action="<?php $_SERVER["PHP_SELF"];?>  ">
					<p>Username</p>
					<input type="text" name="username" placeholder="Enter Username" required="username">
					<p>Password</p>
					<input type="password" name="password" placeholder="Enter Password">
					<input type="submit" name="login" value="Login">

					<a href="signup.php"><input type="button" name="signup" value="Sign Up"></a>
					
					<a href="#">Forgot Password</a>
				</form>
			</div>
	</body>
</html>


<?php 
include('dbcon.php');
if(isset($_POST['login']))
	    
{
	$Username=$_POST['username'];
	$Password=$_POST['password'];

	$query="SELECT * from signup WHERE username='".$Username."' AND password='".$Password."' limit 1";
	$run=mysqli_query($con,$query);
	if(mysqli_num_rows($run)==1)
	{
echo "<script>window.open('home.php','_self')</script>"; 

}
else
{
?>
<script>

alert('invalid username or password');

window.open('index.php','_self');
</script>
<?php
    }
}
?>
	

