<html>
<body style="background-color:skyblue">
<form method="post" action="home.php">
<input type="submit" value="BACK" name="bk">




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
$name=$_POST['naam'];
$emailid=$_POST['eid'];
$phh=$_POST['phnumber'];



if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
{
    echo "Only letters allowed in the NAME field"; 
}

elseif (!filter_var($emailid, FILTER_VALIDATE_EMAIL)) 
{
    echo "Invalid email format"; 
}

elseif((!preg_match("/^[0-9]*$/",$phh)) || strlen($phh) != 10) 
{
	echo "Enter the valid 10 digit numbers."; 
}
else
{

// Create and execute a MySQL query
$sql = "INSERT INTO visitor(slno,name,address,gender,phno,companyname,companyid,tomeet,purpose,vehicleno,emailid,date) VALUES ('$_POST[vid]','$_POST[naam]','$_POST[add]','$_POST[gen]','$_POST[phnumber]','$_POST[comp]','$_POST[id]','$_POST[meet]','$_POST[pur]','$_POST[vno]','$_POST[eid]','$_POST[dt]')";




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
alert("Registration failure");
</script>
</head>
<body>
</body>
</html>';

}
mysqli_close($link);
?>
</body>
</html>