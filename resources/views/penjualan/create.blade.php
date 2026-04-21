<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Transaksi Penjualan</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <nav class="navbar">
    <div class="nav-container">
        <h1>Manajemen Transaksi Penjualan</h1></nav>
        <h3>Tambah Produk</h3>
        <form action="{{route('penjualan.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Nama Produk:</label>
                <input type="text" name="nama_produk" id="" placeholder="Masukkan nama produk">
            </div>
            <div class="form-group">
                <label for="">Harga:</label>
                <input type="text" name="harga" id="" placeholder="Masukkan harga">
            </div>
            <div class="form-group">
                <label for="">Jumlah:</label>
                <input type="text" name="jumlah" id="" placeholder="Masukkan jumlah produk">
            </div>
            <div class="form-group">
                <label for="">Tanggal:</label>
                <input type="date" name="tanggal" id="" placeholder="Masukkan tanggal inputan">
            </div>

            
            <button type="submit" class="tombol">submit</button>
        </form>
        
       
@include('layout.footer')        