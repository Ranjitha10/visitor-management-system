<html>
<body style="background-color:white">
<form method="post" action="home.php">
<input type="submit" value="BACK" name="adbk">






<?php
    $host="localhost"; // Host name 
    $username="root"; // Mysql username 
    $password=""; // Mysql password 
    $db_name="visitor"; // Database name 
    $tbl_name="visitor"; // Table name

    // Connect to server and select databse.
    mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
    mysql_select_db("$db_name")or die("cannot select DB");
    $username1 = $_POST['uusername'];
	$username2 = $_POST['uaddress'];
	
$trail = "select * from visitor";
$var1 = mysql_query($trail);
while($row = mysql_fetch_assoc($var1))
{
if($row['name'] == $username1)
{
    $sql="UPDATE visitor SET address='$_POST[uaddress]' WHERE name='$_POST[uusername]'" ;
    $result=mysql_query($sql);
 	$flag=1;
	break;
}
else
{
	$flag=0;
}
}

if($flag)
{
		echo '<!DOCTYPE html>
<html>
<head>
<script>
alert("successful updation");
</script>
</head>
<body>
<body>
</html>';
}
else
{
		echo '<!DOCTYPE html>
<html>
<head>
<script>
alert("update fail");
</script>
</head>
<body>
<body>
</html>';
}

?>