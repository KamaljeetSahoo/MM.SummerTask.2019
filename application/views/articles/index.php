<h2 style="text-align: center;"><?= $title ?></h2>
<div class="container">
<?php foreach ($articles as $value) : ?>
		<div class="col-md-4">
			<div class="well">
				<h2><?php echo $value['title']; ?></h2>
				<h3>Category: <?php echo $value['category']; ?></h3>
				<p><?php echo $value['content']; ?></p>
				<button><a class="btn btn-deault" href="<?php echo site_url('/articles/'.$value['slug']); ?>">View Article</a></button>
			</div>
		</div>
<?php endforeach; ?>
</div>