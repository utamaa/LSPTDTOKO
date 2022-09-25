<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Barang</title>
</head>
<body>

    <?php require "navbar.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php require "alert.php" ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Tambah Barang</h4>
                    </div>
                    <div class="card-body">
                        <form action="query.php" method="POST">
                            <label>Kode barang</label>
                            <input type="text" name="kode_barang" class="form-control" required>

                            <label>Nama barang</label>
                            <input type="text" name="nama_barang" class="form-control" required>

                            <label>Harga beli</label>
                            <input type="text" name="harga_beli" class="form-control" required>

                            <label>Harga jual</label>
                            <input type="text" name="harga_jual" class="form-control" required>

                            <label>Stok</label>
                            <input type="text" name="stok" class="form-control" required>

                            <label>Satuan</label>
                            <input type="text" name="satuan" class="form-control" required>

                            <button type="submit" class="btn btn-success" name="tambah_barang">Tambah</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>