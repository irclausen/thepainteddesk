<?php foreach ($items as $item): ?>
	<h2><?php echo $item['title'] ?></h2>
	<div class="itemDescription">
		<?php echo $item['text'] ?>
	</div>
	<p><a href="items/view/<?php echo $item['slug'] ?>">View item</a></p>
<?php endforeach ?>