<?php
if($_SERVER["REQUEST_METHOD"] == "POST")	
{
	$usn = $_POST['vdd'];
	if(!empty($usn))
	{
		require_once __DIR__ . '/db_connect.php';
	 
	    // connecting to db
	    $db = new DB_CONNECT();
	 	if($db)
	 	{
	 		$sql="DELETE FROM visitor Where slno = '".$usn."'" ;
	    	$res = mysql_query($sql);

		  if ($res) 
{		    
echo '<!DOCTYPE html>
<html>
<head>
<script>
alert("deleted successfully");
</script>
</head>
<body>
</body>
</html>';


				 
		    echo "<form method=post action=home.php><input type=submit name=submit2 value=back></form>";


		 }



		}
	}

}
?>


