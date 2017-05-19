<div class="container">
	<h1>Edit patient</h1>
	<form action="<?= URL ?>patient/editSave" method="post">
	
		<p><label>Name:</label><input type="text" name="patient_name" value="<?= $patient['patient_name']; ?>"></p>
		<p>
			<label>Species:</label>
				<select name="species_id">
					<?php foreach ($species as $specie) { ?>
						<option value="<?=$specie['species_id'] ?>" <?php if ($specie['species_id'] == $patient['species_id']) { echo "selected"; } ?>>

							<?=$specie['species_description'] ?>

						</option>							
					<?php } ?>
				</select>
		</p>
		<p>
			<label>Client:</label>
				<select name="client_id">
					<?php foreach ($clients as $client) { ?>
						<option value="<?=$client['client_id'] ?>" <?php if ($client['client_id'] == $patient['client_id']) { echo "selected"; } ?>>

								<?= $client['client_firstname'] . " " . $client['client_lastname']  ?>

						</option>							
					<?php } ?>	
				</select>
		</p>
		<p><label>Status:</label><textarea name="patient_status" type="text"><?= $patient['patient_status']; ?></textarea></p>

		<input type="hidden" name="patient_id" value="<?= $patient['patient_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>