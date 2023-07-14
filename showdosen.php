<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi WEB 4C</title>
</head>

<body>
    <?php include 'nav.php' ?>
    <div class="container">
        <h3 class="mt-4">Data Dosen</h3>
        <hr>
        <a href="inputdosen.php" class="btn btn-primary text-light mb-4">Tambah Data</a>
        <a href="cetak.php" target="_black" class="btn btn-primary mb-4">Cetak</a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">NIDN</th>
                        <th scope="col">Nama Dosen</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include 'connections.php';

                    $query = mysqli_query ($conn, "SELECT * FROM dosen");

                    while ($data = mysqli_fetch_array ($query)){
                    ?>
                    <tr>
                        <td><?php echo $data['nidn']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['jurusan']; ?></td>
                        <td><?php echo $data['jenis_kelamin']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['telepon']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        
                        

                        <td>
                            <a href="editdosen.php?id=<?php echo $data['id'];?>"class="btn btn-sm btn-warning">Edit</a>
                            <a href="deletedosen.php?id=<?php echo $data['id'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Lanjut hapus data ?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html> 