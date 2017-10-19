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
 
 //Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	//$replied = clean($_POST['replied']);
	$answer = clean($_POST['answer']);
	$replied = clean($_POST['replied']);
	echo $answer;
	//$NewPassword = clean($_POST['npassword']);
	//$ConfirmNewPassword = clean($_POST['cpassword']);
	
     // check if the 'id' variable is set in URL
     if (isset($_GET['id']))
     {
         // get id value
         $id = $_GET['id'];
         
         // update the entry
         $result = mysql_query("UPDATE message SET answer='$answer',replied='$replied' WHERE id='$id'")
         or die("The question does not exist ... \n". mysql_error());

		if($result){
			echo "<html><script language='JavaScript'>alert('Changed successifully.')</script></html>";
			header("location: messages.php");
			exit();
		}
         
         // redirect back to the member profile
         header("Location: update_message.php?id=$id");
     }
     else
     // if id isn't set, give an error
     {
        die("Password changing failed ..." . mysql_error());
     }
 
?>