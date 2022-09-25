<?php 
    session_start();
    require "dbconnect.php";
?>

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
                        <h4>Edit Barang</h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id'])) {
                            $id = mysqli_real_escape_string($conn,$_GET['id']);
                            $query = ("SELECT * from barang where id=$id");
                            $query_run = mysqli_query($conn,$query);
                            $record = mysqli_fetch_array($query_run);
                            ?>
                            
                            <form action="query.php" method="POST">
                            <input type="hidden" name='id' value=<?= $id ?>>

                            <label>Kode barang</label>
                            <input type="text" name="kode_barang" class="form-control" value=<?= $record['kode_barang'] ?> required>

                            <label>Nama barang</label>
                            <input type="text" name="nama_barang" class="form-control" value=<?= $record['nama_barang'] ?> required>

                            <label>Harga beli</label>
                            <input type="text" name="harga_beli" class="form-control" value=<?= $record['harga_beli'] ?> required>

                            <label>Harga jual</label>
                            <input type="text" name="harga_jual" class="form-control" value=<?= $record['harga_jual'] ?> required>

                            <label>Stok</label>
                            <input type="text" name="stok" class="form-control" value=<?= $record['stok'] ?> required>

                            <label>Satuan</label>
                            <input type="text" name="satuan" class="form-control" value=<?= $record['satuan'] ?> required>

                            <button type="submit" class="btn btn-success" name="edit_barang">Edit</button>
                        
                            </form>
                        
                        <?php 
                        } 
                        ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>