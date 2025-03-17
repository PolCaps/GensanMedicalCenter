<?php
require 'db_connection.php'; // Ensure this file properly connects to your database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newsId = $_POST['newsIdEdit'];
    $title = $_POST['titleEdit'];
    $summary = $_POST['summaryEdit'];
    $content = $_POST['contentEdit'];
    $imagePath = $_POST['uploadedEdit'];

    // Fetch existing image
    $stmt = $conn->prepare("SELECT image FROM news WHERE id = ?");
    $stmt->bind_param("i", $newsId);
    $stmt->execute();
    $stmt->bind_result($existingImage);
    $stmt->fetch();
    $stmt->close();

    if (!$existingImage) {
        echo json_encode(["status" => "error", "message" => "News ID not found."]);
        exit();
    }

    $imagePath = $existingImage; // Keep existing image by default

    // Handle Image Upload
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $targetDir = "Images/News/";
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
                header("Location: ../News.php?newsStatusup=error");
                exit();
            }
        } else {
            header("Location: ../News.php?newsStatusup=invalid");
            exit();
        }
    }

    $stmt = $conn->prepare("UPDATE news SET title = ?, summary = ?, content = ?, image = ? WHERE id = ?");
    $stmt->bind_param("ssssi", $title, $summary, $content, $imagePath, $newsId);

    if ($stmt->execute()) {
        header("Location: ../News.php?newsStatusup=success");
        exit();
    } else {
        echo json_encode(["status" => "error", "message" => "Database update failed."]);
    }
    $stmt->close();
} else {
    echo "Invalid request.";
}
?>