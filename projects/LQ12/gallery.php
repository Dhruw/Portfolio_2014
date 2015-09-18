<img src="gallery/gallery.jpg" />

<div id="big_img" style="width:800px; height:600px; position:fixed; top:10%; background-color:#F00; display:none;  ">
	<div style="height:30px;">
		<center>
	    <div style="width:200px; margin:auto; cursor:pointer; " >
			<div style="width:100px; float:left;" onclick="gal_prev()">	<< previous	</div>
			<div style="width:100px; float:left;" onclick="gal_next()">	next >>	</div>
	    </div>
		</center>
		<b onclick="document.getElementById('big_img').style.display= 'none'" style=" padding:3px; border:1px solid; float:right; background-color: #3CF; ">	X  </b>
    	<br />
	</div>
	<center>	<img src="gallery/1.jpg" name="gal_main" id="gal_main"  style="clear:both; width:700px; height:500px; margin:auto;" /> </center>
</div>

<br />
<br />
<?php
for ($i=1 ; $i<=24; $i++)
echo "<img src='gallery/".$i.".jpg' id='gal_pane' onclick=\"img_set(".$i.");  document.getElementById('big_img').style.display= 'block' \"/>";
?>
