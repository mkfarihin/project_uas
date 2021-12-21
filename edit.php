<?php
	$edit=$mysqli->query("SElECT * FROM mahasiswa where id='$_GET[id]'");
	$e=mysqli_fetch_array($edit);
?>
<div class="card">
	<div class="card-header card-header-primary">
		<h4 class="card-title ">Update Data Mahasiswa</h4>
		<p class="card-category"> </p>
	</div>
	<div class="card-body">
		<form name="form_mahasiswa" action="index.php?page=update" method="post" enctype="multipart/form-data">

			<div class="form-group">
				<label for="NIM">NIM</label>
				<input type="hidden" name="id" value="<?php echo $e['id'];?>">
				<input type="text" class="form-control" id="nim" placeholder="Nomor Induk Mahasiswa" name="nim" required value="<?php echo $e['nim'];?>">
			</div>

			<div class="form-group">
				<label for="Nama">Nama</label>
				<input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" required value="<?php echo $e['nama'];?>">
			</div>

			<div class="form-group">
				<label for="Jurusan">Jurusan</label>
				<select name="jurusan" class="form-control" id="jurusan" name="jurusan" required>
					<option value="<?php echo $e['jurusan'];?>"><?php echo $e['jurusan'];?></option>
					<option value="Sistem Informasi">Sistem Informasi</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Teknik Komputer">Teknik Komputer</option>
					<option value="Sistem Informasi Akuntansi">Sistem Informasi Akuntansi</option>
				</select>
			</div>

			<div class="form-group">
				<label for="Alamat">Alamat</label>
				<textarea class="form-control editor" id="alamat" placeholder="Alamat" name="alamat" required><?php echo $e['alamat'];?></textarea>
			</div>


			<div class="file-field">
				<div class="btn btn-primary btn-sm">
					<span for="Gambar">Input Foto</span>
					<input type="file" id="gambar" name="gambar">
				</div>
			</div>
			<span><?php echo $e['gambar'];?></span>

			<div class="form-group">
				<button type="reset" class="btn btn-danger">Reset</button>
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>
	</div>
</div>