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
        <h3>Transaksi</h3>
        <a href="{{route('penjualan.create')}}" class="tombol">Tambah</a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Total</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allPenjualans as $key =>$r)
                <tr>
                    <td>{{ $key +1}}</td>
                    <td>{{$r-> nama_produk}}</td>
                    <td>Rp {{ number_format($r->harga, 0, ',', '.') }}</td>
                    <td>{{$r-> jumlah}}</td>
                    <td>Rp {{ number_format($r->total, 0, ',', '.') }}</td>
                    <td>{{$r-> tanggal}}</td>
                    <td>
                        <form action="{{ route('penjualan.destroy', $r->id)}}"method="POST">
                            <a href="{{route('penjualan.edit', $r->id)}}" class="tombol">Edit</a>     
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="tombol">Hapus</button>
                        </form>
                    </td>
                </tr>
@endforeach
            </tbody>
        </table>
@include('layout.footer')        