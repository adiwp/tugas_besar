<?php
include"../templates/admin.header.php";
?>
                <h2>Isi data Pelanggan</h2>
                <form method="post" action="pelanggan.php">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                          <option value="L">Laki-laki</option>
                          <option value="P">Perempuan</option>
                        </select>
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
<?php
include"../templates/admin.footer.php";
?>