<?php
	$document_id = $_POST['document_id'];
	$arr_firstname = $_POST['firstname'];
	$arr_lastname = $_POST['lastname'];

	$sql = "";
	foreach ($arr_lastname as $key => $lastname) {
		$sql .= "INSERT INTO customer(firstname, lastname, document_id) ";
		$sql .= "VALUES('{$arr_firstname[$key]}', '{$lastname}', {$document_id});";
	}

	var_dump($sql);