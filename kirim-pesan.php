<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);
    
    $to = "supplycoabnormal@gmail.com";
    $subject = "Pesan dari Form Kontak";
    $message = "Nama: $nama\nEmail: $email\nPesan:\n$pesan";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Pesan gagal dikirim. Coba lagi nanti.'); window.history.back();</script>";
    }
}
?>
