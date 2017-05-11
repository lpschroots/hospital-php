<?php

require(ROOT . "model/PatientModel.php");
require(ROOT . "model/SpecieModel.php");
require(ROOT . "model/ClientModel.php");

function index()
{
	render("specie/index", array(
		'species' => getAllSpecies()
	));
}

function delete($id)
{
	if (!deleteSpecie($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "specie/index");
}

function edit($id)
{
	render("specie/edit", array(
		'specie' => getSpecie($id)
	));
}

function editSave()
{
	if (!editSpecie()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "specie/index");
} 

function create()
{
	render("specie/create");
}

function createSave()
{
	if (!createSpecies()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "specie/index");
}