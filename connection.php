<?php

// Function to establish a database connection
function dbConnect() {

  // Initialize connection variable
  $conn = null;

  // Database credentials (replace with your actual details)
  $host = '127.0.0.1'; // Database server hostname
  $db = 'cncjewerly';      // Database name
  $user = 'root';      // Database username
  $pwd = '';           // Database password (replace with your actual password)

  try {
    // Attempt to connect using PDO
    $conn = new PDO('mysql:host=' . $host . ';dbname=' . $db, $user, $pwd);

    // Uncomment the following line to display a success message (for development purposes)
    // echo 'Connected successfully.<br>';

    // Set error mode to exception for better error handling
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch (PDOException $e) {
    // Handle connection errors
    echo "Connection failed: " . $e->getMessage();
    echo '<p>Cannot connect to database !!</p>';
    echo '<p>' . $e . '</p>';  // Display detailed error message (for development purposes)
    exit; // Terminate script execution on connection failure
  }

  // Return the connection object if successful
  return $conn;
}

?>