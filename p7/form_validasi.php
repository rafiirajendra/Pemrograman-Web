<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color:red;"></span>
        <br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color:red;"></span>
        <br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(e) {
                e.preventDefault(); // Mencegah pengiriman form secara default

                var nama = $("#nama").val();
                var email = $("#email").val();
                var valid = true;

                // Reset pesan kesalahan
                $("#nama-error").text("");
                $("#email-error").text("");

                // Validasi Nama
                if (nama == "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                // Validasi Email
                if (email == "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else if (!filter_var(email, FILTER_VALIDATE_EMAIL)) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                }

                // Jika validasi berhasil, kirim data dengan AJAX
                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php",
                        type: "POST",
                        data: { nama: nama, email: email },
                        success: function(response) {
                            // Tampilkan hasil dari server di div "hasil"
                            $("#hasil").html(response);
                        },
                        error: function() {
                            $("#hasil").html("Terjadi kesalahan saat mengirim data.");
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
