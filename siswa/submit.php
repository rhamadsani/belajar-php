<?php
include_once  "../connection.php";


$name = $_POST['name'];
$email = $_POST['email'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$kelas_id = $_POST['kelas_id'];

$sql = "INSERT INTO siswa (name, ttl, email, alamat, kelas_id)
VALUES ('".$name."', '".$ttl."', '".$email."' , '".$alamat. "', '" . $kelas_id . "')";


if ($conn->query($sql) === TRUE) {
    header("Location: /siswa/");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

