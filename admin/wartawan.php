<?php
include"../functions/database.php";
include"../templates/admin.header.php";

/* cek apakah ada variabel dari form isi_wartawan.php?
 * jika ada, maka statement di bawah akan dikerjakan untuk memasukkan nilai ke dalam database
 */
if (isset($_POST['nama'])  && isset($_POST['email'])  && isset($_POST['password']))
{
    $stmt = $conn->prepare("INSERT INTO wartawan (nama, email, password) VALUES (:nama,:email,:password)");
    $stmt->bindParam(':nama', $nama);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);

    $nama     = $_POST['nama'];
    $email    = $_POST['email'];
    $password = md5($_POST['password']);

    $stmt->execute();
}
?>
<h2>Data Wartawan</h2>
<!-- Tabel row data -->
<table class="table table-bordered">
    <!-- heading table -->
    <thead>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Passowrd</th>
        </tr>    
    </thead>
<?php
// menarik data dari Database untuk ditampilkan ke dalam tabel!
$stmt2 = $conn->prepare("SELECT idwartawan, nama, email, password FROM wartawan ORDER BY idwartawan DESC");
$stmt2->execute();
$stmt2->setFetchMode(PDO::FETCH_ASSOC);
?>
    <!-- body table -->
    <tbody>
        <?php while ($row = $stmt2->fetch()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['idwartawan']) ?></td>
            <td><?php echo htmlspecialchars($row['nama']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['password']); ?></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
<?php
include"../templates/admin.footer.php";
?>