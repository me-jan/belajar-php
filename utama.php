<!doctype html>
<html>

<head>
    <title>Data Toko Baju </title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>


<body>
  
    <div class="container">
    <?php include 'navbar.php'; ?>
        <a href="tambah.php" class="btn btn-info mt-3">Tambah Data</a>

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Gambar</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php
                require 'setting.php';
                $query = "SELECT * FROM table_barang";
                $sql = mysqli_query($koneksi, $query);
                $no = 1;
                while ($data = mysqli_fetch_object($sql)) {
                ?>

                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $data->Nama_barang; ?> </td>
                        <td> <?php echo $data->Harga_jual; ?> </td>
                        <td> <?php echo $data->Harga_beli; ?> </td>
                        <td> <?php echo $data->gambar; ?> </td>
                        <td>
                            <a href="edit.php?id_barang=<?= $data->id_barang; ?>">
                                <input type="submit" value="edit" class="btn btn-warning">
                            </a>

                            <a href="hapus.php?id_barang=<?= $data->id_barang ?>">
                                <input type="submit" value="hapus" onclick="confirm('yakin hapus data?')" class="btn btn-danger">
                            </a>
                        <?php
                    }
                        ?>

                        </td>

                    </tr>

            </tbody>
        </table>

        <?php include 'footer.php' ?>
    </div>

</body>

</html>