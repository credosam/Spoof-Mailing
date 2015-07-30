<?php
if($_POST['checksum'] == '1234')
{
	$to = $_POST['toemail'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$fromemail = $_POST['fromemail'];
	$fromname = $_POST['fromname'];
	$lt= '<';
	$gt= '>';
	$sp= ' ';
	$from= 'From:';
	$headers = $from.$fromname.$sp.$lt.$fromemail.$gt;
	mail($to,$subject,$message,$headers);
	header("Location: sendmail.php?msg= Mail Sent!");
}

else if ($_POST['Submit'] == 'Send' || ($_POST['user'] == 'test' && $_POST['pass'] == '1234')) 
{
?>

<html>
<head>
<title>Email Pranks</title>
</head>
<body bgcolor="#ffffcc">
<h2 align="center">
Fake Email Prank Script By Samarth
</h2>
<p style="margin-left:15px">
<form action="sendmail.php" method="POST">
<b>From Name:</b><br>
<input type="text" name="fromname" size="50"><br>
<br><b>From Email:</b><br>
<input type="text" name="fromemail" size="50"><br>
<br><b>To Email:</b><br>
<input type="text" name="toemail" size="50"><br>
<br><b>Subject:</b><br>
<input type="text" name="subject" size="74"><br>
<br><b>Your Message:</b><br>
<textarea name="message" rows="5" cols="50">
</textarea><br>
<input name="checksum" placeholder="Guess?" type="text">
<input type="submit" name="Submit" value="Send">
<input type="reset" value="Reset">
</form>
</p>
<?php if (isset($_GET['msg'])) { echo "<font color=\"red\"><h3 align=\"center\"> $_GET[msg] </h3></font>"; } ?>
<h3 align="center">
</h3>
</body>
</html>

<?php
}

else
{
?>

<html>
<head>
<title>Security Check</title>
</head>
<body bgcolor="#ffffcc">
<h2 align="center">
Login
</h2>
<form action="sendmail.php" method="POST">
	<b>Username:</b>
	<input type="text" name="user"><br>
	<b>Password:</b>
	<input type="text" name="pass">
	<input type="submit" value="Login">	
</form>
</body>
</html>

<?php
}
?>