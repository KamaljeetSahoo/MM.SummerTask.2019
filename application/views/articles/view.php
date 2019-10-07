<h2><?php echo $articles['title'] ?></h2>
<div class="well">
	<h3>Category: <?php echo $articles['category']; ?></h3>
	<?php echo $articles['content']; ?>
</div>
<hr>
<a class="btn btn-success" href="<?php echo base_url(); ?>articles/edit/<?php echo $articles['slug']; ?>">Edit</a><hr>
<?php echo form_open('/articles/delete/'.$articles['id']); ?>
	<input type="submit" value="delete" class="btn btn-danger">
</form>
<hr>