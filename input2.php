<?php
include 'connections.php';
if (isset($_POST['Submit'])) {
 $nim = $_POST['nim'];
 $nama = $_POST['namaLengkap'];
 $tempatLahir = $_POST['tempatLahir'];
 $tanggalLahir = $_POST['tanggalLahir'];
 $prodi = $_POST['programStudi'];
 $jk = $_POST['jenisKelamin'];
 $alamat = $_POST['alamat'];
 $telepon = $_POST['telepon'];
 $email = $_POST['email'];
 $result = mysqli_query($conn, "INSERT INTO mahasiswa(nim,nama_mahasiswa,tempat_lahir,tanggal_lahir,jurusan,jenis_kelamin,alamat,telepon,email) VALUES('$nim','$nama','$tempatLahir','$tanggalLahir','$prodi','$jk','$alamat','$telepon','$email')");
 header('location:show.php');
}
?>
<!doctype html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Aplikasi Web 4D</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
 integrity="sha384-
KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
crossorigin="anonymous">
</head>
<body>
 <?php include 'nav.php' ?>
 <div class="container">
 <h1 class="mt-4">Input Data Mahasiswa</h1>
 <hr>
 <form action="" method="post">
 <div class="mb-3 row">
 <label for="nim" class="col-sm-2 col-form-label">NIM</label>
 <div class="col-sm-10">
 <input type="text" class="form-control" id="nim" name="nim">
 </div>
 </div>
 <div class="mb-3 row">
 <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
 <div class="col-sm-10">
 <input type="text" class="form-control" id="namaLengkap"
name="namaLengkap">
 </div>
 </div>
 <div class="mb-3 row">
 <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat
Lahir</label>
 <div class="col-sm-10">
 <input type="text" class="form-control" id="tempatLahir"
name="tempatLahir">
 </div>
 </div>
 <div class="mb-3 row">
 <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal
Lahir</label>
 <div class="col-sm-10">
 <input type="date" class="form-control" id="tanggaLahir"
name="tanggalLahir">
 </div>
 </div>
 <div class="mb-3 row">
 <label for="programStudi" class="col-sm-2 col-form-label">Program
Studi</label>
 <div class="col-sm-10">
 <select name="programStudi" id="programStudi" class="form-select">
 <option value="-">- pilih program studi -</option>
 <option value="TI">Teknik Informatika</option>
 <option value="SI">Sistem Informasi</option>
 </select>
 </div>
 </div>
 <div class="mb-3 row">
 <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis
Kelamin</label>
 <div class="col-sm-10">
 <select name="jenisKelamin" id="jenisKelamin" class="form-select">
 <option value="-">- pilih jenis kelamin -</option>
 <option value="L">Laki-laki</option>
 <option value="P">Perempuan</option>
 </select>
 </div>
 </div>
 <div class="mb-3 row">
 <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
 <div class="col-sm-10">
 <input type="text" class="form-control" id="alamat" name="alamat">
 </div>
 </div>
 <div class="mb-3 row">
 <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
 <div class="col-sm-10">
 <input type="text" class="form-control" id="telepon" name="telepon">
 </div>
 </div>
 <div class="mb-3 row">
 <label for="email" class="col-sm-2 col-form-label">Email</label>
 <div class="col-sm-10">
 <input type="email" class="form-control" id="email" name="email">
 </div>
 </div>
 <div class="mb-12 row">
 <div class="offset-sm-2">
 <input type="submit" name="Submit" value="Simpan" class="btn btnprimary">
 <!-- <input type="reset" value="Reset" class="btn btn-warning"> -->
 <a href="show.php" class="btn btn-warning">Kembali</a>
 </div>
 </div>
 </form>
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
crossorigin="anonymous">
 </script>
</body>
</html>