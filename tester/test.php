<?php
include "db_connection.php"; // Ensure this file has the correct database credentials

$sql = "SELECT * FROM collaborations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["collab_id"] . " | Title: " . $row["title"] . " | Description: " . $row["description"] . "<br>";
    }
} else {
    echo "No collaborations found.";
}

$conn->close();
?>