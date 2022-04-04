<!DOCTYPE html>
<html>
<head>
	<title>Add Data Mahasiswa</title>
</head>
<body>
	<center><font size="6">Tambah Data</font></center>
		<hr>
	<form method="post" action="action.php">
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Nama</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" name="Nama" class="form-control" size="4" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">NIM</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" name="NIM" class="form-control" size="4" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Prodi</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" name="Prodi" class="form-control" size="4" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Fakultas</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" name="Fakultas" class="form-control" size="4" required>
			</div>
		</div>
		<div class="item form-group">
			<label class="col-form-label col-md-3 col-sm-3 label-align">Universitas</label>
			<div class="col-md-6 col-sm-6 ">
				<input type="text" name="Universitas" class="form-control" size="4" required>
			</div>
		</div>
		<div class="item form-group">
			<div  class="col-md-6 col-sm-6 offset-md-3">
				<input type="submit" name="submit" class="btn btn-primary" value="Submit">
			</div>
		</div>
	</form>
</body>
</html>