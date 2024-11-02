<?php
$nim = "";
$nama = "";
$jurusan = "";
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    if ($nama && $nim && $jurusan) {
        try {
            $sql = "INSERT INTO dbo.mahasiswa (nama, nim, jurusan) VALUES (:nama, :nim, :jurusan)";
            $stmt = $koneksi->prepare($sql);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':nim', $nim);
            $stmt->bindParam(':jurusan', $jurusan);

            $stmt->execute();
            echo "Data berhasil ditambahkan";
        } catch (PDOException $e) {
            echo "Gagal menambahkan data: " . $e->getMessage();
        }
    } else {
        echo "Semua field harus diisi!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .mx-auto {
            width: 1200px;
        }

        .card {
            margin-top: 25px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <!-- Memasukkan Data -->
        <div class="card">
            <div class="card-header">
                Create / Edit Data
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $jurusan ?>">
                        </div>
                    </div>
                    <a type="submit" name="submit" value="Submit Data" class="btn btn-primary" href="index.php">Sumbit</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>