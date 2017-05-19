<?php

function getAllPatients() 
{
	$db = openDatabaseConnection();
	$sql = "SELECT patients. patient_id, patients. patient_name, patients. patient_status, species. species_description, clients. client_firstname, clients. client_lastname FROM patients 
		INNER JOIN species ON patients. species_id = species. species_id 
		INNER JOIN clients ON patients. client_id = clients. client_id";
	$query = $db->prepare($sql);
	$query->execute();
	return $query->fetchAll();
	$db = null;
}

function getPatient($id) 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM patients WHERE patient_id = :id";
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

function createPatient()
{	
	$db = openDatabaseConnection();
	$name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$species = isset($_POST['species_id']) ? $_POST['species_id'] : null;
	$status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;
	$client = isset($_POST['client_id']) ? $_POST['client_id'] : null;

	if (strlen($name) == 0 || strlen($species) == 0 || strlen($status) == 0 || strlen($client) == 0) {
		return false;
	}

	$sql = "INSERT INTO patients (patient_name, species_id, patient_status, client_id)
	VALUES (:patient, :species, :status, :client)";
	$query = $db->prepare($sql);
	$query->execute(array(
		":patient" => $name,
		":species" => $species,
		":status" => $status,
		":client" => $client));	
	$db = null;
	return true;
}

function editPatient() 
{
	$db = openDatabaseConnection();
	$name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$species = isset($_POST['species_id']) ? $_POST['species_id'] : null;
	$status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;
	$client = isset($_POST['client_id']) ? $_POST['client_id'] : null;
	$id = isset($_POST['patient_id']) ? $_POST['patient_id'] : null;

	if (strlen($name) == 0 || strlen($species) == 0 || strlen($status) == 0 || strlen($client) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :name, species_id = :species, patient_status = :status, client_id = :client WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':name' => $name,
		':species' => $species,
		':status' => $status,
		':client' => $client,
		':id' => $id));

	$db = null;
	
	return true;
}