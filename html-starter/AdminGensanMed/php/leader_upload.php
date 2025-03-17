<?php
include "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $position = $_POST["position"];
    $type = $_POST["type"];
    $firstName = $_POST["first_name"];
    $middleName = $_POST["middle_name"];
    $lastName = $_POST["last_name"];
    $postNominalTitlesJSON = $_POST["TagifyBasicUpload"] ?? null;

    // Decode JSON and convert it to a comma-separated string
    $postNominalTitlesArray = json_decode($postNominalTitlesJSON, true);
    $postNominalTitles = "";
    if (is_array($postNominalTitlesArray)) {
        $postNominalTitles = implode(", ", array_column($postNominalTitlesArray, "value"));
    }

    // File upload handling
    if (isset($_FILES["file"]) && $_FILES["file"]["error"] == 0) {
        $targetDir = "Images/Leaderships/"; // Ensure directory exists with trailing slash
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));

        $allowedTypes = array("jpg", "jpeg", "png", "gif", "webp");

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
                // Insert into database
                $stmt = $conn->prepare("INSERT INTO leaderships (position, type, first_name, middle_name, last_name, title, image) VALUES (?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssss", $position, $type, $firstName, $middleName, $lastName, $postNominalTitles, $targetFilePath);

                if ($stmt->execute()) {
                    header("Location: ../Leadership.php?leaderStatus=success");
                    exit();
                } else {
                    echo json_encode(["status" => "error", "message" => "Database insert failed."]);
                }

                $stmt->close();
            } else {
                header("Location: ../Leadership.php?leaderStatus=error");
                exit();
            }
        } else {
            header("Location: ../Leadership.php?leaderStatus=invalid");
            exit();
        }
    } else {
        echo json_encode(["status" => "error", "message" => "No file uploaded."]);
    }
}

$conn->close();
?>