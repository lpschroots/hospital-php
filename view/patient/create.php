<header class="patient">
	<h1>Create patient</h1>
</header>

<div class="container">
	<form action="<?= URL ?>patient/createSave" method="post">
	
		<p><label>Name:</label><input type="text" name="patient_name" placeholder="Naam van het dier">
		<p>
			<label>Species:</label>
			<select name="species_id">
				<?php foreach ($species as $specie) { ?>
					<option value="<?=$specie['species_id'] ?>">
						<?=$specie['species_description'] ?>
					</option>												
				<?php } ?>
			</select>
		</p>
		<p>
			<label>Client:</label>
			<select name="client_id">
				<?php foreach ($clients as $client) { ?>
					<option value="<?=$client['client_id'] ?>">
						<?=$client['client_firstname'] . " " .$client['client_lastname'] ?>
					</option>							
				<?php } ?>
			</select>
		</p>
		<div><label>Status:</label><textarea name="patient_status" placeholder="Beschrijving van situatie "></textarea></div>

		<input type="submit" value="Verzenden">
	
	</form>
</div>