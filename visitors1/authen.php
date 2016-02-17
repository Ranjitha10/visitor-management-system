
<html>
<body style="background-color:skyblue">
<form method="post" action="loginpage.html">
<input type="submit" value="BACK" name="aabck">
<?php
error_reporting(0);



$mysqli = new mysqli("localhost","root","","visitor"); // put "" for the password if you want to run them
/* check connection */
if ($mysqli->connect_errno) 
{
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
// Define $username and $password
        $username = $_POST['un'];
        $password = $_POST['pass'];
        //$password= md5($password);
		$_SESSION['userNameT'] = $username;
		

			$sql="select * from adminlogin where username='$username' and password='$password'";
		
		

$result = $mysqli->query($sql);

//echo $result->num_rows;
//echo $username,$password;

if ($result->num_rows == 1) 
{
    $_SESSION['username']=$username; // Initializing Session
    $_SESSION['password']=$password;
    
    header("location:home.php");
}

else 
{
    $_SESSION['err']="login";
echo '<!DOCTYPE html>
<html>
<head>
<script>
alert("wrong username or password plz Re enter");
</script>
</head>
<body>

</body>
</html>';


}

?>

</body>
</html>