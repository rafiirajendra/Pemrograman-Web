<?php
include "config.php";

$nim = "";
$nama = "";
$jurusan = "";
$error = "";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Ambil data yang ada
    $stmt = $koneksi->prepare("SELECT * FROM dbo.mahasiswa WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($data) {
        $nim = $data["nim"];
        $nama = $data["nama"];
        $jurusan = $data["jurusan"];
    } else {
        $error = "Data tidak ditemukan.";
    }
}

if (isset($_POST['simpan'])) {
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];

    // Pastikan semua bidang terisi
    if ($nim && $nama && $jurusan) {
        // Update data
        $sql = "UPDATE mahasiswa SET nim = :nim, nama = :nama, jurusan = :jurusan WHERE id = :id";
        $stmt = $koneksi->prepare($sql);
        $stmt->bindParam(':nim', $nim);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':jurusan', $jurusan);
        $stmt->bindParam(':id', $id);

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
    <title>Update Data Mahasiswa</title>
    <link rel="shortcut icon" href="polinema.png" type="image/x-icon">
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

        <!-- Mengupdate Data -->
        <div class="card">
            <div class="card-header">
                Edit Data Mahasiswa
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
                    <button type="submit" name="simpan" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
