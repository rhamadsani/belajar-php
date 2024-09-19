<?php

include_once "../connection.php";

$sql = "SELECT siswa.name, siswa.email, siswa.ttl,siswa.alamat, kelas.name as kelas_name FROM siswa INNER JOIN kelas ON siswa.kelas_id = kelas.id";
$result = $conn->query($sql);

$dataSiswa = [];
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $dataSiswa[] = [
            'name' => $row['name'],
            'email' => $row['email'],
            'alamat' => $row['alamat'],
            'ttl' => $row['ttl'],
            'kelas' => $row['kelas_name'],
        ];
    }
} 
$conn->close();

// var_dump($dataSiswa);