<?php
//if "email" variable is filled out, send email
  if (isset($_POST['email']))  {
  
  //Email information
  $admin_email = "mistbloodbank@gmail.com";
  $email = $_POST['your_email'];
  $name = $_POST['your_name'];
  $comment = $_POST['your_enquiry'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
?>





<!DOCTYPE HTML>
<html><head><title>BLOOD</title>
<link rel="shortcut icon" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="style/logo1.png">
<link rel="apple-touch-icon-precomposed" href="style/logo1.png">

<meta name="description" content="website description"><meta name="keywords" content="website keywords, website keywords"><meta http-equiv="content-type" content="text/html; charset=windows-1252"><link rel="stylesheet" type="text/css" href="style/style.css" title="style"></head><body>
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
        <ul id="menu"><!-- put class="selected" in the li tag for the selected page - to highlight which page you're on --><li><a href="home.php">Home</a></li>
          <li><a href="donor.php">Be A Donor</a></li>
          <li><a href="need0.php">Need A Donor</a></li>
          <li><a href="hospital.php">Hospital List</a></li>
          <li class="selected"><a href="contact.php">Contact Us</a></li>
		  <li><a href="about.php">About Us</a></li>
        </ul></div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar"><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <!-- insert your sidebar items here -->
       <img src="2.jpg" height="400" width="275"/>
        <h3>MIST BLOOD BANK</h3>
       
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1 style="color:#CC0000; text-align:left; font-size:24px">Contact Us</h1>
        <H5 style="font-size:16px; color:#CC0000">You can mail us.</H5>
        <form action="" method="post">
          <div class="form_settings">
            <p><span style="font-size:16px; color:#CC0000">Name</span><input class="contact" type="text" name="your_name" value=""></p>
            <p><span style="font-size:16px; color:#CC0000">Email Address</span><input class="contact" type="email" name="your_email" value=""></p>
            <p><span style="font-size:16px; color:#CC0000">Message</span><textarea class="contact textarea" rows="8" cols="50" name="your_enquiry"></textarea></p>
            <p style="padding-top: 25px"><span> </span><input class="submit" type="submit" name="contact_submitted" value="submit"></p>
          </div>
        </form>
       
      </div>
    </div>
	
	  
<?php
  }
?>
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
