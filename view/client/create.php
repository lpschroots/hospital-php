<header class="specie">
	<h1>Create client</h1>
</header>

<div class="container">
	<form action="<?= URL ?>client/createSave" method="post">
	
		<p><label>Firstname:</label><input type="text" name="firstname" placeholder="Jan">
		<p><label>Lastname:</label><input type="text" name="lastname" placeholder="Smit"></p>
		<p><label>Firstname:</label><input type="text" name="phone" placeholder="0610669242"></p>
		<p><label>Firstname:</label><input type="text" name="email" placeholder="name@hotmail.com"></p>

		<input type="submit" value="Verzenden">
	
	</form>

</div>