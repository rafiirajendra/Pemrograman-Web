<?php
include "config.php";
$nim = "";
$nama = "";
$jurusan = "";
$error = "";
$sukses = "";

if (isset($_POST['simpan'])) {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];

    // Memastikan bahwa semua field diisi
    if ($nim && $nama && $jurusan) {
        // Menggunakan placeholders
        $sql = "INSERT INTO mahasiswa (nim, nama, jurusan) VALUES (:nim, :nama, :jurusan)";
        $stmt = $koneksi->prepare($sql);
        $stmt->bindParam(':nim', $nim);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':jurusan', $jurusan);

        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        }
    } else {
        $error = "Harap mengisi semua data";
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
        <?php if ($error): ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php endif; ?>

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
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($nama) ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= htmlspecialchars($nim) ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= htmlspecialchars($jurusan) ?>">
                        </div>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>