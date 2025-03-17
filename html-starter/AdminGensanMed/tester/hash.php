<?php
include('db_connection.php');

$username = 'GensanMedAdmin';
$password = 'gensanmed123';

// Hash the password using the default BCRYPT algorithm
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL query to update the user's password in the 'admins' table
$query = "UPDATE users SET password = ? WHERE username = ?";

// Prepare the statement
$stmt = $conn->prepare($query);
if ($stmt === false) {
    die("ERROR: Could not prepare the query. " . $conn->error);
}

// Bind the parameters and execute the query
$stmt->bind_param('ss', $hashed_password, $username);
if ($stmt->execute()) {
    echo "User 'hopps' password has been updated successfully with a hashed password.";
} else {
    echo "ERROR: Could not execute the query. " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>