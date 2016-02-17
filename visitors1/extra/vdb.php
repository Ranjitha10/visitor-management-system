<html>
<body style="background-color:white">
<form method="post" action="home.php">
<input type="submit" value="BACK" name="vbck">




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
$sql = "INSERT INTO valvisit(vistid,timein,timeout) VALUES ('$_POST[vvid]','$_POST[vtn]','$_POST[vto]')";
$result = $link->query($sql);
 //$result = mysqli_query($link, $sql);
if($result)
	echo '<!DOCTYPE html>
<html>
<head>
<script>
alert("insertion success");
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
alert("insertion failure");
</script>
</head>
<body>
</body>
</html>';


mysqli_close($link);
?>
</body>
</html>
