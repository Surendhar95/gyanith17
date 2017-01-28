<div class="dropdown">
					<button onclick="myFunction()" class="dropbtn mdl-button mdl-button--raised mdl-js-button mdl-button--fab mdl-js-ripple-effect" style="background-color:#fff;">
                         <i class="material-icons md-48" style="color:black;">account_circle</i>
                    </button>
					<div id="myDropdown" class="dropdown-content">
				<?php if(isset($_SESSION['g_id'])){?>
					<a href="dashboard.php">Dashboard</a>
  					<a href="#">Schedule</a>
					<a href="index.php">Log Out</a>
					<?php }else{ ?>
    					<a href="log.php">Login</a>
  						<a href="#">Schedule</a>
					<?php } ?>
    				</div>
		</div>	


        <!-- add these dependency in main file
        <script type="text/javascript" src="js/material.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/material.min.css">
		
        -->