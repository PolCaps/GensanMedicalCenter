<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $leadershipId = $_POST["leader_id"];
    $position = $_POST["position"];
    $type = $_POST["type"];
    $firstName = $_POST["first_name"];
    $middleName = $_POST["middle_name"];
    $lastName = $_POST["last_name"];
    $postNominalTitlesJSON = $_POST["TagifyBasicUpdate"] ?? null;

    // Decode JSON and convert it to a comma-separated string
    $postNominalTitlesArray = json_decode($postNominalTitlesJSON, true);
    $postNominalTitles = "";
    if (is_array($postNominalTitlesArray)) {
        $postNominalTitles = implode(", ", array_column($postNominalTitlesArray, "value"));
    }

    // Check if the leadership_id exists in the database
    $stmt = $conn->prepare("SELECT image FROM leaderships WHERE leadership_id = ?");
    $stmt->bind_param("i", $leadershipId);
    $stmt->execute();
    $stmt->bind_result($existingImage);
    if (!$stmt->fetch()) {
        echo json_encode(["status" => "error", "message" => "Leadership ID not found."]);
        exit();
    }
    $stmt->close();

    $imagePath = $existingImage; // Default to existing image

    // File upload handling (optional)
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $targetDir = "Images/Leaderships/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        $allowedTypes = array("jpg", "jpeg", "png", "gif", "webp");
        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                $imagePath = $targetFilePath; // Update image path
            } else {
                header("Location: ../Leadership.php?leaderupdateStatus=errorUpdate");
                exit();
            }
        } else {
            header("Location: ../Leadership.php?leaderupdateStatus=invalidUpdate");
            exit();
        }
    }

    // Update database record
    $stmt = $conn->prepare("UPDATE leaderships SET position = ?, type = ?, first_name = ?, middle_name = ?, last_name = ?, title = ?, image = ? WHERE leadership_id = ?");
    $stmt->bind_param("sssssssi", $position, $type, $firstName, $middleName, $lastName, $postNominalTitles, $imagePath, $leadershipId);

    if (!$stmt->execute()) {
        echo json_encode(["status" => "error", "message" => "Error: " . $stmt->error]);
        exit();
    }

    $stmt->close();
    $conn->close();

    header("Location: ../Leadership.php?leaderupdateStatus=successUpdate");
    exit();
}
?>