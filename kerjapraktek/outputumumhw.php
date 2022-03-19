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
			<h1><a href="index.html">TEXT PRE KONFIGURASI</a></h1>
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
        <p><a href="index.php">HOME </a> / <a href="service.php">PRE-KONFIG</a> /<a href="servicehw.php">SWITCH HUAWEI</a> / TEMPLATE PREKONFIG</p>
		</div>
	</section>
<body>
    <center> 
    <div class="container"><h3>COPY TEMPLATE BERIKUT </h3>
    <table border="1" cellpadding="10">
        <tr>
            <td> 
sysname <?php echo $_POST["hostname"];?><br>
vlan <?php echo $_POST["nms"];?> <br>
vlan <?php echo $_POST["service"];?> <br>
quit <br>
aaa <br>
 authentication-scheme default <br>
  authentication-mode hwtacacs local <br>
 authorization-scheme default <br>
  authorization-mode  hwtacacs local <br>
  authorization-cmd 0 hwtacacs local <br>
  authorization-cmd 1 hwtacacs local <br>
  authorization-cmd 7 hwtacacs local <br>
  authorization-cmd 15 hwtacacs local <br>
 accounting-scheme default <br>
  accounting-mode hwtacacs <br>
  accounting realtime 3 <br>
  accounting start-fail online <br>
 domain default <br>
 domain default_admin <br>
 local-user j2m password cipher multimedia123 <br>
 local-user j2m privilege level 15 <br>
 local-user j2m service-type telnet <br>
 local-user admin password cipher multimedia123 <br>
 local-user admin service-type http <br>
quit <br>
interface Vlanif <?php echo $_POST["nms"];?> <br>
ip address <?php echo $_POST["ip"];?> <?php echo $_POST["sm"];?> <br>
undo shutdown <br>
quit <br>
ip route-static 0.0.0.0 0.0.0.0 <?php echo $_POST["ip"];?> <br>
quit <br>
interface Ethernet0/0/1 <br>
port link-type access <br>
port default vlan <?php echo $_POST["service"];?> <br>
undo shutdown <br>
quit <br>
interface GigabitEthernet 0/0/1 <br>
port link-type trunk <br>
port trunk allow-pass vlan <?php echo $_POST["nms"];?> <?php echo $_POST["service"];?>
quit <br>
stelnet server enable <br>
user-interface con 0 <br>
 authentication-mode password <br>
 user privilege level 15 <br>
 set authentication password cipher multimedia123 <br>
user-interface vty 0 4 <br>
 authentication-mode aaa <br>
 user privilege level 15 <br>
 idle-timeout 30 0 <br>
quit <br>
quit <br>
save all <br>
Y <br>
Y <br>
</td>
</tr>
</table>
</center>
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
