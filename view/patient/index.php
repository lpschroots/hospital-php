<h2>Patiënts</h2>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
			<?php foreach ($patients as $patient) { ?>
			<tr>
				<td><?= $patient['patient_name']; ?></td>
				<td>SPECIES</td>
				<td><?= $patient['patient_status']; ?></td>
				<td>CLIENT</td>
				<td><a href="<?= URL ?>patient/edit/<?= $patient['patient_id'] ?>">Edit</a></td>
				<td><a href="<?= URL ?>patient/delete/<?= $patient['patient_id'] ?>">Delete</a></td>
			</tr>
			<?php } ?>
		
		</tbody>
	</table>
		<p><a href="<?= URL ?>patient/create">Create</a></p>
		<p><a href="<?= URL ?>home/index">Home</a></p>