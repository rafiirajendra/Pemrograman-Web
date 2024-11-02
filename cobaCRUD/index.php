<?php
include "config.php";
$query = $koneksi->query("SELECT * FROM dbo.mahasiswa");
$result = $query->fetchAll(PDO::FETCH_ASSOC);
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

        .navbar bg-body-tertiary {
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="mx-auto">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <h2>Data Mahasiswa</h2>
                <a class="btn btn-outline-success" href="create.php">Tambah Data Mahasiswa</a>
            </div>
        </nav>
        <!-- Menampilkan Data -->
        <div class="card">
            <div class="card-header">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($result as $row) {
                            echo "<tr>";
                            echo "<td>" . $i++ . "</td>";
                            echo "<td>" . $row["nama"] . "</td>";
                            echo "<td>" . $row["nim"] . "</td>";
                            echo "<td>" . $row["jurusan"] . "</td>";
                            echo "<td>
                                    <button class='btn btn-primary'>Edit</button>
                                    <button class='btn btn-danger'>Delete</button>
                                  </td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>