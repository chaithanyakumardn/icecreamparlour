<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<title>Website Template</title>
	<meta charset="utf-8">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<!--[if IE 6]>
		<link href="css/ie6.css" rel="stylesheet" type="text/css">
	<![endif]-->
	<!--[if IE 7]>
	<link href="css/ie7.css" rel="stylesheet" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="page">
		<div id="sidebar"> <a href="welcome.php"><img id="logo" src="images/logo.gif" width="171" height="239" alt=""></a>
			<h2>FLAVOR OF THE DAY</h2>
			<ul>
				<li>
					<a href="flavors.html"><img src="images/strawberry-delight.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Strawberry Delight</a></h3>
				</li>
			</ul>
			<h2>POPULAR FLAVORS</h2>
			<ul>
				<li>
					<a href="flavors.html"><img src="images/tropical-mango.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Tropical Mango</a></h3>
				</li>
				<li>
					<a href="flavors.html"><img src="images/rich-chocolate.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Rich Chocolate</a></h3>
				</li>
				<li>
					<a href="flavors.html"><img src="images/sour-rasberry.gif" width="165" height="165" alt=""></a>
					<h3><a href="flavors.html">Sour Rasberry</a></h3>
				</li>
			</ul>
		</div>
		<div id="content"> 
			<!-- start of header -->
			<div id="header">
				<ul class="navigation">
					<li>
						<a href="http://localhost/phpproject/icecreamwebsitetemplate/about.html">About Us</a>
					</li>
					<li>
						<a href="http://localhost/phpproject/icecreamwebsitetemplate/flavors.html">Flavors</a>
					</li>
					<li>
						<a href="http://localhost/phpproject/icecreamwebsitetemplate/dessert.html">Dessert Recipes</a>
					</li>
					<li>
						<a href="http://localhost/phpproject/icecreamwebsitetemplate/blog.html">Blog</a>
					</li>
					<li>
						<a href="http://localhost/phpproject/icecreamwebsitetemplate/contact.html">Contact Us</a>
					</li>
					<li>
						<a href="http://localhost/phpproject/logout.php">Logout</a>
						
					</li>
					
				</ul>
				
			</div>
			<!-- end of header --> 
			<!-- start of class content -->
			<div class="content"> 
				<!-- start of slider-->
				<div class="slider">
					<ul>
						<li>
							<a href="flavors.html"><img src="images/fruit-toppings.gif" width="680" height="200" alt="Frosty Sweet" title="Frosty Sweet"></a>
						</li>
					</ul>
					<div class="footer">
						<ul>
							<li>
								<a href="flavors.html"><img src="images/button-slider1.gif" width="24" height="24" alt="Frosty Sweet" title="Frosty Sweet"></a>
							</li>
							<li>
								<a href="flavors.html"><img src="images/button-slider2.gif" width="24" height="24" alt="Frosty Sweet" title="Frosty Sweet"></a>
							</li>
							<li>
								<a href="flavors.html"><img src="images/button-slider3.gif" width="24" height="24" alt="Frosty Sweet" title="Frosty Sweet"></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- end of slider --> 
				<!-- start of featured-->
				<div class="featured">
					<ul>
						<li>
							<a href="flavors.html"><img src="images/free-ice-cream-sampling.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.html">Free Ice Cream Sampling</a></h2>
						</li>
						<li>
							<a href="flavors.html"><img src="images/ice-cream-for-occasions.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.html">Ice Cream For Every Occasion</a></h2>
						</li>
						<li>
							<a href="flavors.html"><img src="images/fat-free-ice-cream.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.html">Fat Free Ice Cream</a></h2>
						</li>
						<li>
							<a href="flavors.html"><img src="images/ice-cream-recipes.jpg" width="340" height="167" alt="Frosty Sweet" title="Frosty Sweet"></a>
							<h2><a href="flavors.html">Ice Cream Recipes</a></h2>
						</li>
					</ul>
				</div>
				<!-- end of featured--> 
				<!-- start of section-->
				<div class="section">
					<div class="about">
						
					</div>
					<div class="connect"><a href="welcome.php"><img src="images/sign-board.gif" width="234" height="222" alt=""></a>
						
					</div>
				</div>
				<!-- end of section--> 
				<!-- start of article comment-->
				<div class="section">
					<h2>Sweet words from our clients</h2>
					<div class="comment">
						
				</div>
				<!-- end of article comment--> 
			</div>
			<!-- end of class content -->
			<div id="footer">
				<ul>
					<li>
						<a href="welcome.php">Home</a>
					</li>
					<li>
						<a href="about.html">About Us</a>
					</li>
					<li>
						<a href="welcome.php">Flavors</a>
					</li>
					<li>
						<a href="dessert.html">Dessert Recipes</a>
					</li>
					<li>
						<a href="contact.html">Contact Us</a>
					</li>
				</ul>
				<span>&copy;2011 <a href="welcome.php">Frost Sweets Gourmet Ice Cream</a> All Rights Reserved</span>
				<ul class="connect">
					<li>
						FOLLOW US:
					</li>
					<li>
						<a class="facebook" href="http://www.freewebsitetemplates.com/go/facebook">&nbsp;</a>
					</li>
					<li>
						<a class="twitter" href="http://www.freewebsitetemplates.com/go/twitter/">&nbsp;</a>
					</li>
					<li>
						<a class="email" href="http://www.freewebsitetemplates.com/misc/contact">&nbsp;</a>
					</li>
					<li>
						<a class="googleplus" href="http://www.freewebsitetemplates.com/go/googleplus/">&nbsp;</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- end of ID content--> 
	</div>
</body>
</html>