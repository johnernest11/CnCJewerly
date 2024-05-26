<?php
// Start a session (if not already started)
session_start();

// Check if a doctor is already logged in (using a dedicated session variable)
if (isset($_SESSION['Administrator_login'])) {
  // Redirect to home page if doctor is already logged in
  header("location:administrator/dashboard.php");
  exit; // Terminate script execution after redirect
} else {
  // No doctor logged in, proceed with login logic
}

// Error message variable (initialized to empty string)
$error = '';

// Check if login button is submitted (using POST method)
if (isset($_POST['login'])) {

  // Get username and password from POST data (sanitized for security is recommended)
  $username = $_REQUEST["username"];
  $password = $_REQUEST["password"];
  $pass = $password; // Assuming password is stored as plain text (not recommended)

  // Check if both username and password are empty
  if (empty($username) && empty($password)) {
    $error = 'Fields are Mandatory'; // Set error message for empty fields
  } else {
    // Username and password provided, attempt login

    // Include connection script (likely containing database connection details)
    include_once "connection.php";

    // Establish a connection to the database using the function from connection.php
    $conn = dbConnect();

    // Prepare a SQL query to select user details based on username and password
    $result = $conn->prepare("SELECT Id, lastname, firstname, middlename, role, email
    FROM account WHERE username=:db_username AND password=:db_password");

    // Bind username and password parameters to prevent SQL injection
    $result->bindParam(":db_username", $username);
    $result->bindParam(":db_password", $pass);

    // Execute the prepared statement
    $result->execute();

    // Fetch the first row of the result (assuming only one user matches credentials)
    $rows = $result->fetch(PDO::FETCH_ASSOC);

    // Count the number of rows returned (should be 1 for a successful match)
    $count = $result->rowCount();

    if ($count == 1) {
      // Login successful, store user information in session variables
      $_SESSION['email'] = $rows['email'];
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password; // Storing password in session is not recommended (consider hashing)
      $_SESSION['Id'] = $rows['Id'];
      $_SESSION['role'] = $rows['role'];
      $_SESSION['lastname'] = $rows['lastname'];
      $_SESSION['firstname'] = $rows['firstname'];
      $_SESSION['middlename'] = $rows['middlename'];

      $Id = $_SESSION['Id'];
      $role = $_SESSION['role'];

      // Redirect user based on their role (assuming different pages for different roles)
      switch ($role) {
        case 'Administrator':
          $_SESSION["Administrator_login"] = $Id; // Set dedicated session variable for doctor login
          $_SESSION["Administrator_role"] = $role;
          header('location:administrator/dashboard.php');
          break;
        case 'Secretary':
          $_SESSION["Secretary_login"] = $Id; // Set dedicated session variable for secretary login
          $_SESSION["Secretary_role"] = $role;
          header('location:SECRETARY/page/profile/dashboard.php');
          break;
        default:
          // Handle unexpected roles (optional)
          break;
      }
    } else {
      // Login failed, set error message for incorrect credentials
      $error = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Incorrect!</strong> Password or Username.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
    }
  }
}
?>