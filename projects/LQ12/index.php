<?php
session_start();
if (isset($_POST['submit']))
{
	$con = mysql_connect("localhost","jin","abc123");
	mysql_select_db("jin", $con);
	if (!$con)  {  die('Could not connect: ' . mysql_error());  }
	$qu= 'Select * from test2 where uname=\''.$_POST['username'].'\'';
	$result = mysql_query( $qu );
	while($row = mysql_fetch_array($result))
	{
		$chk_user= $row['uname'];
		$chk_pass= $row['hashed_password'];
	}
	if( $chk_user == $_POST['username'] && $chk_pass == $_POST['password'])
	$_SESSION['user']= $_POST['username'];
}
?>

<html>
<head>
<title> Laqshya 2012 - hunt for the target </title>
<meta name="Divyanshu Dhruw,Divyanshu,Dhruw,Laqshya,CSIT" http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Untitled Document</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="files/favicon.jpg">
<script src="files/jsc.php" type="text/javascript" > </script>
<script src="files/ctnt.php" type="text/javascript" > </script>
</head>

<body onLoad="initialize(); start(); homer(); spanim();">
  <div id="header"   >
        <div id="up_drawer">
			<blink>	UPDATES: </blink>
			<marquee   behavior="scroll" direction="up" scrollamount="1" scrolldelay="2" onMouseOver="stop()" onMouseOut="start()" height="100px;" >
            <?php
				include( "upd.php");
			?>
            </marquee >
	    </div>
        <img id="uparow" src="files/arrowdwn.gif" style="margin-top:-10px; margin-left:10%; cursor:pointer;" onClick="hdr_down('header')"/>
                <ul id="hmenu" >
                    <li onClick="homer(); up_set_view(); document.body.style.backgroundImage= 'url(files/s/shome.jpg)'; ">	Home</li>
                    <li onClick=" up_set_view(); document.getElementById('main').style.display='block'; document.getElementById('hdr').style.display='none'; document.body.style.backgroundImage= 'url(files/s/sevents.jpg)'; ">	Events</li>
					<li onClick="megashow(); up_set_view(); document.body.style.backgroundImage= 'url(files/s/smega.jpg)';" > Megashow </li>
                    <li onClick="gallery(); up_set_none(); document.body.style.backgroundImage= 'url(files/s/sgallery.jpg)';" > Gallery </li>
                    <li onClick="sponsor(); up_set_view(); document.body.style.backgroundImage= 'url(files/s/ssponsor.jpg)';"> Sponsors </li>
                    <li onClick="genrule(); up_set_view(); document.body.style.backgroundImage= 'url(files/s/srules.jpg)';">	General Rules </li>
                    <li onClick="contactus(); up_set_view(); document.body.style.backgroundImage= 'url(files/s/scus.jpg)';">	Contact Us</li>
                    <li style="width:130px;" ><a href="form.pdf" style="color:#F00; width:170px; text-decoration:underline;" target="_blank" >	Registration Form </a></li>
                    <?php /*
						if( !isset($_SESSION['user'])	)
	                   	{
							echo "<li onClick=\"registration(); document.body.style.backgroundImage= 'url(files/s/sregister.jpg)';\" style=\"color:#F00; width:70px;\">	Register</li>";
                    		echo "<li onClick=\"login(); document.body.style.backgroundImage= 'url(files/s/slogin.jpg)';\" style=\"color:#F00; width:70px;\"> | Login </li>";
						} */
					?>
                </ul>       
    </div>

    <div id="content" >
    	<div id="up_banner_set" >                  <div style="width:356px; float:left; padding-bottom:10px;" >
                      <img src="files/CSIT.png" style="float:left;" />
                      <i style="margin-top:20px; width:150px; float:left; padding-left:30px; ">	Presents . . . </i>
                      <img src="files/lq.png" style=" float:left; margin-top:-12px;" />
                      <i style="float:left; width:350px;">	in asssociation with </i>
                      <div style="margin-top:20px; width:350px; ">
                      <a href="http://www.netratva.com" target="_blank">    <img src="files/netratvasmall.jpg" style="float:left;" border="0" /></a>
                      <div style="float:left; margin-left:10px; margin-top:10px;" > & </div>
                      <img src="files/raw.png" style="float:right; margin-top:0px;"/>
                         
                      </div>
                  </div>
                  <div id="hdr" style="float:right">
                      <img id="play" src="files/1.jpg" width="436" style="width:436px;" />
						    <div id="spon_slid">
							<center>	<b><u> SPONSORS </u></b>	</center>
								<img src="files/sponsors/1.jpg" id="spon_img1" style="margin:auto;" />
								<img src="files/sponsors/2.jpg" id="spon_imgb" />  
							</div>
                  </div>
                 <div id="main" style="float:right">
                      <div id="sub1" onClick="slide('1'); document.title='Laqshaya 2012 - Shourya';  " >
                              <img src="files/shourya.jpg" style="float:left; cursor:pointer;" />
                          <div id="in1" style="background-image:url(files/shobk.jpg); background-position:right; background-repeat:no-repeat; " >
                                <ul id="x">
                                      <li onClick="gladiator()">		Robo Wars <!-- Gladiator -->		</li>
                                      <li onClick="kuru()">			| Kurukshetra	</li>
                                      <li onClick="roboso()">			Robo soccer league </li>
                                      <li onClick="solv()">			| Solvation</li>
                                      <li onClick="line()">			Line follower</li>
                                      <li onClick="wrest()">			| Wrestlemania</li>
                                      <li onClick="picasso()">		Picasso </li>
                                      <li onClick="deep()">			| Deep Blue </li>
                                      <li onClick="xxcele()">			| Xxcelarate</li>
                                      <li onClick="fullthrottle()">			Full Throttle</li>
                                </ul>
                            </div>
                      </div>
                      <div id="sub2" onClick="slide('2'); document.title='Laqshya 2012 - Parakram';" >
                              <img src="files/parakram.jpg" style="float:left; cursor:pointer;"/>
                          <div id="in2" style="background-image:url(files/parabk.jpg); background-position:right; background-repeat:no-repeat;">
                                <ul id="x">
                                      <li onClick="cryptic()">		Cryptic- C </li>
                                      <li onClick="crack()">			| Crack-o-mania </li>
                                      <li onClick="cadmaster()">			CAD Master</li>
                                      <li onClick="tronixx()">		| Circuit Mania </li>
                                      <li onClick="linspire()">		| Linspire </li>
                                      <li onClick="mupad()">		|µ - PAD</li>
                                </ul>
                          </div>
                      </div>
                      <div id="sub3" onClick="slide('3'); document.title='Laqshya 2012 - Kaushalya'" >
                              <img src="files/kaushalya.jpg" style="float:left; cursor:pointer;"/>
                          <div id="in3" style="background-image:url(files/kausbk.jpg); background-position:right; background-repeat:no-repeat;">
                                <ul id="x">
                                      <li onClick="counterstk()">		Counter strike 1.6</li>
                                      <li onClick="nfs()">			| Need for speed</li>
                                      <li onClick="fifa()">			Pro Evolution Soccer 2011.</li>
                                </ul>
                          </div>
                      </div>
                      <div id="sub4" onClick="slide('4'); document.title='Laqshya 2012 - Kautilya'" >
                              <img src="files/kautilya.jpg" style="float:left; cursor:pointer;"/>
                          <div id="in4" style="background-image:url(files/kautbk.jpg); background-position:right; background-repeat:no-repeat;">
                              <ul id="x">
                                      <li onClick="qmaster()">	Q- Maestro </li>
                                      <li onClick="ad()">			|Ad- mad Show</li>
                                      <li onClick="lqpremier()">		Dummy Market</li>
                                      <li onClick="nirmaan()"> 		| Nirmaan </li>
                              </ul>
                          </div>
                      </div>
                      <div id="sub5" onClick="slide('5'); document.title='Laqshya 2012 - Bouddhiki'" >
                              <img src="files/bouddhiki.jpg" style="float:left; cursor:pointer;"/>
                          <div id="in5" style="background-image:url(files/boudhbk.jpg); background-position:right; background-repeat:no-repeat;" >
                              <ul id="x">
                                      <li onClick="sudoku()">		Sudoku</li>
                                      <li onClick="artifex()">		|Artifex</li>
                                      <li onClick="photo()">		|Photophonics </li>
                                      <li onClick="trumble()">	| Trumble the Genre</li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <hr style="clear:both; " />
              <marquee>
              	<ul style="float:left">
                	<li style=" margin-left:20px; float:left;"> LAQSHYA NEWS : </li>
                	<li style="float:left; margin-left:20px;">Registration is open for 4th of March 2012 for every event & re-registration is also opened for same upto 4th march</li>
                    <li style="float:left; margin-left:20px;">Result is updated for 1st round for some events. Check the event's page for the results.</li>
                 </ul>
              </marquee>
              <hr style="clear:both; " />
                           <?php
								if( isset($_SESSION['user']))
								{
		                            echo "<div style=\"float:left; clear:both; width:100%; margin-top:-22px;\">";
        		      		          	echo "<ul style=\"list-style-type:none; cursor: pointer;\">";
               			        	  	   	echo "<li style=\"float:left; width:auto; margin-left:20px;\"><b style=\"color:#F00;\">Welcome : </b> " . $_SESSION['user'] . "</li>";
                 	    		    	   	echo "<a href=\"logout.php\" <li style=\"float:left; width:auto; margin-left:20px;\" > Sign Out </li> </a>";
/*											echo "<form action=\"logout.php\""
											echo "<input type=\"button\" value=\"Sign Out\" /> "; //	Sign out</li>";
											echo "
	*/			                    		echo "<li onClick=\"account(); document.body.style.backgroundImage= 'url(files/s/slogin.jpg)';\" style=\"float:left; width:auto; margin-left:20px;\color:#F00\"> Account </li>";
		                        	    echo "</ul>";
	        	                	echo "<hr style=\"clear:both;\" /></div>";
								}
							?>

           <div id="matter" style="clear:both; padding-top:15px;">
		</div>
    </div>
	<!--
    <div id="spon_slide">
    	<marquee direction="left" onMouseOver="stop()" onMouseOut="start()" behavior="scroll" scrollamount="4" scrolldelay="1" loop="0"  >
	  	<?php
			for( $spon = 1; $spon <=13 ; $spon++)
				echo "<img src=\"files/sponsors/".$spon .".jpg\" id=\"sp".$spon."\" />";
		?>
        </marquee>
    </div>
	-->
    <div id="footer" >
            <img id="dwnarow" src="files/arrowup.gif" style="margin-top:22px; margin-left:10%; position:inherit; cursor:pointer;" onClick="ftr_down('footer');" />
			<p style="width:50px; margin-left:20%; padding-top:5px; cursor:pointer; text-decoration:underline;" onClick="accomodation();">		ACCOMODATION </p>	
			<p style="width:200px; margin:auto; margin-top:-35px; padding-top:0px;">		&copy LAQSHYA 2012 </p>	
			<div style=" margin-left:70% ; margin-top:-19px;" >
				<a href="https://www.facebook.com/pages/CSIT-Laqshya-2012/354113157944886" target="_blank" style="color:#000000; font-weight:200;"><img src="files/fb.jpg" border="0"/> </a>
				<a href="https://twitter.com/#!/CSITLaqshya2012" style="float:left; color:#000000; font-weight:200;" target="_blank" ><img src="files/twitter.jpg" border="0" /></a>
			</div>
        <div id="dwn_drawer" style="margin-top:-10px;">
            <img src="files/clg.jpg" style="padding-top:10px;" />
			<table style=" float:right">
            <tr> <td>	Contact Number	</td><td>:	+91 788-2320884, +91 788-2229902 </td></tr>
            <tr><td>	Fax		</td><td>: +91 788-2334808</td></tr>
            <tr> <td>	Address</td><td>:	Shivaji Nagar, Balod Road, Durg,<br /> (Chhattisgarh), PIN-490001</td></tr>
            </table> 
            <div style="float:right"> Website Developed By: Divyanshu Dhruw </div>
            <div style="float:left">Website best Viewed in Mozilla Firefox, 1600x900px resolution.</div>
	    </div>
    </div>

</body>
</html>