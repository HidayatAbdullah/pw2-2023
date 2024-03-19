<!-- Task 1
	Rapihkan dan buatlah form agar bisa mengirim data
	Gunakan form request POST
-->
<!DOCTYPE html>
<html>
<head>
	<title>Form Pendaftaran</title>
	<!-- Load Bootstrap CSS from CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

   <form class="form-horizontal w-50 mt-5 mx-auto p-4 border shadow-sm" method="POST" action="hasil_daftar.php">
		<h1>Form Pendaftaran</h1>
      <hr />
      <div class="container px-3">
         <div class="form-group mb-3">
            <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label>
            <input id="nama_lengkap" name="nama_lengkap" type="text" class="form-control" placeholder="Tulis nama lengkap kamu" required>
         </div>
			<div class="form-group mb-3">
				<label for="email" class="col-4 col-form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="Email yang masih aktif" required>
         </div>
			<div class="form-group mb-3">
				<label for="alamat" class="col-4 col-form-label">Alamat</label>
				<textarea class="form-control" id="alamat" name="alamat" type="text" placeholder="Alamat sesuai KTP"></textarea>
			</div>
			<div class="form-group mb-3">
				<label for="telepon" class="col-4 col-form-label">Telepon</label>
				<input type="tel" class="form-control" id="telepon" name="telepon" placeholder="Menggunakan +62*****">
			</div>
         <div class="form-group mb-3">
            <div class=" col-8">
			      <input type="submit" name="proses" value="Submit" class="btn btn-primary">
            </div>
         </div>
      </div>
   </form>

</body>
</html>