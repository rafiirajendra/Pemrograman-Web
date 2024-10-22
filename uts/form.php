<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peternakan Ngayam </title>
    <link rel="stylesheet" href="form.css">
    <link rel="icon" type="image/x-icon" href="img/ayam.png">
</head>
<body>
        <header>
            <nav>
                <div class="logo-container">
                    <img src="img/ayam.png" alt="Logo Peternakan Ngayam" class="logo">
                    <h1>Peternakan Ngayam</h1>
                </div>
            </nav>
        </header>

        <section id="form">
            <div class="container-form">
                <h2>Form</h2>
                <form action="proses_form.php" method="post">
                    <label for="product">Pilih Produk:</label>
                    <select id="product" name="product" required>
                        <option value="" disabled selected>Pilih produk</option>
                        <option value="daging">Daging Ayam - Rp50.000/kg</option>
                        <option value="telur">Telur Ayam - Rp25.000/kg</option>
                        <option value="anak_ayam">Anak Ayam - Rp5.000/ekor</option>
                        <option value="pupuk">Pupuk Organik - Rp35.000/kg</option>
                    </select>
                    <label for="quantity">Jumlah (dalam satuan):</label>
                    <input type="number" id="quantity" name="quantity" min="1" required>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="alamat">Alamat:</label>
                    <textarea id="alamat" name="alamat" required></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
        </section>

        <section id="contact">
            <div class="container-about">
                <h2>Hubungi Kami</h2>
                <div class="contact-info">
                    <p><strong>Lokasi:</strong> Jl. Raya Peternakan No. 18, Malang</p>
                    <p><strong>Email:</strong> info@ngayam.com</p>
                    <p><strong>Telepon:</strong> 0812-3456-7890</p>
                </div>
            </div>
        </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Peternakan Ngayam. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>