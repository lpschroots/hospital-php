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

function editSpecies() 
{
	$discription = isset($_POST['discription']) ? $_POST['discription'] : null;
	
	if (strlen($discription) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE species SET species_discription = :discription WHERE species_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':discription' => $discription,
		':id' => $id));

	$db = null;
	
	return true;
}