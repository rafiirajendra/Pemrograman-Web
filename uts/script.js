document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {
        const product = document.getElementById("product").value;
        const quantity = document.getElementById("quantity").value;
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const alamat = document.getElementById("alamat").value;

        let confirmationMessage = `
        Apakah data yang Anda masukkan sudah benar?\n
        Produk: ${product}\n
        Jumlah: ${quantity}\n
        Nama: ${name}\n
        Email: ${email}\n
        Alamat: ${alamat}\n
        `;

        if (!confirm(confirmationMessage)) {
            event.preventDefault();
        }
    });
});