<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#panel").slideToggle("slow");
            });
        })
    </script>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <div id="flip">Click to show data</div>
    <div id="panel">
        <table>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>

            <?php
                $mahasiswa = array(
                    array("Ari", "20", "12A", "Malang"),
                    array("Budi", "19", "11A", "Blitar"),
                    array("Siregar", "18", "10A", "Surabaya"),
                    array("Anton", "17", "12A", "Kediri"),
                );

                foreach ($mahasiswa as $mhs) {
                    echo "<tr>";
                    echo "<td>$mhs[0]</td>";
                    echo "<td>$mhs[1]</td>";
                    echo "<td>$mhs[2]</td>";
                    echo "<td>$mhs[3]</td>";
                    echo "</tr>";
                }

            ?>
        </table>

        <?php
        $umur = 0;
        foreach ($mahasiswa as $mhs) {
            $umur += $mhs[1];
        }
        $rataRata = $umur / count($mahasiswa);

        echo "<tr>";
        echo "<h2>Rata-rata Umur Mahasiswa: $rataRata<h2>";
        echo "</tr>";
        ?>
    </div>
</body>
</html>