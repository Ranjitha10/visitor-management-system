<?php

$userName = '';
if(isset($_REQUEST['un'])){
	$userName = addslashes($_REQUEST['un']);
}

$toMeet = '';
if(isset($_REQUEST['mt'])){
	$toMeet = addslashes($_REQUEST['mt']);
}
$companyName = '';
if(isset($_REQUEST['cpname'])){
	$companyName = addslashes($_REQUEST['cpname']);
}

$comingFrom = '';
if(isset($_REQUEST['ra'])){
	$comingFrom = addslashes($_REQUEST['ra']);
}
$mobile = '';
if(isset($_REQUEST['mn'])){
	$mobile = $_REQUEST['mn'];
}
$email = '';
if(isset($_REQUEST['em'])){
	$email = $_REQUEST['em'];
}
$timeInSec = time();
$currtime=date_default_timezone_set('asia/kolkata');
$currtime = date('Y-m-d H:i:s',$timeInSec);
$currGMTime = date('Y-m-d H:i:s',($timeInSec));
$status = 1;
$con = mysql_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("visitor", $con);

$sql = "INSERT INTO visitorinfo(firstname,tomeet,companyname,comingfrom,mobile,emailid,checkin,status)values('$userName','$toMeet','$companyName','$comingFrom','$mobile','$email','$currtime','$status')";

// Execute query
mysql_query($sql,$con);
$id = mysql_insert_id();
mysql_close($con);

$result = file_put_contents( $id, file_get_contents('php://input') );

if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}

$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/' . $id;
if($comingFrom != 'Family')
	$comingFrom .= "(Escort required)";  
print "<root><urlsrc>$url</urlsrc><id>$id</id><fname>$userName</fname><tomeet>$toMeet</tomeet><comingfrom>$comingFrom</comingfrom><mobile>$mobile</mobile><email>$email</email><checkin>$currGMTime</checkin><status>$status</status>";

?>
