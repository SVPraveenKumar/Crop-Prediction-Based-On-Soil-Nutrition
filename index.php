<?php
include "connection.php";
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

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="456.jpg">
				<div class="inner">
					<header>
						<h1>CROP PREDICTION BASED ON SOIL NUTRITION</h1>
					</header>
				</div>
				<a href="#one" class="more">Learn More</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="crop.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>CROPS</h2>
							
						</header>
						<div class="content">
							<p>A crop is a plant or animal product that can be grown and harvested extensively for profit or subsistence.[1] Crop may refer either to the harvested parts or to the harvest in a more refined state. Most crops are cultivated in agriculture or aquaculture. A crop is usually expanded to include macroscopic fungus (e.g. mushrooms), or alga (algaculture).

Most crops are harvested as food for humans or fodder for livestock. Some crops are gathered from the wild (including intensive gathering, e.g. ginseng).</p>
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
							<h2>SOIL</h2>
							
						</header>
						<div class="content">
							<p>The pedosphere interfaces with the lithosphere, the hydrosphere, the atmosphere, and the biosphere.[1] The term pedolith, used commonly to refer to the soil, translates to ground stone in the sense "fundamental stone".[2] Soil consists of a solid phase of minerals and organic matter (the soil matrix), as well as a porous phase that holds gases (the soil atmosphere) and water (the soil solution).[3][4][5] Accordingly, soil scientists can envisage soils as a three-state system of solids, liquids, and gases.</p>
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
							<h2>SOIL NUTRIENTS</h2>
						</header>
						<div class="content">
							<p>Seventeen elements or nutrients are essential for plant growth and reproduction. They are carbon C, hydrogen H, oxygen O, nitrogen N, phosphorus P, potassium K, sulfur S, calcium Ca, magnesium Mg, iron Fe, boron B, manganese Mn, copper Cu, zinc Zn, molybdenum Mo, nickel Ni and chlorine Cl.[503][504][505] Nutrients required for plants to complete their life cycle are considered essential nutrients. Nutrients that enhance the growth of plants but are not necessary to complete the plant's life cycle are considered non-essential. With the exception of carbon, hydrogen and oxygen, which are supplied by carbon dioxide and water, and nitrogen, provided through nitrogen fixation,[505] the nutrients derive originally from the mineral component of the soil.</p>
						</div>
						<footer>
							<a href="https://en.wikipedia.org/wiki/Soil#Nutrients" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#four" class="more">Learn More</a>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper post bg-img" data-bg="lls.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h1>WELCOME</h1>
							
						</header>
						<div class="content">
							<p>IN THIS WEBSITE WE WOULD HELP YOU TO GROW THE USEFUL CROP IN YOUR LOCATION. ACCORDING TO THE SOIL NUTRIENTS PRESENT YOUR LOCATION.</p>
						</div>
						<footer>
<h2>GET STARTED</h2>

							<a href="login.php" class="button alt">LOG IN</a>
<a href="signup.php" class="button alt">SIGN UP</a>
						</footer>
					</article>
				</div>
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