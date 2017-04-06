<?php include('../config/header.php');?>
<?php include('../../config/connection.php') ?>
<div class="col-lg-12">
    <h1 class="page-header"><i class="icon-user"></i> Petugas</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            Daftar Petugas
        </div>
        <div class="panel-body">
          <div class="row">
              <div class="col-lg-12">
                <a href="pages/admin/pages/form_petugas.php" class="btn btn-primary">Tambah Petugas</a>
                <br/>
                <br/>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="listdata">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php
                            $query = "select * from m_petugas";
                            if ($result = mysqli_query($link, $query)) {
                                $count = mysqli_num_rows($result);
                                if($count > 0){
                                    while ($rows = mysqli_fetch_array($result)) {
                                      echo '<tr>';
                                      echo '<td>'.$rows['nama'].'</td>';
                                      echo '<td>'.$rows['username'].'</td>';
                                      echo '<td>'.$rows['email'].'</td>';
                                      echo '<td>'.$rows['status'].'</td>';
                                      echo '<td></td>';
                                      echo '</tr>';
                                    }
                                }
                            }
                          ?>
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
<?php include('../config/footer.php');?>
