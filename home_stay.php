<html>
<head>
	<title>Nepal Tourism</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>

	<style>
		*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;
}
header{
	background-image: url(Nepal1.jpg);
	height: 650px;
	background-size: cover;
	background-position: center;
}
ul{
	float: right;
	
	margin-top: 25px;
}
ul li{
	display: inline-block;
}
ul li a{
    text-decoration: none;
	color: #fff;
	font-size: 25px;
	padding: 5px 20px;
	border: 1px solid transparent;
	transition: 0.6s ease;

}
ul li a:hover{
	background-color: #fff;
	color: #000;
}

.img img{
	float: left;
	width: 150px;
	height: auto;
	
}
.main{
	max-width: 1200px;
	margin: auto;
}
.title{
	position: absolute;
	top: 30%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.title h1 {
    color: #fff;
    font-size: 50px;
    font-family: 'courgette','cursive';
}



img{
	border-radius: 5%;

	}

.name{
	color: #000;
	font-style: italic;
	text-align: center;
	
}






.list{
	display: none;
	position: absolute;
	padding: 10 30px;

}
 
 .show:hover .list{
 	display: block;
 }



.respons figure{
	position: relative;
	width: 200%;
	margin: 0px;
	left: 0px;
	animation: 50s rupesh infinite;

}

@keyframes rupesh{
	0%{
		left: 0%;
	}

	10%{
		left: -50%;
	}

	20%{
		left: -50%;
	}

	30%{
		left: -100%;
	}

	40%{
		left: -100%;
	}

	50%{
		left: -200%;
	}

	60%{
		left: -200%;
	}

	70%{
		left: -100%;
	}

	80%{
		left: -100%;
	}

	90%{
		left: -50%;
	}

	95%{
		left: -50%;
	}

	98%{
		left: 0%;
	}

	
	}


	.grid {
	display: grid;
	grid-template-columns: repeat(6,1fr);
	grid-gap: 20px;
	position: center;
	text-align: center;
	margin-top: 25px;

}

input {
	outline: none;
	border: none;
	width: 100%;
	padding: 20px;
	
}

.book {
	padding: 40px 20px;
	
	color: #fff;
	
	align: center ;
	
}

h1 {
	font-family: serif;
}

.book input {
	padding: 15px;
	size-adjust: 50px;
	margin-top: 250px;
}

.book input:nth-last-child(1) {
	background: #7fc142;
	color: #fff;

}



	footer{
		width: 100%;
		background-color: gray;
		padding: 15px 0px;
		text-align: center;
	}

	.rows{
		padding: 60px 0px;
		margin: 30px;
		padding-top: 0px;

	}

	.column{
		width: 25%;
		float: left;
		line-height: 25px;
		font-size: 18px;
		text-align: left;
		padding-bottom: 10px;


		
	}

	
	.column a{
		text-decoration: none;
	}

.social-icon{
	font-size: 30px;
	padding-top: 45px;
	color: #fff;

}


	</style>


	

	<header>
		<div class="main">
			<div class="img">
				<img src="nepal_logo.png">
			<ul>
				<li ><a href="home.php">Home</a></li>
				<li> <div class="show"><a href="#"> Gallery</a>

                        
                   <div  class="list">
				       <a href="temple of nepal.php" ">Temples of Nepal</a><br>
					   <a href="budha.php" ">Budda</a><br>
					   <a href="nature of nepal.php"">Nature of Nepal</a><br>
					   <a href="nepali foods.php" ">Nepali Foods</a><br>
					</div></div></li>  

					<li ><div class="show"> <a href="#">Services</a>

					<div  class="list">
					<a href="hotels.php">Hotels</a><br>
				       <a href="ticket_booking.php">Ticket Book</a><br>
					   
					   <a href="home_stay.php">Home Stay</a><br>
					   <a href="guide.php">Guide Hiring</a><br>
					</div></div></li>
					<li><a href="about.php">Abou us</a></li>
				<li><a href="index.php">Log out</a></li>
				</ul>
			
		    </div>
	    </div>
		        <div class="title">
			     <h1>Home Stay Booking</h1>
		        </div>


		
				<section class="book">
					<div class="container flex_space">
						<div class="form">
							<form class="grid">
							<input type="text" placeholder=" City Name">
								<input type="date" placeholder="Araival date" value="Araival Date">
								<input type="date" placeholder="departure date" value="Departure Date">
								<input type="number" placeholder="Adults">
								<input type="number" placeholder="Children">
								<input type="submit" value="CHECK AVAILABILITY" onclick="mouse" >
							</form>
						</div>
					</div>
				</section>




	
		

	</header>


	<footer>
		<div class="rows">
			<div class="column">
				<a href="#">Home</a><br>
				<a href="#">Gallery</a><br>
				<a href="#"> Services</a><br>
				<a href="#">About Us</a><br>
				<a href="#">Log Ourt</a><br>
				
			</div>

			<div class="column">
				<a href="#">HTML</a><br>
				<a href="#">CSS</a><br>
				<a href="#">PHP</a><br>
				<a href="#">Javascript</a><br>
				
			</div>

			<div class="column">
				<a href="#"><b>Member's Name:</b></a><br>
				<a href="#">Rupesh Patel</a><br>
				<a href="#">Jyoti chaurasiya</a><br>
				<a href="#">Vipin Tiwari</a><br>
				
				
				
				
			</div>

			<div class="column">
				<a href="#"><b>Contact Number:</b></a><br>
				<a href="#">6398141979</a><br>
				<a href="#">9897822739</a><br>
				<a href="#">9557660795</a><br>
				
				
				
			</div>
		</div>


		<div class="social-icon">
			<i class="fa fa-twitter"></i>
			<i class="fa fa-facebook"></i>
			<i class="fa fa-linkedin"></i>
			<i class="fa fa-youtube"></i>


		</div>


		<p> Copyright &copy; 2023 Nepal Tourism</p>

	</footer>
	
</body>

</html>