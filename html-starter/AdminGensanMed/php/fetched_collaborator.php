<?php
// Database connect
include "db_connection.php";

// Fetch data from the collaborations table
$sql = "SELECT * FROM collaborations WHERE status != 'archived'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Ensure status comparison is case-insensitive
        $status = strtolower($row["status"]);

        // Determine badge color based on status
        if ($status === "active") {
            $statusBadge = "bg-label-success"; // Green
        } elseif ($status === "inactive") {
            $statusBadge = "bg-label-danger"; // Red
        } else {
            $statusBadge = "bg-label-warning"; // Blue (for any other status)
        }

        // Construct image path
        $logoPath = "../../html-starter/AdminGensanMed/php/" . $row["logo"];

        // Limit description to 20 words
        $descWords = explode(' ', htmlspecialchars($row["description"]));
        $shortDesc = implode(' ', array_slice($descWords, 0, 10));

        // Output table row
        echo "<tr>
        <td>
            <img src='" . htmlspecialchars($logoPath) . "' alt='Avatar' width='50' />
            <span class='fw-medium mx-2'>" . htmlspecialchars($row["title"]) . "</span>
        </td>
        <td>
            <span title='" . htmlspecialchars($row["description"]) . "'>
                " . $shortDesc . (count($descWords) > 20 ? "..." : "") . "
            </span>
        </td>
        <td><span class='badge $statusBadge me-1'>" . htmlspecialchars($row["status"]) . "</span></td>
        <td>
            <div class='dropdown'>
                <button type='button' class='btn p-0 dropdown-toggle hide-arrow' data-bs-toggle='dropdown'>
                    <i class='ti ti-dots-vertical'></i>
                </button>
                <div class='dropdown-menu'>
                    <a class='dropdown-item edit-btn' 
                        href='#' 
                        data-bs-toggle='modal' 
                        data-bs-target='#editModal'
                        data-id='" . htmlspecialchars($row["collab_id"]) . "'
                        data-logo='" . htmlspecialchars($logoPath) . "'
                        data-title='" . htmlspecialchars($row["title"]) . "'
                        data-description='" . htmlspecialchars($row["description"]) . "'
                        data-status='" . htmlspecialchars($row["status"]) . "'>
                        <i class='ti ti-pencil me-1'></i> Edit
                    </a>
                    <a class='dropdown-item archive-btn' 
                        href='#' 
                        data-bs-toggle='modal' 
                        data-bs-target='#archiveModal'
                        data-id='" . htmlspecialchars($row["collab_id"]) . "'>
                        <i class='ti ti-trash me-1'></i> Archive
                    </a>
                </div>
            </div>
        </td>
    </tr>";

    }
} else {
    echo "<tr><td colspan='4' class='text-center'>No Collaborations Found</td></tr>";
}

$conn->close();
?>