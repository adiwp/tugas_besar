<?php
include "session.php";
include"../templates/admin.header.php";
?>
                <h2>Isi data Berita</h2>
                <form method="post" action="berita.php">
                    <div class="form-group">
                        <label for="tanggal">Tanggal dan waktu</label>
                        <input class="form-control" type="date" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input name="judul" type="text" class="form-control" id="judul">
                    </div>
                    <div class="form-group">
                        <label for="ringkasan">Ringkasan</label>
                        <input name="ringkasan" type="text" class="form-control" id="ringkasan">
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi Berita</label>
                        <textarea name="isi" class="form-control" id="isi" rows="3"></textarea>
                    </div>
                    <!--    Relasi Wartawan ke Berita 
                            Oleh Karena itu, harus ada
                            id Wartawan, untuk menginformasikan
                            wartawan yang membuat berita ini
                    -->
                    <input type="hidden" id="wartawan_idwartawan" name="wartawan_idwartawan" value=<?php echo $idwartawan; ?>>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
<?php
include"../templates/admin.footer.php";
?>