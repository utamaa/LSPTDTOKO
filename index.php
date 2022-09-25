<?php require "db/dbconnect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>
    <?php require 'navbar.php' ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel Barang</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>kode_barang</td>
                                    <td>nama_barang</td>
                                    <td>harga_beli</td>
                                    <td>harga_jual</td>
                                    <td>stok</td>
                                    <td>satuan</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $recordBarang = mysqli_query($conn,"SELECT * FROM barang");

                                    while ($row = mysqli_fetch_assoc($recordBarang)) {
                                        echo
                                        "<tr>
                                            <td>{$row['id']}</td>
                                            <td>{$row['kode_barang']}</td>
                                            <td>{$row['nama_barang']}</td>
                                            <td>{$row['harga_beli']}</td>
                                            <td>{$row['harga_jual']}</td>
                                            <td>{$row['stok']}</td>
                                            <td>{$row['satuan']}</td>
                                        </tr>";
                                    }
                                
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>