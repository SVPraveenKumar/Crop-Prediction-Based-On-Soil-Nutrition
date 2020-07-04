<?php
include "connection.php";
?>



<?php
$per=$_GET['per'];
$nut=$_GET['nut'];
$crop=$_GET['crop'];
?>

<!DOCTYPE HTML>

	<head>
		<title>Crop Prediction Based On Soil Nutrition</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<li><a href="elements.html">Elements</a></li>
				</ul>
			</nav>

		

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="crop.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>THE CROP BEST SUITED FOR YOU IS TO GROW IN YOUR TOWN IS - [<?php echo $crop?> ]BY SELECTING TIS CROP AND GROWING THIS CROP WILL HELP YOU TO GET PROFIT. </h2>
							
						</header>
						<div class="content">
							


						
						</div>
						<footer>
							<a href="https://en.wikipedia.org/wiki/Crop" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#two" class="more">Learn More</a>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="soil.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>THE SOIL NUTRIENT PRESENT IN YOUR TOWN IS - [<?php echo $nut ?>] AND THE SOIL NUTRIENT PERCENTAGE IS - [<?php echo $per ?>]</h2>
							
						</header>
						<div class="content">
							
						</div>
						<footer>
							<a href="https://en.wikipedia.org/wiki/Soil" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#three" class="more">Learn More</a>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper post bg-img" data-bg="nut.jpg">
				<div class="inner">
					<article class="box">
						<header>
							
						<div class="content">
							
						</div>
						<footer>
							<a href="https://en.wikipedia.org/wiki/Soil#Nutrients" class="button alt">Learn More</a><br><br>
							<a href="logged.php" class="button alt">Go Back</a><br><br>
							<a href="index.php" class="button alt">LOG OUT</a>
						</footer>
					</article>
				</div>
				<a href="#four" class="more">Learn More</a>
			</section>

		

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h2>Contact Me</h2>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input class="btn btn-default" type="submit"  onsubmit="validate()" name="submit" value="send" style="color: black; width: 1000px; height: 100px"> </div></li>
						</ul>
					</form>

					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-instagram"><span class="label">Instagram</span></a></li>
					</ul>

					
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<?php

if(isset($_POST['submit']))
{
  $count=0;
  $sql="SELECT username from `signup`";
  $res=mysqli_query($db,$sql);

 
  if($count==0)
  {
    mysqli_query($db,"INSERT INTO `feedback` VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]');");
  ?>
    <script >
     alert("feedback successful");
    </script>
    
  <?php
  }
  else
  {

    ?>
      
      
    <?php

  }

}

?>
	</body>
</html>
