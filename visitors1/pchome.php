<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Placement Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="SHORTCUT ICON" href="images/rvce.ico">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link id="theme" rel="stylesheet" type="text/css" href="style.css" title="theme" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    
		<style>
			fieldset {
						border:2px soild #999;
						border-radius:8px;
						box-shadow:0 0 10px #999;
						background-color:#A9E2F3;
						font-family:cambria;
						
					}
			button {
					cursor: pointer;
					
					width: 10%;
					padding: 10px 15px;
					border: 0;
					
					font-family: "cambria";
					font-size: 14px;
					font-weight: 100;
					button-align:center;
					
					}
					button:hover 
					{

						background: #27ae60;

					}
					.dropdown-menu .dropdown-toggle {
									left: 100%;
									position: absolute;
									top: 0;
									visibility: hidden;
									margin-top: -1px;
					}
					.dropdown-menu li:hover .dropdown-toggle {
						visibility: visible;
						}
			.dropdown:hover .dropdown-menu {
					display: block;
					background:#A9E2F3;
				}
				body {
					background: #EFEFFB;
					background-size: cover;
					font-family: "cambria";
					-webkit-font-smoothing: antialiased;
					-moz-osx-font-smoothing: grayscale;
					}

		</style>
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
				xhttp.open("GET", "ajax/rs1.php"+para, true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send(null);
				
			}
			
			function loadDB1()
			{		
				//var tod= $('#tod').val();
				
				var up = document.getElementById('up').value;
				var para = "?up="+up;
				var xhttp = new XMLHttpRequest();
				
				xhttp.onreadystatechange = function() 
				{
					if (xhttp.readyState == 4 && xhttp.status == 200) 
					{
					  document.getElementById("dis1").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET", "ajax/rs2.php"+para, true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send(null);	
			}
			
			function loadDB2()
			{		
				//var tod= $('#tod').val();
				
				var vis = document.getElementById('visit').value;
				var para = "?vis="+vis;
				var xhttp = new XMLHttpRequest();
				
				xhttp.onreadystatechange = function() 
				{
					if (xhttp.readyState == 4 && xhttp.status == 200) 
					{
					  document.getElementById("dis2").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET", "ajax/rs3.php"+para, true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send(null);	
			}
		</script>
	</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					
					<li>
                        <a href="pchome.php">PC View</a>
                    </li>
					
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add Company<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="campus.html">For Campus</a>
                            </li>
                            <li>
                                <a href="intern.php">For Internship</a>
                            </li>
                        </ul>
                    </li>
					
              
					
					<li>
                        <a href="logout.php">Logout</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-md-12">   <br><br><br>         				
				
					<font style="font-family:cambria"><h1 class="page-header">&nbsp&nbsp&nbsp&nbspToday's Company</h1></font>
					<form action ="" method = "post" >
						<select id = "tod" onchange="loadDB();" >
							<option > ... </option>
							<option value="c"> campus </option>
							<option value="i"> intern </option>
						</select>
						<!--<input type="submit" value="sub" >-->
						
						<!--<button type="button" onclick="loadDB()">Get</button>-->
						
					</form>
					<div id = "dis"> </div>
					
            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">
            <div class="col-md-12"><br><br><br>
					
					<font style="font-family:cambria"><h1 class="page-header">&nbsp&nbsp&nbsp&nbspUpcoming Company</h1></font>
					<form action ="" method = "post" >
						<select id = "up" onchange="loadDB1();" >
							<option > ... </option>
							<option value="c"> campus </option>
							<option value="i"> intern </option>
						</select>
					</form>
					<div id = "dis1"> </div>
				
		
		<div class="row">
            <div class="col-md-12"><br><br><br>
		 
					<font style="font-family:cambria"><h1 class="page-header">&nbsp&nbsp&nbsp&nbsp  Visited Company</h1></font>
					<form action ="" method = "post" >
						<select id = "visit" onchange="loadDB2();" >
							<option > ... </option>
							<option value="c"> campus </option>
							<option value="i"> intern </option>
						</select>
					</form>
					<div id = "dis2"> </div>
				
			
				<br><br>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
       
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
