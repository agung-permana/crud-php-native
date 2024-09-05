<?php

include('koneksi.php');

$id = $_GET['id'];

$query = "DELETE FROM anggota WHERE id_anggota = '$id'";

if($conection->query($query)) {
    header("location: index.php");
} else {
    echo "Data gagal dihapus!";
}

?>