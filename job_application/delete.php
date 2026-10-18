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
	<h1>Are you sure you want to delete this applicant?</h1>
	<?php $getApplicantById = getApplicantById($pdo, $_GET['id']); ?>
	<form action="core/handleForms.php?id=<?php echo $_GET['id']; ?>" method="POST">
		<div class="applicantContainer" style="border-style: solid; font-family: 'Arial';">
			<p>First Name: <?php echo $getApplicantById['firstName']; ?></p>
			<p>Last Name: <?php echo $getApplicantById['lastName']; ?></p>
			<p>E-mail: <?php echo $getApplicantById['email']; ?></p>
			<p>Programming Language: <?php echo $getApplicantById['programmingLanguage']; ?></p>
			<p>Years of Experience: <?php echo $getApplicantById['yearsExperience']; ?></p>
			<p>Expected Salary: <?php echo $getApplicantById['expectedSalary']; ?></p>
			<input type="submit" name="deleteApplicantBtn" value="Delete">
		</div>
	</form>
</body>
</html>