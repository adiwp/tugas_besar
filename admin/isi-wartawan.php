<?php
include "session.php";
include"../templates/admin.header.php";
?>
                <h2>Isi data Wartawan</h2>
                <form method="post" action="wartawan.php">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama">
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