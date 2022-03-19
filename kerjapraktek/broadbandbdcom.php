<!DOCTYPE html>
<html>
</script>
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
			<h1><a href="index.html">TEXT PRE-KONFIG</a></h1>
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
			<p><a href="index.php">HOME </a> / <a href="service.php">PRE-KONFIG</a> /<a href="servicebd.php">SWITCH BDCOM</a> / TEMPLATE PREKONFIG</p>
		</div>
	</section>
     


<body>
    <center> 
    <div class="container"><h3>COPY PREKONFIG BERIKUT </h3>
    <table border="1" cellpadding="10">
        <tr>
            <td>
Ena <br>
Config <br>
hostname <?php echo $_POST["hostname"];?><br>
Vlan <?php echo $_POST["nms"];?> <br>
! <br>
Vlan <?php echo $_POST["service"];?> <br>
! <br>
Int vl  <?php echo $_POST["nms"];?> <br>
 ip add <?php echo $_POST["ip"];?> <?php echo $_POST["sm"];?> <br>
! <br>
ip dhcp-relay snooping <br>
ip dhcp-relay snooping vlan <?php echo $_POST["service"];?> <br>
ip dhcp-relay snooping information option format manual <br>
! <br>
Int gi0/1 <br>
Switchport mode access <br>
Switchport pvid <?php echo $_POST["service"];?> <br>
dhcp snooping information circuit-id string <?php echo $_POST["sid"];?> <br>
dhcp snooping information append <br>
! <br>
Int gi0/9 <br>
Switchport mode trunk <br>
Switchport trunk vlan-allowed <?php echo $_POST["nms"];?>,<?php echo $_POST["service"];?> <br>
dhcp snooping trust<br>
! <br>
Ip route default <?php echo $_POST["route"];?> <br>
aaa authentication login default local <br>
aaa authentication enable default none <br>
aaa authorization exec default local <br>
Exit <br>
Wr <br>

</td>
</tr>
</table>
</center>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

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