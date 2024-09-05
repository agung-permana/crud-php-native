<?php

include('koneksi.php');

$id = $_GET['id'];

$query = "SELECT * FROM anggota WHERE id_anggota = $id LIMIT 1";

$result = mysqli_query($conection, $query);

$row = mysqli_fetch_array($result);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Siswa</title>
  </head>
  <body>
    <div class="container">
        <div class="row pt-5">
            <div class="col-md-6">
                
                <div class="card">
                    <div class="card-header">
                        <b>Edit Siswa</b>
                    </div>
                    <div class="card-body">
                        <form action="proses_edit_anggota.php" method="post">
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="hidden" name="id_anggota" class="form-control" value="<?php echo $row['id_anggota'] ?>">
                            <input type="text" name="nama" class="form-control" value="<?php echo $row['nama'] ?>" placeholder="Masukan Nama Anda" autofocus>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No. Telp</label>
                            <input type="number" name="no_telp" class="form-control" value="<?php echo $row['no_telp'] ?>" placeholder="Masukan No. Telp">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3" placeholder="Masukan Alamat"><?php echo $row['alamat'] ?></textarea>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                            <a href="index.php" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>