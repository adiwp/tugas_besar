<?php
include "../session.php";
include"../functions/database.php";
$pth = "../";
include"../templates/header.php";

$id = $_GET['id'];

$detil = $conn->prepare("   SELECT idberita, judul, ringkasan, tanggal, isi, wartawan_idwartawan
                            FROM berita 
                            WHERE idberita = $id
                        ");
$detil->execute();
$detil->setFetchMode(PDO::FETCH_ASSOC);
?>
            <section id="headline">
                <div class="row">
                    <article class="berita">
                    <?php while ($row = $detil->fetch()): ?>
                        <h3><?php echo htmlspecialchars($row['judul']); ?>, <?= $idpelanggan ?></h3>
                        <?php
                            // ambil ID wartawan, lalu ambil ke tabel wartawan supaya diambil nama wartawannya
                            $idWartawan = $row['wartawan_idwartawan'];
                            $wartawan = $conn->prepare("SELECT idwartawan, nama FROM wartawan WHERE idwartawan = $idWartawan");
                            $wartawan->execute();
                            $wartawan->setFetchMode(PDO::FETCH_ASSOC);
                            while ($baris = $wartawan->fetch()):
                        ?>
                        <p>Wartawan: <?php echo htmlspecialchars($baris['nama']); ?>. Jakarta, <?php echo htmlspecialchars($row['tanggal']); ?></p>
                        <?php endwhile; ?>
                        <p class="lead">
                        <?php echo htmlspecialchars($row['ringkasan']); ?>
                        </p>
                        <p><?php echo htmlspecialchars($row['isi']); ?></p>
                    <?php endwhile; ?>
                    </article>
                </div>
            </section>
            <section id="komentar">
                <h2>Komentar</h2>
                <h2>Isi data Berita</h2>
                <form method="post" action="index.php">
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <input class="form-control" type="text" id="isi" name="isi">
                    </div>
                    
                    <!-- // pelanggan -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </section>
<?php
include"../templates/footer.php";
?>