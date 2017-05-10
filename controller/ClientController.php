<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("client/index", array(
		'clients' => getAllClients()
	));
}