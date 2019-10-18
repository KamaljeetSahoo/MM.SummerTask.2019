<h2 style="text-align: center;">Login Page</h2>
<div class="container">
	<?php if(isset($_SESSION['success'])){ ?>
		<div class="alert alert-succcess"><?php echo $_SESSION['success']; ?></div><?php } ?>
	<?php echo validation_errors('<div class="alert alert-danger">','</div>'); ?>
	<?php echo form_open('admin/login_user'); ?>
	  <div class="form-group">
		<label>Name</label>
		<input type="text" name="username" class="form-control" placeholder="Enter Name">
	  </div>
	  <div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Enter Password">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	<br>
	<br>
</div>