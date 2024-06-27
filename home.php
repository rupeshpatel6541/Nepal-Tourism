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
	top: 40%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.title h1 {
    color: #fff;
    font-size: 80px;
    font-family: 'courgette','cursive';
}
.title1{
	position: absolute;
	top: 83%;
	right: 7%;
}
.title1 h2{
color: #fff;
font-size: 80px;
}
.title2{
	position: absolute;
	top: 96%;
	right: 7%;
}
.title2 h5{
	color: yellow;
	font-size: 16px;
}



img{
	border-radius: 5%;

	}

.name{
	color: #000;
	font-style: italic;
	text-align: center;
	
}
.respons{
	float: left;
	overflow: hidden;
	border-radius: 5px;
	margin-right: 2%;
}

.gallery {
	border: 1px solid #000;
	margin-top:180px;
	margin-left: 25px;
	border-radius: 5px;
	overflow: hidden;
	float:left;
}

.gallery img:hover{
	transform: scale(2,2);
	transition: .3s transform;
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
					<a href="hotels.php" >Hotels</a><br>
				       <a href="ticket_booking.php" >Ticket Book</a><br>
					   
					   <a href="home_stay.php">Home Stay</a><br>
					   <a href="guide.php">Guide Hiring</a><br>
					</div></div></li>
					<li><a href="about.php">Abou us</a></li>
				<li><a href="index.php">Log out</a></li>
				</ul>
			
		    </div>
	    </div>
		        <div class="title">
			     <h1>NEPAL   TOURISM</h1>
		        </div>


		<div class="respons">
			<figure>
					<div class="gallery">
					<a href="destination of kathmandu.php" ><img src="gallery/destination of kathmandu/img1.jpg" width="350" height="200"></a>
						<div class="name"><b> Destination of Kathmandu</b></div>
					</div>
					<div class="gallery">
					<a href="destination of pokhara.php" ><img src="gallery/destination of pokhara/img1.jpg" width="350" height="200"></a>
						<div class="name"> <b>Destination of pokhara</b></div>
					</div>
					<div class="gallery">
					<a href="destination of manakamana.php" ><img src="gallery/destination of manakamana/img.jpg" width="350" height="200"></a>
						<div class="name"> <b>Destination of Manakamana</b></div>
					</div>
					<div class="gallery">
					<a href="destination of janakpur.php" ><img src="gallery/destination of janakpur/img1.jpeg" width="350" height="200"></a>
						<div class="name"> <b>Destination of janakpur</b></div>
					</div>
					<div class="gallery">
					<a href="destination of annapurna.php" ><img src="gallery/destination of annapurna/img1.jpg" width="350" height="200"></a>
						<div class="name"> <b>Destination of Annapurna</b></div>
					</div>
					<div class="gallery">
					<a href="destination of chituwan.php" ><img src="gallery/destination of chituwan/img1.jpg" width="350" height="200"></a>
						<div class="name"> <b>Destination of chituwan</b></div>
					</div>

					<div class="gallery">
					<a href="destination of bhaktpur.php" ><img src="gallery/destination of bhaktpur/img1.jpg" width="350" height="200"></a>
						<div class="name"><b> Destination of Bhaktpur</b></div>
					</div>
				</figure>

				</div>



	
		<div class="title1">
			<h2>NEPAL</h2>
		</div>
		<div class="title2">
			<h5>The Perfect Tourism Destination</h5>
		</div>

	</header>


	<footer>
		<div class="rows">
			<div class="column">
				<a href="#">Home</a><br>
				<a href="#">Gallery</a><br>
				<a href="#">Services</a><br>
				<a href="#">About Us</a><br>
				<a href="#">Log Out</a><br>
				
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
				<a href="#">Jyoti Chaurasiya</a><br>
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