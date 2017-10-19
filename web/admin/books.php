<?php
    require_once('auth.php');
?>
<?php
//checking connection and connecting to a database
require_once('connection/config.php');
//Connect to mysql server
    $link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
    if(!$link) {
        die('Failed to connect to server: ' . mysql_error());
    }
    
    //Select database
    $db = mysql_select_db(DB_DATABASE);
    if(!$db) {
        die("Unable to select database");
    }
    //retrive promotions from the specials table
    $result=mysql_query("SELECT * FROM book_details")
    or die("There are no records to display ... \n" . mysql_error()); 
?>
<?php
    //retrive categories from the categories table
   // $categories=mysql_query("SELECT * FROM categories")
   // or die("There are no records to display ... \n" . mysql_error()); 
?>
<?php
    //retrive a currency from the currencies table
    //define a default value for flag_1
    //$flag_1 = 1;
   // $currencies=mysql_query("SELECT * FROM currencies WHERE flag='$flag_1'")
    //or die("A problem has occured ... \n" . "Our team is working on it at the moment ... \n" . "Please check back after few hours."); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Books</title>
<link href="stylesheets/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="validation/admin.js">
</script>
</head>
<body>
<div id="page">
<div id="header">
<h1>Books Management </h1>
<a href="index.php">Home</a> | <a href="books.php">Books</a> | <a href="accounts.php">Accounts</a> | <a href="orders.php">Orders</a> | <a href="logout.php">Logout</a>
</div>
<div id="container">
<table width="760" align="center">
<CAPTION><h3>ADD A NEW BOOK</h3></CAPTION>
<form name="foodsForm" id="foodsForm" action="books-exec.php" method="post" enctype="multipart/form-data" onsubmit="return foodsValidate(this)">
<tr>
    <th>Name</th>
    <th>Description</th>
	<th>Available in Stock</th>
    <th>Price</th>
    <th>Category</th>
    <th>Photo</th>
    <th>Action(s)</th>
</tr>
<tr>
    <td><input type="text" name="name" id="name" class="textfield" /></td>
    <td><textarea name="description" id="description" class="textfield" rows="2" cols="15"></textarea></td>
	<td><input type="text" name="available" id="available" class="textfield" /></td>
    <td><input type="text" name="price" id="price" class="textfield" /></td>
    <td width="168"><select name="category" id="category">
    <option value="select">- select one option -
	<option value="university">University</option>
	<option value="medical">Medical</option>
	<option value="college">College</option>
	<option value="school">School</option>
    <?php 
    //loop through categories table rows
    //while ($row=mysql_fetch_array($categories)){
    //echo "<option value=$row[category_id]>$row[category_name]"; 
    //}
    ?>
    </select></td>
    <td><input type="file" name="photo" id="photo"/></td>
    <td><input type="submit" name="Submit" value="Add" /></td>
</tr>
</form>
</table>
<hr>
<table width="950" align="center">
<CAPTION><h3>AVAILABLE BOOKS</h3></CAPTION>
<tr>
<th>Book Photo</th>
<th>Book Name</th>
<th>Book Description</th>
<th>Available in Stock</th>
<th>Book Price</th>
<th>Book Category</th>
<th>Action(s)</th>
</tr>

<?php
//loop through all table rows
//$symbol=mysql_fetch_assoc($currencies); //gets active currency
while ($row=mysql_fetch_array($result)){
echo "<tr>";
echo '<td><img src=../images/'. $row['book_photo']. ' width="80" height="70"></td>';
echo "<td>" . $row['book_name']."</td>";
echo "<td>" . $row['book_description']."</td>";
echo "<td>" . $row['available']."</td>";
echo "<td>" . $row['book_price']."</td>";
//echo "<td>" . $symbol['book_symbol']. "" . $row['book_price']."</td>";
echo "<td>" . $row['book_category']."</td>";
echo '<td><a href="delete-book.php?id=' . $row['book_id'] . '">Remove Book</a></td>';
echo "</tr>";
}
mysql_free_result($result);
mysql_close($link);
?>
</table>
<hr>
</div>
<div id="footer">
<div class="bottom_addr">&copy; 2012-2013 Book Plaza. All Rights Reserved</div>
</div>
</div>
</body>
</html>