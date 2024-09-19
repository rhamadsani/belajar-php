<?php include "kelas.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Input Siswa</h1>
        <form action="submit.php" method="post">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="formGroupExampleInput"
                    placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="formGroupExampleInput"
                    placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">TTL</label>
                <input type="text" name="ttl" class="form-control" id="formGroupExampleInput"
                    placeholder="Example input placeholder">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Kelas</label>
                <select name="kelas_id" class="form-select" aria-label="Default select example">
                    <option selected>Pilih Kelas</option>
                    <?php foreach ($dataKelas as $key => $value) {
                        echo "<option value='".$value['id']."'>" . $value['name'] . " - ". $value['jenjang'] ."</option>";
                                } ?>
                </select>
            </div>
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
    <!-- <form action="submit.php" method="post">
        <div>
            <p>Nama</p>
            <input type="text" name="name"><br>
            <p>Email</p>
            <input type="text" name="email"><br>
            <p>Alamat</p>
            <input type="text" name="alamat"><br>
            <p>Temapat Tanggal Lahir</p>
            <input type="text" name="ttl"><br>
        </div>
        <button>Submit</button>
    </form> -->
</body>

</html>