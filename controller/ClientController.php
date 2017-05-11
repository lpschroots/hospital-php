<?php

require(ROOT . "model/PatientModel.php");
require(ROOT . "model/SpecieModel.php");
require(ROOT . "model/ClientModel.php");

function index()
{
	render("client/index", array(
		'clients' => getAllClients()
	));
}