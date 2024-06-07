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
    $username = "Olga";
    $students = [
        [
            "name" => "Pippo",
            "lastname" => "Verdi",
            "age" => 21
        ],
        [
            "name" => "Pluto",
            "lastname" => "Bruni",
            "age" => 25
        ],
        [
            "name" => "Paperino",
            "lastname" => "Neri",
            "age" => 18
        ]
    ];

    // Array associativo per passare i dati
    // $data = [
    //     'user' => $username
    // ];
    // return view('home', $data);

    // Funzione compact per passare i dati alla view
    return view('home', compact('username', 'students'));
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');
