<?php
include 'connections.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM dosen WHERE id = '$id'");
while ($data = mysqli_fetch_array($query)) {
    $nidn            = $data['nidn'];
    $nama           = $data['nama'];
    $jurusan         =$data['jurusan'];
    $jk             = $data['jenis_kelamin'];
    $alamat         = $data['alamat'];
    $telepon        = $data['telepon'];
    $email          = $data['email'];
}
if (isset($_POST['Submit'])) {
    $nidn = $_POST['nidn'];
    $nama = $_POST['namaLengkap'];
    $jurusan =$_POST['programStudi'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $result = mysqli_query($conn, "UPDATE dosen SET nidn ='$nidn',nama ='$nama',jurusan='$jurusan',jenis_kelamin = '$jk',alamat ='$alamat',telepon ='$telepon',email ='$email' WHERE id='$id'");
    header('location:showdosen.php');
} else {
    if (isset($_POST['Reset'])) {
        $nidn           = '';
        $nama           = '';
        $jurusan        = '';
        $jk             = '';
        $alamat         = '';
        $telepon        = '';
        $email          = '';
    }
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
        <h1 class="mt-4">Ubah Data Dosen</h1>
        <hr>
        <form action="" method="post">
            <div class="mb-3 row">
                <label for="nidn" class="col-sm-2 col-form-label">nidn</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nidn" name="nidn" value="<?php echo $nidn; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="namaLengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" value="<?php echo $nama; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="programStudi" class="col-sm-2 col-form-label">Program Studi/Jurusan</label>
                <div class="col-sm-10">
                    <select name="programStudi" id="programStudi" class="form-select">
                        <option value="-" class="text-center">---Pilih Program Studi/Jurusan---</option>
                        <option value="TI"<?php if ($jurusan == 'TI') echo 'selected' ?>>TI</option>
                        <option value="SI"<?php if ($jurusan == 'SI') echo 'selected' ?>>SI</option>
                    </select>
                </div>
            <div class="mb-3 row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis
                    Kelamin</label>
                <div class="col-sm-10">
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                        <option value="-" class="text-center">- pilih jenis kelamin -</option>
                        <option value="L" <?php if ($jk == 'L') echo 'selected' ?>>Laki - Laki</option>
                        <option value="P" <?php if ($jk == 'P') echo 'selected' ?>>Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="telepon" name="telepon" value="<?php echo $telepon; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="mb-12 row">
                <div class="offset-sm-2">
                    <input type="submit" name="Submit" value="Simpan" class="btn btn-success">
                    <input type="submit" name="Reset" value="Reset" class="btn btn-warning">
                    <a href="showdosen.php" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>