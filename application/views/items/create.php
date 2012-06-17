<h2>Create a listing</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('items/create') ?>
	<label for="title">Title</label>
	<input type="input" name="title" /><br />
	<label for="text">Text</label>
	<textarea name="text" id="text" cols="30" rows="10"></textarea><br />
	<label for="width">Width</label>
	<input type="input" name="width"><br />
	<label for="height">Height</label>
	<input type="input" name="height"><br />
	<label for="depth">Depth</label>
	<input type="input" name="depth"><br />
	<input type="submit" name="submit" value="Create listing" />
</form>