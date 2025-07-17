<?php
include 'db_connect.php';

$sql = "SELECT * FROM restaurants";
$result = $conn->query($sql);

$restaurants = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $restaurants[] = $row;
    }
    echo json_encode($restaurants);
} else {
    echo json_encode([]);
}

$conn->close();
?>
