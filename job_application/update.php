<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/model.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<?php $getApplicantById = getApplicantById($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="firstName">First Name</label>
			<input type="text" name="firstName" value="<?php echo $getApplicantById['firstName']; ?>">
		</p>
		<p>
			<label for="lastName">Last Name</label>
			<input type="text" name="lastName" value="<?php echo $getApplicantById['lastName']; ?>">
		</p>
		<p>
			<label for="email">E-mail</label>
			<input type="text" name="email" value="<?php echo $getApplicantById['email']; ?>">
		</p>
		<p>
			<label for="programmingLanguage">Programming Language</label>
			<input type="text" name="programmingLanguage" value="<?php echo $getApplicantById['programmingLanguage']; ?>">
		</p>
		<p>
			<label for="yearsExperience">Years of Experience</label>
			<input type="text" name="yearsExperience" value="<?php echo $getApplicantById['yearsExperience']; ?>">
		</p>
		<p>
			<label for="expectedSalary">Expected Salary</label>
			<input type="text" name="expectedSalary" value="<?php echo $getApplicantById['expectedSalary']; ?>">
		</p>
		<p>
			<input type="hidden" name="id" value="<?php echo $getApplicantById['id']; ?>">
			<input type="submit" name="editApplicantBtn" value="Save Changes">
		</p>
	</form>
</body>
</html>