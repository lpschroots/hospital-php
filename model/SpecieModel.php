<?php

function getAllSpecies() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getSpecie($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function deleteSpecie($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id =:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function editSpecie() 
{
	$description = isset($_POST['description']) ? $_POST['description'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($description) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE species SET species_description = :description WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':description' => $description,
		':id' => $id));

	$db = null;
	
	return true;
}

function createSpecies()
{	
	$db = openDatabaseConnection();
	$species = isset($_POST['species']) ? $_POST['species'] : null;
	if (strlen($species) == 0) {
		return false;
	}
	$sql = "INSERT INTO species (species_description) VALUES (:species)";
	$query = $db->prepare($sql);
	$query->execute(array(
		":species" => $species
		));
	$db = null;
	return true;
}