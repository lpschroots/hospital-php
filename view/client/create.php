<header class="specie">
	<h1>Create client</h1>
</header>

<div class="container">
	<form action="<?= URL ?>client/createSave" method="post">
	
		<p><label>Firstname:</label><input type="text" name="firstname" placeholder="Jan">
		<p><label>Lastname:</label><input type="text" name="lastname" placeholder="Smit"></p>

		<input type="submit" value="Verzenden">
	
	</form>

</div>