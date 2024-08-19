<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassRoomController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//membuat route /student untuk memanggil function index 
// di StudentController
Route::get('/student', [StudentController::class, 'index']);

Route::get('/class', [ClassRoomController::class, 'index']);


Route::get('/nama', function () {
    return 'Nama saya Sindi';
});

Route::get('/tambah', function () {
    return 5+5;
});

Route::get('/kurang', function () {
    return 20-5;
});

Route::get('/kali', function () {
    return 5*5;
});

Route::get('/bagi', function () {
    return 10/2;
});

//memanggil tampilan contact
Route::get('/contact', function () {
    return view('contact', [
        'nama_siswa' => 'Sindi',
        'kelas' => '12 RPL C',
        'alamat' => 'Bandung',
        'telp' => '083876238749'
    ]);
});

//Route::get('product/{id}', function ($id) {
    //return 'Ini produk dengan ID Produk : '.$id;
//});

//Route::get('product/{id}', function ($id) {
  //  return view('product.detail', [
    //    'id' => $id
    //]);
//});

Route::get('product/{id}', function ($id) {
    $produk = [
        [
            'id'=> 1,
            'nama_produk' => 'Apple 15 Pro',
            'harga' => 20000000,
            'stok' => 20
        ],
        [
            'id'=>2,
            'nama_produk' => 'Samsung 15 Pro',
            'harga' => 18000000,
            'stok' => 30
        ],
        [
            'id'=> 3,
            'nama_produk' => 'Asus 15 Pro',
            'harga' => 15000000,
            'stok' => 40
        ]
    ];
   // dd($data);
    //die;

    //select * from produk where id_produk =$ID
    $cari_produk = collect($produk)->where('id',$id)->first();
    return view('product.detail', [
       'produk' => $cari_produk
    ]);
    //dd($cari_data);
    //die;

});

Route::get('siswa/{nis}', function ($nis) {
    $siswa = [
        [
            'nis'=> 10211,
            'nama_siswa' => 'Richard',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'ekskul' => 'futsal'
        ],
        [
            'nis'=> 10212,
            'nama_siswa' => 'Cathline',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'ekskul' => 'Tari'
        ]
    ];
    $cari_siswa = collect($siswa)-> where('nis,$nis')->first();
    return view('siswa.siswa', [
        'nis' => $cari_siswa
    ]);
    //dd($cari_siswa);
    //die;
    

});

Route::get('/home', function () {
    $siswa = [
        [
            'nis'=> 10211,
            'nama_siswa' => 'Ibnu',
            'jurusan' => 'TKJ',
            'tingkat' => 12,
            'ekskul' => 'futsal'
        ],
        [
            'nis'=> 10212,
            'nama_siswa' => 'Sindi',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'ekskul' => 'Tari'
        ],
        [
            'nis'=> 10213,
            'nama_siswa' => 'Mutiara',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'ekskul' => 'PASTI'
        ]
    ];
    return view('home',[
        'nama' => 'Sindi Ratnasari',
        'role' => 'admin',
        'siswa' => $siswa
    ]);
});