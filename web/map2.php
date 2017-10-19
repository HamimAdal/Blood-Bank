<!DOCTYPE html>
<html>
<head>
<title>BLOOD</title>
<link rel="shortcut icon" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" href="style/logo1.png">


<meta name="description" content="website description"><meta name="keywords" content="website keywords, website keywords"><meta http-equiv="content-type" content="text/html; charset=windows-1252"><link rel="stylesheet" type="text/css" href="style/style.css" title="style">

<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(23.7252143,90.3974996);

function initialize()
{
var mapProp = {
  center: myCenter,
  zoom:18,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
  title:'Click to zoom'
  });

marker.setMap(map);

// Zoom to 9 when clicking on marker
google.maps.event.addListener(marker,'click',function() {
  map.setZoom(9);
  map.setCenter(marker.getPosition());
  });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>

  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">MIST  -<span class="logo_colour">Blood Bank</span></a></h1>
          <h3 style="color:#FFFFFF">Share a little, care a little – Donate Blood.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
		  <li><a href="home.php">Home</a></li>
          <li><a href="donor.php">Be A Donor</a></li>
          <li><a href="need0.php">Need A Donor</a></li>
          <li><a href="hospital.php">Hospital List</a></li>
		  <li class="selected"><a href="map1.php">Google Map</a></li>
          <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="about.php">About Us</a></li>
        </ul></div>
    </div>
	
<center>
<div id="googleMap" style="width:500px;height:380px;"></div>
</center>


	  
    <div id="content_footer"></div>
    <div id="footer">
      Copyright © Group -02 |&nbsp;&nbsp;&nbsp;  Viewer Count:
	  
	  
	  
	  <!-- hitwebcounter Code START -->
<a href="http://www.hitwebcounter.com" target="_blank">
<img src="http://hitwebcounter.com/counter/counter.php?page=6368930&style=0030&nbdigits=5&type=page&initCount=0" title="webs counters" Alt="webs counters"   border="0" >
</a>                                        <br/>
                                        <!-- hitwebcounter.com --><a href="http://www.hitwebcounter.com" title="Total Count" 
                                        target="_blank" style="font-family: sans-serif, Arial, Helvetica; 
                                        font-size: 19px; color: #800000; text-decoration: none ;"><strong>                                        </strong>
                                        </a>  
	  </a>
</div>
  </div>

</body>
</html>
