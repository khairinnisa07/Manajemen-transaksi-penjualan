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
        <h3>Edit Transaksi</h3>
        <form action="{{route('penjualan.update', $penjualan ->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Nama Produk:</label>
                <input type="text" name="nama_produk" id="" value="{{ $penjualan->nama_produk}}">
            </div>
            <div class="form-group">
                <label for="">Harga:</label>
                <input type="text" name="harga" id="" value="{{ $penjualan->harga}}">
            </div>
            <div class="form-group">
                <label for="">Jumlah:</label>
                <input type="text" name="jumlah" id="" value="{{ $penjualan->jumlah}}">
            </div>
            <div class="form-group">
                <label for="">Tanggal:</label>
                <input type="date" name="tanggal" id="" value="{{ $penjualan->tanggal}}">
            </div>

            <button type="submit" class="tombol">Update</button>
        </form>
        
       
@include('layout.footer')        