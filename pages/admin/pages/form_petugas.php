<?php include('../config/header.php');?>
<div class="col-lg-12">
    <h1 class="page-header"><i class="icon-user"></i> Petugas</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            Form Petugas
        </div>
        <div class="panel-body">
          <div class="row">
              <div class="col-lg-12">
                <form role="form">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Masukan Password">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select name="status" class="form-control">
                          <option value="1">aktif</option>
                          <option value="0">tidak aktif</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                    </div>
                  </form>
              </div>
          </div>
        </div>
    </div>
</div>
<?php include('../config/footer.php');?>
