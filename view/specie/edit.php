<div class="container">
	<h1>Edit Specie</h1>
	<form action="<?= URL ?>specie/editSave" method="post">
	
		<p><label>Description:</label><input type="text" name="description" value="<?= $specie['species_description']; ?>"></p>
		<input type="hidden" name="id" value="<?= $specie['species_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>
</div>
