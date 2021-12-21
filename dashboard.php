<?php
  $mhs= mysqli_num_rows($mysqli->query("SELECT * FROM mahasiswa"));
  $bku= mysqli_num_rows($mysqli->query("SELECT * FROM buku"));
?>
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header card-header-success">
            <div class="ct-chart" id="dailySalesChart"><i class="fa fa-graduation-cap"></i> Data Mahasiswa</div>
          </div>
          <div class="card-body">
            <h3 class="card-title card-category"><span class="text-success"><?php echo $mhs;?> Data Mahasiswa</span></h3>
            <br>
            <p class="card-category">
                 <a href="index.php?page=read">Lihat Detail Mahasiswa.</a>
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card card-chart">
          <div class="card-header card-header-warning">
            <div class="ct-chart" id="websiteViewsChart"><i class="fa fa-book"></i> Data Buku</div>
          </div>
          <div class="card-body">
            <h3 class="card-title card-category"><span class="text-warning"><?php echo $bku;?> Data Buku</span></h3>
            <br>
            <p class="card-category">
                 <a href="index.php?page=readBuku"> Lihat Detail Buku.</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>