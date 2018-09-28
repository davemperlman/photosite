<?php 
if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) {
	$indexClass = 'index-page';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		<?php  echo $title; ?>
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="_css/main.css">
	<link rel="stylesheet" type="text/css" href="_css/gallery.css">
	<script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
</head>
<body id="main" class="<?php if (strpos($_SERVER['SCRIPT_NAME'], 'index.php') !== false) { echo 'index'; } ?>">
	<div id="mySidenav" class="sidenav">
	  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	  <a href="realestate.php">Real Estate</a>
	  <a href="landscape.php">Landscape</a>
	  <a href="#">Lifestyle</a>
	  <a href="contact.php">Contact</a>
	</div>

	<!-- Use any element to open the sidenav -->
	<span id="menu" onclick="openNav()">&#9776;</span>

	<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
		<div class="brand">
			<a href="index.php">Dave Perlman <br> <strong>Commercial Photographer</strong></a>
		</div>