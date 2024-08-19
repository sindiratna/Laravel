<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman Detail.</h1>
    <h2>Ini adalah detail produk dari ID {{ $produk['id'] }}</h2>
    <table>
        <tr>
            <td>ID</td>
            <td>:</td>
            <td>{{ $produk['id'] }}</td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>:</td>
            <td>{{ $produk['nama_produk'] }}</td>
        </tr>
        <tr>
            <td>harga</td>
            <td>:</td>
            <td>{{ $produk['harga'] }}</td>
        </tr>
        <tr>
            <td>stok</td>
            <td>:</td>
            <td>{{ $produk['stok'] }}</td>
        </tr>


</body>
</html>