			<div class="card">
                <div class="card-header card-header-primary">
				  <h4 class="card-title ">Data Mahasiswa
				  <small style="float:right;"><a href="index.php?page=add"><i class="fa fa-plus"></i> Tambah Data </a></small></h4>

                  <p class="card-category"> </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
					<thead>
						<tr>
							<th>#</th>
							<th>NIM</th>
							<th>Nama Mahasiswa</th>
							<th>Jurusan</th>
							<th>Alamat</th>
							<th>Foto</th>
							<th>Action</th>
						</tr>
					</thead>
                    <tbody>

					<?php
						$no = 0;
						$mahasiswa=$mysqli->query("SELECT * FROM mahasiswa");
						while ($m=mysqli_fetch_array($mahasiswa)) {
							$no++;
					?>

					<?php
						include"paging.php";
						$p = new paging_mahasiswa;
						$batas = 5;
						$posisi = $p->cariPosisi($batas);
						$mahasiswa=$mysqli->query("SELECT * FROM mahasiswa ORDER BY id DESC LIMIT $posisi,$batas");
						$no=0;
						while ($m=mysqli_fetch_array($mahasiswa)) {
							$no++;
					?>
						<tr>
							<th scope="row"><?php echo $no;?></th>
							<td><?php echo $m['nim']; ?></td>
							<td><?php echo $m['nama']; ?></td>
							<td><?php echo $m['jurusan']; ?></td>
							<td><?php echo $m['alamat']; ?></td>
							<td><img src="images/<?php echo $m['gambar'];?>" height="50"></td>
							<td>
								<button type="button" class="btn btn-default"><a href="index.php?page=edit&id=<?php echo $m['id'];?>" style="color:white;"><i class="fa fa-pencil"></i> Edit </a></button>
								<button type="button" class="btn btn-danger"><a href="index.php?page=delete&id=<?php echo $m['id'];?>" style="color:white;" onclick="return confirm('Anda yakin mau menghapus Data ini?')"><i class="fa fa-trash-o"></i> Hapus </a></button>
							</td>
						</tr>
					<?php
						}
					?>

					</tbody>
                    </table>
                  </div>
				</div>
				<div class="halaman col-md-12">
					<nav aria-label="Page navigation example" style="float:right;margin-right:200px;">
						<ul class="pagination">

						<?php
							}
						?>

						<?php
							$jmldata= mysqli_num_rows($mysqli->query("SELECT * FROM mahasiswa"));
							if($jmldata > 0){
								$jmlhalaman=$p->jumlahHalaman($jmldata, $batas);
								$linkhalaman=$p->navHalaman($_GET['home'], $jmlhalaman);
								echo " <li class='page-item'> $linkhalaman</li>";
							}
						?>

						</ul>
					</nav>
				</div>
			</div>

