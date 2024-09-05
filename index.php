<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Data Anggota</title>
</head>

<body>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Data Anggota</b>
                    </div>
                    <div class="card-body">
                    <a href="tambah_anggota.php" class="btn btn-sm btn-primary mb-3">Tambah Anggota</a>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">No. Telp</th>
                                        <th scope="col">Alamat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include('koneksi.php');
                                        $no = 1;
                                        $query = mysqli_query($conection, "SELECT * FROM anggota");
                                        while($row = mysqli_fetch_array($query)) {;
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td><?php echo $row['no_telp'] ?></td>
                                        <td><?php echo $row['alamat'] ?></td>
                                        <td>
                                            <a href="edit_anggota.php?id=<?php echo $row['id_anggota'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="hapus_anggota.php?id=<?php echo $row['id_anggota'] ?>" onclick="return confirm('Yakin mau hapus data ini?')" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>