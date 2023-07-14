<?php
include 'connections.php';
if (isset($_POST['Submit'])) {
 $nidn = $_POST['nidn'];
 $nama = $_POST['namaLengkap'];
 $jurusan = $_POST['programStudi'];
 $jk = $_POST['jenisKelamin'];
 $alamat = $_POST['alamat'];
 $telepon = $_POST['telepon'];
 $email = $_POST['email'];
 $result = mysqli_query($conn, "INSERT INTO dosen(nidn,nama,jurusan,jenis_kelamin,alamat,telepon,email) VALUES('$nidn','$nama','$jurusan','$jk','$alamat','$telepon','$email')");
 header('location:showdosen.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Web 4C</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <?php include 'nav.php' ?>
    <div class="container">
        <h1 class="mt-4 mb-4">Input Data Dosen</h1>
        <form action="" method="POST">
            <div class="mb-3 row">
                <label for="nidn" class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nidn" name="nidn">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="namaLengkap" class="col-sm-2 col-form-label">Nama Dosen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="programStudi" class="col-sm-2 col-form-label">Program Studi/Jurusan</label>
                <div class="col-sm-10">
                    <select name="programStudi" id="programStudi" class="form-select">
                        <option value="-" class="text-center">---Pilih Program Studi/Jurusan---</option>
                        <option value="TI">TI</option>
                        <option value="SI">SI</option>
                    </select>
                </div>
                <p>
                <div class="mb-3 row">
                <label for="jenisKelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <select name="jenisKelamin" id="jenisKelamin" class="form-select">
                        <option value="-" class="text-center">---Pilih Jenis Kelamin---</option>
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
                    <a href="showdosen.php" class="btn btn-warning">Kembali</a>
                    </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>