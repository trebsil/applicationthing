<?php
// Functions for interacting with the database

require_once 'dbConfig.php';

function insertIntoApplicantRecords($pdo, $firstName, $lastName, $email, $programmingLanguage, $yearsExperience, $expectedSalary) {
	$sql = "INSERT INTO applications (firstName, lastName, email, programmingLanguage, yearsExperience, expectedSalary) VALUES (?,?,?,?,?,?)";
	$stmt = $pdo->prepare($sql);
	return $stmt->execute([$firstName, $lastName, $email, $programmingLanguage, $yearsExperience, $expectedSalary]);
}

function seeAllApplicantRecords($pdo) {
	$sql = "SELECT * FROM applications";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute()) {
		return $stmt->fetchAll();
	}
}

function getApplicantById($pdo, $id) {
	$sql = "SELECT * FROM applications WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$id])) {
		return $stmt->fetch();
	}
}

function updateAnApplicant($pdo, $id, $firstName, $lastName, $email, $programmingLanguage, $yearsExperience, $expectedSalary) {
	$sql = "UPDATE applications
			SET firstName = ?,
				lastName = ?,
				email = ?,
				programmingLanguage = ?,
				yearsExperience = ?,
				expectedSalary = ?
			WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	return $stmt->execute([$firstName, $lastName, $email, $programmingLanguage, $yearsExperience, $expectedSalary, $id]);
}

function deleteAnApplicant($pdo, $id) {
	$sql = "DELETE FROM applications WHERE id = ?";
	$stmt = $pdo->prepare($sql);
	return $stmt->execute([$id]);
}