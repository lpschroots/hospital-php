<div class="container">
	<h1>Edit patient</h1>
	<form action="<?= URL ?>patient/editSave" method="post">
	
		<input type="text" name="name" value="<?= $patient['patient_name']; ?>">
		<select name="species">
			<option value="1" <?php if ($patient['species_id'] == "1") { echo "selected=\"true\""; } ?>>1</option>
			<option value="2" <?php if ($patient['species_id'] == "2") { echo "selected=\"true\""; } ?>>2</option>	
		</select>
		<select name="client">
			<option value="1" <?php if ($patient['client_id'] == "1") { echo "selected=\"true\""; } ?>>1</option>
			<option value="2" <?php if ($patient['client_id'] == "2") { echo "selected=\"true\""; } ?>>2</option>	
		</select>
		<input type="text" name="status" value="<?= $patient['patient_status']; ?>">

		<input type="hidden" name="id" value="<?= $patient['patient_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>