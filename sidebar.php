
			<div class="menu-wrap"><!-- style="z-index: 7000;display: block;">-->
				<nav class="menu">
					<div class="icon-list"><!-- style="color:white">-->
						<div class="home-logo">
							<a href="/"><img  src="/images/logo.svg"/></a>
						</div>
						<?php
							 
							 if(isset($_SESSION['g_id'])){ 				
						 ?>
						<a href="/dashboard.php"><!-- style="color:white">--><i class="fa fa-tachometer" aria-hidden="true"></i><span>Dashboard</span></a>
						<?php 
							}
							else
							{
								?>
							<a href="/log.php"><!-- style="color:white">--><i class="fa fa-tachometer" aria-hidden="true"></i><span>Dashboard</span></a>

								<?php
							}

						?>
						<a href="/events.php"><!-- style="color:white">--><i class="fa fa-cubes" aria-hidden="true"></i><span>Events</span></a>
						<a href="/workshops.php"><!-- style="color:white">--><i class="fa fa-cogs" aria-hidden="true"></i><span>Workshops</span></a>
						<a href="/paper.php"><!-- style="color:white">--><i class="fa fa-file-powerpoint-o" aria-hidden="true"></i><span>Paper Presentation</span></a>
						<a href="/expo.php"><!-- style="color:white">--><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Project Expo</span></a>
						<a href="/buzzit"><!-- style="color:white">--><i class="fa fa-bullhorn" aria-hidden="true"></i><span>Buzz It Up</span></a>
						<a href="/guest.php"><!-- style="color:white">--><i class="fa fa-podcast" aria-hidden="true"></i><span>Guest Lectures</span></a>
						<a href="/nontech.php"><!-- style="color:white">--><i class="fa fa-gamepad" aria-hidden="true"></i><span>Bazinga</span></a>
						<a href="/hospitality.php"><!-- style="color:white">--><i class="fa fa-bed" aria-hidden="true"></i><span>Hospitality</span></a>
						<a href="/sponsors.php"><!-- style="color:white">--><i class="fa fa-scribd" aria-hidden="true"></i><span>Sponsors</span></a>
						<a href="/team.php"><!-- style="color:white">--><i class="fa fa-users" aria-hidden="true"></i><span>Our team</span></a>
						<a href="/about.php"><!-- style="color:white">--><i class="fa fa-info-circle" aria-hidden="true"></i><span>About Us</span></a>
						
					</div>
				</nav>
				<button class="close-button" id="close-button">Close Menu</button>
			</div>
			<button class="menu-button" id="open-button">Open Menu</button>