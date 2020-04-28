<?php
include"../functions/database.php";
include"../templates/admin.header.php";

/* cek apakah ada variabel dari form isi_pelanggan.php?
 * jika ada, maka statement di bawah akan dikerjakan untuk memasukkan nilai ke dalam database
 */
if (isset($_POST['nama'])  && isset($_POST['email'])  && isset($_POST['password']))
{
    $stmt = $conn->prepare("
        INSERT INTO pelanggan (nama, jenis_kelamin, alamat, kota, email, password) 
        VALUES (:nama, :jenis_kelamin, :alamat, :kota, :email,:password)");
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
<h2>Data Pelanggan</h2>
<!-- Tabel row data -->
<table class="table table-bordered">
    <!-- heading table -->
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Kota</th>
            <th>Email</th>
            <th>Passowrd</th>
        </tr>    
    </thead>
<?php
// menarik data dari Database untuk ditampilkan ke dalam tabel!
$stmt2 = $conn->prepare("
    SELECT idpelanggan, nama, jenis_kelamin, alamat, kota, email, password 
    FROM pelanggan 
    ORDER BY idpelanggan DESC");
$stmt2->execute();
$stmt2->setFetchMode(PDO::FETCH_ASSOC);
?>
    <!-- body table -->
    <tbody>
        <?php while ($row = $stmt2->fetch()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['idpelanggan']) ?></td>
            <td><?php echo htmlspecialchars($row['nama']); ?></td>
            <td><?php echo htmlspecialchars($row['jenis_kelamin']); ?></td>
            <td><?php echo htmlspecialchars($row['alamat']); ?></td>
            <td><?php echo htmlspecialchars($row['kota']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['password']); ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<?php
include"../templates/admin.footer.php";
?>