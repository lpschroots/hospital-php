<header class="patient">
	<h1>Create patient</h1>
</header>

<div class="container">
	<form action="<?= URL ?>patient/createSave" method="post">
	
		<p><label>Name:</label><input type="text" name="name" placeholder="Kyra">
		<p><label>Species:</label><select name="species">
			<option value="hond">Hond</option>
			<option value="kat">Kat</option></select></p>
		<div><label>Status:</label><textarea name="status"></textarea></div>
		<p><label>Client Firstname:</label><input type="text" name="firstname" placeholder="John"></p>
		<p><label>Client Lastname:</label><input type="text" name="lastname" placeholder="Doe"></p>

		<input type="submit" value="Verzenden">
	
	</form>

</div>