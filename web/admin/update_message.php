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
	$id=$_GET['id'];
//selecting all records from almost all tables. Return an error if there are no records in the tables
$result=mysql_query("SELECT * FROM message where `id`='$id'")
or die("There are no records to display ... \n" . mysql_error());
while ($row=mysql_fetch_assoc($result)){
	$name=$row['name'];
	$msg=$row['msg'];
	$answer=$row['answer'];
}
//echo $msg;
	
//$answer = clean($_POST['answer']);

	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update message</title>
<link href="stylesheets/admin_styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page">
<div id="header">
<h1>Message</h1>
<a href="index.php">Home</a> | <a href="books.php">Books</a> | <a href="accounts.php">Accounts</a> | <a href="orders.php">Orders</a> | <a href="messages.php">Messages</a>| <a href="logout.php">Logout</a>
</div>
<div id="container">

<CAPTION><h3>UPDATE MESSAGE</h3></CAPTION>
<h1>Name: <?php echo $name;?></h1>
<h1>Question: <?php echo $msg;?></h1>
<form id="messageForm" name="messageForm" method="post" action="update_message_exec.php?id=<?php echo $id;?>" onsubmit="return messageValidate(this)">
<td>
  <table width="350" border="0" cellpadding="2" cellspacing="0">
  <CAPTION><h3>UPDATE MESSAGE</h3></CAPTION>
	<tr>
		<td colspan="2" style="text-align:center;"><font color="#FF0000">* </font>Required fields</td>
	</tr>
	<tr>
      <th>Replied</th>
      <td><font color="#FF0000">* </font><input name="replied" type="text" class="textfield" id="replied"/></td>
    </tr>
    <tr>
      <th>Answer</th>
      <td><font color="#FF0000">* </font><textarea rows="12" name="answer" id="answer"/></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Change" /></td>
    </tr>
  </table>
</td>
</form>
<hr>
</div>
<div id="footer">
<div class="bottom_addr">&copy; 2012-2013 Food Plaza. All Rights Reserved</div>
</div>
</div>
</body>
</html>