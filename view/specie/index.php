<h2>Species</h2>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php foreach ($species as $specie) { ?>
			<tr>
				<td><?= $specie['species_id']; ?></td>
				<td><?= $specie['species_description']; ?></td>
				<td><a href="<?= URL ?>specie/edit/<?= $specie['species_id'] ?>">Edit</a></td>
				<td><a href="<?= URL ?>specie/delete/<?= $specie['species_id'] ?>">Delete</a></td>
			</tr>
			<?php } ?>
		
		</tbody>
	</table>
		<p><a href="<?= URL ?>specie/create">Create</a></p>
		<p><a href="<?= URL ?>home/index">Home</a></p>