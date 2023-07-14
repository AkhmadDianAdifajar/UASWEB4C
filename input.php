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
        <h1 class="mt-4 mb-4">Input Data Mahasiswa</h1>
        <form action="" method="POST">
            <div class="mb-3 row">
                <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NIM">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tempatLahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="tempatLahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tanggalLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggalLahir">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="programStudi" class="col-sm-2 col-form-label">Program Studi/Jurusan</label>
                <div class="col-sm-10">
                    <select name="programStudi" id="programStudi" class="form-select">
                        <option value="-" class="text-center">---Pilih Program Studi/Jurusan---</option>
                        <option value="L">TI</option>
                        <option value="P">SI</option>
                    </select>
                </div>
            </div>
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
                    <input type="text" class="form-control" id="">
                </div>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10">
                    <a href="" class="btn btn-warning btn-sm text-light">Simpan</a>
                    <a href="" class="btn btn-primary btn-sm text-light">Kembali</a>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>