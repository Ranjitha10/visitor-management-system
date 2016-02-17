<html>
<body style="background-color:skyblue">
<form method="post" action="home.php">
<input type="submit" value="BACK" name="bk">




<?php
	//$sem=$_POST["sem"];
	$fname=$_FILES['file']['name'];
	if(!isset($fname))
	{
		echo "File not able to upload!Please try again!";
	}
	else if ($_FILES["file"]["error"] > 0) {
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
	} 
	else 
	{
		$ext = pathinfo($fname, PATHINFO_EXTENSION);
		$temp="visitor".".".$ext;
		$mov=move_uploaded_file($_FILES['file']['tmp_name'],"uploads/$temp");
		//save and rename files to a new folder 
		

		include 'Classes/PHPExcel/IOFactory.php';
		
			$inputFileType = 'Excel2007';
			//$sem=$_POST["sem"];
			$fname=$_FILES['file']['name'];
			$ext = pathinfo($fname, PATHINFO_EXTENSION);
			$temp="visitor".".".$ext;
			//get file from the saved folder
						
			$objReader = PHPExcel_IOFactory::createReader($inputFileType);
			$objPHPExcel = $objReader->load("uploads/".$temp);

			$sheet = $objPHPExcel->setActiveSheetIndex(0); 
			$highestRow = $sheet->getHighestRow(); 
			$highestColumn = $sheet->getHighestColumn();
			$x=1;
			//$con=mysqli_connect("localhost","root","","timetable");
			require_once('db_config.php');
			//$stmt=$con->prepare("INSERT into student(usn, dept, name, counsellor, sem, pw) values(?,?,?,?,?,?)");
			//$stmt->bind_param("ssssss",$usn,$dept,$name,$counsellor,$sem,$pw);
			
			while($x<=$highestRow)
			{	$l="A".$x;
				$m="B".$x;
				$n="C".$x;
				$o="D".$x;
				$p="E".$x;
				$q="F".$x;
				$r="G".$x;
				$s="H".$x;
				$t="I".$x;
				$u="J".$x;
				$v="K".$x;
				$w="L".$x;
				
				$slno=$sheet->getCell($l)->getValue();
				$name=$sheet->getCell($m)->getValue();
				$address=$sheet->getCell($n)->getValue();
				$gender=$sheet->getCell($o)->getValue();
				$phno=$sheet->getCell($p)->getValue();
				$companyname=$sheet->getCell($q)->getValue();
				$companyid=$sheet->getCell($r)->getValue();
				$tomeet=$sheet->getCell($s)->getValue();
				$purpose=$sheet->getCell($t)->getValue();
				$vehicleno=$sheet->getCell($u)->getValue();
				$emailid=$sheet->getCell($v)->getValue();
				$date=$sheet->getCell($w)->getValue();
				
				$query=$sql = "INSERT INTO visitor (slno,name,address,gender,phno,companyname,companyid,tomeet,purpose,vehicleno,emailid,date) VALUES 
				('$slno','$name','$address','$gender','$phno','$companyname','$companyid','$tomeet','$purpose','$vehicleno','$emailid','$date')";
				$result=mysqli_query($con,$query);
				$x=$x+1;
				//echo $x;
			}
			

	}
		if($result)
	{
		//header("location:home.php");
		echo '<!DOCTYPE html>
<html>
<head>
<script>
alert("Registration successful");
</script>
</head>
<body>
</body>
</html>';
		
	}
	else
	{
		echo "Enter the valid details";
		//header("location:stsignup.html");
	}

?> 
</body>
</html>