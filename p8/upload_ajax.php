<?php
if (isset($_FILES['file'])) {
    $errors = array();
    $allowed_extensions = array("jpg", "jpeg", "png", "gif");

    // Periksa apakah file yang diunggah adalah array (multi-file) atau bukan
    if (is_array($_FILES['file']['name'])) {
        foreach ($_FILES['file']['tmp_name'] as $key => $tmp_name) {
            $file_name = $_FILES['file']['name'][$key];
            $file_size = $_FILES['file']['size'][$key];
            $file_tmp = $_FILES['file']['tmp_name'][$key];
            $file_type = $_FILES['file']['type'][$key];
            $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            if (!in_array($file_ext, $allowed_extensions)) {
                $errors[] = "Ekstensi file tidak diizinkan untuk file: $file_name";
            }

            if ($file_size > 2097152) {
                $errors[] = "Ukuran file tidak boleh lebih dari 2 MB untuk file: $file_name";
            }

            if (empty($errors)) {
                move_uploaded_file($file_tmp, "documents/" . $file_name);
                echo "File $file_name berhasil diunggah.<br>";
            } else {
                echo implode("<br>", $errors);
            }
        }
    } else {
        $file_name = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "Ekstensi file tidak diizinkan untuk file: $file_name";
        }

        if ($file_size > 2097152) {
            $errors[] = "Ukuran file tidak boleh lebih dari 2 MB";
        }

        if (empty($errors)) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File $file_name berhasil diunggah.<br>";
        } else {
            echo implode("<br>", $errors);
        }
    }
}
?>
