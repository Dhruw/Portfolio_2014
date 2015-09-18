var hdr_foo = null;
var	hdr_s = 0;
var ftr_foo = null;
var	ftr_s = 0;
var	pan = new Array();
var state = new Array();
var l;
var z;
var d1= new Array;
var runner=1;
var img_id=1;
var img_id2;
var spon= new Array;

	function slide(i)
	{	
		z=i;
		if( state[i]==0)
		{	pan[i].style.width= '40px';		expnd();	state[i]=1;
			switch(i)
			{
			case('1'):
				document.getElementById("in1").style.visibility='visible';
				if (state[2]==1)	{contr2();	state[2]=0;	document.getElementById("in2").style.visibility='hidden';}
				if (state[3]==1)	{contr3();	state[3]=0;	document.getElementById("in3").style.visibility='hidden';}
				if (state[4]==1)	{contr4();	state[4]=0;	document.getElementById("in4").style.visibility='hidden';}
				if (state[5]==1)	{contr5();	state[5]=0;	document.getElementById("in5").style.visibility='hidden';}
			break;
			case('2'):
				document.getElementById("in2").style.visibility='visible';
				if (state[1]==1)	{contr1();	state[1]=0;	document.getElementById("in1").style.visibility='hidden';    }
				if (state[3]==1)	{contr3();	state[3]=0;	document.getElementById("in3").style.visibility='hidden';}
				if (state[4]==1)	{contr4();	state[4]=0;	document.getElementById("in4").style.visibility='hidden';}
				if (state[5]==1)	{contr5();	state[5]=0;	document.getElementById("in5").style.visibility='hidden';}
			break;
			case('3'):
				document.getElementById("in3").style.visibility='visible';
				if (state[1]==1)	{contr1();	state[1]=0;	document.getElementById("in1").style.visibility='hidden';}
				if (state[2]==1)	{contr2();	state[2]=0;	document.getElementById("in2").style.visibility='hidden';}
				if (state[4]==1)	{contr4();	state[4]=0;	document.getElementById("in4").style.visibility='hidden';}
				if (state[5]==1)	{contr5();	state[5]=0;	document.getElementById("in5").style.visibility='hidden';}
			break;
			case('4'):
				document.getElementById("in4").style.visibility='visible';
				if (state[1]==1)	{contr1();	state[1]=0;	document.getElementById("in1").style.visibility='hidden';}
				if (state[2]==1)	{contr2();	state[2]=0;	document.getElementById("in2").style.visibility='hidden';}
				if (state[3]==1)	{contr3();	state[3]=0;	document.getElementById("in3").style.visibility='hidden';}
				if (state[5]==1)	{contr5();	state[5]=0;	document.getElementById("in5").style.visibility='hidden';}
			break;
			case('5'):
				document.getElementById("in5").style.visibility='visible';
				if (state[1]==1)	{contr1();	state[1]=0;	document.getElementById("in1").style.visibility='hidden';}
				if (state[2]==1)	{contr2();	state[2]=0;	document.getElementById("in2").style.visibility='hidden';}
				if (state[3]==1)	{contr3();	state[3]=0;	document.getElementById("in3").style.visibility='hidden';}
				if (state[4]==1)	{contr4();	state[4]=0;	document.getElementById("in4").style.visibility='hidden';}
			break;
			}
		}
	}

	function expnd()
	{	pan[z].style.width = parseInt(pan[z].style.width)+4 + 'px';
		if( parseInt(pan[z].style.width ) < 360 )
		setTimeout(expnd,4);
	}

	function contr1()
	{	pan[1].style.width = parseInt(pan[1].style.width)-4 + 'px';
		if( parseInt(pan[1].style.width ) > 40 )
		setTimeout(contr1,4);
	}	
	
	function contr2()
	{	pan[2].style.width = parseInt(pan[2].style.width)-4 + 'px';
		if( parseInt(pan[2].style.width ) > 40 )
		setTimeout(contr2,4);
	}	

	function contr3()
	{	pan[3].style.width = parseInt(pan[3].style.width)-4 + 'px';
		if( parseInt(pan[3].style.width ) > 40 )
		setTimeout(contr3,4);
	}	

	function contr4()
	{	pan[4].style.width = parseInt(pan[4].style.width)-4 + 'px';
		if( parseInt(pan[4].style.width ) > 40 )
		setTimeout(contr4,4);
	}	

	function contr5()
	{	pan[5].style.width = parseInt(pan[5].style.width)-4 + 'px';
		if( parseInt(pan[5].style.width ) > 40 )
		setTimeout(contr5,4);
	}	
	
	function initialize()
	{
		pan[1]=document.getElementById('sub1');
		pan[2]=document.getElementById('sub2');
		pan[3]=document.getElementById('sub3');
		pan[4]=document.getElementById('sub4');
		pan[5]=document.getElementById('sub5');
		state[1]=1;		state[2]=0;		state[3]=0;		state[4]=0; state[5]=0;
		pan[1].style.width = 360;
		document.getElementById("in1").style.visibility='visible';
			d1[1]="files/1.jpg";	d1[2]="files/2.jpg";		d1[3]="files/3.jpg";	d1[4]="files/4.jpg";	d1[5]="files/5.jpg";	d1[6]="files/6.jpg";
			spon[1]="files/sponsors/1.jpg";
			spon[2]="files/sponsors/2.jpg";
			spon[3]="files/sponsors/3.jpg";
			spon[4]="files/sponsors/4.jpg";
			spon[5]="files/sponsors/5.jpg";
			spon[6]="files/sponsors/6.jpg";
			spon[7]="files/sponsors/7.jpg";
			spon[8]="files/sponsors/8.jpg";
			spon[9]="files/sponsors/9.jpg";
			spon[10]="files/sponsors/10.jpg";
			spon[11]="files/sponsors/11.jpg";
			spon[12]="files/sponsors/12.jpg";
			spon[13]="files/sponsors/13.jpg";
			spon[14]="files/sponsors/14.jpg";
	}
	
	function hdr_down(obj)
	{	hdr_foo = document.getElementById(obj);
		if( hdr_s == 0  )
		{	document.getElementById(obj).style.marginTop = -135;
			hdr_dodown();	hdr_s=1;	
		}
			else
		{	document.getElementById(obj).style.marginTop = -8;
			hdr_doup();		hdr_s=0;	
		}
	}

	function hdr_dodown()
	{	hdr_foo.style.marginTop = parseInt( hdr_foo.style.marginTop) +2 + 'px';
		document.getElementById('hmenu').style.marginTop = parseInt( document.getElementById('hmenu').style.marginTop) +2 + 'px';
		if ( parseInt( hdr_foo.style.marginTop) < -8 )	setTimeout(hdr_dodown,5);
	}
	
	function hdr_doup()
	{	hdr_foo.style.marginTop = parseInt( hdr_foo.style.marginTop) -	2 + 'px';
		if ( parseInt( hdr_foo.style.marginTop) > -135 )	setTimeout(hdr_doup,5);
	}	
	
	function ftr_down(obj)
	{
		ftr_foo = document.getElementById(obj);
		if(ftr_s == 1)
		{	document.getElementById(obj).style.bottom = -10;
			ftr_dodown();	ftr_s=0;	
		}
		else 
		{	document.getElementById(obj).style.bottom = -136;
			ftr_doup();		ftr_s=1;	
		}
	}

	function ftr_dodown()
	{	ftr_foo.style.bottom = (parseInt( ftr_foo.style.bottom) - 2) + 'px';
		if ( parseInt( ftr_foo.style.bottom) > -136 )	setTimeout  (ftr_dodown,5);
	}
	
	function ftr_doup()
	{	ftr_foo.style.bottom = (parseInt( ftr_foo.style.bottom) + 2) + 'px';
		if ( parseInt( ftr_foo.style.bottom) < -10 )	setTimeout  (ftr_doup,5);
	}		
	
	function start()
{
	if( runner < 5 )
	runner=runner+1;
	else
	runner=1;
	document.getElementById('play').src= d1[runner];
	setTimeout(start,7000);
}

function introv()
{
	 document.getElementById('div_intro').style.display='block';
	 document.getElementById('div_rules').style.display='none';
	 document.getElementById('div_regi').style.display='none';
	 document.getElementById('div_prblm').style.display='none';
	 document.getElementById('div_updt').style.display='none';
}

function prblmv()
{
	 document.getElementById('div_prblm').style.display='block';
	 document.getElementById('div_intro').style.display='none';
	 document.getElementById('div_regi').style.display='none';
	 document.getElementById('div_rules').style.display='none';
	 document.getElementById('div_updt').style.display='none';	 
}

function rulesv()
{
	 document.getElementById('div_rules').style.display='block';
	 document.getElementById('div_intro').style.display='none';
	 document.getElementById('div_regi').style.display='none';
	 document.getElementById('div_prblm').style.display='none';
	 document.getElementById('div_updt').style.display='none';
}

function regiv()
{
	 document.getElementById('div_regi').style.display='block';
	 document.getElementById('div_intro').style.display='none';
	 document.getElementById('div_rules').style.display='none';
	 document.getElementById('div_prblm').style.display='none';
	 document.getElementById('div_updt').style.display='none';
}

function updtv()
{
	 document.getElementById('div_regi').style.display='none';
	 document.getElementById('div_intro').style.display='none';
	 document.getElementById('div_rules').style.display='none';
	 document.getElementById('div_prblm').style.display='none';
	 document.getElementById('div_updt').style.display='block';
}


<!-- for gallery   -->

var img_no=1;
function gal_prev()
{	if ( img_no>1 )
	{	img_no--;
		document.getElementById("gal_main").src= 'gallery/'+img_no+'.jpg';	
	}
}

function gal_next()
{	if ( img_no < 24 )
	{	img_no++;
		document.getElementById("gal_main").src= 'gallery/'+img_no+'.jpg';	
	}
}

function img_set(p)
{	img_no=p;	
	document.getElementById("gal_main").src= 'gallery/'+img_no+'.jpg';	    
}

/* for displaying and hiding upper stuff */

function up_set_view()
{
	document.getElementById('up_banner_set').style.display='block';
}

function up_set_none()
{
	document.getElementById('up_banner_set').style.display='none';
}

function spanim()
{
	if(img_id < 13)
		img_id=img_id + 2;
	else
		img_id=1;
	document.getElementById("spon_img1").src= spon[ img_id ];
	document.getElementById("spon_imgb").src= spon[ img_id + 1];
	setTimeout(spanim,2000);
}