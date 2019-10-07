<h2 style="text-align: center;"></h2>
<div class="container">

	<?php echo form_open('admin/register'); ?>
	  <div class="form-group">
		<label>Name</label>
		<input type="text" name="title" class="form-control" placeholder="Enter Name">
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
</div>