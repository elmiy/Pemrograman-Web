<?php
    include 'config.php';
    include 'navbar.php';
?>

<html>
<head>
	<meta charset="utf-8" name="viewport" content="width-device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Voucher</title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'poppins', sans-serif;
		}
		.container{
			width: 100%;
			height: 100vh;
			background: #ffffff;
			display: flex;
			align-items: center;
		}
		.coupon-card{
			background: linear-gradient(135deg, #7158fe, #9d4de6);
			color: #fff;
			margin-left: 100px;
			margin-top: -150px;
			width: 35%;
			height: 50%;
			text-align: center;
			padding: 40px 80px;
			border-radius: 15px;
			box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.15);
			position: relative;
		}
		.coupon-card1{
			background: linear-gradient(135deg, #7158fe, #9d4de6);
			color: #fff;
			margin-left: 200px;
			margin-top: -150px;
			width: 35%;
			height: 50%;
			text-align: center;
			padding: 40px 80px;
			border-radius: 15px;
			box-shadow: 0 10px 10px 0 rgba(0, 0, 0, 0.15);
			position: relative;
		}
		.logo{
			width: 70px;
			border-radius: 8px;
			margin-bottom: 16px;
		}
		.coupon-card h3, .coupon-card1 h3{
			font-size: 28px;
			font-weight: 400;
			line-height: 40px;
		}
		.coupon-card h4, .coupon-card1 h4{
			font-size: 24px;
			font-weight: 400;
			line-height: 30px;
		}
		.coupon-card p, .coupon-card1 p{
			font-size: 15px;
			margin-bottom: 20px;
		}
		.coupon-row{
			display: flex;
			align-items: center;
			margin: 20px auto;
			width: fit-content;
		}
		#cpnCode, #cpnCode1{
			border: 1px dashed #fff;
			padding: 8px 16px;
			border-right: 0;
		}
		#cpnBtn, #cpnBtn1{
			border: 1px solid #fff;
			background : #fff;
			padding: 8px 16px;
			color: #7158fe;
			cursor: pointer;
		}
		.circle1, .circle2{
			background: #fff;
			width: 50px;
			height: 50px;
			border-radius: 50%;
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
		}
		.circle1{
			left: -25px;
		}
		.circle2{
			right: -25px;
		}
	</style>
</head>
<body>
	<div class="flex font-poppins font-regular pt-6 pl-8">
		<a href="pembayaran.php">
        <button>    
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
            </svg>
        </button>
    	</a>
        <span class="px-8 text-4xl">Voucher</span>
    </div>
	<div class="container">
		<div class="coupon-card">
			<center>
				<img src="diskon.png" class="logo" >
				<h3>Diskon 20%</h3>
				<h4>Untuk semua kategori</h4>
			</center>
			
			<div class="coupon-row">
				<span id="cpnCode">STEALDEAL20</span>
				<a href="pembayaran.php">
					<span id="cpnBtn">Claim</span>
				</a>
			</div>
			<p>Valid till : 22 Agustus 2022</p>
			<div class="circle1"></div>
			<div class="circle2"></div>
		</div>
		<div class="coupon-card1">
			<center>
				<img src="diskon.png" class="logo" >
				<h3>Diskon 20%</h3>
				<h4>Untuk semua kategori</h4>
			</center>
			<div class="coupon-row">
				<span id="cpnCode1">STEALDEAL20</span>
				<a href="pembayaran.php">
					<span id="cpnBtn1">Claim</span>
				</a>
			</div>

			<p>Valid till : 22 Agustus 2022</p>
			<div class="circle1"></div>
			<div class="circle2"></div>
		</div>
	</div>

	<script>
		var cpnBtn = document.getElementById("cpnBtn");
		var cpnCode = document.getElementById("cpnCode");
		cpnBtn.onclick = function(){
			navigator.clipboard.writeText(cpnCode.innerHTML);
			cpnBtn.innerHTML = "Claimed";
			setTimeout(function(){
				cpnBtn.innerHTML = "Claim";
			}, 3000);
		}
	</script>
	<script>
		var cpnBtn1 = document.getElementById("cpnBtn1");
		var cpnCode1 = document.getElementById("cpnCode1");
		cpnBtn1.onclick = function(){
			navigator.clipboard.writeText(cpnCode1.innerHTML);
			cpnBtn1.innerHTML = "Claimed";
			setTimeout(function(){
				cpnBtn1.innerHTML = "Claim";
			}, 3000);
		}
	</script>
</body>
</html>