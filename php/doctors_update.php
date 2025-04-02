<?php
require 'db_connection.php'; // Ensure this file properly connects to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $doctorId = $_POST['docId'];
    $specialty = $_POST['specialty-edit'] ?? '';
    $clinicAddress = $_POST['clinic-address'] ?? 'N/A';
    $firstName = $_POST['first_name'] ?? '';
    $middleName = $_POST['middle_name'] ?? '';
    $lastName = $_POST['last_name'] ?? '';

    // Fetch existing image
    $stmt = $conn->prepare("SELECT image FROM doctors WHERE doctor_id = ?");
    $stmt->bind_param("i", $doctorId);
    $stmt->execute();
    $stmt->bind_result($existingImage);
    $stmt->fetch();
    $stmt->close();

    if (!$existingImage) {
        echo json_encode(["status" => "error", "message" => "Doctor ID not found."]);
        exit();
    }

    $imagePath = $existingImage; // Keep existing image by default

    // Handle Image Upload
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $targetDir = "Images/Doctors/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        $allowedTypes = ["jpg", "jpeg", "png", "gif", "webp"];

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $imagePath = $targetFilePath; // Update image path if upload is successful
            } else {
                header("Location: ../Doctors.php?doctorStatus=errorEdit");
                exit();
            }
        } else {
            header("Location: ../Doctors.php?doctorStatus=invalidEdit");
            exit();
        }
    }

    $stmt = $conn->prepare("UPDATE doctors SET specialty = ?, address = ?, fName = ?, mName = ?, lName = ?, image = ? WHERE doctor_id = ?");
    $stmt->bind_param("ssssssi", $specialty, $clinicAddress, $firstName, $middleName, $lastName, $imagePath, $doctorId);

    if ($stmt->execute()) {
        header("Location: ../Doctors.php?doctorStatus=successEdit");
        exit();
    } else {
        echo json_encode(["status" => "error", "message" => "Database update failed."]);
    }
    $stmt->close();
} else {
    echo "Invalid request.";
}
?>