@include ('navbar')

<html>
<head>
	<meta charset="utf-8" name="viewport" content="width-device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'poppins', sans-serif;
		}
		body{
			background-image: url('bg.png');
			background-size: cover;
		}
		.container{
			width: 100%;
			height: 100vh;
			display: flex;
			align-items: center;
		}
		.px-8{
			color: #fff;
		}
		.room-card1{
			background: #3C4599;
			color: #fff;
			margin-left: 70px;
			margin-top: -150px;
			width: 40%;
			height: 50%;
			text-align: center;
			padding: 40px 80px;
			padding-left: 40px;
			padding-right: 40px;
			border-radius: 15px;
			box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.15);
			position: relative;
		}
		.room-card2{
			background: #3C4599;
			color: #fff;
			margin-left: 140px;
			margin-top: -150px;
			width: 40%;
			height: 50%;
			text-align: center;
			padding: 40px 80px;
			padding-left: 35px;
			padding-right: 35px;
			border-radius: 15px;
			box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.15);
			position: relative;
		}
		.room-card3{
			background: #3C4599;
			color: #fff;
			margin-left: 140px;
			margin-top: -150px;
			width: 40%;
			height: 50%;
			text-align: center;
			padding: 40px 80px;
			padding-left: 35px;
			padding-right: 35px;
			border-radius: 15px;
			box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.15);
			position: relative;
		}
		.room-card1 h2, .room-card2 h2, .room-card3 h2{
			font-size: 28px;
			font-weight: 400;
			line-height: 40px;
		}
		.room-card1 h4, .room-card2 h4, .room-card3 h4{
			font-size: 18px;
			font-weight: 400;
			line-height: 25px;
			margin-top: 30px;
		}
		.room-card1 p, .room-card2 p, .room-card3 p{
			font-size: 15px;
			margin-bottom: 20px;
		}
		.room-row1, .room-row2, .room-row3{
			display: flex;
			align-items: center;
			margin: 20px auto;
			width: fit-content;
		}
		.cpnBtn{
			border: 1px solid #fff;
			background : #FAEFB1;
			padding: 8px 16px;
			color: #3C4599;
			cursor: pointer;
			margin-top: 30px;
			border-radius: 15px;
			width: 180px;
		}
	</style>
</head>
<body>
	<div class="flex font-poppins font-regular pt-6 pl-8">
        <span class="px-8 text-4xl">
        	Ciptakan ide kreatifmu!
        	<br>
			Temukan space sesuai kebutuhanmu...
    	</span>
    </div>
	<div class="container">
		<div class="room-card1">
			<center>
				<h2><b>PERSONAL</b></h2>
				<h4>Pesan fleksibel sesuai kebutuhanmu, mulai dari harian sampai bulanan</h4>
			</center>
			<div class="room-row1">
				<a href='trans'><span class="cpnBtn">Pesan</span></a>
			</div>
		</div>
		<div class="room-card2">
			<center>
				<h2><b>BERSAMA TIM</b></h2>
				<h4>Tanpa mikir operasional kantor, dapatkan fasilitas lengkap bersama tim-mu</h4>
			</center>
			<div class="room-row2">
			<a href='trans'><span class="cpnBtn">Pesan</span></a>
			</div>
		</div>
		<div class="room-card3">
			<center>
				<h2><b>RAME - RAME</b></h2>
				<h4>Rayakan event spesialmu dengan lokasi strategis dan fasilitas lengkap</h4>
			</center>
			<div class="room-row3">
			<a href='trans'><span class="cpnBtn">Pesan</span></a>
			</div>
		</div>
	</div>
</body>
</html>