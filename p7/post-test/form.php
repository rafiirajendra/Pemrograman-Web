<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h2>Masukkan Jumlah Inputan</h2>
    <form method="post" action="">
        <label for="jumlah">Jumlah Inputan:</label>
        <input type="number" id="jumlah" name="jumlah" min="1" required>
        <button type="submit">Generate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['jumlah'])) {
        $jumlah = intval($_POST['jumlah']);
        if ($jumlah > 0) {
            echo '<h2>Form</h2>';
            echo '<form method="post" action="submit.php">';
            echo '<table border="1">';
            echo '<tr><th>Nama</th><th>Alamat</th><th>No. Telepon</th></tr>';
            
            for ($i = 1; $i <= $jumlah; $i++) {
                echo '<tr>';
                echo '<td><input type="text" name="nama[]" placeholder="Nama ' . $i . '" required></td>';
                echo '<td><input type="text" name="alamat[]" placeholder="Alamat ' . $i . '" required></td>';
                echo '<td><input type="tel" name="no_telpon[]" placeholder="No. Telepon ' . $i . '" required></td>';
                echo '</tr>';
            }
            
            echo '</table>';
            echo '<button type="submit">Submit</button>';
            echo '</form>';
        } else {
            echo 'Jumlah inputan harus lebih dari 0.';
        }
    }
    ?>
</body>
</html>