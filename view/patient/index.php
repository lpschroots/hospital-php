<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th colspan="2">Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php foreach ($patients as $patient) { ?>
			<tr>
				<td><?= $patient['patient_name']; ?></td>
				<td><?= $patient['species_description']; ?></td>
				<td><?= $patient['patient_status']; ?></td>
				<td><?= $patient['client_firstname']; ?></td>
				<td><?= $patient['client_lastname']; ?></td>
				<td><a href="<?= URL ?>patient/edit/<?= $patient['patient_id'] ?>">Edit</a></td>
				<td><a href="<?= URL ?>patient/delete/<?= $patient['patient_id'] ?>">Delete</a></td>
			</tr>
			<?php } ?>
		
		</tbody>
	</table>
		<p><a href="<?= URL ?>patient/create">Create</a></p>
		<p><a href="<?= URL ?>patient/index">Home</a></p>