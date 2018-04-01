<?php 
	require 'header.php';

	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$location = $_POST['location'];
		$type = $_POST['type'];
		$photo = $_POST['photo'];
		$phone = $_POST['phone'];
		$description = $_POST['description'];
		
		echo $username .' '.$password.' '.$email.' '.$location.' '.$type.' '.$photo.' '.$phone.' '.$description;;
		
		//echo "<script>location = '../index.php';</script>";
	}
?>      
        <main class="container">
        	<div class="fold pull-center" style="width: 600px;">
        		<div class="fold-header">
        			<h2 class="lead">Registration form</h2>
        		</div>
        		<div class="fold-body">
					<form class="form-group" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
						<input type="text" placeholder="Username" name="username" class="textbox blue form-control" required>
						<input id="passwordInput" type="password" placeholder="Password" name="password" class="textbox blue form-control" required>
						<input type="password" placeholder="Password confirmation" class="textbox blue form-control" required onchange="check(this);">
						<input type="email" placeholder="E-mail" name="email" class="textbox blue form-control" required>
						<input type="text" placeholder="Location" name="location" class="textbox blue form-control" required>
						<select name="type" class="combobox lg form-control mt-1">
							<option value="Individual">Individual</option>
							<option value="Professional">Professional</option>
						</select>
						<input type="file" name="photo" class="file-browse form-control">
						<input type="tel" placeholder="Téléphone" name="phone" class="textbox blue form-control" required>
						<textarea placeholder="Description" name="description" class="textbox blue form-control"></textarea>
						<label class="checkbox blue">
							<span>I accept the <a id="useTermsModalOpenBtn" href="javascript:void(0)">conditions and terms</a> of use</span>
							<input type="checkbox" required>
							<div class="inner"></div>
						</label>
						<input type="submit" name="submit" value="Register" class="btn green form-control mt-1">
						<input type="reset" class="btn gray form-control mt-1">
					</form>
        		</div>
        	</div>
        </main>
        
       	<script type="text/javascript" src="\E-Shop\scripts\registration.js"></script>
<?php 
	require 'footer.php';
?> 