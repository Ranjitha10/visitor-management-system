<html>
<body style="background-color:skyblue">
<form method="post" action="home.php">
<input type="submit" value="BACK" name="sbck">




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
$sql = "INSERT INTO staffdetail(staffid,name,emailid,branch,phno) VALUES ('$_POST[sid]','$_POST[sname]','$_POST[se]','$_POST[br]','$_POST[sp]')";
$result = $link->query($sql);
 //$result = mysqli_query($link, $sql);
if($result)
	echo '<!DOCTYPE html>
<html>
<head>
<script>
alert("staff registered");
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
alert("failure");
</script>
</head>
<body>
</body>
</html>';


mysqli_close($link);
?>
</body>
</html>

