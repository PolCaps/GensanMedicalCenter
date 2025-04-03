<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $collab_id = $_POST['collab_id'];
    if (!empty($collab_id)) {
        $sql = "UPDATE collaborations SET status = 'archived' WHERE collab_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $collab_id);

        if ($stmt->execute()) {

            header("Location: ../admin/Collaboration.php?archiveStatus=archiveSuccess");
            exit();
        } else {

            header("Location: ../admin/Collaboration.php?archiveStatus=archiveFailed");
            exit();
        }
    } else {
        header("Location: ../admin/Collaboration.php?archiveStatus=archiveInvalid");
        exit();
    }
} else {
    header("Location: ../admin/Collaboration.php");
    exit();
}

// Close database connection
$conn->close();
?>