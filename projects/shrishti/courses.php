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
					<li ><a href="vision.php">Vision</a></li>
					<li class="active"><a href="courses.php">Courses Offered</a></li>
					<li ><a href="gallery.php">Achiever's Gallery</a></li> 
					<li ><a href="contact.php">Contact Us</a></li>
				<!--	<li ><a href="register.php" style="color:#000066">Register Yourself </a></li> -->
				</ul>
			</div>
		</div>
			<?php include("head.php");	?>
	  	  <div class="content">
			<div class="content_resize">
		  <h2><U>COURSES OFFERED</U></h2>
					<div class="mainbar">
						<div class="article">
<!--					  matter  -->
		<script type="text/javascript" >
			function f(a)
			{
				f2();
				document.getElementById(a).style.display='block';
			}
			
			function f2()
			{
				document.getElementById('science').style.display='none';
				document.getElementById('commerce').style.display='none';
				document.getElementById('Engg').style.display='none';
				document.getElementById('Special').style.display='none';
			}
		</script>

						<ul class="c_list" style="margin-top:-10px;">
							<li onclick="f('science')">	Science Group	</li>
						<!--	<li onclick="f('commerce')">	Commerce Group	</li>  -->
							<li onclick="f('Engg')">	Engineering	Group	</li>
							<li onclick="f('Special')">	Special Classes		</li>
						</ul>
							<br style="clear:both"/>
							<div class="Course" style="margin-top:-10px;">
								<div id="science" style="width:900px;;" >
										<u><h3>Science Group</h3></u>
										<hr />
											<img src="side/2.jpg" style="border:none; float:right;" />
										<ul>
											<li>Class IX
												<ul id="sub_l">
													<li>Maths</li>
													<li>Science</li>
													<li>English</li>
												</ul>
											</li>
											<li>Class X</li>
												<ul id="sub_l">
													<li>Maths</li>
													<li>Science</li>
													<li>English</li>
												</ul>
											<li>Class XI &amp; XII </li>
												<ul id="sub_l">
													<li>Physics</li>
													<li>Chemistry</li>
													<li>Maths</li>
													<li>Boilogy</li>
													<li>English</li>
													<li>Engineering Drawing (ED)</li>
													<li>Computer Science (C, C++)</li>
													<li>Informatics Practices </li>
												</ul>
										</ul>
								</div>
		
								<div id="commerce" style="display:none; width:900px;;" >
										<u><h3>Commerce Group</h3></u>
										<hr />
											<img src="side/1.jpg" style="border:none; float:right;" />
											<ul>
												<li>XI</li>
												<li>XII</li>
												<li>CPT</li>
												<li>CA</li>
												<li>CS</li>
												<li>BBA</li>
												<li>B. Com</li>
												<li>MBA</li>
											</ul>
								</div> 
								<div id="Engg" style="display:none; width:900px;;" >
										<u><h3>Engineering Group (For all branches)	</h3></u>
										<hr />
											<img src="side/3.jpg" style="border:none; float:right;" />
										<b>
										<ul style="margin-left:30px;">
											<li>Engineering Mechanics</li>
											<li>Basic Mechanical Engineering</li>
											<li>Programming in "C"</li>
											<li>Object Oriented Programming with "C++"</li>
											<li>Engineering Mathematics 1</li>
											<li>Engineering Mathematics 2</li>
											<li>Engineering Mathematics 3</li>
											<li>Discreet Structures</li>
										</ul>
										</b>
										<u><h3>Engineering Group (Electronics &amp; Telecommunications )	</h3></u>
										<hr />
										<table style="border-collapse:collapse;" id="E_table">
										<tr><td> <b><u> SEMESTER </u></b> </td><td> <u><b> SUBJECT  </b></u></td></tr>
										<tr><td>3<sup>rd</sup> Semester	</td><td>	<ul>
																						<li> Basic Electronics	</li>
																						<li> Network Analysis	</li>
																					</ul>	</td></tr>
										<tr><td>4<sup>th</sup> Semester	</td><td>	<ul>
																						<li> Analog Electronics	</li>
																						<li> Digital Electronics	</li>
																						<li> Signals &amp; Systems	</li>
																					</ul>		</td></tr>
										<tr><td>5<sup>th</sup> Semester	</td><td>	<ul>
																						<li> Communication Systems - 1	</li>
																						<li> Microprocessors &amp; Interfaces 8085	</li>
																						<li> Automatic Control Systems	</li>
																						<li> Linear Integrated Circuits (LIC)	</li>
																					</ul>		</td></tr>
										<tr><td>6<sup>th</sup> Semester	</td><td>	<ul>
																						<li> Communication Systems - 2	</li>
																						<li> Microprocessors &amp; Interfaces 8086	</li>
																					</ul>		</td></tr>
										<tr><td>7<sup>th</sup> Semester	</td><td>	<ul>
																						<li> Microcontroler 8051	</li>
																					</ul>		</td></tr>
										<tr><td>8<sup>th</sup> Semester	</td><td>	<ul>
																						<li> VLSI Design	</li>
																						<li> Power Electronics	</li>
																					</ul>		</td></tr>
										</table>
								</div>
								<div id="Special" style="display:none; width:900px;;" >
										<u><h3>Special Classes</h3></u>
										<hr/>
											<img src="side/4.jpg" style="border:none; float:right;" />
											<b>
											<ul style="margin-top:30px; font-size:15px; ">
												<li style="margin-bottom:10px;">Bank ( IBPS PO &amp; Clerk )</li>
												<li style="margin-bottom:10px;"> Campus Placement </li>
												<li style="margin-bottom:10px;">Spoken English &amp; Personality Development </li>
												<li style="margin-bottom:10px;">Railway</li>
												<lI style="margin-bottom:10px;">SSC</lI>
											</ul>
											</b>
								</div>
							</div>
						</div>
					</div>
				<div class="clr"></div>
			</div>
		</div>
			
<?php include("footer.php"); ?>