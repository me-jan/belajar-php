<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title> Toko_baju</title>
</head>

<body>
    <div class="container">
    <?php include 'navbar.php'; ?>

        <div class="mt-3" id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="gambar/baju2.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <?php
            require 'setting.php';
            $query = "SELECT * FROM table_barang";
            $ql = mysqli_query($koneksi, $query);
            while ($data = mysqli_fetch_object($ql)) {

            ?>
                <div class="col mt-3">
                <div class="card" style="width: 18rem;">
  <img src="gambar/baju.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Baju</h5>
    <p class="card-text"><?= $data->Nama_barang; ?></p>
    <p class="card-text"><?= $data->Harga_jual; ?></p>
    <p class="card-text"><?= $data->Harga_beli; ?></p>
    <p class="card-text"><?= $data->gambar; ?></p>
    
  </div>
</div>

                </div>
            <?php } ?>
        </div>
        <?php include 'footer.php'; ?>

    </div>
</body>

</html>