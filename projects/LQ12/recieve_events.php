<?php
session_start();
?>
<html>
<head>
<title> Event update</title>
</head>
<body>

<?php
$con = mysql_connect("localhost","jin","abc123");
mysql_select_db("jin", $con);
if (!$con)  {  die('Could not connect: ' . mysql_error());  }

$part_submit;
$m=0;

if( $_POST[robowar])	{	$eve['robowar']="1"; 	$part_submit[$m]='Robo Wars';		$m++;	}	else $eve['robowar']="0";
if( $_POST[kuru])		{	$eve['kuru']="1";		$part_submit[$m]='Kurukshetra';		$m++;	}	else $eve['kuru']="0";
if( $_POST[roboso])		{	$eve['roboso']="1";		$part_submit[$m]='Robo Soccer';		$m++;	}	else $eve['roboso']="0";
if( $_POST[solv])		{	$eve['solv']="1";		$part_submit[$m]='Solvation';		$m++;	}	else $eve['solv']="0";
if( $_POST[line])		{	$eve['line']="1";		$part_submit[$m]='Line Follower';		$m++;	}	else $eve['line']="0";
if( $_POST[wrest])		{	$eve['wrest']="1";		$part_submit[$m]='Wrestle Mania';		$m++;	}	else $eve['wrest']="0";
if( $_POST[picasso])	{	$eve['picasso']="1";	$part_submit[$m]='Picasso';		$m++;	}	else $eve['picasso']="0";
if( $_POST[deep])		{	$eve['deep']="1";		$part_submit[$m]='Deep Blue';		$m++;	}	else $eve['deep']="0";
if( $_POST[xxce])		{	$eve['xxce']="1";		$part_submit[$m]='Xxcelerate';		$m++;	}	else $eve['xxce']="0";
if( $_POST[fullthrottle])	{	$eve['fullthrottle']="1";	$part_submit[$m]='Full Throttle';		$m++;	}	else $eve['fullthrottle']="0";

if( $_POST[cryptic])	{	$eve['cryptic']="1";	$part_submit[$m]='Cryptic-"C"';		$m++;	}	else $eve['cryptic']="0";
if( $_POST[crack])		{	$eve['crack']="1";		$part_submit[$m]='Crack-o-maina';		$m++;	}	else $eve['crack']="0";
if( $_POST[cad])		{	$eve['cad']="1";		$part_submit[$m]='CAD Master';		$m++;	}	else $eve['cad']="0";
if( $_POST[tronixx])	{	$eve['tronixx']="1";	$part_submit[$m]='Circuit Mania';		$m++;	}	else $eve['tronixx']="0";
if( $_POST[linspire])	{	$eve['linspire']="1";	$part_submit[$m]='Linspire';		$m++;	}	else $eve['linspire']="0";
if( $_POST[micropad])	{	$eve['micropad']="1";	$part_submit[$m]='Micro Pad';		$m++;	}	else $eve['micropad']="0";

if( $_POST[cs])			{	$eve['cs']="1";			$part_submit[$m]='Counter Strike';		$m++;	}	else $eve['cs']="0";
if( $_POST[nfs])		{	$eve['nfs']="1";		$part_submit[$m]='Need For Speed';		$m++;	}	else $eve['nfs']="0";
if( $_POST[fifa])		{	$eve['fifa']="1";		$part_submit[$m]='Pro Evolution Soccer';		$m++;	}	else $eve['fifa']="0";

if( $_POST[q])			{	$eve['q']="1";			$part_submit[$m]='Q-Mastero';		$m++;	}	else $eve['q']="0";
if( $_POST[ad])			{	$eve['ad']="1";			$part_submit[$m]='Ad Mad Show';		$m++;	}	else $eve['ad']="0";
if( $_POST[dummy])		{	$eve['dummy']="1";		$part_submit[$m]='Dummy Market';		$m++;	}	else $eve['dummy']="0";
if( $_POST[nirmaan])	{	$eve['nirmaan']="1";	$part_submit[$m]='Nirmaan';		$m++;	}	else $eve['nirmaan']="0";

if( $_POST[sudoku])		{	$eve['sudoku']="1";		$part_submit[$m]='Sudoku';		$m++;	}	else $eve['sudoku']="0";
if( $_POST[artifex])	{	$eve['artifex']="1";	$part_submit[$m]='Artifex';		$m++;	}	else $eve['artifex']="0";
if( $_POST[photophonics]){	$eve['photophonics']="1";	$part_submit[$m]='Photophonics';		$m++;	}	else $eve['photophonics']="0";
if( $_POST[trumble])	{	$eve['trumble']="1";	$part_submit[$m]='Trumble The Genre';		$m++;	}	else $eve['trumble']="0";

$e_upd = "UPDATE events SET 	
	robowar 		=	'".		$eve['robowar']	.
"',	kurukshetra 	=	'".		$eve['kuru'].
"',	robosoccer 		=	'".		$eve['roboso'].
"',	solvation 		=	'".		$eve['solv'].
"',	linefollower	=	'".		$eve['line'].
"',	wrestlemania	=	'".		$eve['wrest'].
"',	picasso 		=	'".		$eve['picasso'].
"',	deepblue		=	'".		$eve['deep'].
"',	xxcelerate 		=	'".		$eve['xxce'].
"',	fullthrottle	=	'".		$eve['fullthrottle'].
"',	cryptic 		=	'".		$eve['cryptic'].
"',	crack 			=	'".		$eve['crack'].
"',	cad 			=	'".		$eve['cad'].
"',	tronixx 		=	'".		$eve['tronixx'].
"',	linspire		=	'".		$eve['linspire'].
"',	mupad 			=	'".		$eve['mupad'].
"',	cs 				=	'".		$eve['cs'].
"',	nfs 			=	'".		$eve['nfs'].
"',	fifa			=	'".		$eve['fifa'].
"',	q 				=	'".		$eve['q'].
"',	admad			=	'".		$eve['ad'].
"',	dummy			=	'".		$eve['dummy'].
"',	nirmaan 		=	'".		$eve['nirmaan'].
"',	sudoku 			=	'".		$eve['sudoku'].
"',	artifex 		=	'".		$eve['artifex'].
"',	photophonics 	=	'".		$eve['photophonics'].
"',	trumble 		=	'".		$eve['trumble'].	"' WHERE username = '". $_SESSION['user']."'" ;

mysql_query( $e_upd );
// `tronixx` = \'1\', `fifa` = \'1\' WHERE `events`.`username` = \'sao\';";

/* For displaying the cretificate */

echo "<br /><br /><br />";
include( "certificate.php");

?>



<a href="index.php">Proceed Forward </a>

</body>
</html>