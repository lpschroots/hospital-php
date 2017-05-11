<h2>Clients</h2>
	<table>
		<thead>
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Phone</th>
				<th>Email</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php foreach ($clients as $client) { ?>
				<tr>
					<td><?= $client['client_firstname']; ?></td>
					<td><?= $client['client_lastname']; ?></td>
					<td>0612345678</td>
					<td>someones@hismail.com</td>
					<td><a href="<?= URL ?>client/edit/<?= $client['client_id'] ?>">Edit</a></td>
					<td><a href="<?= URL ?>client/delete/<?= $client['client_id'] ?>">Delete</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
		<p><a href="<?= URL ?>client/create">Create</a></p>
		<p><a href="<?= URL ?>home/index">Home</a></p>