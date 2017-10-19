<?php
session_start();
$servername = "fdb14.freehostingeu.com";
$username = "2110310_mist";
$password = "mistcse1234";
$dbname = "2110310_mist";

$conn = mysqli_connect($servername, $username, $password, $dbname);
?>



<!DOCTYPE HTML>
<html><head><title>BLOOD</title><meta name="description" content="website description"><meta name="keywords" content="website keywords, website keywords"><meta http-equiv="content-type" content="text/html; charset=windows-1252"><link rel="stylesheet" type="text/css" href="style/style.css" title="style">
<title>Blood</title>
<link rel="shortcut icon" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" href="style/logo1.png">

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

</head><body>
  <div id="main">
    <div id="header">
      <div align="left"></div>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">MIST  -<span class="logo_colour">Blood Bank</span></a></h1>
          <h3 style="color:#FFFFFF">Share a little, care a little – Donate Blood.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu"><!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
		  <li ><a href="home.php">Home</a></li>
          <li><a href="donor.php">Be A Donor</a></li>
          <li class="selected"><a href="need0.php">Need A Donor</a></li>
          <li><a href="hospital.php">Hospital List</a></li>
          <li><a href="contact.php">Contact Us</a></li>
		  <li><a href="about.php">About Us</a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		  <li><a href="need.php">Back</a></li>
		   <li><a href="logout.php?logout">Sign Out</a></li>
        </ul>
		</div>
		
		<center>
		<div id="login-form">
<form method="post" action="search1.php">
<table align="center" width="30%" border="0">

<tr>
<td><b>BLOOD GROUP:</b>
<select name="bloodgroup" style="width:200px" style="height:20px">

<option value="A_POSITIVE">A_POSITIVE</option>
<option value="AB_POSITIVE">AB_POSITIVE</option>
<option value="B_POSITIVE">B_POSITIVE</option>
<option value="O_POSITIVE">O_POSITIVE</option>
<option value="A_NEGATIVE">A_NEGATIVE</option>
<option value="AB_NEGATIVE">AB_NEGATIVE</option>
<option value="B_NEGATIVE">B_NEGATIVE</option>
<option value="O_NEGATIVE">O_NEGATIVE</option>

</select>

</td>
</tr>

<tr>
<td>AREA:
<select name="area" style="width:200px" style="height:20px">
<option value="BAILEYROAD">BAILEYROAD</option>
<option value="BANANI">BANANI</option>
<option value="BANASREE">BANASREE</option>
<option value="BANGLAMOTOR">BANGLAMOTOR</option>
<option value="BARIDHARA">BARIDHARA</option>
<option value="DHANMONDI">DHANMONDI</option>
<option value="ESKATONROAD">ESKATONROAD</option>
<option value="GREEANROAD">GREEANROAD</option>
<option value="GULSHAN">GULSHAN</option>
<option value="KALABAGAN">KALABAGAN</option>
<option value="LALMATIA">LALMATIA</option>
<option value="MALIBAGH">MALIBAGH</option>
<option value="MOGHBAZAR">MOGHBAZAR</option>
<option value="MOHAKHALI">MOHAKHALI</option>
<option value="MOHAMMADPUR">MOHAMMADPUR</option>
<option value="SHANTINAGAR">SHANTINAGAR</option>
<option value="UTTARA">UTTARA</option>

</select>

</td>
</tr>

<tr>
<td><button type="submit" name="btn-submit">Submit</button></td>
</tr>
<tr>
</table>
</form>
</div>
</center>


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
