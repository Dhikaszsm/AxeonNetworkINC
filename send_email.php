<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    $to = "axeonnetwork@gmail.com";
    $subject = "Pesan dari Kontak Website";
    $message = "Nama: $nama\nEmail: $email\nPesan:\n$pesan";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan berhasil dikirim!";
    } else {
        echo "Gagal mengirim pesan.";
    }
} else {
    echo "Metode permintaan tidak valid.";
}
?>