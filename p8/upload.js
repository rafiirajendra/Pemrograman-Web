$(document).ready(function(){
    $("#upload").submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);

        $.ajax({
            url: 'upload_ajax.php',
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(response){
                $('#status').html(response);
            },
            error: function () {
                $('#status').html('Terjadi kesalahan saat mengunggah file.');
            }
        });
    });
});