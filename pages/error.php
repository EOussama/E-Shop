<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="application-name" content="E-Shop">
        <meta name="author" content="Redouan, EOussama, Rachid">
        <meta name="description" content="A simple e-shop website with few social media interactions where you can trade goods or see what's on the market.">
        <meta name="keywords" content="e-shop, shop, trade, buy, sell, shopping">

       	<link href="<?php echo '\\E-Shop\fonts\fontawesome-free-5.0.8\css\fontawesome-all.min.css'; ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo '\\E-Shop\styles\eomponents.css'; ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo '\\E-Shop\styles\main.css'; ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo '\\E-Shop\styles\error.css'; ?>">
        <link rel="icon" type="image/png" href="<?php echo '\\E-Shop\images\favicon.png'; ?>">

        <title>E-Shop</title>
    </head>
    
    <body>
    	<div id="loginModalOpenBtn"></div>
    	<div id="sideMenuContactModalOpenBtn"></div>
    	<div class="modalBG" id="loginModalBG">
			<div class="fold light">
				<div class="fold-header">
					<h4 class="lead"><i class="fas fa-sign-in-alt"></i> Login</h4>
					<i class="fas fa-times fa-lg" id="loginModalCloseBtn"></i>
				</div>
				<form id="loginForm" class="loginForm form-group">
					<input type="text" name="username" class="textbox blue xl form-control" placeholder="Username" maxlength="25" required >
					<input type="password" name="password" class="textbox blue xl form-control" placeholder="Password" minlength="8" maxlength="30" required >
					<input type="submit" value="Login" class="btn blue">
					<input type="reset" value="Clear" class="btn gray">
				</form>
			</div>
		</div>
    	<div class="modalBG" id="contactModalBG">
			<div class="fold light">
				<div class="fold-header">
					<h4 class="lead"><i class="fas fa-envelope"></i> Contact us</h4>
					<i class="fas fa-times fa-lg" id="contactModalCloseBtn"></i>
				</div>
				<form id="contactForm" class="contactForm form-group">
					<input type="text" class="textbox blue xl form-control" placeholder="Username" maxlength="25" required >
					<input type="text" class="textbox blue xl form-control" placeholder="Subject" maxlength="30" required >
					<textarea class="textbox blue xl form-control" placeholder="Message" maxlength="500" required></textarea>
					<input type="submit" value="Send" class="btn blue">
					<input type="reset" value="Clear" class="btn gray">
				</form>
			</div>
		</div>
   	
    	<header class="landleg full">
    		<h1 class="lead"><i class="fas fa-bug"></i> Ops, file not found!</h1>
    		<hr class="fade">
    		<p>The page you're trying to access does not exists! either that, or there were some problems while being redirected, in that case please let our support team know.</p>
    		<a href="javascript:void(0)" id="contactModalOpenBtn"><button class="btn dark lg">Contact support</button></a>
    		<a href="\E-Shop\index.php" target="_self"><button id="errorContactBtn" class="btn dark lg">Main page</button></a>
    	</header>
    	
    	<script type="text/javascript" src="\E-Shop\scripts\modal.js"></script>
	</body>
</html>