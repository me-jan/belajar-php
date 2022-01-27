<!doctype html>
<html>
<head>
    <title>Tambah Data Artikel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2 class="alert alert-info"> Edit Data Toko Baju</h2>

    <?php
    require 'setting.php';
    if (isset($_POST['simpan'])) {
        $id_barang=$_POST['id_barang'];
        $txtNama_barang = htmlspecialchars($_POST['txtnama_barang']);
        $txtHarga_jual = htmlspecialchars($_POST['txtharga_jual']);
        $txtHarga_beli = htmlspecialchars($_POST['txtharga_beli']);
        $txtgambar = $_POST['txtgambar'];

        $sql = "UPDATE table_barang SET 
        Nama_barang='$txtNama_barang',Harga_jual='$txtHarga_jual',Harga_beli='$txtHarga_beli',gambar='$txtgambar' WHERE id_barang=$id_barang";

        $query = mysqli_query($koneksi, $sql);
        if ($query) {
            header('location: utama.php');
        } else {
            echo 'Query Error : ' . mysqli_error($koneksi);
        }
    }else{
        $id_barang=$_GET['id_barang'];
        $query="SELECT * FROM table_barang WHERE id_barang=$id_barang";
        $sql=mysqli_query($koneksi,$query);
        $data=mysqli_fetch_object($sql);

    }

    ?>

    <form action="" method="post">
        <input type="hidden" name="id_barang" value="<?=$id_barang?>">
        <div class="mb-3">
            <label>Nama_barang</label>
            <input required type="text" name="txtnama_barang" class="form-control" value="<?=$data->Nama_barang;?>">
        </div>

        <div class="mb-3">
            <label>Harga_jual</label>
            <input type="text" name="txtharga_jual" class="form-control" value="<?=$data->Harga_jual;?>">
        </div>

        <div class="mb-3">
            <label>Harga_beli</label>
            <input type="number" name="txtharga_beli" class="form-control" value="<?=$data->Harga_beli;?>">
        </div>

        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="txtgambar" class="form-control" value="<?=$data->gambar;?>">
        </div>

        

        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
        <a href="index.php" class="btn btn-secondary">Kembali</a>
    </form>

</div>
</body>
</html>