@extends('layouts.mainLayout')


@section('title', 'Data Siswa')
@section('content')
  <div class="mt-5">
       <h1> ini halaman home</h1>
       <h3> Selamat Datang, {{$nama}}. Role anda adalah {{$role}}</h3>
  
       @if ($role == 'admin')
       <a href="#">Menuju Halaman Admin</a>
       @elseif ($role == 'petugas')
       <a href="#">Menuju Halaman Petugas</a>
       @else
       Role anda tidak terdaftar
       @endif
       <br>
      <h1>Data Siswa</h1>
       <table class= "table">
        <thead>
            <tr>
                <td>NIS</td>
                <td>Nama Siswa</td>
                <td>Jurusan</td>
                <td>Tingkat</td>
                <td>Ekskul</td>
            </tr>
           
</thead>
<tbody>
    @foreach ($siswa as $siswa)
    <tr>
    <td>{{ $siswa['nis'] }}</td>
    <td>{{ $siswa['nama_siswa'] }}</td>
    <td>{{ $siswa['jurusan'] }}</td>
    <td>{{ $siswa['tingkat'] }}</td>
    <td>{{ $siswa['ekskul'] }} </td>
</tr>
       @endforeach
</tbody>
</table>
</div>
@endsection
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>