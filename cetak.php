<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan dari Akhmad Nizar</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1 align="center">Laporan Data Dosen</h1>
    <table align="center"  border=1 width="100%" cellpadding="5">
        <thead>
            <tr>
                <th>NIDN</th>
                <th>Nama Dosen</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include '../connection.php';
            $query = mysqli_query($conn, "SELECT * FROM dosen");
            while ($data = mysqli_fetch_array($query)) {
            ?>
                <tr align="center">
                    <td><?php echo $data['nidn']; ?></td>
                    <td align="left"><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['jenis_kelamin']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['telepon']; ?></td>
                    <td align="left"><?php echo $data['email']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>

> Rizky TI:
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.css" rel="stylesheet"/>
    <title>Aplikasi WEB 4C</title>
</head>

<body>
    <?php include 'nav.php' ?>
    <div class="container">
        <h3 class="mt-4">Data Dosen</h3>
        <hr>
        <a href="input.php" class="btn btn-success text-light mb-4">Tambah Data</a>
        <a href="print.php" target="_blank" class="btn btn-primary mb-4">Cetak</a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataDosen">
                <thead>
                    <tr>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../connections.php';

                    $query = mysqli_query ($conn, "SELECT * FROM dosen");

                    while ($data = mysqli_fetch_array ($query)){
                    ?>
                    <tr align="center">
                        <td><?php echo $data['nidn']; ?></td>
                        <td align="left"><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['telepon']; ?></td>
                        <td align="left"><?php echo $data['email']; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $data['id'];?>"class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Lanjutkan hapus data ?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
    $('#dataDosen').DataTable();
    });
    </script>
</body>

</html>