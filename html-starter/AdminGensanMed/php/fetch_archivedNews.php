<?php
// Database connect
include "db_connection.php";

// Fetch data from the collaborations table
$sql = "SELECT * FROM news WHERE status = 4";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {


        // Determine badge color based on status
        if ($row["status"] == 4) {

            $statusBadge = "bg-label-warning"; // Green
        }

        // Construct image path
        $imgPath = "../../html-starter/AdminGensanMed/php/" . $row["image"];

        // Limit description to 20 words
        $descWords = explode(' ', htmlspecialchars($row["summary"]));
        $shortDesc = implode(' ', array_slice($descWords, 0, 10));

        // Output table row
        echo "<tr>
        <td>
            <img src='" . htmlspecialchars($imgPath) . "' alt='Avatar' width='50' />
            <span class='fw-medium mx-2'>" . htmlspecialchars($row["title"]) . "</span>
        </td>
        <td>
            <span title='" . htmlspecialchars($row["summary"]) . "'>
                " . $shortDesc . (count($descWords) > 40 ? "..." : "") . "
            </span>
        </td>
        <td><span class='badge $statusBadge me-1'>Archived</span></td>
       
    </tr>";

    }
} else {
    echo "<tr><td colspan='4' class='text-center'>No Collaborations Found</td></tr>";
}

$conn->close();
?>