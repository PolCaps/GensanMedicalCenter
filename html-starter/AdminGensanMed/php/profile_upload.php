<?php

include '../include/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $phoneNumber = $_POST['phoneNumber'];

    $profileImage = null;

    // Check if file is uploaded
    if (isset($_FILES["profile_pic"]) && $_FILES["profile_pic"]["error"] == 0) {
        $targetDir = "Images/Profile/"; // Ensure directory exists
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true); // Create folder if it doesn't exist
        }
        $fileName = basename($_FILES["profile_pic"]["name"]);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $allowedTypes = ["jpg", "jpeg", "png", "gif", "webp"];

        if (in_array($fileType, $allowedTypes)) {
            $newFileName = time() . "_" . $fileName; // Prevent filename duplication
            $targetFilePath = $targetDir . $newFileName;

            if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $targetFilePath)) {
                $profileImage = $targetFilePath;
            }
        }
    }
    // Check if user exists
    $stmt = $conn->prepare("SELECT user_id, profile_picture FROM users WHERE user_id = ?");
    $stmt->bind_param("s", $user_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // User exists, update record
        $stmt->bind_result($userId, $existingImage);
        $stmt->fetch();
        $stmt->close();

        if ($profileImage === null) {
            $profileImage = $existingImage; // Keep the existing image
        } else {
            // Delete old profile picture if new one is uploaded
            if (!empty($existingImage) && file_exists($existingImage)) {
                unlink($existingImage);
            }
        }

        $updateStmt = $conn->prepare("UPDATE users SET email = ?, username = ?, contact_number = ?, profile_picture = ? WHERE user_id = ?");
        $updateStmt->bind_param("sssss", $email, $username, $phoneNumber, $profileImage, $userId);

        if ($updateStmt->execute()) {
            header("Location: ../Profile.php?updateStatus=success");
            exit();
        } else {
            header("Location: ../Profile.php?updateStatus=error");
            exit();
        }

        $updateStmt->close();
    } else {
        echo "User not found.";
    }
    $conn->close();
}
?>