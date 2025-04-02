<?php
include "db_connection.php";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoryTitle = $_POST["categoryTitle"];
    $description = $_POST["description"];

    // File upload logic
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $targetDir = "Collaborations/"; // Make sure this directory exists
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        // Allowed file types
        $allowedTypes = array("jpg", "jpeg", "png", "gif", "webp");

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // Insert into database
                $stmt = $conn->prepare("INSERT INTO collaborations (title, description, logo) VALUES (?, ?, ?)");
                $stmt->bind_param("sss", $categoryTitle, $description, $targetFilePath);

                if ($stmt->execute()) {
                    header("Location: ../Collaboration.php?uploadStatus=success");
                    exit();
                } else {
                    echo json_encode(["status" => "error", "message" => "Database insert failed."]);
                }

                $stmt->close();
            } else {
                header("Location: ../Collaboration.php?uploadStatus=error");
                exit();
            }
        } else {
            header("Location: ../Collaboration.php?uploadStatus=errorFileType");
            exit();
        }
    } else {
        echo json_encode(["status" => "error", "message" => "No file uploaded."]);
    }
}

$conn->close();
?>