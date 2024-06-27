<!DOCTYPE html>
<html>
<head>
	<title>Budha</title>
	
</head>

<body>

	<style>
		
    *{
	box-sizing:  border-box;

}



body{
		
	background-size: cover;
	background-position: center;
	background-color: skyblue;
}

.button{
	float: right;
	list-style-type: none;
	margin-right: 75px;
	font-family: Century Gothic;
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

.gallery{
	padding-top: 15px;
	padding-left: 5%;
	display: block;
	width: 100%;
	height: auto;
	overflow: hidden;
	border-radius: 5%;
	
}


.header{
	text-align: center;
	color: blue;
	padding-top: 60px;
}

img{
	border-radius: 5%;
	padding: 5px;
	


}

img:hover{
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


	</style>

	<div class="button">
		<ul>
			<li ><a href="home.php">Home</a></li>
				<li> <div class="show"><a href="#"> Gallery</a>

                    <div  class="list">
				       <a href="temple of nepal.php" class="w3-bar-item w3-button">Temples of Nepal</a><br>
					   <a href="budha.php" class="w3-bar-item w3-button">Budda</a><br>
					   <a href="nature of nepal.php" class="w3-bar-item w3-button">Nature of Nepal</a><br>
					   <a href="nepali foods.php" class="w3-bar-item w3-button">Nepali Foods</a><br>
					</div></div></li>

						<li ><div class="show"> <a href="#">Services</a>

					<div  class="list">
				       <a href="ticket_booking.php" ">Ticket Book</a><br>
					   <a href="budha.php" ">Hotels</a><br>
					   <a href="nature of nepal.php"">Home Stay</a><br>
					   <a href="nepali foods.php" ">Guide Hiring</a><br>
					</div></div></li>

				<li><a href="about.php">Abou us</a></li>
				<li><a href="index.php">Log out</a></li>
				</ul></div>
				<div class="header"><h1>Welcome to Buddha Quotes Gallery</h1></div>
				<hr/>

	<div class="respons">
		<div class="gallery">
			<a href="gallery/budha quotes/img1.jpg"><img src="gallery/budha quotes/img1.jpg" height="200px" width="300px" ></a>
			<a href="gallery/budha quotes/img2.jpg"><img src="gallery/budha quotes/img2.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img3.jpg"><img src="gallery/budha quotes/img3.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img4.jpg"><img src="gallery/budha quotes/img4.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img5.jpg"><img src="gallery/budha quotes/img5.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img6.jpg"><img src="gallery/budha quotes/img6.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img7.jpg"><img src="gallery/budha quotes/img7.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img8.jpg"><img src="gallery/budha quotes/img8.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img9.jpg"><img src="gallery/budha quotes/img9.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img10.jpg"><img src="gallery/budha quotes/img10.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img11.jpg"><img src="gallery/budha quotes/img11.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img12.jpg"><img src="gallery/budha quotes/img12.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img13.jpg"><img src="gallery/budha quotes/img13.jpg" height="200px" width="300px"></a>
			<a href="gallery/budha quotes/img14.jpg"><img src="gallery/budha quotes/img14.jpg" height="200px" width="300px"></a>
            <a href="gallery/budha quotes/img15.jpg"><img src="gallery/budha quotes/img15.jpg" height="200px" width="300px"></a>
            <a href="gallery/budha quotes/img16.jpg"><img src="gallery/budha quotes/img16.jpg" height="200px" width="300px"></a>
            <a href="gallery/budha quotes/img17.jpg"><img src="gallery/budha quotes/img17.jpg" height="200px" width="300px"></a>
			
		</div>
	</div>


</body>
</html>