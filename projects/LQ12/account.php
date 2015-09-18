<?php session_start() ?>
<h2><u> WELCOME  </u></h2>

Welcome <?php echo $_SESSION['user']; ?>
You are currently registered for the following events:
<br />
<?php

	$part_record;
	$con = mysql_connect("localhost","jin","abc123");
	mysql_select_db("jin", $con);
	if (!$con)  {  die('Could not connect: ' . mysql_error());  }
	$participate =  mysql_query( "select * from events where username = '".$_SESSION['user']."'");
	$i=0;
	while($row = mysql_fetch_array($participate))
	{
			if(	$row['robowar']=="1") 	 {	$part_record[$i]='Robowars';	$i++;	}
			if( $row['kuru']=="1"	)	 {	$part_record[$i]='Kurukshetra';		$i++;	}
			if( $row['roboso']=="1"	)	 {	$part_record[$i]='Robo Soccer';		$i++;	}
			if( $row['solv']=="1"	)	{	$part_record[$i]='Solvation';		$i++;	}
			if( $row['line']=="1"	)	{	$part_record[$i]='Line Follower';		$i++;	}
			if( $row['wrest']=="1"	)	{	$part_record[$i]='Wrestle Mania';		$i++;	}
			if( $row['picasso']=="1")	{	$part_record[$i]='Picasso';		$i++;	}
			if( $row['deep']=="1"	)	{	$part_record[$i]='Deep Blue';		$i++;	}
			if( $row['xxce']=="1"	)	{	$part_record[$i]='Xxcelerate';		$i++;	}
			if( $row['fullthrottle']=="1")	{	$part_record[$i]='Full Throttle';	$i++;	}
			
			if( $row['cryptic']=="1")	{	$part_record[$i]='Cryptic - "C"';		$i++;	}
			if( $row['crack']=="1"	)	{	$part_record[$i]='Crack-o-Mania';		$i++;	}
			if( $row['cad']=="1"	)	{	$part_record[$i]='CAD Master';			$i++;	}
			if( $row['tronixx']=="1")	{	$part_record[$i]='Circuit Mania';		$i++;	}
			if( $row['linspire']=="1")	{	$part_record[$i]='Linspire';	$i++;	}
			if( $row['micropad']=="1")	{	$part_record[$i]='Micropad';	$i++;	}
			
			if( $row['cs']=="1"		)	{	$part_record[$i]='Counter Strike';			$i++;	}
			if( $row['nfs']=="1"	)	{	$part_record[$i]='Meed For Speed';			$i++;	}
			if( $row['fifa']=="1"	)	{	$part_record[$i]='Pro Evolution Soccer';		$i++;	}
			
			if( $row['q']=="1"		)	{	$part_record[$i]='Q- Mastero';			$i++;	}
			if( $row['ad']=="1"		)	{	$part_record[$i]='Ad Mad Show';			$i++;	}
			if( $row['dummy']=="1"	)	{	$part_record[$i]='Dummy Market';		$i++;	}
			if( $row['nirmaan']=="1")	{	$part_record[$i]='Nirmaan';		$i++;	}
			
			if( $row['sudoku']=="1"	)	{	$part_record[$i]='Sudoku';		$i++;	}
			if( $row['artifex']=="1")	{	$part_record[$i]='Artifex';		$i++;	}
			if( $row['photophonics']=="1")	{	$part_record[$i]='Photophonics';	$i++;	}
			if( $row['trumble']=="1")	{	$part_record[$i]='Trumble the Genre';	$i++;	}
	}
	echo '<ul>';
	for( $j=0;$j<$i;$j++)
	{
		echo	"<li>".$part_record[$j] . "</li>";
	}
	echo "</ul>";

?>
<br />
Check the events you want to participate in:<br /><br />

<form action="recieve_events.php"	method="post" >

<div id="event_select">
<h4>SHOURYA:</h4>
<label>	<input type="checkbox"	name="robowar"	 />		Robo Wars	</label> <br />
<label>	<input type="checkbox"	name="kuru"	 />			Kurukshetra	</label><br />
<label>	<input type="checkbox"	name="roboso"	 />		Robo soccer league	</label><br />
<label>	<input type="checkbox"	name="solv"	 />			Solvation	</label><br />
<label>	<input type="checkbox"	name="line"	 />			Line follower	</label><br />
<label>	<input type="checkbox"	name="wrest"	 />		Wrestlemania </label><br />
<label>	<input type="checkbox"	name="picasso"	 />		Picasso	</label><br />
<label>	<input type="checkbox"	name="deep"	 />			Deep Blue	</label><br />
<label>	<input type="checkbox"	name="xxce"	 />			Xxcelarate	</label><br />
<label>	<input type="checkbox"	name="fullthrottle"	 />	Full Throttle	</label><br />

</div>


<div	id="event_select">
<h4>PARAKRAMA:</h4>
<label>	<input type="checkbox"	name="cryptic"	 />		Cryptic- C	</label><br />
<label>	<input type="checkbox"	name="crack"	 />		Crack-o-mania	</label><br />
<label>	<input type="checkbox"	name="cad"	 />			CAD Master	</label><br />
<label>	<input type="checkbox"	name="tronixx"	 />		Circuit Mania	</label><br />
<label>	<input type="checkbox"	name="linspire"	 />		Linspire	</label><br />
<label>	<input type="checkbox"	name="micropad"	 />		µ - PAD	</label><br />
</div>


<div	id="event_select">
<h4>KAUSHALYA:</h4>
<label>	<input type="checkbox"	name="cs"	 />			Counter strike 1.6	</label><br />
<label>	<input type="checkbox"	name="nfs"	 />			Need for speed	</label><br />
<label>	<input type="checkbox"	name="fifa"	 />			Pro Evolution Soccer 2011</label><br />
</div>


<div	id="event_select">
<h4>KAUTILYA:</h4>
<label>	<input type="checkbox"	name="q"	 />			Q- Maestro	</label><br />
<label>	<input type="checkbox"	name="ad"	 />			Ad- mad Show	</label><br />
<label>	<input type="checkbox"	name="dummy"	 />		Dummy Market</label><br />
<label>	<input type="checkbox"	name="nirmaan"	 />		Nirmaan</label><br />
</div>


<div	id="event_select">
<h4>BOUDDHIKI:</h4>
<label>	<input type="checkbox"	name="sudoku"	 />		Sudoku	</label><br />
<label>	<input type="checkbox"	name="artifex"	 />		Artifex	</label><br />
<label>	<input type="checkbox"	name="photophonics"	 />	Photophonics	</label><br />
<label>	<input type="checkbox"	name="trumble"	 />		Trumble the Genre	</label><br />
</div>
<br />
<input type="submit" />
</form>