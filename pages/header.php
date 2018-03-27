<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="application-name" content="E-Shop">
        <meta name="author" content="Redouan, EOussama, Rachid">
        <meta name="description" content="A simple e-shop website with few social media interactions where you can trade goods or see what's on the market.">
        <meta name="keywords" content="e-shop, shop, trade, buy, sell, shopping">

<<<<<<< HEAD
       	<link href="<?php echo '\\E-Shop\fonts\fontawesome-free-5.0.8\css\fontawesome-all.min.css'; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo '\\E-Shop\styles\eomponents.css'; ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo '\\E-Shop\styles\main.css'; ?>">
        <link rel="icon" type="image/png" href="<?php echo '\\E-Shop\images\favicon.png'; ?>">
=======
       	<link href="fonts/fontawesome-free-5.0.8/css/fontawesome-all.min.css" rel="stylesheet" type="text/css">
        <link href="styles/eomponents.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="styles/main.css">
        <link rel="icon" type="image/png" href="images/favicon.png">
>>>>>>> 48d552299eb2193f0eb1911fc2e6948c4c87e471

        <title>E-Shop</title>
    </head>

    <body>
    	<div id="sideMenuBG">
    		<aside id="sideMenu">
    			<ul class="list sideMenu">
<<<<<<< HEAD
					<a href="\E-Shop\index.php" target="_blank">
						<li><i class="fas fa-home"></i> Home</li>
					</a>
					<a href="\E-Shop\pages\sellers.php" target="_self">
=======
					<a href="#" target="_blank">
						<li><i class="fas fa-home"></i> Home</li>
					</a>
					<a href="#" target="_blank">
>>>>>>> 48d552299eb2193f0eb1911fc2e6948c4c87e471
						<li><i class="fas fa-users"></i> Sellers</li>
					</a>
					<a href="javascript:void(0)">
						<li id="sideMenuContactModalOpenBtn"><i class="fas fa-envelope"></i> Contact us</li>
					</a>
					<a href="javascript:void(0)">
						<li id="sideMenuAboutBtn"><i class="fas fa-info-circle"></i> About</li>
					</a>
					<a href="javascript:void(0)">
						<li id="sideMenuCloseBtn"><i class="fas fa-times"></i> Close</li>
					</a>
				</ul>
    		</aside>
    	</div>
		<div class="modalBG" id="loginModalBG">
<<<<<<< HEAD
			<div class="fold light">
=======
			<div class="fold light" id="loginModalBG">
>>>>>>> 48d552299eb2193f0eb1911fc2e6948c4c87e471
				<div class="fold-header">
					<h4 class="lead"><i class="fas fa-sign-in-alt"></i> Login</h4>
					<i class="fas fa-times fa-lg" id="loginModalCloseBtn"></i>
				</div>
<<<<<<< HEAD
				<form id="loginForm" class="loginForm form-group">
					<input type="text" name="username" class="textbox blue xl form-control" placeholder="Username" maxlength="25" required >
					<input type="password" name="password" class="textbox blue xl form-control" placeholder="Password" minlength="8" maxlength="30" required >
=======
				<form id="loginForm" class="loginForm">
					<input type="text" name="username" class="textbox blue xl" placeholder="Username" maxlength="25" required >
					<input type="password" name="password" class="textbox blue xl" placeholder="Password" minlength="8" maxlength="30" required >
>>>>>>> 48d552299eb2193f0eb1911fc2e6948c4c87e471
					<input type="submit" value="Login" class="btn blue">
					<input type="reset" value="Clear" class="btn gray">
				</form>
			</div>
		</div>
       
       	<div class="modalBG" id="contactModalBG">
<<<<<<< HEAD
			<div class="fold light">
=======
			<div class="fold light" id="contactModalBG">
>>>>>>> 48d552299eb2193f0eb1911fc2e6948c4c87e471
				<div class="fold-header">
					<h4 class="lead"><i class="fas fa-envelope"></i> Contact us</h4>
					<i class="fas fa-times fa-lg" id="contactModalCloseBtn"></i>
				</div>
<<<<<<< HEAD
				<form id="contactForm" class="contactForm form-group">
					<input type="text" class="textbox blue xl form-control" placeholder="Username" maxlength="25" required >
					<input type="text" class="textbox blue xl form-control" placeholder="Subject" maxlength="30" required >
					<textarea class="textbox blue xl form-control" placeholder="Message" maxlength="500" required></textarea>
=======
				<form id="contactForm" class="contactForm">
					<input type="text" class="textbox blue xl" placeholder="Username" maxlength="25" required >
					<input type="text" class="textbox blue xl" placeholder="Subject" maxlength="30" required >
					<textarea class="textbox blue xl" placeholder="Message" maxlength="500" required></textarea>
>>>>>>> 48d552299eb2193f0eb1911fc2e6948c4c87e471
					<input type="submit" value="Send" class="btn blue">
					<input type="reset" value="Clear" class="btn gray">
				</form>
			</div>
		</div>
        <header class="landleg">
        	<h1>E-shop</h1>
        	<small>Step up your shopping</small>
        </header>
        <nav id="navbar" class="navbar dark">
        	<ul class="navitems">
        		<a href="javascript:void(0)">
        			<li id="burgerBtn" class="navitem"><i class="fas fa-bars fa-lg"></i></li>
        		</a>
<<<<<<< HEAD
        		<a href="\E-Shop\index.php" target="_blank" class="primaryItem" title="Home">
        			<li class="navitem"><i class="fas fa-home fa-lg"></i></li>
        		</a>
        		<a href="\E-Shop\pages\sellers.php" target="_self" class="primaryItem">
=======
        		<a href="#" target="_blank" class="primaryItem">
        			<li class="navitem"><i class="fas fa-home fa-lg"></i></li>
        		</a>
        		<a href="#" target="_blank" class="primaryItem">
>>>>>>> 48d552299eb2193f0eb1911fc2e6948c4c87e471
        			<li class="navitem">Sellers</li>
        		</a>
        		<a href="javascript:void(0)" class="primaryItem">
        			<li class="navitem" id="contactModalOpenBtn">Contact us</li>
        		</a>
        		<a href="javascript:void(0)" class="primaryItem">
        			<li class="navitem" id="aboutBtn">About</li>
        		</a>
<<<<<<< HEAD
        		<a href="\E-Shop\pages\cart.php" target="_self">
        			<li class="navitem right" title="Cart"><i class="fas fa-shopping-cart"></i></li>
        		</a>
        		<a href="\E-Shop\pages\register.php" target="_self">
=======
        		<a href="#" target="_blank">
        			<li class="navitem right"><i class="fas fa-shopping-cart"></i></li>
        		</a>
        		<a href="#" target="_blank">
>>>>>>> 48d552299eb2193f0eb1911fc2e6948c4c87e471
        			<li class="navitem right">Register</li>
        		</a>
        		<a href="javascript:void(0)">
        			<li class="navitem right" id="loginModalOpenBtn">Login</li>
        		</a>
        	</ul>
<<<<<<< HEAD
        </nav>
        <div id="scrollBtn" title="Scroll to top"><i class="fas fa-angle-up fa-lg"></i></div>
=======
        </nav>
>>>>>>> 48d552299eb2193f0eb1911fc2e6948c4c87e471
