<?php

use Illuminate\Support\Facades\Route;
use App\Models\Niece;

Route::get('/', function () {
  return view('index');
});

Route::get('/about', function () {
  return view('about');
});

Route::get('/contact', function () {
  return view('contact');
});

Route::get('/nieces', function () {
  return view('nieces', ['nieces' => Niece::all()]);
});

Route::get('/niece/{id}', function ($id) {
  return view('niece', ['niece' => Niece::find($id)]);
});
