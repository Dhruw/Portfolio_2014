var runner=1;
var d = new Array;
function init()
{	d[1]="images/slide/s1.jpg";	d[2]="images/slide/s2.jpg";		d[3]="images/slide/s3.jpg";	d[4]="images/slide/s4.jpg";	d[5]="images/slide/s5.jpg";
}

function start()
{
	if( runner < 5 )	runner=runner+1;
	else
		runner=1;
	document.getElementById('player').src= d[runner];
	setTimeout(start,5000);
}