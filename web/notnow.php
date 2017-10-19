<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{

}

$res=mysql_query("SELECT * FROM personal WHERE Id=".$_SESSION['user']);
$userRow=($res);
?>


<!DOCTYPE HTML>
<html><head><title>BLOOD</title><meta name="description" content="website description"><meta name="keywords" content="website keywords, website keywords"><meta http-equiv="content-type" content="text/html; charset=windows-1252"><link rel="stylesheet" type="text/css" href="style/style.css" title="style">


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
          <h1><a href="index.html">Save One's <span class="logo_colour">Life</span></a></h1>
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
		  <li><a href="#">            </a></li>
		   <li><a href="#">            </a></li>
		   <li><a href="#">            </a></li>
		  <li><a href="#">            </a></li>
		   <li><a href="#">            </a></li>
		    <li><a href="#">            </a></li>
			 <li><a href="#">            </a></li>
			<li><a href="logout.php?logout">Sign Out</a></li>
        </ul>	
	
		</div>
    </div>
	
	
	 <div id="site_content">
      <div class="sidebar">
    
        </ul><h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....."><input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search"></p>
        </form>
		
		 </ul><h3>Search</h3>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....."><input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search"></p>
        </form>
      </div>
      <div id="content">
        <!-- insert the page content here -->
           <center><font color="red"><h1 style="color:#9B0000"><a href="need1.php">REGISTERED DONOR LIST</h1></font>
      </div>
    </div>
	
	
	
	
 


      
    <div id="content_footer"></div>
    <div id="footer">
      Copyright © Nawsheen | <a href="http://validator.w3.org/check?uri=referer">HTML5</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> | <a href="http://www.html5webtemplates.co.uk">design from HTML5webtemplates.co.uk</a>
</div>
  </div>
</body></html>
