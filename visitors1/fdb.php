<html>
<body style="background-color:skyblue">
<form method="post" action="home.php">
<input type="submit" value="BACK" name="fdbk">




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
$sql = "INSERT INTO feedback(visitid,meet,suggestions) VALUES ('$_POST[fid]','$_POST[fm]','$_POST[fs]')";
$result = $link->query($sql);
 //$result = mysqli_query($link, $sql);
if($result)
	echo '<!DOCTYPE html>
<html>
<head>
<script>
alert("feedback recorded");
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
alert("failed plz check ");
</script>
</head>
<body>
</body>
</html>';


mysqli_close($link);
?>
</body>
</html>

