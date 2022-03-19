<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>web kerja praktek hendriyana</title>
	<link rel="stylesheet" type="text/css" href="dekor.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	<header>
		<div class="container">
			<h1><a href="index.html">MULAI MEMBUAT TEMPLATE</a></h1>
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="about.php">ABOUT</a></li>
				<li class="active"><a href="service.php">PRE-KONFIG</a></li>
				<li><a href="contact.php">CONTACT</a></li>
			</ul>
		</div>
	</header>
	<!-- label -->
	<section class="label">
		<div class="container">
        <p><a href="index.php">HOME </a> / <a href="service.php">PRE-KONFIG</a> /<a href="serviceh3c.php">SWITCH H3C</a></p>
		</div>
	</section>
    
    <!-- service -->
    <body>
    <center>
    <section class="service">
		<div class="container"><h3>INPUT SESUAI KONFIGURASI</h3>
<table border="0" align="center">
    <form action="outputhw.php" method="post">
    <tr><td>Hostname Switch</td><td>     : <input type = "text" name="hostname"  size="50"required/></td></tr><br>
    <tr><td>Vlan NMS</td><td>        : <input type = "number" name="nms" size="25" required/></td></tr><br>
    <tr><td>Vlan Service</td><td>    : <input type = "number" name="service" size="25" required/></td></tr><br>
    <tr><td>IP NMS</td><td>          : <input type = "text" name="ip" size="25" required/></td></tr><br>
    <tr><td>Subnet Mask</td><td>     : <input type = "text" name="sm" size="25" required/></td></tr><br>
    <tr><td>IP Route</td><td>        : <input type = "text" name="route" size="25" required/></td></tr><br>
    <tr><td><input type="submit" value="NEXT"> <input type="reset" value="RESET" required/></tr></td> 
    </div>   
</form>
</center>
</table>
</section>
</body>
<!-- footer -->
<footer>
		<div class="container">
			<small>Copyright &copy; 2021 - Hendriyana. All Rights Reserved.</small>
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>

</body>
</html>