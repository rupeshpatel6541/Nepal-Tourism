<html>
<head>
	<title>signup</title>
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
			<div class="loginbox">
				<img src="avatar1.png" class="avatar1">
				<h1>Signup Here</h1>

				<form  method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
					<p>Full Name</p>
					<input type="text" name="name" placeholder="Enter full name" required="name">
					<p>Username</p>
					<input type="text" name="username" placeholder="Enter Username" required="username">
					<p>Password</p>
					<input type="password" name="password" placeholder="Enter Password" required="password">
					<p>Contact Number</p>
					<select id="area_code" name="area_code">
						<option>+977</option>
						<option>+91</option>
						<option>+978</option>
						<option>+976</option>
						<option>+975</option>
						<option>+974</option>
					</select>
					<input type="Number1" name="contact" placeholder="Enter Contact Number" required="contact"> 
					<h4>Date of Birth</h4>
					<input type="text1" name="days" placeholder="Days" required="days"> 
					<input type="text1" name="months" placeholder="Months" required="months"> 
					<input type="text1" name="years" placeholder="Year" required="years"> 
					<h3>  Gender </h3>

					<div class="gender">
						<div class="male" style="float:left;">
							<input type="radio" name="gender"  value="Male" required="gender">Male
						</div>
						<div class="female" style="float:right;">
							<input type="radio" name="gender"  value="Female" required="gender">Female
						</div>
				
				    </div>
									
																			
					<input type="submit" name="signup" value="Submit">
					
					</form>
			</div>
	</body>
</html>


<?php 
include('dbcon.php');

if(isset($_POST['signup']))
{
$Name=$_POST['name'];
$Username=$_POST['username'];
$Password=$_POST['password'];
$Area_code=$_POST['area_code'];
$Contact=$_POST['contact'];
$Days=$_POST['days'];
$Months=$_POST['months'];
$Years=$_POST['years'];
$Gender=$_POST['gender'];

$sql="INSERT INTO signup  (name,username,password,area_code,contact,days,months,years,gender) VALUES ('$Name','$Username','$Password','$Area_code','$Contact','$Days','$Months','$Years','$Gender')";
if(!mysqli_query($con,$sql))
{
die('error:' . mysqli_error($con));
}


echo "Your data is successfully registered"; 


}

?>
