<?php
require 'db_connection.php'; // Ensure this file properly connects to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $specialty = $_POST['specialty'] ?? '';
    $clinicAddress = $_POST['clinic_address'] ?? 'N/A';
    $firstName = $_POST['first_name'] ?? '';
    $middleName = $_POST['middle_name'] ?? '';
    $lastName = $_POST['last_name'] ?? '';

    // Image Upload Handling
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $targetDir = "Images/Doctors/"; // Ensure this directory exists
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true); // Create directory if it doesn’t exist
        }

        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        $allowedTypes = ["jpg", "jpeg", "png", "gif", "webp"];

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // Prepare SQL query
                $stmt = $conn->prepare("INSERT INTO doctors (specialty, address, fName, mName, lName, image) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssss", $specialty, $clinicAddress, $firstName, $middleName, $lastName, $targetFilePath);

                if ($stmt->execute()) {
                    header("Location: ../Doctors.php?doctorStatus=success");
                    exit();
                } else {
                    echo json_encode(["status" => "error", "message" => "Database insert failed."]);
                }
                $stmt->close();
            } else {
                header("Location: ../Doctors.php?doctorStatus=error");
                exit();
            }
        } else {
            header("Location: ../Doctors.php?doctorStatus=invalid");
            exit();
        }
    } else {
        header("Location: ../Doctors.php?doctorStatus=no_file");
        exit();
    }
} else {
    echo "Invalid request.";
}
?>