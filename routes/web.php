<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/aboutUs', function () {
    $profile_data = [
        [
            "nama" => "Audrey Tabitha Ariani",
            "nim" => "2440082812",
            "tempat" => "Jakarta",
            "tanggal-lahir" => "10 September 2002",
            "src" => "/img/audrey.jpg",
            "alt" => "audrey",
            "gender" => "perempuan"
        ],
        [
            "nama" => "Jocelyn Wievin",
            "nim" => "2440063025",
            "tempat" => "Jakarta",
            "tanggal-lahir" => "2 Desember 2002",
            "src" => "/img/jocelyn.jpg",
            "alt" => "jocelyn",
            "gender" => "perempuan"
        ],
        [
            "nama" => "Patrick Jonathan",
            "nim" => "2440064791",
            "tempat" => "Jakarta",
            "tanggal-lahir" => "29 Januari 2003",
            "src" => "/img/patrick.jpg",
            "alt" => "patrick",
            "gender" => "laki-laki"
        ],
        [
            "nama" => "Stella Elviana",
            "nim" => "2101691146",
            "tempat" => "Pontianak",
            "tanggal-lahir" => "5 September 1998",
            "src" => "/img/stella.jpg",
            "alt" => "stella",
            "gender" => "perempuan"
        ]
    ];

    return view('aboutUs', [
        "title" => "About Us",
        "datas" => $profile_data
    ]);
});

Route::prefix('/aboutUs')->group(function() {
    Route::get('/patrick', function () {
        return view('patrick', [
            "title" => "Patrick's Profile"
        ]);
    });

    Route::get('/jocelyn', function () {
        return view('jocelyn', [
            "title" => "Jocelyn's Profile"
        ]);
    });

    Route::get('/audrey', function () {
        return view('audrey', [
            "title" => "Audrey's Profile"
        ]);
    });

    Route::get('/stella', function () {
        return view('stella', [
            "title" => "Stella's Profile"
        ]);
    });
});
