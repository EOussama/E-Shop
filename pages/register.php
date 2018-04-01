<?php 
	require 'header.php';
?>      
        <main class="container">
        	<div class="fold pull-center" style="width: 600px;">
        		<div class="fold-header">
        			<h2 class="lead">Registration form</h2>
        		</div>
        		<div class="fold-body">
					<form class="form-group">
						<input type="text" placeholder="Username" class="textbox blue form-control" required>
						<input type="password" placeholder="Password" class="textbox blue form-control" required>
						<input type="password" placeholder="Password confirmation" class="textbox blue form-control" required>
						<input type="email" placeholder="E-mail" class="textbox blue form-control" required>
						<input type="text" placeholder="Location" class="textbox blue form-control" required>
						<select class="combobox lg form-control mt-1">
							<option>Individual</option>
							<option>Professional</option>
						</select>
						<input type="file" class="file-browse form-control">
						<input type="tel" placeholder="Téléphone" class="textbox blue form-control" required>
						<textarea name="" id="" placeholder="Description" class="textbox blue form-control"></textarea>
						<label class="checkbox blue">
							<span>I accept the <a id="useTermsModalOpenBtn" href="javascript:void(0)">conditions and terms</a> of use</span>
							<input type="checkbox" required>
							<div class="inner"></div>
						</label>
						<input type="submit" value="Register" class="btn green form-control mt-1">
						<input type="reset" class="btn gray form-control mt-1">
					</form>
        		</div>
        	</div>
        </main>
<?php 
	require 'footer.php';
?> 