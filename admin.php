<?php require "db/dbconnect.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Admin</title>
</head>
<body>
    <?php require 'navbar.php' ?>

    <div class="container mt-3">
        <!-- TABEL BARANG ------------------------------------   -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel Barang
                            <a href="form_addBarang.php" class="btn btn-primary float-end">Tambah Barang</a>
                        </h4>
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
                                    <td>aksi</td>
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
                                            <td>
                                                <a href='form_editBarang.php?id={$row['id']}' class='btn btn-success'>Edit</a>
                                                <form action='query.php' method='POST' class='d-inline'>
                                                <button type='submit' name='delete_barang' value='{$row['id']}' class='btn btn-danger'>Hapus</button>
                                                </form>
                                            </td>
                                        </tr>";
                                    }
                                
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- TABEL PENJUALAN ------------------------------------   -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Tabel Penjualan
                            <a href="form_addPenjualan.php" class="btn btn-primary float-end">Tambah Penjualan</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>no_penjualan</td>
                                    <td>nama_kasir</td>
                                    <td>tgl_penjualan</td>
                                    <td>jam_penjualan</td>
                                    <td>total</td>
                                    <td>aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $recordPenjualan = mysqli_query($conn,"SELECT * FROM penjualan");

                                    while ($row = mysqli_fetch_assoc($recordPenjualan)) {
                                        echo
                                        "<tr>
                                            <td>{$row['id']}</td>
                                            <td>{$row['no_penjualan']}</td>
                                            <td>{$row['nama_kasir']}</td>
                                            <td>{$row['tgl_penjualan']}</td>
                                            <td>{$row['jam_penjualan']}</td>
                                            <td>{$row['total']}</td>
                                            <td>
                                                <a href='form_editPenjualan.php' class='btn btn-success'>Edit</a>
                                                <a href='#' class='btn btn-danger'>hapus</a>
                                            </td>
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