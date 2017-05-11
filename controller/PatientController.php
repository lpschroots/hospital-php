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
	render("student/create");
}

function createSave()
{
	if (!createStudent()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "student/index");
}