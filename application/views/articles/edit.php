<h2 style="text-align: center;"><?= $title; ?></h2>
<div class="container">
	<?php echo validation_errors(); ?>
	<?php echo form_open('articles/update') ?>
	<input type="hidden" name="id" value="<?php echo $articles['id']; ?>">
	  <div class="form-group">
		<label>Title</label>
		<input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?php echo $articles['title']; ?>">
	  </div>
	  <div class="form-group">
		<label>Content</label>
		<textarea class="form-control" name="content" placeholder="Add Content"><?php echo $articles['content']; ?></textarea>
	  </div>
	  <div class="form-group">
	  	<label>Category</label>
	  	<textarea class="form-control" name="category" placeholder="Enter Category"><?php echo $articles['category']; ?></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Submit </button>
	</form>
	<br>
	<br>
</div>