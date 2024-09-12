function cekForm() {
    var nama = document.getElementById("username").value;
    var alamat = document.getElementById("alamat").value;
    var tanggalLahir = document.getElementById("tanggal_lahir").value;
    var jenisKelamin = document.getElementsByName("jenis_kelamin");
    var hobby = document.getElementsByName("hobby");
    var pekerjaan = document.getElementById("pekerjaan").value;
    var cek = document.getElementsByName("check")[0];

    var errorMsg = "";

    if (nama === "") {
        errorMsg += "Nama tidak boleh kosong\n";
    }

    if (alamat === "") {
        errorMsg += "Alamat tidak boleh kosong\n";
    }

    if (tanggalLahir === "") {
        errorMsg += "Tanggal lahir tidak boleh kosong\n";
    }

    var cekJenisKelamin = false;
    for (var i = 0; i < jenisKelamin.length; i++) {
        if (jenisKelamin[i].checked) {
            cekJenisKelamin = true;
            break;
        }
    }

    if (!cekJenisKelamin) {
        errorMsg += "Jenis kelamin tidak boleh kosong\n";
    }

    var cekHobby = false;
    for (var i = 0; i < hobby.length; i++) {
        if (hobby[i].checked) {
            cekHobby = true;
            break;
        }
    }

    if (!cekHobby) {
        errorMsg += "Hobby tidak boleh kosong\n";
    }

    if (pekerjaan === "") {
        errorMsg += "Pekerjaan tidak boleh kosong\n";
    }

    if (!cek.checked) {
        errorMsg += "Ceklis dulu cuy :)\n";
    }

    if (errorMsg) {
        alert(errorMsg);
        return false;
    }

    alert("Terima kasih sudah mengisi data ini :)");

    return true;
}