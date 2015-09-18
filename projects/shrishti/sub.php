<?php
$flag=1;
if ( $_POST['s_name'] == NULL )
{	echo "Please enter your name. <br /> <a href='index.php'>Go back </a> "; $flag=0;
	die;
}
if ( $_POST['address'] == NULL )
{	echo "Please enter your address. <br /> <a href='index.php'>Go back </a> "; $flag=0;
	die;
}
if ( $_POST['num'] == NULL )
{	echo "Please enter your contact number. <br /> <a href='index.php'>Go back </a> "; $flag=0;
	die;
}
if ( $_POST['mail'] == NULL )
{	echo "Please enter your e-mail ID. <br /> <a href='index.php'>Go back </a> "; $flag=0;
	die;
}
if ( $_POST['query'] == NULL )
{	echo "Please enter your Query. <br /> <a href='index.php'>Go back </a> "; $flag=0;
	die;
}
if (  $flag==1 )
{

	mail( "divyanshudhruw@gmail.com" ,"Query", $_POST['query'] , " From : " . $_POST['mail'] );

echo "Congratulations " . $_POST['s_name'] . ", your query has been successfully submitted. We will contact you very soon. <br />";
echo "<a href='index.php'> Continue </a>";
}
?>