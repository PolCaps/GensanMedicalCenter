<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $short_summary = $_POST['short_summary'];
    $author = 'Marketing Department';
    $content = $_POST['content'];
    $status = 1;
    $content = strip_tags($content, '<p><br><h1><h2><h3><h4><h5><h6><b><i><u><strong><em><ul><ol><li><blockquote><a>');

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
                // Insert new news with active status
                $stmt = $conn->prepare("INSERT INTO news (title, summary, content, image, author, status) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssi", $title, $short_summary, $content, $targetFilePath, $author, $status);

                if ($stmt->execute()) {
                    // Ensure only 3 active news articles exist
                    $countQuery = "SELECT id FROM news WHERE status = 1 ORDER BY date DESC, id DESC";
                    $result = $conn->query($countQuery);

                    if ($result->num_rows > 3) {

                        $result->data_seek(3);
                        $oldest = $result->fetch_assoc();
                        $oldest_id = $oldest['id'];

                        $updateQuery = "UPDATE news SET status = 0 WHERE id = ?";
                        $updateStmt = $conn->prepare($updateQuery);
                        $updateStmt->bind_param("i", $oldest_id);
                        $updateStmt->execute();
                    }

                    header("Location: ../News.php?newsStatus=success");
                    exit();
                } else {
                    echo json_encode(["status" => "error", "message" => "Database insert failed."]);
                }
                $stmt->close();
            } else {
                header("Location: ../News.php?newsStatus=error");
                exit();
            }
        } else {
            header("Location: ../News.php?newsStatus=invalid");
            exit();
        }
    } else {
        header("Location: ../News.php?newsStatus=noImage");
        exit();
    }
    $conn->close();
} else {
    header("Location: ../news_page.php?newsStatus=invalidRequest");
    exit();
}
?>