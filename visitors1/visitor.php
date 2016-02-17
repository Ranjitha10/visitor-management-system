<html>
<head><title>Visitor record</title><head>
<body style="background-color:white" background="rvtrans.jpg" font="Tahoma">
	<marquee><h2 align="center"> R.V. COLLEGE OF ENGINEERING</h2></marquee>
	<fieldset>
	
	<legend><b>VISITOR FORM</b></legend>

	<center>
	<form method="post" action="database.php">
		<table style="padding:1px;width=60%;align:center">
	<center>	


<tr>
				<td>ENTER visitor number:</td>
				<td><input type="text" name="vid" placeholder="Enter id" required></td>
			</tr>



			<tr>
				<td>ENTER NAME:</td>
				<td><input type="text" name="naam" placeholder="Enter name" required></td>
			</tr>
			<tr>
				<td>ADDRESS</td>
				<td><input type="text" name="add" placeholder="Enter address"required></td>
			</tr>
			<tr>
				<td>GENDER</td>
				
				<td>
				<select name="gen">
				<option>Male</option>
				<option>Female</option>
				<option>Other</option>
				</td>
				</tr>
			<tr>
				<td>PHNO:</td>
				<td><input type="text" name="phnumber"placeholder="Enter phno"required></td>
			</tr>
			<tr>
				<td>COMPANY NAME:</td>
				<td><input type="text" name="comp"placeholder="Enter company name"required></td>
			</tr>
			<tr>
				<td>COMPANY ID:</td>
				<td><input type="text" name="id"placeholder="Enter company id"required ></td>
			</tr>
			<tr>
				<td>Branch:[Staff]</td>
				
			<td>
			<select name="meet">
			<option>ISE</option>
			<option>CSE</option>
			<option>E&E</option>
			<option>E&C</option>
			<option>MECH</option>
			<option>CIVIL</option>
			<option>AUTO</option>
			<option>CHEMICAL</option>
			<option>IT</option>
			<option>IEM</option>
			<option>OTHERS</option>
			</select>
			
			</td>
			
			</tr>
			<tr>
				<td>PURPOSE:</td>
				<td><input type="text" name="pur"placeholder="Enter purpose"required></td>
			</tr>
			<tr>
				<td>VEHICLE NUM:</td>
				<td><input type="text" name="vno"placeholder="vehicle num"required></td>
			</tr>
                         <tr>
				<td>EMAIL ID:</td>
				<td><input type="text" name="eid"placeholder="Enter name"required></td>
			</tr>
                         <tr>
				<td>DATE:(yyyy-mm-dd)</td>
				<td><input type="text" name="dt"placeholder="Enter name"required></td>
			</tr>

			<tr>
			
			<tr>
				<td colspan="2" style="text-align:center"><input type="submit" value="submit" name="submit"></td>
			</tr>
		</table>
	</form>
	</fieldset>
	
<div class="right_section" name="right_section">
 <div name="box">
 <center>
 <fieldset>
	<h3 align="center">Or</h3>
<form method="post" name="visitorupload" action="visitordetail.php" enctype="multipart/form-data">  
            <label>Select a file :</label><input type="file" name = "file" id = "file">  
			  <input type="submit" name="upload" value="Upload">
			<!--<button>Upload</button><br><br>-->
 </form>
 </fieldset>    
 </center>
 </div>
 </div>	
</body>
</html>	

