<?php

// include koneksi database
include('koneksi.php');

$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO anggota (nama, no_telp, alamat) VALUES ('$nama', '$no_telp', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conection->query($query)) {
    header("location: index.php");
} else {
    echo "Data gagal disimpan!";
}

?>