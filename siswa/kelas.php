<?php

include_once "../connection.php";

$sql = "SELECT * FROM kelas";
$result2 = $conn->query($sql);

$dataKelas = [];
if ($result2->num_rows > 0) {
    // output data of each row
    while ($row = $result2->fetch_assoc()) {
        $dataKelas[] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'jenjang' => $row['jenjang'],
        ];
    }
} 
$conn->close();

// var_dump($dataKelas);