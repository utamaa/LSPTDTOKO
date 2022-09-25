<?php

    session_start();
    require "dbconnect.php";

    if(isset($_POST['delete_barang'])) {
        $id = mysqli_real_escape_string($conn,$_POST['delete_barang']);
        $query = "DELETE FROM barang WHERE id='$id'";
        $query_run = mysqli_query($conn,$query);
        header("Location: admin.php");
        exit();
    }

    if(isset($_POST['tambah_barang'])) {
        $kode = $_POST['kode_barang'];
        $nama = $_POST['nama_barang'];
        $beli = $_POST['harga_beli'];
        $jual = $_POST['harga_jual'];
        $stok = $_POST['stok'];
        $satuan = $_POST['satuan'];

        $query = "INSERT INTO barang (id,kode_barang,nama_barang,harga_beli,harga_jual,stok,satuan) VALUES(NULL,'$kode','$nama',$beli,$jual,$stok,'$satuan')";
        $query_run = mysqli_query($conn,$query);

        if($query_run) {
            $_SESSION['alert'] = 'Berhasil Menambah Barang';
            header("Location: form_addBarang.php");
            exit();
        } else {
            $_SESSION['alert'] = 'Gagal Menambah Barang';
            header("Location: form_addBarang.php");
            exit();
        }

    }

    if(isset($_POST['edit_barang'])) {
        $id = $_POST['id'];
        $kode = $_POST['kode_barang'];
        $nama = $_POST['nama_barang'];
        $beli = $_POST['harga_beli'];
        $jual = $_POST['harga_jual'];
        $stok = $_POST['stok'];
        $satuan = $_POST['satuan'];

        $query = "UPDATE barang 
        SET kode_barang='$kode' ,nama_barang='$nama', harga_beli=$beli,harga_jual=$jual,stok=$stok,satuan='$satuan' 
        WHERE id=$id";
        $query_run = mysqli_query($conn,$query);

        if($query_run) {
            $_SESSION['alert'] = 'Berhasil Mengedit Barang';
            header("Location: form_editBarang.php");
            exit();
        } else {
            $_SESSION['alert'] = 'Gagal Mengedit Barang';
            header("Location: form_editBarang.php");
            exit();
        }

    }

    if(isset($_POST['tambah_penjualan'])) {
        $no = $_POST['no_penjualan'];
        $kasir = $_POST['nama_kasir'];
        $tgl = $_POST['tgl_penjualan'];
        $jam = $_POST['jam_penjualan'];
        $total = $_POST['total'];

        $query = "INSERT INTO penjualan (id,no_penjualan,nama_kasir,tgl_penjualan,jam_penjualan,total) VALUES(NULL,'$no','$nama','$tgl','$jam',$total)";
        $query_run = mysqli_query($conn,$query);

        if($query_run) {
            $_SESSION['alert'] = 'Berhasil Menambah Barang';
            header("Location: admin.php");
            exit();
        } else {
            $_SESSION['alert'] = 'Gagal Menambah Barang';
            header("Location: admin.php");
            exit();
        }

    }

?>