<?php
header("Content-Type: application/json");
include 'php/db_connection.php';

$response = [
    "total" => 0,
    "directors" => 0,
    "administration" => 0,
    "medservice" => 0
];

$sql = "SELECT type, COUNT(*) as count FROM leaderships WHERE status = 'active' GROUP BY type";
$result = $conn->query($sql);

$totalLeaders = 0;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalLeaders += $row["count"];
        switch ($row["type"]) {
            case "directors":
                $response["directors"] = $row["count"];
                break;
            case "administration":
                $response["administration"] = $row["count"];
                break;
            case "medservice":
                $response["medservice"] = $row["count"];
                break;
        }
    }
}

$response["total"] = $totalLeaders;
$conn->close();

echo json_encode($response);
?>