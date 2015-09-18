<html>
<head>
<title>Check User Validation</title>
</head>
<body>

<?php
$con = mysql_connect("localhost","jin","abc123");
mysql_select_db("jin", $con);
if (!$con)  {  die('Could not connect: ' . mysql_error());  }
$flag=1;
if( $_POST[fname]==NULL )	{	echo ("The First name is missing, please go back and type in your first name <br />"); 			$flag=0;	}
if( $_POST[uname]==NULL)	{	echo("The username is a mandatory feild, please go back and type in your username <br />");		$flag=0;	}
if( $_POST[eid]==NULL)	{	echo("The e-mail ID is missing, please go back and type in your e-mail ID <br />");	$flag=0;	}
//if ( gettype( $_POST[phno]) != 'double' )	{	echo("WARNING : You have entered non numerical charachers in the phone number feild <br /> "); $flag=0;}
//if ( gettype( $_POST[mono]) != 'double' )	{	echo("WARNING : You have entered non numerical charachers in the phone number feild <br /> "); $flag=0;}
if( strlen($_POST[phno])>12  )	{	echo("The phone number exceeds 12 digits, please go back and check your phone number, type in the numbers only, do not include any non numeric character <br />");	$flag=0;	}
if( $_POST[edu]==NULL)	{	echo("Your educational qualification is a mandatory feild, please go back and type in your educational qualification <br />");	$flag=0;	}
if( $_POST[clg]==NULL )	{	echo("The college name is missing, please go back and type in your college name <br />");	$flag=0;	}
if( $_POST[pswd1] != $_POST[pswd2] )	{	echo("WARNING : The two passwords do not match, go back and verify your password <br />");	$flag=0;	}
if( strlen( $_POST[pswd1]) <8 )	{	echo("WARNING : The password must be at least 8 characters long. <br />"); }
/*
if()	{	echo("");	$flag=0;	}
*/

if( $flag==1)
{		$sub_date = $_POST[year].'-'.$_POST[mon].'-'.$_POST[bday];
		//   DO NOT DELETE IT  mysql_query("INSERT INTO test2(uname,lname,DOB) VALUES( '$_POST[uname]' ,'helo', '$sub_date' )");
$qins = "INSERT INTO test2 VALUES (NULL , '".$_POST[fname]."', '".$_POST[lname]."', '".$_POST[uname]."', '".$_POST[eid]."', '".$_POST[phno]."', '".$_POST[mono]."', '".$_POST[edu]."', '".$_POST[clg]."', '".$_POST[cou]."', '".$sub_date."', '".$_POST[sem]."', '".$_POST[yr]."', '".$_POST[pswd1]."')";

$qins2 = "INSERT INTO events (`username`) VALUES ('".$_POST[uname]."');";
		mysql_query( $qins );
		mysql_query( $qins2);
		echo("The registration had been successfull. Now you can Login into your account. <br />");
		echo("<a href='index.php' > <input type='button' value='Proceed forward' /> </a> ");
}
else
{
	echo ("<script type= 'text/javascript'> function gb() { back();  }</script> ");
	echo ("<input type='button' value='GO BACK' onClick='gb()' />");

}
/*
echo "<pre>";
	var_export($_POST);
echo "</pre>";
*/
?>
</body>
</html>