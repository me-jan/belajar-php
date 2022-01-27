<?php
include 'setting.php';
$id_barang = $_GET['id_barang'];
$query="DELETE FROM table_barang WHERE id_barang=$id_barang";
$sql= mysqli_query($koneksi,$query);
if($sql){
    echo "data berhasil di hapus";
    header('location:utama.php');
}else{
    echo "data gagal terhapus";
}