<html>
<body style="background-color:skyblue">
<form method="post" action="loginpage.html">
<input type="submit" value="BACK" name="adbk">




<?php
	$host="localhost"; // Host name or server name
        $username="root"; // Mysql username
            $password=""; // Mysql password
            $db_name="visitor"; // Database name
            
           
// Open a MySQL connection
$link =mysqli_connect($host,$username,$password,$db_name);
if(!$link) {
die('Connection failed: ' . $link->error());
}
// Create and execute a MySQL query
$sql = "INSERT INTO adminlogin(name,username,password,address,emailid,phno) VALUES ('$_POST[an]','$_POST[aname]','$_POST[apass]','$_POST[as]','$_POST[ae]','$_POST[ap]')";
$result = $link->query($sql);
 //$result = mysqli_query($link, $sql);
if($result)
	echo '<!DOCTYPE html>
<html>
<head>
<script>
alert("Registration successful");
</script>
</head>
<body>
<body>
</html>';

else
	echo '<!DOCTYPE html>
<html>
<head>
<script>
alert(" failed to register plz check...");
</script>
</head>
<body>
</body>
</html>';


mysqli_close($link);
?>
</body>
</html>

