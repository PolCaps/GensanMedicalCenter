<?php
// Database connect
include "db_connection.php";

// Fetch data from the collaborations table
$sql = "SELECT * FROM leaderships WHERE status = 'archived'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {


        // Determine badge color based on status
        if ($row["status"] == 'archived') {
            $statusBadge = "bg-label-warning";
        }

        $type = "Unknown"; // Default value in case none of the conditions match

        if ($row["type"] == 'directors') {
            $type = "Board of Director";
        } else if ($row["type"] == 'medservice') {
            $type = "Medical Services";
        } else if ($row["type"] == 'administration') {
            $type = "Administration";
        }

        // Construct image path
        $imgPath = "../../html-starter/AdminGensanMed/php/" . $row["image"];

        // Limit description to 20 words
        $descWordsa = explode(' ', htmlspecialchars($type));
        $shortDesca = implode(' ', array_slice($descWordsa, 0, 40));

        $descWords = explode(' ', htmlspecialchars($row["position"]));
        $shortDesc = implode(' ', array_slice($descWords, 0, 40));

        // Output table row
        echo "<tr>
        <td>
            <img src='" . htmlspecialchars($imgPath) . "' alt='Avatar' width='50' />
<span class='fw-medium mx-2'>" . htmlspecialchars($row["first_name"]) . " " . htmlspecialchars($row["last_name"]) . "</span>

        </td>
       <td>
        <span title='" . htmlspecialchars($type) . "'>
            " . htmlspecialchars($shortDesca) . "
        </span>
    </td>
        <td>
            <span title='" . htmlspecialchars($row["position"]) . "'>
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