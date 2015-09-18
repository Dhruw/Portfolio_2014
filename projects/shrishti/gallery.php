<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Shrishti Institute</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="main">
		<div class="menu_nav">
			<div class="menu_nav_resize">
				<ul>
					<li ><a href="index.php">Home</a></li>
					<li><a href="vision.php">Vision</a></li>
					<li ><a href="courses.php">Courses Offered</a></li>
					<li class="active"><a href="gallery.php">Achiever's Gallery</a></li>
					<li ><a href="contact.php">Contact Us</a></li>
					<!--<li ><a href="register.php" style="color:#000066">Register Yourself </a></li> -->
				</ul>
			</div>
		</div>
			<?php include("head.php");	?>
	  	  <div class="content">
			<div class="content_resize">
					<H2><U>ACHIEVERS GALLERY</U></H2>
					<div class="mainbar">
						<div class="article">
						<h2>The glory written by the creed of excellence . . . </h2>
						<div style="float:left; width:600px; text-align:center;">
							<img src="images/Achievers/1.jpg" style="border:2px solid;" />
							<ul style="list-style-type:none; font-weight:900; font-size:15px;">
								<li>	Shailendra Bhagat	</li>
								<li>	IIT - Dhanbad</li>
							</ul>
						</div>
						<img src="side/8.jpg" style="border:none; float:right;" />
						<hr style="clear:both;" />											
						<h3> CENTRAL BOARD OF SECONDARY EDUCATION ACHIEVERS: </h3>
						<?php 
								for( $i=101 ; $i<=108; $i++)
								{
								echo "<div id=\"pic\">";
								echo "<img src=\"images/Achievers/CB" . $i .".jpg\" />";
								include("images/Achievers/CB" . $i . ".php");
								echo "</div>";
								}
								for( $i=121 ; $i<=122; $i++)
								{
								echo "<div id=\"pic\">";
								echo "<img src=\"images/Achievers/CB" . $i .".jpg\" />";
								include("images/Achievers/CB" . $i . ".php");
								echo "</div>";
								}
						?>
						<hr style="clear:both;" />				
						<h3> CHHATTISGARH BOARD ACHIEVERS: </h3>
						<?php 
								for( $i=101 ; $i<=103; $i++)
								{
								echo "<div id=\"pic\">";
								echo "<img src=\"images/Achievers/CG" . $i .".jpg\" />";
								include("images/Achievers/CG" . $i . ".php");
								echo "</div>";
								}
								for( $i=121 ; $i<=125; $i++)
								{
								echo "<div id=\"pic\">";
								echo "<img src=\"images/Achievers/CG" . $i .".jpg\" />";
								include("images/Achievers/CG" . $i . ".php");
								echo "</div>";
								}
						?>
<!--					  matter  -->
						</div>
					</div>
				<div class="clr"></div>
			</div>
		</div>
			
<?php include("footer.php"); ?>