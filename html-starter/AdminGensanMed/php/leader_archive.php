<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $leader_id = $_POST['leader_archiveid'];
    if (!empty($leader_id)) {
        $sql = "UPDATE leaderships SET status = 'archived' WHERE leadership_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $leader_id);

        if ($stmt->execute()) {

            header("Location: ../Leadership.php?archiveStatus=archiveSuccess");
            exit();
        } else {

            header("Location: ../Leadership.php?archiveStatus=archiveFailed");
            exit();
        }
    } else {
        header("Location: ../Leadership.php?archiveStatus=archiveInvalid");
        exit();
    }
} else {
    header("Location: ../Leadership.php");
    exit();
}

// Close database connection
$conn->close();
?>