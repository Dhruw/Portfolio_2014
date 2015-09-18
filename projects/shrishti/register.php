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
					<li ><a href="courses.php">Courses Offered</a></li>
					<li ><a href="contact.php">Contact Us</a></li>
				<!--	<li ><a href="gallery.php">Achiever's Gallery</a></li>  -->
					<li class="active" ><a href="register.php" style="color:#000066;" >Register Yourself </a></li>
				</ul>
			</div>
		</div>
<?php include("head.php");	?>
	  	  <div class="content">
			<div class="content_resize">
					<H2><U>REGISTRATION</U></H2>
					<div class="mainbar">
						<div class="article">
											<img src="side/6.jpg" style="border:none; float:right;" />

							<form method="post">
								<table>
								<tr><td>Name			</td><td>	<input type="text" name="uname" />		</td></tr>
								<tr><td>Address			</td><td>	<input type="text" name="address" />	</td></tr>
								<tr><td>Contact Number	</td><td>	<input type="text" name="number" />	</td></tr>
								<tr><td>e-mail			</td><td>	<input type="text" name="email" />	</td></tr>
								<tr><td>Educational Qualification	</td><td>	<input type="text" name="equal" />	</td></tr>
								<tr><td>Current Education		</td><td>		<input type="text" name="curedu" /></td></tr>
								<tr><td>Course Interested		</td><td>		<select name="course" >
																				<option>Science Group	</option>
																				<option>Commerce Group	</option>
																				<option>Engineering Group	</option>
																				<option>Special Classes	</option>
																				<option>	</option>
																				<option>	</option>
																				<option>	</option>
																				<option>	</option>
																				<option>	</option>
																				</select>	</td></tr>
								<tr><td>		</td><td>		</td></tr>
								<tr><td>		</td><td>		</td></tr>
								<tr><td>		</td><td>		</td></tr>
								<tr><td>		</td><td>		</td></tr>
								<tr><td>		</td><td>		</td></tr>
								<tr><td>		</td><td>		</td></tr>
								<tr><td>		</td><td>		</td></tr>
								</table>
								<input type="submit" value="Submit" />
							</form>

						</div>
					</div>
				<div class="clr"></div>
			</div>
		</div>	
<?php include("footer.php"); ?>