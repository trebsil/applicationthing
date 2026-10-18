<?php

require_once 'dbConfig.php';
require_once 'model.php';

if (isset($_POST['insertNewApplicantBtn'])) {
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$programmingLanguage = trim($_POST['programmingLanguage']);
	$yearsExperience = trim($_POST['yearsExperience']);
	$expectedSalary = trim($_POST['expectedSalary']);

	if ($firstName !== '' && $lastName !== '' && $email !== '' && $programmingLanguage !== '' && $yearsExperience !== '' && $expectedSalary !== '') {
		$query = insertIntoApplicantRecords($pdo, $firstName, $lastName, $email, $programmingLanguage, $yearsExperience, $expectedSalary);

		if ($query) {
			header("Location: ../index.php");
			exit;
		} else {
			echo "Insertion failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

if (isset($_POST['editApplicantBtn'])) {
	$id = trim($_POST['id']);
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$email = trim($_POST['email']);
	$programmingLanguage = trim($_POST['programmingLanguage']);
	$yearsExperience = trim($_POST['yearsExperience']);
	$expectedSalary = trim($_POST['expectedSalary']);

	if ($id !== '' && $firstName !== '' && $lastName !== '' && $email !== '' && $programmingLanguage !== '' && $yearsExperience !== '' && $expectedSalary !== '') {
		$query = updateAnApplicant($pdo, $id, $firstName, $lastName, $email, $programmingLanguage, $yearsExperience, $expectedSalary);

		if ($query) {
			header("Location: ../index.php");
			exit;
		} else {
			echo "Update failed";
		}
	} else {
		echo "Make sure that no fields are empty";
	}
}

if (isset($_POST['deleteApplicantBtn'])) {
	$query = deleteAnApplicant($pdo, $_GET['id']);

	if ($query) {
		header("Location: ../index.php");
		exit;
	} else {
		echo "Deletion failed";
	}
}