<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman Siswa.</h1>
    <h2>Ini adalah detail siswa dari nis {{ $siswa[$nis] }}</h2>
    <table>
        <tr>
            <td>nis</td>
            <td>:</td>
            <td>{{ $siswa['nis'] }}</td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td>{{ $siswa['nama_siswa'] }}</td>
        </tr>
        <tr>
            <td>jurusan</td>
            <td>:</td>
            <td>{{ $siswa['jurusan'] }}</td>
        </tr>
        <tr>
            <td>tingkat</td>
            <td>:</td>
            <td>{{ $siswa['tingkat'] }}</td>
        </tr>
        <tr>
            <td>ekskul</td>
            <td>:</td>
            <td>{{ $siswa['ekskul'] }}</td>
        </tr>

</body>
</html>