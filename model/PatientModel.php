<?php

function getAllPatients() 
{
	$db = openDatabaseConnection();
	$sql = "SELECT `patients`.`patient_id`,`patients`.`patient_name`, `patients`.`patient_status`, `species`.`species_description`, `clients`.`client_firstname`, `clients`.`client_lastname` FROM patients 
		INNER JOIN species ON `patients`.`species_id` = `species`.`species_id` 
		INNER JOIN clients ON `patients`.`client_id` = `clients`.`client_id`";
	$query = $db->prepare($sql);
	$query->execute();
	return $query->fetchAll();
	$db = null;
}

function getPatient($id) 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients WHERE id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));
	$db = null;
	return $query->fetch();
}

function deletePatient($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id =:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}
