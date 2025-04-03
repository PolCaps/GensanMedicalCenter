<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $leader_id = $_POST['doctor_archiveId'];
    if (!empty($leader_id)) {
        $sql = "UPDATE doctors SET status = 'archived' WHERE doctor_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $leader_id);

        if ($stmt->execute()) {

            header("Location: ../admin/Doctors.php?archiveStatus=archiveSuccess");
            exit();
        } else {

            header("Location: ../admin/Doctors.php?archiveStatus=archiveFailed");
            exit();
        }
    } else {
        header("Location: ../admin/Doctors.php?archiveStatus=archiveInvalid");
        exit();
    }
} else {
    header("Location: ../admin/Doctors.php");
    exit();
}

$conn->close();
?>