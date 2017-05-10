<?php

require(ROOT . "model/SpecieModel.php");

function index()
{
	render("specie/index", array(
		'species' => getAllSpecies()
	));
}

function edit($id)
{
	render("specie/edit", array(
		'species' => getSpecie($id)
	));
}

function editSave()
{
	if (!editSpecies()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "specie/index");
} 