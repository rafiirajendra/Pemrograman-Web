<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $product = htmlspecialchars($_POST['product']);
    $quantity = htmlspecialchars($_POST['quantity']);

    $unit = ($product == 'anak_ayam') ? 'ekor' : 'kg';

    $product_names = [
        'daging' => 'Daging Ayam',
        'telur' => 'Telur Ayam',
        'anak_ayam' => 'Anak Ayam',
        'pupuk' => 'Pupuk Organik'
    ];
    $product_name = $product_names[$product] ?? $product;

    echo "<!DOCTYPE html>
    <html lang='id'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Konfirmasi Pemesanan</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; padding: 20px; }
            h1 { color: #333; }
            p { margin-bottom: 10px; }
            a { color: #0066cc; text-decoration: none; }
            a:hover { text-decoration: underline; }
        </style>
    </head>
    <body>
        <h1>Terima Kasih, $name!</h1>
        <p>Pemesanan Anda untuk $quantity $unit $product_name telah diterima.</p>
        <p>Email: $email</p>
        <p>Alamat Pengiriman: $alamat</p>
        <p>Kami akan menghubungi Anda segera untuk konfirmasi lebih lanjut.</p>
        <a href='index.php'>Kembali ke Beranda</a>
    </body>
    </html>";
}
?>