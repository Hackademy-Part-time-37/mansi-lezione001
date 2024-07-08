<?php

use Illuminate\Support\Facades\Route;

//$dominio = 'www.aulab.it';
//$uri = '/ciao'; 

//$url = $dominio + $uri;
//$url = 'www.aulab.it/ciao'




Route::get('/', function () {
    // resources/views/
    //welcome
    //.blade.php
    return view('welcome');
});
Route::get('/chi-sono', function () {
    return view('chi-sono');
});

// class Student
// {
// public $testo = 'ciao';
//     public function saluta()
//     {
//         return 'ciao';
//     }
// }



// saluta();


$testo = 'ciao';
