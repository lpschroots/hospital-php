<div class="container">
			<li><a href="<?= URL ?>client/index">Go back</a></li>
				<h1>Edit client</h1>

			<form action="<?= URL ?>client/editSave" method="post">
			
				<input type="text" name="firstname" value="<?= $client['client_firstname']; ?>">
				<input type="text" name="lastname" value="<?= $client['client_lastname']; ?>">


				<input type="hidden" name="id" value="<?= $client['client_id']; ?>">
				<input type="submit" value="Verzenden">
			
			</form>

</div>
