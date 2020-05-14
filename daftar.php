<?php
include "functions/database.php";
include "templates/header.php";
?>
    <h2>Daftar Pelanggan</h2>
    <form method="post" action="sukses.php">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input name="nama" type="text" class="form-control" id="nama">
        </div>
        <p>Jenis Kelamin</p>
        <div class="form-check">
            <input name="jenis_kelamin" type="radio" class="form-check-input" id="jenis_kelamin" value="L">
            <label class="form-check-label" for="laki-laki">
                Laki-laki
            </label>
        </div>
        <div class="form-check">
            <input name="jenis_kelamin" type="radio" class="form-check-input" id="jenis_kelamin" value="P">
            <label class="form-check-label" for="perempuan">
                Perempuan
            </label>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input name="alamat" type="text" class="form-control" id="alamat">
        </div>
        <div class="form-group">
            <label for="kota">Kota</label>
            <input name="kota" type="text" class="form-control" id="kota">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
<?php include "templates/footer.php"; ?>