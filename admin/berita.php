<?php
include"../functions/database.php";
include"../templates/admin.header.php";

/* cek apakah ada variabel dari form isi_berita.php?
 * jika ada, maka statement di bawah akan dikerjakan untuk memasukkan nilai ke dalam database
 */
if (isset($_POST['judul'])  && isset($_POST['ringkasan'])  && isset($_POST['isi'])  && isset($_POST['tanggal'])) {
    $stmt = $conn->prepare("INSERT INTO berita (judul, ringkasan, isi, tanggal, wartawan_idwartawan) VALUES (:judul,:ringkasan,:isi,:tanggal, :wartawan_idwartawan)");
    $stmt->bindParam(':judul', $judul);
    $stmt->bindParam(':ringkasan', $ringkasan);
    $stmt->bindParam(':isi', $isi);
    $stmt->bindParam(':tanggal', $tanggal);
    $stmt->bindParam(':wartawan_idwartawan', $wartawan_idwartawan);

    $judul               = $_POST['judul'];
    $ringkasan           = $_POST['ringkasan'];
    $isi                 = $_POST['isi'];
    $tanggal             = $_POST['tanggal'];
    $wartawan_idwartawan = $_POST['wartawan_idwartawan'];

    $stmt->execute();
}
?>
<h2>Data Berita</h2>
<!-- Tabel row data -->
<table class="table table-bordered">
    <!-- heading table -->
    <thead>
        <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Ringkasan</th>
            <th>Isi</th>
            <th>Tanggal</th>
        </tr>    
    </thead>
<?php
// menarik data dari Database untuk ditampilkan ke dalam tabel!
$stmt2 = $conn->prepare("SELECT idBerita, judul, ringkasan, isi, tanggal FROM berita ORDER BY idBerita DESC");
$stmt2->execute();
$stmt2->setFetchMode(PDO::FETCH_ASSOC);
?>
    <!-- body table -->
    <tbody>
        <?php while ($row = $stmt2->fetch()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['idBerita']) ?></td>
            <td><?php echo htmlspecialchars($row['judul']); ?></td>
            <td><?php echo htmlspecialchars($row['ringkasan']); ?></td>
            <td><?php echo htmlspecialchars($row['isi']); ?></td>
            <td><?php echo htmlspecialchars($row['tanggal']); ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<?php
include"../templates/admin.footer.php";
?>