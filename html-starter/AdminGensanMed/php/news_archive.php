<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['newsIdEdit2'];

    if (!empty($id)) {
        $status = 3; // Set the archive status

        // Corrected SQL statement
        $sql = "UPDATE news SET status = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("ii", $status, $id); // Correct parameter binding

            if ($stmt->execute()) {
                header("Location: ../News.php?archiveStatus=Success");
                exit();
            } else {
                header("Location: ../News.php?archiveStatus=Failed");
                exit();
            }

            $stmt->close();
        } else {
            header("Location: ../News.php?archiveStatus=StmtError");
            exit();
        }
    } else {
        header("Location: ../News.php?archiveStatus=Invalid");
        exit();
    }
} else {
    header("Location: ../News.php");
    exit();
}

// Close database connection
$conn->close();
?>