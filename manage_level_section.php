
<div class="container-fluid">
	<form action="" id="manage-level_section">
		<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
		<div class="form-group">
			<label for="level" class="control-label">Level</label>
			<input type="text" id="level" name="level" class="form-control" value="<?php echo isset($meta['level']) ? $meta['level'] : '' ?>" required>
		</div>
		<div class="form-group">
			<label for="section" class="control-label">Section</label>
			<input type="text" id="section" name="section" class="form-control" value="<?php echo isset($meta['section']) ? $meta['section'] : '' ?>" required>
		</div>
	</form>
</div>
