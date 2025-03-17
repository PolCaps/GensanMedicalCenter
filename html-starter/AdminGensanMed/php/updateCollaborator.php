<?php
include "db_connection.php";

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $collab_id = $_POST["collab_id"];
    $title = trim($_POST["title"]);
    $description = trim($_POST["description"]);
    $status = $_POST["edit_status"];
    $logoPath = null; // Default value (no update to image)

    // Validate required fields
    if (empty($collab_id) || empty($title) || empty($description)) {
        header("Location: ../Collaboration.php?updateStatus=missingFields");
        exit();
    }

    // Check if a new file is uploaded
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $targetDir = "Collaborations/"; // Ensure this directory exists
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        // Get file details
        $fileName = basename($_FILES["file"]["name"]);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedTypes = ["jpg", "jpeg", "png", "gif", "webp"];

        // Validate file type
        if (in_array($fileType, $allowedTypes)) {
            // Generate unique file name
            $safeFileName = preg_replace("/[^a-zA-Z0-9\.-]/", "_", pathinfo($fileName, PATHINFO_FILENAME));
            $newFileName = $safeFileName . "_" . time() . "." . $fileType;
            $targetFilePath = $targetDir . $newFileName;

            // Move uploaded file
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $logoPath = $targetFilePath; // Store file path in database
            } else {
                header("Location: ../Collaboration.php?updateStatus=updateError");
                exit();
            }
        } else {
            header("Location: ../Collaboration.php?updateStatus=updateError");
            exit();
        }
    }

    // If no new file is uploaded, retain old logo
    if (!$logoPath) {
        $sqlGetOldImage = "SELECT logo FROM collaborations WHERE collab_id = ?";
        $stmtOldImage = $conn->prepare($sqlGetOldImage);
        $stmtOldImage->bind_param("i", $collab_id);
        $stmtOldImage->execute();
        $stmtOldImage->bind_result($existingLogo);
        $stmtOldImage->fetch();
        $stmtOldImage->close();

        $logoPath = $existingLogo; // Retain old image if no new one is uploaded
    }

    // Update collaboration details with new or existing logo
    $sql = "UPDATE collaborations SET title = ?, description = ?, logo = ?, status = ? WHERE collab_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $title, $description, $logoPath, $status, $collab_id);

    if ($stmt->execute()) {
        header("Location: ../Collaboration.php?updateStatus=updateSuccess");
        exit();
    } else {
        header("Location: ../Collaboration.php?updateStatus=error");
        exit();
    }

    $stmt->close();
}

$conn->close();
?>