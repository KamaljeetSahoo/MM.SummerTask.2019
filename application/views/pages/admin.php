<h2 style="text-align: center;">Registration Page</h2>
<div class="container">
	<?php if(isset($_SESSION['success'])){ ?>
		<div class="alert alert-succcess"><?php echo $_SESSION['success']; ?></div><?php } ?>
	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	<?php echo form_open('admin/register'); ?>
	  <div class="form-group">
		<label>Name</label>
		<input type="text" name="username" class="form-control" placeholder="Enter Name">
	  </div>
	  <div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Enter Password">
	  </div>
	  <div class="form-group">
		<label>R_Password</label>
		<input type="password" name="r_password" class="form-control" placeholder="Re-enter Password">
	  </div>
	  <div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" placeholder="Enter Email">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<br>
	<br>
	<br>
	<hr>
	
	<?php echo form_open('/admin/login') ?>
	<h4>If already Registered &nbsp;<input type="submit" value="LOGIN" class="btn btn-success">&nbsp; Here</h4>
	</form>
</div>