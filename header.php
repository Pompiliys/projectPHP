<header class="header navbar-fixed-top">
	<!-- Navbar -->
	<nav class="navbar" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="menu-container js_nav-item">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="toggle-icon"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse nav-collapse">
				<div class="menu-container">
					<ul class="nav navbar-nav navbar-nav-right">
						<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
						<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="products.php">Products</a></li>
						<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="service.php">Service</a></li>
						<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="work.php">Work</a></li>
						<?php
						session_start();
							if(isset($_SESSION['usname'])){
							$sess = $_SESSION['usname'];
							} else 
							{ $sess = 'User'; }
						echo("<li class='js_nav-item nav-item'><a class='nav-item-child nav-item-hover' href='reg.html'>".$sess."</a></li>");
						?>
					</ul>
				</div>
			</div>
			<!-- End Navbar Collapse -->
		</div>
	</nav>
	<!-- Navbar -->
</header>