<div class="container">
				<h1>Edit client</h1>

			<form action="<?= URL ?>client/editSave" method="post">
			
				<p><label>Firstname:</label><input type="text" name="firstname" value="<?= $client['client_firstname']; ?>"></p>
				<p><label>Lastname:</label><input type="text" name="lastname" value="<?= $client['client_lastname']; ?>"></p>
				<p><label>Phone number:</label><input type="text" name="phone" value="<?= $client['client_phone']; ?>"></p>
				<p><label>Email:</label><input type="text" name="email" value="<?= $client['client_email']; ?>"></p>


				<input type="hidden" name="id" value="<?= $client['client_id']; ?>">
				<input type="submit" value="Verzenden">
			
			</form>

</div>
