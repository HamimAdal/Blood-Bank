<?php
session_start();

$user='2110310_mist';
$pass='mistcse1234';
$db='2110310_mist';

$db=new mysqli('fdb14.freehostingeu.com',$user,$pass,$db) or die("error in connection");



$sql = "select name,bloodgroup,area,contact from users3 ";
$result = mysqli_query($db, $sql);

    // output data of each row
	$i=0;
    while($row = mysqli_fetch_assoc($result)) {
     $name[$i] = $row['name'];
   	 $bloodgroup[$i] = $row['bloodgroup'];
	 $area[$i] = $row['area'];
	 $contact[$i] = $row['contact'];
	 $i++;
}



?>


<!DOCTYPE HTML>
<html><head><title>BLOOD</title>
<link rel="shortcut icon" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" href="style/logo1.png">

<meta name="description" content="website description"><meta name="keywords" content="website keywords, website keywords"><meta http-equiv="content-type" content="text/html; charset=windows-1252"><link rel="stylesheet" type="text/css" href="style/style.css" title="style">


<style>


{
 margin:0;
 padding:0;
}
#login-form
{
 margin-top:80px;
}
table
{
 border:solid #dcdcdc 1px;
 padding:35px;
 box-shadow: 0px 0px 1px rgba(0,0,0,0.2);
}
table tr,td
{
 padding:25px;
 //border:solid #e1e1e1 1px;
}
table tr td input
{
 width:97%;
 height:75px;
 border:solid #e1e1e1 1px;
 border-radius:10px;
 padding-left:10px;
 font-family:Verdana, Geneva, sans-serif;
 font-size:20px;
 background:#f9f9f9;
 transition-duration:0.5s;
 box-shadow: inset 1px 1px 1px rgba(0,0,0,0.4);
}

table tr td button
{
 width:100%;
 height:55px;
 border:0px;
 background:rgba(12,45,78,11);
 background:-moz-linear-gradient(top, #880000, #B90000 );
 border-radius:30px;
 box-shadow: 1px 1px 1px rgba(1,0,0,0.2);
 color:#f9f9f9;
 font-family:Verdana, Geneva, sans-serif;
 font-size:18px;
 font-weight:bolder;
 text-transform:uppercase;
}
table tr td button:active
{
 position:relative;
 top:1px;
}
table tr td a
{
 text-decoration:none;
 color:#800000;
 font-family:Verdana, Geneva, sans-serif;
 font-size:18px;
}

/* css for home page  */

*
{
 margin:0;
 padding:0;
}




</style>


</head>
<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">MIST  -<span class="logo_colour">Blood Bank</span></a></h1>
          <h3 style="color:#FFFFFF">Share a little, care a little – Donate Blood.</h3>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu"><!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
		  <li><a href="home.php">Home</a></li>
		  <li><a href="donor.php">Be A Donor</a></li>
          <li class="selected"><a href="need.php">Need A Donor</a></li>
          <li><a href="hospital.php">Hospital List</a></li>
          <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="about.php">About Us</a></li>
		  <li><a href="search.php">Search</a></li>
		  
		  <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="logout.php?logout">Sign Out</a></li>
			
        </ul></div>
    </div>
	
		

     
      
        <!-- insert the page content here -->
           <center><font color="red"><h1 style="color:#9B0000">REGISTERED DONOR LIST</h1></font>
		   
		   
	
	
                   
		 
   
	 
	    					
						<?php
		  for($j=0; $j<$i; $j++) {
			$na = $name[$j];
			$bg = $bloodgroup[$j];
			$ar = $area[$j];
			$co = $contact[$j];
			echo "<center><h3><ul><li><a href=\"#\">$na</a><span>&nbsp;&nbsp;&nbsp;$bg&nbsp;&nbsp;&nbsp;&nbsp;</span><strong>&nbsp;&nbsp;&nbsp;&nbsp;<span>$ar</span></strong>&nbsp;&nbsp;&nbsp;<strong><span>$co</span></strong></li></ul></h3></center>";
		}
		?>
    </div>
	
	 
   
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
</body></html>
