<html>
<head>
</head>
<body>
<?php
	$host="localhost"; // Host name or server name
        $username="root"; // Mysql username
            $password=""; // Mysql password
            $db_name="visitor"; // Database name
            
           
// Open a MySQL connection
$link =mysqli_connect($host,$username,$password,$db_name);
if(!$link) 
{
die('Connection failed: ' . $link->error());
}

$v1=$_POST['un'];
$v2=$_POST['pass'];

$sql = "selct * from visitors where username='$v1' and password='$v2'";
$t2=mysql_affected_rows();
	if($t2)
	{
		echo "Login Successfull..";
	}
	else
	{
		
		echo "No Such User Exists,Please Check Details..";

}
?>
</body>
</html>