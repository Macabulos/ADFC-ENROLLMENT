
<div class="container-fluid">
	<form action="" id="manage-school_year">
		<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
		<div class="form-group">
			<label for="school_year" class="control-label">School Year</label>
			<input type="text" id="school_year" name="school_year" class="form-control" value="<?php echo isset($meta['school_year']) ? $meta['school_year'] : '' ?>" required>
		</div>
	</form>
</div>
