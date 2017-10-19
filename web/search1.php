<?php
session_start();

$servername = "fdb14.freehostingeu.com";
$username = "2110310_mist";
$password = "mistcse1234";
$dbname = "2110310_mist";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql= "SELECT * FROM users3 WHERE username ='$username' ";
$res=mysqli_query($conn, $sql);
$userrow = mysqli_fetch_assoc($res);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>BLOOD</title>
<link rel="shortcut icon" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" href="style/logo1.png">
<meta name="description" content="website description"><meta name="keywords" content="website keywords, website keywords"><meta http-equiv="content-type" content="text/html; charset=windows-1252">
<link rel="stylesheet" type="text/css" href="style/style.css" title="style">

<link rel="stylesheet" type="text/css" href="style/sty.css" title="style">
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
          <h3 style="color:#FFFFFF">Share a little, care a little – Donate Blood.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu"><!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
		  <li><a href="home.php">Home</a></li>
          <li><a href="donor.php">Be A Donor</a></li>
          <li  class="selected"><a href="need0.php">Need A Donor</a></li>
          <li><a href="hospital.php">Hospital List</a></li>
          <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="about.php">About Us</a></li>
		   <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="search.php">Back</a></li>
		  <li><a href="logout.php?logout">Sign Out</a></li>
        </ul></div>
    </div>
	
	  <div id="register">
	 <center> <h1 style="text-shadow:#333333">Search By Blood Group And Area</h1> </center>
	  <?php
	  $bloodgroup= $_POST['bloodgroup'];
	  $area= $_POST['area'];
	  $sql= "select * from users3 where bloodgroup='$bloodgroup' and area='$area' ";
	  $res= mysqli_query ($conn, $sql);
	  $r=1;
	  if(mysqli_num_rows($res) > 0) {
	  
	   
		 echo "
 <table style='width:80%'>
 <thead> 
 <tr>
 
  <th>NAME</th>
 <th>BLOODGROUP</th>
 <th>AREA</th>
<th>CONTACT</th>
 
 </tr> 
 </thead>
 
 

" ;
	  
	  
	  while ($row = mysqli_fetch_assoc($res) ){
	 
	  $r++;
	  
	  		//echo "<center><h3><tr><td><u>".$row['username']."</u></td><span>&nbsp;&nbsp;&nbsp;".$row['bloodgroup']."&nbsp;&nbsp;&nbsp;&nbsp;</span><strong>&nbsp;&nbsp;&nbsp;&nbsp;<span>".$row['area']."</span></strong>&nbsp;&nbsp;&nbsp;<strong><span>".$row['contact']."</span></strong></li></ul></h3></center>";//
			
			
			
	echo "<tr>" ;
	echo "<td>".$row['username']."</td>" ;
	echo "<td>".$row['bloodgroup']."</td>" ;
	echo "<td>".$row['area']."</td>" ;
	echo "<td>".$row['contact']."</td>" ;
	echo "</tr>  </table>" ;
	

	
	  
	  }
	  } else {
	  echo "not found";
	  //echo " </table>";
	  }
	  
	  ?>
	  </div>
	  </h3>
	  
   
			
	
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
