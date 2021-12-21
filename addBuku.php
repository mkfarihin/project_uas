<div class="card">
	<div class="card-header card-header-primary">
		<h4 class="card-title ">Add Data Buku</h4>
		<p class="card-category"> </p>
	</div>
	<div class="card-body">
		<form name="form_buku" action="index.php?page=createBuku" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="kode">Kode Buku</label>
				<input type="text" class="form-control" id="kode" placeholder="Input Kode Buku" name="kode" required>
			</div>

			<div class="form-group">
				<label for="judul">Judul</label>
				<input type="text" class="form-control" id="judul" placeholder="Input Judul Buku" name="judul" required>
			</div>

			<div class="form-group">
				<label for="penerbit">Penerbit</label>
				<input type="text" class="form-control" id="penerbit" placeholder="Input Penerbit Buku" name="penerbit" required>
			</div>

			<div class="form-group">
				<label for="jenis">Jenis Buku</label>
				<select name="jenis" class="form-control" id="jenis" name="jenis" required>
					<option value="">None</option>
					<option value="Cerpen">Cerpen</option>
					<option value="Komik">Komik</option>
					<option value="Dongeng">Dongeng</option>
					<option value="Biografi">Biografi</option>
				</select>
			</div>

			<div class="form-group">
				<label for="referensi">Referensi</label>
				<textarea class="form-control editor" id="referensi" placeholder="Referensi" name="referensi" required></textarea>
			</div>

			<div class="file-field">
				<div class="btn btn-primary btn-sm">
					<span for="Gambar">Input Foto Buku</span>
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