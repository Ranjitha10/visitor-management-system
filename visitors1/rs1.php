<?php

						require_once('db_config.php');
						//$date1 = date_create("now");//date object created
						$date1 = date('Y-m-d');
						$my_date = date('Y-m-d', strtotime($date1));
						//echo $my_date;
						//$result = $date1->format('Y-m-d');//date to string
						//echo $result;
						//if(isset($_POST['submit'])){
						$s = $_GET['tod'];
						//print $s;
//}
						
					if($s == "c"){
						$result1 = $mysqli->query("SELECT tomeet,firstname,id,status,mobile FROM visitorinfo WHERE tomeet='hod';" );
					
						while($row = $result1->fetch_assoc()) {
							echo "<fieldset style=background:#A9F5A9>";
							echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Name:&nbsp&nbsp ".$row['firstname']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ID:&nbsp&nbsp ".$row['id']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Status:&nbsp&nbsp ".$row['status']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Mobile:&nbsp&nbsp ".$row['mobile']."<br><br>";
							
?>
							<?php
							
							echo "</fieldset><br>";
						}
					}
					
					if($s == "princi"){
						$result1 = $mysqli->query("SELECT tomeet,firstname,id,status,mobile FROM visitorinfo WHERE tomeet='principal';" );
					
						while($row = $result1->fetch_assoc()) {
							echo "<fieldset style=background:#A9F5A9>";
							echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Name:&nbsp&nbsp ".$row['firstname']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ID:&nbsp&nbsp ".$row['id']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Status:&nbsp&nbsp ".$row['status']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Mobile:&nbsp&nbsp ".$row['mobile']."<br><br>";
					
						}
					}
					if($s == "fa"){
						$result1 = $mysqli->query("SELECT tomeet,firstname,id,status,mobile FROM visitorinfo WHERE tomeet='faculty';" );
					
						while($row = $result1->fetch_assoc()) {
							echo "<fieldset style=background:#A9F5A9>";
							echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Name:&nbsp&nbsp ".$row['firstname']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ID:&nbsp&nbsp ".$row['id']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Status:&nbsp&nbsp ".$row['status']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Mobile:&nbsp&nbsp ".$row['mobile']."<br><br>";
						}
					}
					if($s == "oth"){
						$result1 = $mysqli->query("SELECT tomeet,firstname,id,status,mobile FROM visitorinfo WHERE tomeet='other';" );
					
						while($row = $result1->fetch_assoc()) {
							echo "<fieldset style=background:#A9F5A9>";
							echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Name:&nbsp&nbsp ".$row['firstname']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp ID:&nbsp&nbsp ".$row['id']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Status:&nbsp&nbsp ".$row['status']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Mobile:&nbsp&nbsp ".$row['mobile']."<br><br>";
						}
					}
					
					
					
					?>