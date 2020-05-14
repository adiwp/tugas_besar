<?php
include "session.php";
include "functions/database.php";
include "templates/header.php";

// ambil berita terakhir sebagai headline news
$headline = $conn->prepare("SELECT idberita, judul, ringkasan, tanggal, wartawan_idwartawan FROM berita ORDER BY idberita DESC LIMIT 1");
$headline->execute();
$headline->setFetchMode(PDO::FETCH_ASSOC);
?>
            <section id="headline">
                <div class="row">
                <?php while ($row = $headline->fetch()): ?>
                    <div class="jumbotron">
                        <h1>Headline News</h1>
                        <h3 class="display-4">
                        <?php echo htmlspecialchars($row['judul']); ?>
                        </h3>
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
                        <a class="btn btn-primary btn-lg" href="berita/?id=<?php echo htmlspecialchars($row['idberita']); ?>"" role="button">Lanjut baca</a>
                    </div>
                <?php endwhile; ?>
                </div>
            </section>
<?php
/*  ambil 10 berita terbaru kecuali berita terakhir karena digunakan sebagai headline news,
 *  WHERE idberita < (SELECT MAX(idberita) FROM berita)
 *      => ambil berita yg lebih kecil dari nilai idberita terbesar
 *  ORDER BY idberita DESC
 *      => diambil berdasarkan idberita urutan besar ke kecil
 *  LIMIT 10
 *      => Ambil 10 berita saja
 */

$berita = $conn->prepare("  SELECT idberita, judul, ringkasan, tanggal FROM berita
                            WHERE idberita < (SELECT MAX(idberita) FROM berita) 
                            ORDER BY idberita DESC LIMIT 10
                        ");
$berita->execute();
$berita->setFetchMode(PDO::FETCH_ASSOC);
?>
            <section id="content">
            <div class="row justify-content-md-center">
            <?php while ($brow = $berita->fetch()): ?>
                <div class="col-8">
                    <article class="berita">
                        <h4>
                            <a href="berita/?id=<?php echo htmlspecialchars($brow['idberita']); ?>">
                            <?php echo htmlspecialchars($brow['judul']); ?></a>
                        </h4>
                        <p><?php echo htmlspecialchars($brow['tanggal']); ?></p>
                        <p><?php echo htmlspecialchars($brow['ringkasan']); ?></p>
                    </article>
                </div>
            <?php endwhile; ?>
            </div>
            </section>
<?php include "templates/footer.php"; ?>