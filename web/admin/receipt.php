<?php
	require_once('auth.php');
?>

<?php
require_once('connection/config.php');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
}

$id=$_GET['id'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html><head>
<script></script><title>Costumer Voucher</title>

<style type="text/css">

.a{
background-color:#33CCFF;
height: 450px;
width: 800px;
margin: 1px 0px 0px 150px;
border:5px solid ;
border-style: dotted;
float: center;
}
.b{
background-color:#33CCFF;
height: 70px;
width: 200px;
margin: 1px 10px 0px 150px;
border:2px solid ;
border-style: solid;
float: right;
}

</style>
</head>
<h4 align="center">Print (CTRL+P) & cut this Ticket Voucher</h4>
<div class="a">
<div class="b">
<center>
<SPAN style="BORDER-LEFT: black 0.05in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.09in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.01in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.04in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.02in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.03in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.05in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.09in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.01in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.07in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.08in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.03in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.07in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: balck 0.06in solid; DISPLAY: inline-block; HEIGHT:0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black  0.03in solid; DISPLAY: inline-block;HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.06in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>
<SPAN style="BORDER-LEFT: black 0.08in solid; DISPLAY: inline-block; HEIGHT: 0.5in"></SPAN>

</center>
<div id="externalbox" style="width:4in">
<div id="inputdata"><?php echo"" .date("y-m-d");?>-0978712-12-1323-21</div>
</div>

</div>

<body bgcolor="white">
<h2 Align="left" font face="Courier New", Courier, monospace" Color="Green">&nbsp;&nbsp;Online Book Store</br></br>&nbsp;&nbsp;&nbsp;COSTUMER'S COPY</font></h2>
<h1 align="center"><font face="Franklin Gothic Medium" Color="black" size="3">
<table border=1 align=center>
<tr>
<th>Order ID</th>
<th>Customer Names</th>
<th>CUstomer Email</th>
<th>Book Name</th>
<th>Book Price</th>
</tr>
<?php


$query=mysql_query("SELECT register.username, register.name, register.email, ordering_book.order_book_id,book_details.book_name,book_details.book_price FROM register, ordering_book, book_details WHERE register.username=ordering_book.ordered_person AND book_details.book_id=ordering_book.order_book_id AND ordering_book.order_id='$id'")
or die("There are no records to display ... \n" . mysql_error()); 
	while ($row=mysql_fetch_assoc($query)){
	echo "<tr>";
echo "<td>" . $row['order_book_id']."</td>";
echo "<td>" . $row['name']."</td>";
echo "<td>" . $row['email']."</td>";
echo "<td>" . $row['book_name']."</td>";
echo "<td>" . $row['book_price']."</td>";
echo "</tr>";
	
}
?>
</table></h1></font>

<h3 align="left" font face="Courier New, Courier, monospace">&nbsp;&nbsp;Costumer's Signature:&nbsp;&nbsp;______________________
</h3>
</div>
<h3 align="center">
 Copyright © 2014.<a href="#">&nbsp;Online Book Store</a></h3>

</body>
</html>