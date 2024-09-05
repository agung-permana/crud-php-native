<?php

// include koneksi database
include('koneksi.php');

// get dari data form
$id_anggota = $_POST['id_anggota'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];

//query update data ke dalam database
$query = "UPDATE anggota SET nama = '$nama', no_telp = '$no_telp', alamat = '$alamat' WHERE id_anggota = '$id_anggota'";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conection->query($query)) {
    header("location: index.php");
} else {
    echo "Data gagal disimpan!";
}

?>