<html>
<head>
<script>
function loadDB()
			{		
				//var tod= $('#tod').val();
				
				var tod = document.getElementById('tod').value;
				var para = "?tod="+tod;
				var xhttp = new XMLHttpRequest();
				
				xhttp.onreadystatechange = function() 
				{
					if (xhttp.readyState == 4 && xhttp.status == 200) 
					{
					  document.getElementById("dis").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET", "rs1.php"+para, true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send(null);
				
			}
</script>
</head>
<body background="rvtrans.jpg" font="Tahoma">
<body style="background-color:white">
<h2 align="center">
R.V. COLLEGE OF ENGINEERING</h2>
<fieldset>
	
	<legend><b>REPORT</b></legend>




<center>Select the data listed below....


<div class="row">
            <div class="col-md-12">   <br><br><br>         				
				
					<font style="font-family:cambria"><h1 class="page-header"></h1></font>
					<form action ="home.php" method = "post" >
						<select id = "tod" onchange="loadDB();" >
							<option > ... </option>
							<option value="c"> hod </option>
							<option value="princi"> principal </option>
							<option value="fa"> faculty </option>
							<option value="oth"> other </option>
							
						</select><br>
						<tr>
				<br>
				<br>
								
				<td colspan="2" style="text-align:center"><input type="submit" value="Back" name="ba"></td>
			</tr>
						</center>
						
						
					</form>
					<div id = "dis"> </div>
					
            </div>
        </div>
</body>
</html>