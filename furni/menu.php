<?php    session_start() ;
?> 

<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html">Furni<span>.</span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Acceuil</a>
						</li>
						<li><a class="nav-link" href="shop.php">Boutique</a></li>
						<li><a class="nav-link" href="about.php">A propos</a></li>
						<li><a class="nav-link" href="services.php">Services</a></li>
						<li><a class="nav-link" href="contact.php">Contactez-nous</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<?php if (isset($_SESSION)){
							echo "<div style ='color:white'>". $_SESSION['login']."</div>";
						} else {
						echo "<li><a class='nav-link' href='connexion.php'><img src='images/user.svg'></a></li>";
						}?>
						
						<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>