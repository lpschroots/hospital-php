<?php

require(ROOT . "model/PatientModel.php");
require(ROOT . "model/SpecieModel.php");
require(ROOT . "model/ClientModel.php");

function index()
{
	render("patient/index", array(
		'patients' => getAllPatients()
	));
}

function delete($id)
{
	if (!deletePatient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patient/index");
}

function create()
{
	render("patient/create", array(
		'clients' => getAllClients(),
		'species' => getAllSpecies()
		));
}

function createSave()
{	
	if (!createPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}
	header("Location:" . URL . "patient/index");
}

function edit($id)
{
	render("patient/edit", array(
		'patient' => getPatient($id),
		'clients' => getAllClients(),
		'species' => getAllSpecies()
	));
}

function editSave()
{
	if (!editPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "patient/index");
}