<h2 style="text-align: center;"><?= $title; ?></h2>
<div class="container">
	<?php echo validation_errors(); ?>
	<?php echo form_open('articles/create'); ?>
	  <div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control" placeholder="Enter Title">
	  </div>
	  <div class="form-group">
		<label>Content</label>
		<textarea class="form-control" name="content" placeholder="Add Content"></textarea>
	  </div>
	  <div class="form-group">
	  	<label>Category</label>
	  	<textarea class="form-control" name="category" placeholder="Enter Category"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit </button>
	</form>
	<br>
	<br>
</div>