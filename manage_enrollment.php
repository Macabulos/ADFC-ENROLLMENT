
<div class="container-fluid">
	<div class="card">
		<div class="card-modal col-md-12">
			<form action="" id="manage-student">
				<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : '' ?>">
				<input type="hidden" name="school_year" value="<?php echo $sy ?>">
				<div class="form-group col-md-4">
					<label for="type" class="control-label">Student Type</label>
					<select name="type" id="type" class="custom-select browser-default">
						<option value="" disabled="" selected="">Select here</option>
						<option value="1" <?php echo isset($meta['type']) && $meta['type'] == 1 ? 'selected' : '' ?>>New</option>
						<option value="2" <?php echo isset($meta['type']) && $meta['type'] == 2 ? 'selected' : '' ?>>Regular</option>
						<option value="3" <?php echo isset($meta['type']) && $meta['type'] == 3 ? 'selected' : '' ?>>Transferee</option>
						<option value="4" <?php echo isset($meta['type']) && $meta['type'] == 4 ? 'selected' : '' ?>>Returnee</option>
					</select>
				</div>
			<div id="data-field" class="row"></div>
			</form>
		</div>
	</div>
		
</div>
