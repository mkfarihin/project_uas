<div class="card">
	<div class="card-header card-header-primary">
		<h4 class="card-title ">Add Data Mahasiswa</h4>
		<p class="card-category"> </p>
	</div>
	<div class="card-body">
		<form name="form_mahasiswa" action="index.php?page=create" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="NIM">NIM</label>
				<input type="text" class="form-control" id="nim" placeholder="Input Nomor Induk Mahasiswa" name="nim" required>
			</div>

			<div class="form-group">
				<label for="Nama">Nama</label>
				<input type="text" class="form-control" id="nama" placeholder="Input Nama" name="nama" required>
			</div>

			<div class="form-group">
				<label for="Jurusan">Jurusan</label>
				<select name="jurusan" class="form-control" id="jurusan" name="jurusan" required>
					<option value="">None</option>
					<option value="Sistem Informasi">Sistem Informasi</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Teknik Komputer">Teknik Komputer</option>
					<option value="Sistem Informasi Akuntansi">Sistem Informasi Akuntansi</option>
				</select>
			</div>

			<div class="form-group">
				<label for="Alamat">Alamat</label>
				<textarea class="form-control editor" id="alamat" placeholder="Alamat" name="alamat" required></textarea>
			</div>

			<div class="file-field">
				<div class="btn btn-primary btn-sm">
					<span for="Gambar">Input Foto</span>
					<input type="file" id="gambar" name="gambar" required>
				</div>
			</div>


			<div class="form-group">
				<button type="reset" class="btn btn-danger">Reset</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>

		</form>
	</div>
</div>