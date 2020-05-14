<?php
include"functions/database.php";

/* cek apakah ada variabel dari form isi_berita.php?
 * jika ada, maka statement di bawah akan dikerjakan untuk memasukkan nilai ke dalam database
 */
if (isset($_POST['nama'])  && isset($_POST['jenis_kelamin'])  && isset($_POST['alamat'])  && isset($_POST['kota'])  && isset($_POST['email'])  && isset($_POST['password'])) {
    $stmt = $conn->prepare("INSERT INTO pelanggan (nama, jenis_kelamin, alamat, kota, email, password) VALUES (:nama,:jenis_kelamin,:alamat,:kota,:email,:password)");
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':jenis_kelamin', $jenis_kelamin);
    $stmt->bindParam(':alamat', $alamat);
    $stmt->bindParam(':kota', $kota);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    

    $nama          = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat        = $_POST['alamat'];
    $kota          = $_POST['kota'];
    $email         = $_POST['email'];
    $password      = md5($_POST['password']);

    $stmt->execute();
}
?>

data berhasil disimpan!