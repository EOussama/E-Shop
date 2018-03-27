<?php 
	require 'header.php';
?>        
        <main class="container">
        	<div class="fold" style="width: 600px; margin: auto;">
        		<h2 class="lead">Registration form</h2>
				<form class="form-group">
					<input type="text" placeholder="Username" class="textbox blue form-control" required>
					<input type="password" placeholder="Password" class="textbox blue form-control" required>
					<input type="password" placeholder="Password confirmation" class="textbox blue form-control" required>
					<input type="email" placeholder="E-mail" class="textbox blue form-control" required>
					<input type="text" placeholder="Location" class="textbox blue form-control" required>
					<select name="" id="" class="combobox lg form-control">
						<option value="">Individual</option>
						<option value="">Professional</option>
					</select>
					<input type="file" class="form-control">
					<input type="tel" placeholder="Téléphone" class="textbox blue form-control" required>
					<textarea name="" id="" placeholder="Description" class="textbox blue form-control"></textarea>
					<label class="checkbox blue">
						<span>I accept the <a href="javascript:void(0)">conditions and terms</a> of use</span>
						<input type="checkbox" required>
						<div class="inner"></div>
					</label>
					<input type="submit" class="btn green form-control">
					<input type="reset" class="btn gray form-control">
  				</form>
        	</div>
        </main>
<?php 
	require 'footer.php';
?> 