<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h3 class="alert alert-info"> TAMBAH DATA TOKO_BAJU</h3>

        <?php
        //menambahkan htmlspecialchars
        require 'setting.php';
        if (isset($_POST['simpan'])) {
            $txtnama_barang = htmlspecialchars($_POST['txtnama_barang']);
            $txtharga_jual = htmlspecialchars($_POST['txtharga_jual']);
            $txtharga_beli = htmlspecialchars($_POST['txtharga_beli']);
            $txtgambar =($_POST['txtGambar']);
            $sql = "INSERT INTO table_barang VALUES (NULL,'$txtnama_barang','$txtharga_jual','$txtharga_beli','$txtgambar')";
            $query = mysqli_query($koneksi, $sql);

            if ($query) {
                header('location:utama.php');
            } else {
                echo 'Query Error' . mysqli_error($koneksi);
            }
        }
        ?>

        <form action="#" method="Post">

            <div class="mb-3">
                <label for="nama_barang">Nama_barang</label>
                <input type="text" id="nama_barang" name="txtnama_barang" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="harga_jual">Harga_jual</label>
                <input type="text" id="harga_jual" name="txtharga_jual" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="Harga_beli">Harga_beli</label>
                <textarea name="txtharga_beli" id="Harga_jual" class="form-control" cols="30" rows="5" required></textarea>
            </div>

            <div class="mb-3">
                <label>Gambar</label>
                <input type="file" name="txtgambar" class="form-control"></input>
            </div>


            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
            <a href="index.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
</body>

</html>