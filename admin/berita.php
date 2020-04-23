<?php
include"../functions/database.php";
include"../templates/admin.header.php";

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
<?php
echo "<table class=\"table table-bordered\">";
echo "<tr><th>Id</th><th>Judul</th><th>Ringkasan</th><th>Isi</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }
    function current() {
        return "<td>" . parent::current(). "</td>";
    }
    function beginChildren() {
        echo "<tr>";
    }
    function endChildren() {
        echo "</tr>";
    }
}

    $stmt2 = $conn->prepare("SELECT idBerita, judul, ringkasan, isi FROM berita");
    $stmt2->execute();

    // set the resulting array to associative
    $result = $stmt2->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt2->fetchAll())) as $k=>$v) {
        echo $v;
    }
    echo "</table>";

include"../templates/admin.footer.php";
?>