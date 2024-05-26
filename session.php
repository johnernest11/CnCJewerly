<?php
	// Start a session (if not already started)
	session_start();

	// Check if a user ID is stored in the session variable 'Id'
	$user_check = isset($_SESSION['Id']) ? $_SESSION['Id'] : null; 

	// Include the connection script (likely containing database connection details)
	include_once "connection.php";

	// Establish a connection to the database using the function from connection.php
	$conn = dbConnect();

	// Prepare a SQL query to select the user ID from the 'account' table where it matches the ID stored in the session
	$ses_sql = $conn->prepare("select Id from account where Id = :id ");

	// Execute the prepared statement, binding the user ID from the session as a parameter
	$ses_sql->execute(['id' => $user_check]);

	// Fetch the first row of the result (assuming only one user should match the ID)
	$row = $ses_sql->fetch(PDO::FETCH_BOTH);

	// Extract the user ID from the fetched row (assuming the first column is named 'Id')
	$login_session = isset($row[0]) ? $row[0] : null; // Store fetched ID or null if not found

		// Check if the session variable 'Id' is not set
		if (!isset($_SESSION['Id'])) {
		// Redirect the user to the login page (../index.php) if session ID is missing
		header("location:../index.php");
		exit; // Terminate script execution after redirect
		}
?>

