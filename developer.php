<?php session_start();?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>

				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
				<div id="page">
					<div id="content">
						<div class="post">
							<h1 class="title"></h1>
							<div class="entry">
							
								<table  align="center" width="100%">
										<tr  bgcolor="#EEE9F3">
										
										
									<td align="center" width="100%"><b>Developer And Management Team</b></td>
										</tr>
										
										<tr><td><br><br></td></tr>
								<tr>
									<td >
												<strong><font color="#433" size="2">Information about developers:</font></strong><br><br>
														<U><B> shubham</B></U><BR><br>
														<UL>
														<LI>Mobile No.<font color="purple">  1234567890</font></LI>
														</UL>
														<U><B>amit</B></U><BR>		<br>		
														<UL>
														<LI>Mobile No.<font color="purple">  2345678910</font></LI>
														</UL>
												</strong>										
											<center><strong>Contact US :</strong><font color="purple">+91 1231231234</font></center><br><br>						
												The Software used in TheBookShop project&nbsp;:<font color="purple">PHP,MYSQL,APACHE,XAMPP.</font> 
									</td>
								</tr>
								</table>
							</div>
							
						</div>
						
					</div>
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</div>
</body>
</html>
