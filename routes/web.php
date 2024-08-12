<?php

use Illuminate\Support\Facades\Route;
use App\Models\MataKuliah;
Route::get('/', function () {
    return view('home', ['title' => 'Homepage']);
});


Route::get('/mata-kuliah', function () {
    $modelMK = MataKuliah::all();

    return view('mata-kuliah.index', ['title' => 'Mata Kuliah', 'dataMk' => $modelMK]);
});
